<?php
/**
 * Development router for PHP built-in server.
 * Usage: php -S localhost:8000 router.php
 *
 * - Serves static files (css, js, images) directly
 * - Routes /blog/slug → blog-post.php
 * - Serves any existing .php file
 * - Everything else → 404.php
 */

$uri  = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$root = __DIR__;

// 1. Serve real static files (css, js, images, fonts) directly
if ($uri !== '/' && file_exists($root . $uri) && !is_dir($root . $uri)) {
    return false; // let built-in server handle it
}

// 2. Root → index.php
if ($uri === '/') {
    require $root . '/index.php';
    exit;
}

// 3. Blog post: /blog/some-slug
if (preg_match('#^/blog/([a-zA-Z0-9_-]+)/?$#', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require $root . '/blog-post.php';
    exit;
}

// 4. Blog listing: /blog
if ($uri === '/blog') {
    require $root . '/blog.php';
    exit;
}

// 5. Clean URL → .php file  e.g. /about → about.php
$candidate = $root . rtrim($uri, '/') . '.php';
if (file_exists($candidate)) {
    require $candidate;
    exit;
}

// 6. Direct .php request  e.g. /about.php
$direct = $root . $uri;
if (pathinfo($uri, PATHINFO_EXTENSION) === 'php' && file_exists($direct)) {
    require $direct;
    exit;
}

// 7. Nothing matched → 404
http_response_code(404);
require $root . '/404.php';

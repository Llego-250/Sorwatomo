<?php

/**
 * Blog post registry.
 * To add a new post: create a file in data/posts/ and add its filename here.
 * Posts are shown newest-first (order in this array = order on site).
 */
$post_files = [
    'posts/001-tomato-harvest.php',
    'posts/002-pilau-recipe.php',
    'posts/003-sustainability.php',
];

function load_posts(string $dir): array {
    global $post_files;
    $posts = [];
    foreach ($post_files as $file) {
        $path = $dir . '/' . $file;
        if (file_exists($path)) {
            $post = require $path;
            $post['date_formatted'] = date('j F Y', strtotime($post['date']));
            $posts[] = $post;
        }
    }
    return $posts;
}

function get_post_by_slug(string $slug, string $dir): ?array {
    $posts = load_posts($dir);
    foreach ($posts as $post) {
        if ($post['slug'] === $slug) return $post;
    }
    return null;
}

function get_posts_by_category(string $category, string $dir): array {
    return array_filter(load_posts($dir), fn($p) => $p['category'] === $category);
}

function get_all_categories(string $dir): array {
    $cats = array_map(fn($p) => $p['category'], load_posts($dir));
    return array_values(array_unique($cats));
}

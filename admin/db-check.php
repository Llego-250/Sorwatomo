<?php
require_once __DIR__ . '/_auth.php';

$db   = get_db();
$rows = $db->query(
    "SELECT id, title, image_url, status, created_at
     FROM blog_posts
     ORDER BY id DESC
     LIMIT 20"
)->fetchAll();

$upload_dir = __DIR__ . '/../assets/img/blog/';
$files = array_diff(scandir($upload_dir), ['.', '..']);

header('Content-Type: text/plain; charset=utf-8');

echo "=== blog_posts (last 20) ===\n\n";
if (!$rows) {
    echo "(no posts found)\n";
} else {
    foreach ($rows as $r) {
        $img = $r['image_url'] ?: '(none)';
        $on_disk = '';
        if ($r['image_url']) {
            $path = __DIR__ . '/..' . $r['image_url'];
            $on_disk = file_exists($path) ? ' [file OK]' : ' [FILE MISSING ON DISK]';
        }
        echo "ID {$r['id']} | {$r['status']} | image_url: {$img}{$on_disk}\n";
        echo "  title: {$r['title']}\n\n";
    }
}

echo "\n=== /assets/img/blog/ files ===\n\n";
if (!$files) {
    echo "(empty)\n";
} else {
    foreach ($files as $f) {
        $size = round(filesize($upload_dir . $f) / 1024) . ' KB';
        echo "$f  ($size)\n";
    }
}

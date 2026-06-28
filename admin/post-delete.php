<?php
require_once __DIR__ . '/_auth.php';
require_once __DIR__ . '/../data/blog.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /admin/posts.php');
    exit;
}

csrf_verify();

$id = (int) ($_POST['id'] ?? 0);
if ($id) blog_delete_post($id);

header('Location: /admin/posts.php?deleted=1');
exit;

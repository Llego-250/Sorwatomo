<?php
require_once __DIR__ . '/_auth.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

csrf_verify();

if (empty($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    $code = $_FILES['image']['error'] ?? -1;
    echo json_encode(['error' => 'Upload failed (code ' . $code . ')']);
    exit;
}

$file    = $_FILES['image'];
$allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp', 'image/gif' => 'gif'];

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime  = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);

if (!isset($allowed[$mime])) {
    echo json_encode(['error' => 'Only JPEG, PNG, WebP and GIF images are allowed.']);
    exit;
}

if ($file['size'] > 8 * 1024 * 1024) {
    echo json_encode(['error' => 'File exceeds the 8 MB limit.']);
    exit;
}

$dir = __DIR__ . '/../assets/img/blog/';
if (!is_dir($dir)) mkdir($dir, 0755, true);

$ext  = $allowed[$mime];
$name = date('Ymd') . '-' . bin2hex(random_bytes(5)) . '.' . $ext;
$dest = $dir . $name;

if (!move_uploaded_file($file['tmp_name'], $dest)) {
    echo json_encode(['error' => 'Could not save the file. Check directory permissions.']);
    exit;
}

echo json_encode(['url' => '/assets/img/blog/' . $name]);

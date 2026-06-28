<?php
require_once __DIR__ . '/app.php';

function get_db(): PDO {
    static $pdo = null;
    if ($pdo !== null) return $pdo;

    try {
        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', DB_HOST, DB_NAME, DB_CHARSET);
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
    } catch (PDOException $e) {
        http_response_code(500);
        die('<p style="font-family:sans-serif;padding:2rem;color:#b00">Database connection failed. '
          . 'Please check <code>config/app.php</code> credentials, then visit '
          . '<a href="/admin/setup.php">/admin/setup.php</a> to create the tables.</p>');
    }

    return $pdo;
}

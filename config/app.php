<?php
// ─── Database ─────────────────────────────────────────────────────────────────
// Fill in your MySQL credentials. Or set environment variables on the server.
define('DB_HOST',    getenv('DB_HOST')    ?: 'sql306.infinityfree.com');
define('DB_NAME',    getenv('DB_NAME')    ?: 'if0_42285005_sorwatom_blog'); // ← replace XXX with your database name
define('DB_USER',    getenv('DB_USER')    ?: 'if0_42285005');
define('DB_PASS',    getenv('DB_PASS')    ?: 'Llego12345aze');
define('DB_CHARSET', 'utf8mb4');

// ─── Site ─────────────────────────────────────────────────────────────────────
define('SITE_URL', rtrim(getenv('SITE_URL') ?: 'https://www.sorwatom.com', '/'));
define('SITE_NAME', 'Sorwatom');

// ─── Admin ────────────────────────────────────────────────────────────────────
// To generate a new hash: php -r "echo password_hash('yourpassword', PASSWORD_DEFAULT);"
// Default password is:  admin2026  — change this immediately after first login via setup.php
define('ADMIN_PASSWORD_HASH', getenv('ADMIN_PASSWORD_HASH')
    ?: '$2y$12$8ZTm.GcA7p1oFqE3nW5RIeS2xKvL9mPdHjQoYuNbCwXr4aTfg6IeK');
define('ADMIN_SESSION_NAME', 'sorwatom_admin');

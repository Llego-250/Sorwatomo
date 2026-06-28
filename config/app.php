<?php
// ─── Database ─────────────────────────────────────────────────────────────────
// Fill in your MySQL credentials. Or set environment variables on the server.
define('DB_HOST',    getenv('DB_HOST')    ?: 'sql306.infinityfree.com');
define('DB_NAME',    getenv('DB_NAME')    ?: 'if0_42285005_sorwatom_blog');
define('DB_USER',    getenv('DB_USER')    ?: 'if0_42285005');
define('DB_PASS',    getenv('DB_PASS')    ?: 'Llego12345aze');
define('DB_CHARSET', 'utf8mb4');

// ─── Site ─────────────────────────────────────────────────────────────────────
define('SITE_URL', rtrim(getenv('SITE_URL') ?: 'https://www.sorwatom.com', '/'));
define('SITE_NAME', 'Sorwatom');

// ─── Admin ────────────────────────────────────────────────────────────────────
// Password: admin2026
define('ADMIN_PASSWORD_HASH', getenv('ADMIN_PASSWORD_HASH')
    ?: '$2y$12$NufWdP5rLf83TEPLb/XQ/e0IJZy9V5fPykEJt0r3TV1UugdxrcIOa');
define('ADMIN_SESSION_NAME', 'sorwatom_admin');

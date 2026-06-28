<?php
require_once __DIR__ . '/../config/app.php';
session_name(ADMIN_SESSION_NAME);
session_start();
session_destroy();
header('Location: /admin/login.php');
exit;

<?php
require_once __DIR__ . '/../config/app.php';

if (session_status() === PHP_SESSION_NONE) {
    session_name(ADMIN_SESSION_NAME);
    session_start();
}

if (!empty($_SESSION['admin_authed'])) {
    header('Location: /admin');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pw = $_POST['password'] ?? '';
    if (password_verify($pw, ADMIN_PASSWORD_HASH)) {
        @session_regenerate_id(true);
        $_SESSION['admin_authed'] = true;
        header('Location: /admin');
        exit;
    }
    $error = 'Incorrect password.';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login — Sorwatom</title>
<link rel="stylesheet" href="/assets/css/tokens.css">
<link rel="stylesheet" href="/admin/assets/admin.css">
</head>
<body class="admin-login-page">
<div class="login-card">
  <img src="/assets/img/logo.png" alt="Sorwatom" class="login-logo" style="filter:none">
  <h1>Admin Panel</h1>
  <?php if ($error): ?>
  <p class="login-error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>
  <form method="post" action="/admin/login.php">
    <div class="field">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" autofocus autocomplete="current-password" required>
    </div>
    <button type="submit" class="btn-primary">Sign In</button>
  </form>
</div>
</body>
</html>

<?php
/**
 * ONE-TIME SETUP HELPER — delete this file after use.
 * Visit this page to generate a bcrypt hash for your admin password.
 * Copy the hash into config/app.php as ADMIN_PASSWORD_HASH.
 */

$hash = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pw  = $_POST['password']  ?? '';
    $pw2 = $_POST['password2'] ?? '';
    if (strlen($pw) < 8) {
        $error = 'Password must be at least 8 characters.';
    } elseif ($pw !== $pw2) {
        $error = 'Passwords do not match.';
    } else {
        $hash = password_hash($pw, PASSWORD_BCRYPT, ['cost' => 12]);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Generate Admin Hash — Sorwatom</title>
<style>
  body { font-family: system-ui, sans-serif; max-width: 540px; margin: 60px auto; padding: 0 20px; }
  .warning { background: #fff3cd; border: 1px solid #ffc107; padding: 12px 16px; border-radius: 6px; margin-bottom: 24px; font-size: 14px; }
  .warning strong { color: #856404; }
  label { display: block; font-size: 14px; font-weight: 500; margin-bottom: 5px; margin-top: 16px; }
  input { width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 15px; box-sizing: border-box; }
  button { margin-top: 20px; width: 100%; padding: 12px; background: #2a5934; color: white; border: none; border-radius: 6px; font-size: 15px; cursor: pointer; }
  .error { color: #c0392b; font-size: 14px; margin-top: 10px; }
  .result { background: #e8f5e9; border: 1px solid #4caf50; padding: 16px; border-radius: 6px; margin-top: 24px; }
  .result h2 { margin: 0 0 10px; font-size: 16px; color: #2e7d32; }
  .hash { font-family: monospace; font-size: 13px; word-break: break-all; background: white; padding: 10px; border-radius: 4px; border: 1px solid #c8e6c9; }
  .steps { background: #f5f5f5; padding: 16px; border-radius: 6px; margin-top: 20px; font-size: 14px; }
  .steps ol { margin: 8px 0 0; padding-left: 20px; }
  .steps li { margin-bottom: 6px; line-height: 1.5; }
  code { background: #e0e0e0; padding: 2px 5px; border-radius: 3px; font-size: 13px; }
</style>
</head>
<body>

<div class="warning">
  <strong>Security notice:</strong> Delete this file (<code>admin/generate-hash.php</code>) immediately after use. Anyone who can access it can set a new admin password.
</div>

<h1 style="margin-bottom:4px">Generate Admin Password Hash</h1>
<p style="color:#666; font-size:14px; margin-top:0">Enter your desired admin password below to create a secure bcrypt hash.</p>

<form method="post">
  <label for="password">New admin password</label>
  <input type="password" id="password" name="password" minlength="8" required autocomplete="new-password">

  <label for="password2">Confirm password</label>
  <input type="password" id="password2" name="password2" minlength="8" required autocomplete="new-password">

  <?php if ($error): ?>
  <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>

  <button type="submit">Generate Hash</button>
</form>

<?php if ($hash): ?>
<div class="result">
  <h2>Your hash (copy this exactly):</h2>
  <div class="hash"><?= htmlspecialchars($hash) ?></div>
</div>

<div class="steps">
  <strong>Next steps:</strong>
  <ol>
    <li>Open <code>config/app.php</code> in your file manager or FTP client.</li>
    <li>Find the line with <code>ADMIN_PASSWORD_HASH</code>.</li>
    <li>Replace the existing hash string with the one above.</li>
    <li>Save the file, then try logging in at <code>/admin/login.php</code>.</li>
    <li><strong>Delete this file</strong> (<code>admin/generate-hash.php</code>) immediately after.</li>
  </ol>
</div>
<?php endif; ?>

</body>
</html>

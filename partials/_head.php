<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($page_description ?? 'Sorwatomo — The Great Lakes\' leading agribusiness, producing extraordinary flavour profiles for the modern global palate since 1984.') ?>">

  <title><?= htmlspecialchars($page_title ?? 'Sorwatomo — Great Lakes Agribusiness') ?></title>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="manifest" href="images/favicon/manifest.json">

  <!-- Google Fonts — preconnect for performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,400&family=DM+Sans:wght@300;400;500&display=swap">

  <!-- Design system — load order is fixed -->
  <link rel="stylesheet" href="assets/css/tokens.css">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/global.css">
  <link rel="stylesheet" href="assets/css/layout.css">
  <link rel="stylesheet" href="assets/css/components.css">

  <!-- Per-page stylesheets -->
  <?php foreach ($page_css ?? [] as $css): ?>
  <link rel="stylesheet" href="assets/css/<?= htmlspecialchars($css) ?>">
  <?php endforeach; ?>

  <script>document.documentElement.classList.remove('no-js');</script>
</head>

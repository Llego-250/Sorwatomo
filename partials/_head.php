<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($page_description ?? 'Sorwatomo — The Great Lakes\' leading agribusiness, producing extraordinary flavour profiles for the modern global palate since 1984.') ?>">

  <title><?= htmlspecialchars($page_title ?? 'Sorwatomo — Great Lakes Agribusiness') ?></title>

  <!-- Open Graph -->
  <meta property="og:type"        content="<?= htmlspecialchars($og_type        ?? 'website') ?>">
  <meta property="og:title"       content="<?= htmlspecialchars($og_title       ?? $page_title ?? 'Sorwatom') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($og_description ?? $page_description ?? '') ?>">
  <meta property="og:image"       content="<?= htmlspecialchars($og_image       ?? (defined('SITE_URL') ? SITE_URL : 'https://www.sorwatom.com') . '/assets/img/logo.png') ?>">
  <meta property="og:url"         content="<?= htmlspecialchars($og_url         ?? (defined('SITE_URL') ? SITE_URL : 'https://www.sorwatom.com') . $_SERVER['REQUEST_URI']) ?>">
  <meta property="og:site_name"   content="Sorwatom">
  <meta name="twitter:card"       content="summary_large_image">

  <!-- Hero image preloads — highest priority, before everything else -->
  <?php if (!empty($hero_img_mobile)): $hm = htmlspecialchars($hero_img_mobile); ?>
  <link rel="preload" as="image" fetchpriority="high" media="(max-width: 767px)"
    href="/assets/img/slider/Mobile/<?= $hm ?>">
  <?php endif; ?>
  <?php if (!empty($hero_img)): $h = htmlspecialchars($hero_img); ?>
  <link rel="preload" as="image" fetchpriority="high" media="(min-width: 768px)"
    href="/assets/img/slider/<?= $h ?>.webp">
  <?php endif; ?>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link rel="apple-touch-icon" href="assets/img/favicon.png">

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

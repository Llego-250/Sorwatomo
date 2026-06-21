<?php
$page_title       = '404 — Page Not Found | Sorwatom';
$page_description = 'This page does not exist.';
$page_css         = [];
$body_class       = 'page-404';
$current_page     = '';
include 'partials/_head.php';
?>

<body class="<?= htmlspecialchars($body_class) ?>">

<?php include 'partials/nav.php'; ?>

<main id="main-content">

  <!-- ============================================================
       SECTION — HERO (half-height, dark green)
       ============================================================ -->
  <section class="hero hero--half" aria-label="Page not found">

    <!-- Background texture — dark ground colour with subtle radial highlight -->
    <div class="hero__bg-texture" aria-hidden="true"></div>

    <div class="hero__content container">

      <p class="eyebrow eyebrow--light reveal" data-delay="1">404 ERROR</p>

      <h1 class="hero__title reveal" data-delay="2">
        Page not <em>found.</em>
      </h1>

      <p class="hero__subtitle reveal" data-delay="3">
        The page you're looking for has moved or doesn't exist.
      </p>

      <div class="hero__actions reveal" data-delay="4">
        <a href="index.php" class="btn btn--ghost">Go Home</a>
        <a href="products.php" class="btn btn--primary">View Collection</a>
      </div>

    </div><!-- /.hero__content -->

  </section>

</main><!-- /#main-content -->


<?php include 'partials/footer.php'; ?>

<?php include 'partials/_scripts.php'; ?>

</body>
</html>

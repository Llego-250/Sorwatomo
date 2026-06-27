<?php
$page_title       = 'The Collection — Sorwatom';
$page_description = 'Six essential East African products: tomato paste, ketchup, vinegar and pilau masala. 100% natural, internationally certified.';
$page_css         = ['pages/products.css'];
$body_class       = 'page-products';
$current_page     = 'products';
$page_js          = [];
$hero_img         = 'collection-flatlay';
include 'partials/_head.php';
?>
<body class="<?= htmlspecialchars($body_class) ?>">

<?php include 'partials/nav.php'; ?>

<main id="main-content">

  <!-- ============================================================
       SECTION 1 — HERO
       ============================================================ -->
  <section class="hero hero--half" aria-label="Page introduction">
    <img class="hero__bg"
      src="/assets/img/slider/collection-flatlay.webp"
      srcset="/assets/img/slider/collection-flatlay-sm.webp 768w, /assets/img/slider/collection-flatlay-md.webp 1280w, /assets/img/slider/collection-flatlay.webp 1920w"
      sizes="100vw"
      alt="" aria-hidden="true" fetchpriority="high" loading="eager" decoding="async">
    <div class="hero__overlay" aria-hidden="true"></div>

    <div class="hero__content container">
      <p class="eyebrow eyebrow--light">The Collection &middot; Six Essentials</p>
      <h1 class="hero__title">Every kitchen essential, <em>perfected.</em></h1>
    </div>
  </section>


  <!-- ============================================================
       SECTION 2 — PROCESS STRIP
       ============================================================ -->
  <section class="section--sm" aria-label="Our process">
    <div class="container">
      <div class="process-strip" role="list">

        <div class="process-strip__item" role="listitem">
          <span class="process-strip__label">Sourced</span>
          <p class="process-strip__text">From smallholder partner farms</p>
        </div>

        <div class="process-strip__item" role="listitem">
          <span class="process-strip__label">Processed</span>
          <p class="process-strip__text">On Italian state-of-the-art lines</p>
        </div>

        <div class="process-strip__item" role="listitem">
          <span class="process-strip__label">Packed</span>
          <p class="process-strip__text">In four-layer protective film &amp; glass</p>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       SECTION 3 — FILTER + PRODUCT GRID
       ============================================================ -->
  <section class="section" id="collection" aria-labelledby="collection-heading">
    <div class="container">

      <!-- Filter + label row -->
      <div class="products-filter-row">
        <p class="section-heading" id="collection-heading" aria-hidden="true">Six products</p>

        <div class="filter-pills" role="group" aria-label="Filter products by category">
          <button class="filter-pill active" data-filter="all" aria-pressed="true">All</button>
          <button class="filter-pill" data-filter="paste" aria-pressed="false">Paste</button>
          <button class="filter-pill" data-filter="condiments" aria-pressed="false">Condiments</button>
          <button class="filter-pill" data-filter="spices" aria-pressed="false">Spices</button>
        </div>
      </div>

      <!-- Product grid -->
      <div class="grid-3 products-grid" id="products-grid" aria-label="Product collection" aria-live="polite">

        <!-- 01 — Tomato Paste 50g -->
        <article
          class="product-card reveal"
          data-category="paste"
          data-delay="1"
        >
          <a href="/product-tomato-paste" class="product-card__link" aria-label="Tomato Paste 50g — view product details">
            <div class="product-card__img-wrap">
              <img
                src="assets/img/products/tomatoes_paste_50g.png"
                alt="Sorwatom Tomato Paste 50g sachet"
                loading="lazy"
                width="400"
                height="400"
              >
              <div class="product-card__badges" aria-hidden="true">
                <span class="badge badge--outline">Sachet</span>
                <span class="badge badge--dark">Travel Size</span>
              </div>
            </div>
            <div class="product-card__body">
              <p class="product-card__category">Tomato Paste</p>
              <h2 class="product-card__name">Tomato Paste &middot; 50g</h2>
              <p class="product-card__desc">Designed and developed to the same high specification and standard as our flagship 70g.</p>
              <p class="product-card__format">
                <span>Sachet &bull; 50 g</span>
                <span class="product-card__format-arrow" aria-hidden="true">&#8594;</span>
              </p>
            </div>
          </a>
        </article>

        <!-- 02 — Tomato Paste 70g -->
        <article
          class="product-card reveal"
          data-category="paste"
          data-delay="2"
        >
          <a href="/product-tomato-paste" class="product-card__link" aria-label="Tomato Paste 70g — view product details">
            <div class="product-card__img-wrap">
              <img
                src="assets/img/products/tomatoes_paste_70g.png"
                alt="Sorwatom Tomato Paste 70g sachet"
                loading="lazy"
                width="400"
                height="400"
              >
              <div class="product-card__badges" aria-hidden="true">
                <span class="badge badge--outline">Sachet</span>
                <span class="badge badge--accent">Best Seller</span>
              </div>
            </div>
            <div class="product-card__body">
              <p class="product-card__category">Tomato Paste</p>
              <h2 class="product-card__name">Tomato Paste &middot; 70g</h2>
              <p class="product-card__desc">SORWATOM Double-concentrated tomato paste made with naturally ripened tomatoes for the everyday kitchen.</p>
              <p class="product-card__format">
                <span>Sachet &bull; 70 g</span>
                <span class="product-card__format-arrow" aria-hidden="true">&#8594;</span>
              </p>
            </div>
          </a>
        </article>

        <!-- 03 — Tomato Paste 800g -->
        <article
          class="product-card reveal"
          data-category="paste"
          data-delay="3"
        >
          <a href="/product-tomato-paste" class="product-card__link" aria-label="Tomato Paste 800g tin — view product details">
            <div class="product-card__img-wrap">
              <img
                src="assets/img/products/tomatoes_paste_800g.png"
                alt="Sorwatom Tomato Paste 800g tin"
                loading="lazy"
                width="400"
                height="400"
              >
              <div class="product-card__badges" aria-hidden="true">
                <span class="badge badge--outline">Tin</span>
              </div>
            </div>
            <div class="product-card__body">
              <p class="product-card__category">Tomato Paste</p>
              <h2 class="product-card__name">Tomato Paste &middot; 800g</h2>
              <p class="product-card__desc">Developed for the hospitality industry — our 800g tin retains the same natural intensity.</p>
              <p class="product-card__format">
                <span>Tin &bull; 800 g</span>
                <span class="product-card__format-arrow" aria-hidden="true">&#8594;</span>
              </p>
            </div>
          </a>
        </article>

        <!-- 04 — Heirloom Ketchup -->
        <article
          class="product-card reveal"
          data-category="condiments"
          data-delay="4"
        >
          <a href="/product-ketchup" class="product-card__link" aria-label="Heirloom Ketchup — view product details">
            <div class="product-card__img-wrap">
              <img
                src="assets/img/products/ketchup.png"
                alt="Sorwatom Heirloom Ketchup glass bottle"
                loading="lazy"
                width="400"
                height="400"
              >
              <div class="product-card__badges" aria-hidden="true">
                <span class="badge badge--outline">Glass Bottle</span>
              </div>
            </div>
            <div class="product-card__body">
              <p class="product-card__category">Condiments</p>
              <h2 class="product-card__name">Heirloom Ketchup</h2>
              <p class="product-card__desc">Made from vine-ripened tomatoes to give a balanced, tangy and naturally sweet finish.</p>
              <p class="product-card__format">
                <span>Glass Bottle</span>
                <span class="product-card__format-arrow" aria-hidden="true">&#8594;</span>
              </p>
            </div>
          </a>
        </article>

        <!-- 05 — Pure Vinegar -->
        <article
          class="product-card reveal"
          data-category="condiments"
          data-delay="1"
        >
          <a href="/product-vinegar" class="product-card__link" aria-label="Pure Vinegar — view product details">
            <div class="product-card__img-wrap">
              <img
                src="assets/img/products/vinegar.png"
                alt="Sorwatom Pure Vinegar glass bottle"
                loading="lazy"
                width="400"
                height="400"
              >
              <div class="product-card__badges" aria-hidden="true">
                <span class="badge badge--outline">Glass Bottle</span>
              </div>
            </div>
            <div class="product-card__body">
              <p class="product-card__category">Condiments</p>
              <h2 class="product-card__name">Pure Vinegar</h2>
              <p class="product-card__desc">Distilled from the highest quality ingredients, versatile enough for cooking and preserving.</p>
              <p class="product-card__format">
                <span>Glass Bottle</span>
                <span class="product-card__format-arrow" aria-hidden="true">&#8594;</span>
              </p>
            </div>
          </a>
        </article>

        <!-- 06 — Pilau Masala -->
        <article
          class="product-card reveal"
          data-category="spices"
          data-delay="2"
        >
          <a href="/product-masala" class="product-card__link" aria-label="Pilau Masala — view product details">
            <div class="product-card__img-wrap">
              <img
                src="assets/img/products/masala.png"
                alt="Sorwatom Pilau Masala spice pouch"
                loading="lazy"
                width="400"
                height="400"
              >
              <div class="product-card__badges" aria-hidden="true">
                <span class="badge badge--outline">Spice Pouch</span>
              </div>
            </div>
            <div class="product-card__body">
              <p class="product-card__category">Spices</p>
              <h2 class="product-card__name">Pilau Masala</h2>
              <p class="product-card__desc">Our age-old favourite — a strong and unique flavour blend, the soul of East African celebratory rice.</p>
              <p class="product-card__format">
                <span>Spice Pouch</span>
                <span class="product-card__format-arrow" aria-hidden="true">&#8594;</span>
              </p>
            </div>
          </a>
        </article>

      </div><!-- /.products-grid -->

    </div><!-- /.container -->
  </section>


  <!-- ============================================================
       SECTION 4 — WHOLESALE CTA
       ============================================================ -->
  <section class="section--sm products-cta" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-block">

        <div class="cta-block__text">
          <span class="cta-block__eyebrow">For Trade</span>
          <h2 class="cta-block__title" id="cta-heading">
            Looking for <em>wholesale</em><br>or export?
          </h2>
          <p class="cta-block__body">
            We supply hospitality, retail, and distribution across the Great Lakes region and beyond.
            Custom packaging and private-label options available on request.
          </p>
        </div>

        <div class="cta-block__actions">
          <a href="/contact" class="btn btn--primary">Request a Quote &#8594;</a>
        </div>

      </div>
    </div>
  </section>

</main><!-- /#main-content -->

<?php include 'partials/footer.php'; ?>

<?php include 'partials/_scripts.php'; ?>

<script>
/* -------------------------------------------------------
   PRODUCT FILTER
   Toggles data-hidden on cards; updates aria-pressed.
------------------------------------------------------- */
(function () {
  var pills = document.querySelectorAll('.filter-pill');
  var cards = document.querySelectorAll('.product-card[data-category]');

  function applyFilter(filter) {
    cards.forEach(function (card) {
      var match = filter === 'all' || card.dataset.category === filter;
      card.dataset.hidden = match ? 'false' : 'true';
    });
  }

  pills.forEach(function (pill) {
    pill.addEventListener('click', function () {
      pills.forEach(function (p) {
        p.classList.remove('active');
        p.setAttribute('aria-pressed', 'false');
      });
      pill.classList.add('active');
      pill.setAttribute('aria-pressed', 'true');
      applyFilter(pill.dataset.filter);
    });
  });

  /* -------------------------------------------------------
     SCROLL REVEAL
     Observes .reveal elements; adds .revealed on entry.
  ------------------------------------------------------- */
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach(function (el) {
      observer.observe(el);
    });
  } else {
    /* Fallback: reveal everything immediately */
    document.querySelectorAll('.reveal').forEach(function (el) {
      el.classList.add('revealed');
    });
  }
})();
</script>

</body>
</html>

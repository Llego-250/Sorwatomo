<?php
$page_title       = 'Sorwatomo — Pure Harvest from the Great Lakes';
$page_description = 'Sorwatom produces 100% natural tomato paste, ketchup, masala and vinegar crafted in the heart of East Africa since 1984.';
$page_css         = ['pages/home.css'];
$body_class       = 'page-home';
$current_page     = 'home';
include 'partials/_head.php';
?>
<body class="<?= $body_class ?>">

<?php include 'partials/nav.php'; ?>

<main id="main">

  <!-- ============================================================
       SECTION 1 — HERO
       ============================================================ -->
  <section class="hero hero--full" aria-label="Homepage hero">

    <!-- Decorative hero background -->
    <img class="hero__bg" src="assets/img/slider/hero-tomato.jpg" alt="" aria-hidden="true" fetchpriority="high" loading="eager">

    <!-- Skip link (keyboard users) -->
    <a href="#main" class="skip-link">Skip to content</a>

    <!-- Hero content -->
    <div class="hero__content">
      <div class="container">

        <!-- Eyebrow with left gold rule -->
        <p class="hero-eyebrow">From Seed to Spoon</p>

        <h1 class="hero__title">Pure <em>Harvest.</em></h1>

        <p class="hero__subtitle">
          Experience the richness of 100% natural agribusiness products, crafted with
          traditional wisdom and modern precision in the heart of East Africa.
        </p>

        <div class="hero__actions">
          <a href="/products" class="btn btn--ghost">Explore Collection</a>
          <a href="/about" class="btn--text" style="color:rgba(255,255,255,0.75);">Our Story</a>
        </div>

      </div>
    </div>

    <!-- Scroll indicator -->
    <div class="hero__scroll" aria-hidden="true">
      <div class="scroll-indicator">
        <span>Scroll</span>
        <span class="scroll-indicator__line"></span>
      </div>
    </div>

  </section><!-- /.hero -->


  <!-- ============================================================
       SECTION 2 — TICKER STRIP
       ============================================================ -->
  <div class="ticker" aria-hidden="true">
    <div class="ticker__track">
      <!-- Duplicated so the CSS animation loops seamlessly at -50% -->
      <span class="ticker__item">100% Natural &middot; Since 1984 &middot; Great Lakes Grown &middot; International Standards &middot; &nbsp;</span>
      <span class="ticker__item">100% Natural &middot; Since 1984 &middot; Great Lakes Grown &middot; International Standards &middot; &nbsp;</span>
    </div>
  </div>


  <!-- ============================================================
       SECTION 3 — WHY SORWATOM
       ============================================================ -->
  <section class="section" aria-labelledby="why-heading">
    <div class="container">

      <!-- Section header -->
      <span class="eyebrow">Why Sorwatom</span>
      <h2 id="why-heading" style="max-width:560px; margin-bottom:var(--space-xl);">
        Crafted with precision, <em>delivered with pride.</em>
      </h2>

      <!-- Four-pillar grid -->
      <div class="grid-4">

        <article class="pillar reveal" data-delay="1">
          <span class="pillar__num" aria-hidden="true">01</span>
          <h3 class="pillar__title">100% Natural</h3>
          <p class="pillar__desc">No synthetic additives, no preservatives. Nothing artificial — ever.</p>
        </article>

        <article class="pillar reveal" data-delay="2">
          <span class="pillar__num" aria-hidden="true">02</span>
          <h3 class="pillar__title">Italian Precision</h3>
          <p class="pillar__desc">State-of-the-art Italian processing technology ensures peak quality in every batch we make.</p>
        </article>

        <article class="pillar reveal" data-delay="3">
          <span class="pillar__num" aria-hidden="true">03</span>
          <h3 class="pillar__title">Certified Quality</h3>
          <p class="pillar__desc">ISO certified processes meeting the highest international food safety benchmarks.</p>
        </article>

        <article class="pillar reveal" data-delay="4">
          <span class="pillar__num" aria-hidden="true">04</span>
          <h3 class="pillar__title">Global Standards</h3>
          <p class="pillar__desc">Rigorous quality control aligned with international food industry requirements.</p>
        </article>

      </div><!-- /.grid-4 -->

    </div><!-- /.container -->
  </section>


  <!-- ============================================================
       SECTION 4 — SIGNATURE OFFERINGS
       ============================================================ -->
  <section class="section" style="background:var(--col-surface-2);" aria-labelledby="offerings-heading">
    <div class="container">

      <!-- Two-row section header -->
      <div class="section-header">
        <div class="section-header__body">
          <span class="eyebrow">Signature Offerings</span>
          <h2 id="offerings-heading">The taste of the <em>Great Lakes.</em></h2>
        </div>
        <a href="/products" class="section-header__link">View Full Catalog</a>
      </div>

      <!-- Three product cards -->
      <div class="grid-3">

        <!-- Tomato Paste -->
        <a href="/product-tomato-paste" class="product-card reveal" data-delay="1" aria-label="Tomato Paste 70g — view product">
          <div class="product-card__img-wrap">
            <div class="product-card__badges">
              <span class="badge badge--dark">Bestseller</span>
            </div>
            <img
              src="assets/img/products/tomatoes_paste_70g.png"
              alt="Sorwatom Tomato Paste 70g sachet"
              loading="lazy"
              width="400"
              height="400"
            >
          </div>
          <div class="product-card__body">
            <p class="product-card__category">Tomato Paste</p>
            <h3 class="product-card__name">Tomato Paste 70g</h3>
            <p class="product-card__desc">Double-concentrated, 100% natural tomato paste in an easy-open flexible sachet.</p>
          </div>
        </a>

        <!-- Ketchup -->
        <a href="/product-ketchup" class="product-card reveal" data-delay="2" aria-label="Heirloom Ketchup — view product">
          <div class="product-card__img-wrap">
            <img
              src="assets/img/products/ketchup.png"
              alt="Sorwatom Heirloom Ketchup bottle"
              loading="lazy"
              width="400"
              height="400"
            >
          </div>
          <div class="product-card__body">
            <p class="product-card__category">Ketchup</p>
            <h3 class="product-card__name">Heirloom Ketchup</h3>
            <p class="product-card__desc">Slow-cooked from vine-ripened tomatoes with a naturally balanced sweetness.</p>
          </div>
        </a>

        <!-- Masala -->
        <a href="/product-masala" class="product-card reveal" data-delay="3" aria-label="Pilau Masala — view product">
          <div class="product-card__img-wrap">
            <img
              src="assets/img/products/masala.png"
              alt="Sorwatom Pilau Masala packet"
              loading="lazy"
              width="400"
              height="400"
            >
          </div>
          <div class="product-card__body">
            <p class="product-card__category">Spice Blend</p>
            <h3 class="product-card__name">Pilau Masala</h3>
            <p class="product-card__desc">An aromatic blend of whole spices, ground fresh for authentic East African depth.</p>
          </div>
        </a>

      </div><!-- /.grid-3 -->

    </div><!-- /.container -->
  </section>


  <!-- ============================================================
       SECTION 5 — OUR STORY
       ============================================================ -->
  <section class="section section--lg" aria-labelledby="story-heading">
    <div class="container">

      <div class="story-grid">

        <!-- Left: image + floating badge -->
        <div class="story-img-wrap reveal" data-delay="1">
          <img
            src="assets/img/slider/story-field.jpg"
            alt="Great Lakes region, the home of Sorwatom"
            loading="lazy"
            width="600"
            height="750"
          >
          <div class="story-badge">
            <span class="story-badge__value">40+</span>
            <span class="story-badge__label">Years of Heritage</span>
          </div>
        </div>

        <!-- Right: text -->
        <div class="story-text reveal" data-delay="2">

          <div>
            <span class="eyebrow">Our Story</span>
            <h2 id="story-heading">
              Eastern Africa's leading <em>agribusiness manufacturer.</em>
            </h2>
          </div>

          <p>
            Created in 1984 by visionary investors who saw an opportunity to transform
            locally grown fresh tomatoes into world-class paste, Sorwatom has spent four
            decades perfecting what it means to produce food with integrity — from the
            soil of the Great Lakes to tables across East and Central Africa.
          </p>

          <p>
            In 2004 we upgraded to the best available Italian processing and packing
            technology, becoming the only sub-Saharan paste manufacturer to use flexible
            four-layer film sachets. Today, under professional management with over 80
            years of combined African agribusiness expertise, Sorwatom continues to expand
            its reach — anchored by the same commitment to purity that started it all.
          </p>

          <a href="/about" class="btn--text">Read Our Heritage</a>

        </div>

      </div><!-- /.story-grid -->

    </div><!-- /.container -->
  </section>


  <!-- ============================================================
       SECTION 6 — CONTACT CTA
       ============================================================ -->
  <section class="section section--cta" aria-labelledby="cta-heading">
    <div class="container">

      <div class="cta-block">

        <div class="cta-block__text">
          <span class="cta-block__eyebrow">Get in Touch</span>
          <h2 class="cta-block__title" id="cta-heading">
            We'd love to <em>hear from you.</em>
          </h2>
          <p class="cta-block__body">
            Whether you're a retailer, distributor, or simply curious about our products —
            our team is ready to help.
          </p>
        </div>

        <div class="cta-block__actions">
          <a href="/contact" class="btn btn--primary">Contact Us</a>
        </div>

      </div><!-- /.cta-block -->

    </div><!-- /.container -->
  </section>

</main><!-- /#main -->


<?php include 'partials/footer.php'; ?>

<?php include 'partials/_scripts.php'; ?>

</body>
</html>

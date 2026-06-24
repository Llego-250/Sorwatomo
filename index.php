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
        Grown with intention, <em>delivered with pride.</em>
      </h2>

      <!-- Four-pillar grid -->
      <div class="grid-4">

        <article class="pillar reveal" data-delay="1">
          <span class="pillar__num" aria-hidden="true">01</span>
          <h3 class="pillar__title">100% Natural</h3>
          <p class="pillar__desc">No synthetic additives or preservatives. Just pure sun-ripened ingredients.</p>
        </article>

        <article class="pillar reveal" data-delay="2">
          <span class="pillar__num" aria-hidden="true">02</span>
          <h3 class="pillar__title">Always Fresh</h3>
          <p class="pillar__desc">Daily harvests ensure the peak of flavour in every packet and jar we produce.</p>
        </article>

        <article class="pillar reveal" data-delay="3">
          <span class="pillar__num" aria-hidden="true">03</span>
          <h3 class="pillar__title">Traceable Origin</h3>
          <p class="pillar__desc">Know exactly which farm your spice and paste comes from with full transparency.</p>
        </article>

        <article class="pillar reveal" data-delay="4">
          <span class="pillar__num" aria-hidden="true">04</span>
          <h3 class="pillar__title">Global Standards</h3>
          <p class="pillar__desc">Rigorous quality control meeting international food safety benchmarks.</p>
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
            alt="Sorwatom farm workers harvesting tomatoes in the Great Lakes region"
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
            <span class="eyebrow">Our Journey</span>
            <h2 id="story-heading">
              Cultivating a sustainable future for the <em>Great Lakes region.</em>
            </h2>
          </div>

          <p>
            Founded in 1984 by a group of visionary investors, Sorwatom identified an opportunity
            to transform locally grown fresh tomatoes into premium tomato paste and serve the
            rapidly growing demand across East Africa. From a single product line, we became
            Eastern Africa's leading agribusiness manufacturer — driven by an uncompromising
            commitment to quality and community.
          </p>

          <p>
            In 2004 we upgraded our facilities with the finest Italian processing and packaging
            technology, becoming the only sub-Saharan African paste manufacturer to pack in
            flexible four-layer film sachets — keeping product fresher for longer, safer, and
            more hygienic than traditional metal containers. Today, under professional management
            with over 60 years of combined African agribusiness expertise, Sorwatom continues to
            expand its reach across Rwanda, Burundi, Eastern DRC, and beyond.
          </p>

          <a href="/about" class="btn--text">Read Our Heritage</a>

        </div>

      </div><!-- /.story-grid -->

    </div><!-- /.container -->
  </section>


  <!-- ============================================================
       SECTION 6 — CTA BANNER
       ============================================================ -->
  <section class="section section--cta" aria-labelledby="cta-heading">
    <div class="container">

      <div class="cta-block">

        <div class="cta-block__text">
          <span class="cta-block__eyebrow">For Distribution &amp; Retail</span>
          <h2 class="cta-block__title" id="cta-heading">
            Bring the <em>harvest</em> home.
          </h2>
          <p class="cta-block__body">
            Partner with Sorwatom to bring 100% natural Great Lakes produce to your retail
            shelves or distribution network. We work with partners across East and Central
            Africa to deliver consistent quality, competitive terms, and full supply-chain
            transparency.
          </p>
        </div>

        <div class="cta-block__actions">
          <a href="/contact" class="btn btn--primary">Get in Touch</a>
        </div>

      </div><!-- /.cta-block -->

    </div><!-- /.container -->
  </section>

</main><!-- /#main -->


<?php include 'partials/footer.php'; ?>

<?php include 'partials/_scripts.php'; ?>

</body>
</html>

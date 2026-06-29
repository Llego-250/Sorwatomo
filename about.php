<?php
$page_title       = 'Our Heritage — Sorwatom';
$page_description = 'Forty years of pure craft — Sorwatom\'s story from 1984 to today. East Africa\'s leading agribusiness manufacturer.';
$page_css         = ['pages/about.css'];
$body_class       = 'page-about';
$current_page     = 'about';
$hero_img         = null; // story-field images removed — replace with a new photo when available
include 'partials/_head.php';
?>
<body class="<?= htmlspecialchars($body_class) ?>">

<?php include 'partials/nav.php'; ?>

<main id="main-content">

  <!-- ============================================================
       SECTION 1 — Hero
       ============================================================ -->
  <section class="hero hero--full" aria-label="Page introduction">
    <div class="hero__bg hero__bg--pattern" aria-hidden="true"></div>

    <div class="hero__content">
      <div class="container">
        <span class="eyebrow eyebrow--light reveal" data-delay="1">EST. 1984</span>
        <h1 class="hero__title reveal" data-delay="2">
          Forty years of <em>pure craft,</em><br>rooted in the Great Lakes.
        </h1>
        <p class="hero__subtitle reveal" data-delay="3">
          From a single processing line to a regional powerhouse — this is the story
          of science, precision, and the people who make it possible.
        </p>
      </div>
    </div>
  </section>


  <!-- ============================================================
       SECTION 2 — Stats Bar
       ============================================================ -->
  <section class="section--sm" aria-label="Key figures">
    <div class="container">
      <div class="stats-bar" role="list">

        <div class="stats-bar__item" role="listitem">
          <span class="stats-bar__value">40+</span>
          <span class="stats-bar__label">Years of Heritage</span>
        </div>

        <div class="stats-bar__item" role="listitem">
          <span class="stats-bar__value">3</span>
          <span class="stats-bar__label">Countries Served</span>
        </div>

        <div class="stats-bar__item" role="listitem">
          <span class="stats-bar__value">100%</span>
          <span class="stats-bar__label">Natural Ingredients</span>
        </div>

        <div class="stats-bar__item" role="listitem">
          <span class="stats-bar__value">28–30%</span>
          <span class="stats-bar__label">Paste Concentration</span>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       SECTION 3 — Brand Statement
       ============================================================ -->
  <section class="section brand-statement-section" aria-label="Brand statement">
    <div class="container--narrow brand-statement-inner">
      <p class="brand-statement reveal">
        <strong>SORWATOM</strong> is Eastern Africa's leading agribusiness
        manufacturer — created in 1984 by a group of highly successful investors
        who identified an opportunity to transform local fresh tomatoes into
        <em>world-class paste.</em>
      </p>
    </div>
  </section>


  <!-- ============================================================
       SECTION 4 — Timeline
       ============================================================ -->
  <section class="section" aria-labelledby="timeline-heading">
    <div class="container">

      <header class="section-header reveal">
        <span class="eyebrow">Our Timeline</span>
        <h2 id="timeline-heading">A heritage of <em>flavor.</em></h2>
      </header>

      <div class="timeline" role="list">

        <div class="timeline__item reveal" data-delay="1" role="listitem">
          <span class="timeline__year" aria-hidden="true">1984</span>
          <div class="timeline__line" aria-hidden="true"></div>
          <div class="timeline__content">
            <h3>Founded in the Great Lakes</h3>
            <p>
              A group of visionary investors set out to transform local fresh tomatoes
              into world-class tomato paste — building from the soil up in one of
              Africa's most fertile agricultural regions.
            </p>
          </div>
        </div>

        <div class="timeline__item reveal" data-delay="2" role="listitem">
          <span class="timeline__year" aria-hidden="true">2004</span>
          <div class="timeline__line" aria-hidden="true"></div>
          <div class="timeline__content">
            <h3>Italian Processing Line</h3>
            <p>
              Upgraded to the best available Italian processing and packing technology —
              the only sub-Saharan paste manufacturer using flexible four-layer film
              sachets, setting a new regional standard for quality and shelf life.
            </p>
          </div>
        </div>

        <div class="timeline__item reveal" data-delay="3" role="listitem">
          <span class="timeline__year" aria-hidden="true">2015</span>
          <div class="timeline__line" aria-hidden="true"></div>
          <div class="timeline__content">
            <h3>Regional Expansion</h3>
            <p>
              Established direct operations across Rwanda, Burundi, and the DRC,
              building a resilient supply chain and bringing authentic Great Lakes
              produce to millions more households across the region.
            </p>
          </div>
        </div>

        <div class="timeline__item reveal" data-delay="4" role="listitem">
          <span class="timeline__year" aria-hidden="true">Today</span>
          <div class="timeline__line" aria-hidden="true"></div>
          <div class="timeline__content">
            <h3>Pan-African Ambitions</h3>
            <p>
              Under professional management with 80+ years of combined African
              agribusiness expertise, expanding strategically across sub-Saharan
              Africa — anchored by the same commitment to purity that started
              it all.
            </p>
          </div>
        </div>

      </div><!-- /.timeline -->
    </div>
  </section>


  <!-- ============================================================
       SECTION 5 — Principles (dark green background)
       ============================================================ -->
  <section class="section principles-section on-dark" aria-labelledby="principles-heading">
    <div class="container">

      <header class="section-header reveal">
        <span class="eyebrow eyebrow--light">What We Stand For</span>
        <h2 id="principles-heading" style="color: white;">The principles that <em>guide us.</em></h2>
      </header>

      <div class="principles-grid">

        <article class="principle-card reveal" data-delay="1">
          <span class="principle-card__num" aria-hidden="true">01</span>
          <h3 class="principle-card__title">Heritage</h3>
          <p class="principle-card__desc">
            Four decades of perfecting the craft of tomato processing in the
            Great Lakes — a standard built on the land itself.
          </p>
        </article>

        <article class="principle-card reveal" data-delay="2">
          <span class="principle-card__num" aria-hidden="true">02</span>
          <h3 class="principle-card__title">Integrity</h3>
          <p class="principle-card__desc">
            Traceable supply chains. No artificial additives. No shortcuts.
            We mean it — and our label proves it.
          </p>
        </article>

        <article class="principle-card reveal" data-delay="3">
          <span class="principle-card__num" aria-hidden="true">03</span>
          <h3 class="principle-card__title">Community</h3>
          <p class="principle-card__desc">
            Building lasting partnerships across our region — because
            great products start with the right people behind them.
          </p>
        </article>

        <article class="principle-card reveal" data-delay="4">
          <span class="principle-card__num" aria-hidden="true">04</span>
          <h3 class="principle-card__title">Precision</h3>
          <p class="principle-card__desc">
            Italian processing technology meeting rigorous international food
            standards — every sachet, every batch, every time.
          </p>
        </article>

      </div><!-- /.principles-grid -->
    </div>
  </section>


  <!-- ============================================================
       SECTION 6 — Product Promise
       story-grid reversed: text left, images right on desktop
       ============================================================ -->
  <section class="section" aria-labelledby="promise-heading">
    <div class="container">
      <div class="story-grid story-grid--reverse">

        <!-- Left column: text -->
        <div class="story-text">
          <span class="eyebrow eyebrow--accent reveal">Our Promise</span>
          <h2 id="promise-heading" class="reveal" data-delay="1">
            Finest <em>100% natural</em><br>Double Concentrated Paste.
          </h2>

          <p class="reveal" data-delay="2">
            Sorwatom produces 28–30% Double Concentrated Tomato paste with a
            state-of-the-art Italian production line, ensuring true customer
            satisfaction and the best value food products in the region —
            backed by a 100% consumer satisfaction guarantee.
          </p>

          <p class="reveal" data-delay="3">
            Our products are known for their great taste, fresh aroma and vibrant
            color. We have perfected the art of making high-quality tomato paste —
            and we use nothing artificial. Ever.
          </p>

          <!-- Region pills -->
          <div class="cluster reveal" data-delay="4" aria-label="Regions served">
            <span class="badge badge--outline">Rwanda</span>
            <span class="badge badge--outline">Burundi</span>
            <span class="badge badge--outline">Eastern DRC</span>
          </div>

          <a href="/contact" class="btn--text reveal" data-delay="4">
            Partner With Us
          </a>
        </div>

        <!-- Right column: double image -->
        <div class="story-img-wrap">
          <div class="story-double-img">
            <img
              src="assets/img/slider/story-field.jpg"
              alt="Great Lakes region, home of Sorwatom production"
              class="story-double-img__primary"
              loading="lazy"
            >
            <img
              src="assets/img/slider/hero-tomato.jpg"
              alt="Fresh tomatoes used in Sorwatom products"
              class="story-double-img__secondary"
              loading="lazy"
            >
          </div>

          <!-- Floating credential -->
          <div class="story-badge" aria-label="ISO certified quality standard">
            <span class="story-badge__value">ISO</span>
            <span class="story-badge__label">Certified Quality</span>
          </div>
        </div>

      </div><!-- /.story-grid -->
    </div>
  </section>

</main><!-- /#main-content -->

<?php include 'partials/footer.php'; ?>
<?php include 'partials/_scripts.php'; ?>

</body>
</html>

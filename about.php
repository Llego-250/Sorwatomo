<?php
$page_title       = 'Our Heritage — Sorwatom';
$page_description = 'Forty years of pure harvest — Sorwatom\'s story from 1984 to today. East Africa\'s leading agribusiness manufacturer.';
$page_css         = ['pages/about.css'];
$body_class       = 'page-about';
$current_page     = 'about';
include 'partials/_head.php';
?>
<body class="<?= htmlspecialchars($body_class) ?>">

<?php include 'partials/nav.php'; ?>

<main id="main-content">

  <!-- ============================================================
       SECTION 1 — Hero
       ============================================================ -->
  <section class="hero hero--half" aria-label="Page introduction">
    <!-- Background: deep Great Lakes green with a warm tonal gradient overlay -->
    <div class="hero__bg-canvas" aria-hidden="true">
      <canvas id="hero-canvas" style="
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        opacity: 0.55;
        z-index: 0;
      "></canvas>
    </div>

    <div class="container hero__content">
      <span class="eyebrow eyebrow--light reveal" data-delay="1">EST. 1984</span>
      <h1 class="hero__title reveal" data-delay="2">
        Forty years of <em>pure harvest,</em><br>rooted in the Great Lakes.
      </h1>
      <p class="hero__subtitle reveal" data-delay="3">
        From a single processing line to a regional powerhouse — this is the story
        of soil, science, and the people in between.
      </p>
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
       The oversized ghost quotation mark is the aesthetic risk:
       a CSS ::before pseudo-element at ~22rem renders behind the
       paragraph, anchoring forty years of story in a single
       typographic gesture — earned, not decorative.
       ============================================================ -->
  <section class="section brand-statement-section" aria-label="Brand statement">
    <div class="container--narrow brand-statement-inner">
      <p class="brand-statement reveal">
        <strong>SORWATOM</strong> is Eastern Africa's leading agribusiness
        manufacturer — created in 1984 by visionary investors who saw an opportunity
        to transform local fresh tomatoes into <em>world-class paste.</em>
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
            Partnering with thousands of smallholder farmers across our
            region — because a great product starts with the people who
            grow it.
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

          <a href="contact.php" class="btn--text reveal" data-delay="4">
            Partner With Us
          </a>
        </div>

        <!-- Right column: double image -->
        <div class="story-img-wrap">
          <div class="story-double-img story-double-img--placeholder">
            <!--
              Replace src values with real images when available:
              Primary:   assets/img/farm.jpg
              Secondary: assets/img/harvest.jpg
            -->
            <canvas
              id="farm-canvas"
              class="story-double-img__primary"
              aria-label="Sorwatom partner farm in the Great Lakes region"
              role="img"
            ></canvas>
            <canvas
              id="harvest-canvas"
              class="story-double-img__secondary"
              aria-label="Tomato harvest at partner farm"
              role="img"
            ></canvas>
          </div>

          <!-- Floating credential -->
          <div class="story-badge" aria-label="3,200 plus partner farms">
            <span class="story-badge__value">3,200+</span>
            <span class="story-badge__label">Partner Farms</span>
          </div>
        </div>

      </div><!-- /.story-grid -->
    </div>
  </section>

</main><!-- /#main-content -->

<?php include 'partials/footer.php'; ?>
<?php include 'partials/_scripts.php'; ?>

<!-- Page-level script: hero canvas, reveal observer, image placeholders -->
<script>
(function () {
  'use strict';

  /* ----------------------------------------------------------
     HERO CANVAS — painterly deep-green field atmosphere.
     A single subtle risk: organic grain texture via Perlin-
     style layered noise, suggesting the Great Lakes terrain
     without a photograph.
  ---------------------------------------------------------- */
  (function () {
    var canvas = document.getElementById('hero-canvas');
    if (!canvas) return;
    var ctx = canvas.getContext('2d');

    function resize() {
      canvas.width  = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
      paint();
    }

    function paint() {
      var w = canvas.width;
      var h = canvas.height;

      /* Base gradient — deep forest green to near-black */
      var grad = ctx.createLinearGradient(0, 0, w * 0.6, h);
      grad.addColorStop(0,   '#162A1B');
      grad.addColorStop(0.5, '#0D1E12');
      grad.addColorStop(1,   '#071209');
      ctx.fillStyle = grad;
      ctx.fillRect(0, 0, w, h);

      /* Radial warm accent — top-left glow, like morning harvest light */
      var radial = ctx.createRadialGradient(w * 0.12, h * 0.2, 0, w * 0.12, h * 0.2, w * 0.55);
      radial.addColorStop(0,   'rgba(200, 146, 58, 0.12)');
      radial.addColorStop(0.5, 'rgba(200, 146, 58, 0.04)');
      radial.addColorStop(1,   'rgba(200, 146, 58, 0)');
      ctx.fillStyle = radial;
      ctx.fillRect(0, 0, w, h);
    }

    window.addEventListener('resize', resize);
    resize();
  })();


  /* ----------------------------------------------------------
     FARM / HARVEST CANVAS PLACEHOLDERS
     Render until real images replace the canvases.
  ---------------------------------------------------------- */
  function paintFarmCanvas(id, primaryColor, accentColor) {
    var canvas = document.getElementById(id);
    if (!canvas) return;
    var ctx = canvas.getContext('2d');

    function resize() {
      canvas.width  = canvas.offsetWidth  || 400;
      canvas.height = canvas.offsetHeight || 400;
      paint();
    }

    function paint() {
      var w = canvas.width;
      var h = canvas.height;

      var grad = ctx.createLinearGradient(0, 0, w, h);
      grad.addColorStop(0, primaryColor);
      grad.addColorStop(1, accentColor);
      ctx.fillStyle = grad;
      ctx.fillRect(0, 0, w, h);

      /* Subtle horizontal field-row lines */
      ctx.strokeStyle = 'rgba(255,255,255,0.04)';
      ctx.lineWidth = 1;
      var step = Math.max(8, Math.floor(h / 20));
      for (var y = step; y < h; y += step) {
        ctx.beginPath();
        ctx.moveTo(0, y);
        ctx.lineTo(w, y);
        ctx.stroke();
      }
    }

    resize();
    window.addEventListener('resize', resize);
  }

  paintFarmCanvas('farm-canvas',    '#1d3b24', '#0a1a0e');
  paintFarmCanvas('harvest-canvas', '#2a5135', '#162A1B');


  /* ----------------------------------------------------------
     SCROLL REVEAL — IntersectionObserver adds .revealed
     to any .reveal element when it enters the viewport.
  ---------------------------------------------------------- */
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

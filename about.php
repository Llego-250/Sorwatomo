<?php
$page_title       = 'Our Heritage — Sorwatom';
$page_description = 'Forty years of pure craft — Sorwatom\'s story from 1984 to today. East Africa\'s leading agribusiness manufacturer.';
$page_css         = ['pages/about.css'];
$body_class       = 'page-about';
$current_page     = 'about';
$hero_img         = null;
include 'partials/_head.php';
?>
<body class="<?= htmlspecialchars($body_class) ?>">

<?php include 'partials/nav.php'; ?>

<main id="main-content">

  <!-- ============================================================
       SECTION 1 — Hero + Stats
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

      <!-- Stats bar anchored at the bottom of the hero -->
      <div class="hero__stats-wrap" aria-label="Key figures">
        <div class="container">
          <div class="stats-bar stats-bar--hero" role="list">

            <div class="stats-bar__item" role="listitem">
              <span class="stats-bar__value" data-count="40" data-suffix="+">0</span>
              <span class="stats-bar__label">Years of Heritage</span>
            </div>

            <div class="stats-bar__item" role="listitem">
              <span class="stats-bar__value" data-count="3" data-suffix="">0</span>
              <span class="stats-bar__label">Countries Served</span>
            </div>

            <div class="stats-bar__item" role="listitem">
              <span class="stats-bar__value" data-count="100" data-suffix="%">0</span>
              <span class="stats-bar__label">Natural Ingredients</span>
            </div>

            <div class="stats-bar__item" role="listitem">
              <span class="stats-bar__value" data-count="28" data-suffix="–30%">0</span>
              <span class="stats-bar__label">Paste Concentration</span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================================
       SECTION 2 — Product Promise
       ============================================================ -->
  <section class="section" aria-labelledby="promise-heading">
    <div class="container">
      <div class="story-grid story-grid--reverse">

        <!-- Left column: text -->
        <div class="story-text">
          <span class="eyebrow eyebrow--accent reveal">About Us</span>
          <h2 id="promise-heading" class="reveal" data-delay="1">
            Finest <em>100% natural</em><br>Double Concentrated Paste.
          </h2>

          <p class="reveal" data-delay="2">
            The company produces the finest 100% natural Double Concentrated
            Tomato Paste 28–30% with a state-of-the-art Italian production line.
            SORWATOM continues to produce tomato paste of the finest quality to
            ensure true customer satisfaction and the best value food products
            within the region — backed by a 100% consumer satisfaction guarantee.
          </p>

          <p class="reveal" data-delay="3">
            Our products are known for their great taste, fresh aroma, and vibrant
            colour. We have perfected the art of making high-quality 100% natural
            tomato paste — and we do not use anything artificial in our products.
          </p>

          <p class="reveal" data-delay="4">
            The company is now under professional management with over 60 years
            of combined African agribusiness expertise in FMCG, food and beverage,
            coffee, and banking — with direct operations established in Burundi,
            DRC, and Rwanda.
          </p>

          <!-- Region pills -->
          <div class="cluster reveal" data-delay="5" aria-label="Regions served">
            <span class="badge badge--outline">Rwanda</span>
            <span class="badge badge--outline">Burundi</span>
            <span class="badge badge--outline">Eastern DRC</span>
          </div>

          <div class="about-cta-row reveal" data-delay="5">
            <a href="/contact" class="btn--text">Partner With Us</a>
            <a href="#team" class="btn--text btn--text-accent">Meet Our Team &rarr;</a>
          </div>
        </div>

        <!-- Right column: double image -->
        <div class="story-img-wrap">
          <div class="story-double-img">
            <img
              src="assets/img/slider/Mobile/hero_tomato.webp"
              alt="Great Lakes region, home of Sorwatom production"
              class="story-double-img__primary"
              loading="lazy"
            >
            <img
              src="assets/img/slider/Mobile/collection-flatlay.webp"
              alt="Fresh tomatoes used in Sorwatom products"
              class="story-double-img__secondary"
              loading="lazy"
            >
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       SECTION 3 — Our Journey (timeline milestones as cards)
       ============================================================ -->
  <section class="section principles-section on-dark" aria-labelledby="journey-heading">
    <div class="container">

      <header class="section-header reveal">
        <span class="eyebrow eyebrow--light">Our Journey</span>
        <h2 id="journey-heading" style="color:white;">A heritage of <em>flavour.</em></h2>
      </header>

      <div class="principles-grid">

        <article class="principle-card reveal" data-delay="1">
          <span class="principle-card__num" aria-hidden="true">1984</span>
          <h3 class="principle-card__title">Founded in the Great Lakes</h3>
          <p class="principle-card__desc">
            A group of visionary investors set out to transform local fresh tomatoes
            into world-class tomato paste — building from the soil up in one of
            Africa's most fertile agricultural regions.
          </p>
        </article>

        <article class="principle-card reveal" data-delay="2">
          <span class="principle-card__num" aria-hidden="true">2004</span>
          <h3 class="principle-card__title">Italian Processing Line</h3>
          <p class="principle-card__desc">
            Upgraded to the best available Italian processing and packing technology —
            the only sub-Saharan paste manufacturer using flexible four-layer film
            sachets, setting a new regional standard for quality and shelf life.
          </p>
        </article>

        <article class="principle-card reveal" data-delay="3">
          <span class="principle-card__num" aria-hidden="true">2015</span>
          <h3 class="principle-card__title">Regional Expansion</h3>
          <p class="principle-card__desc">
            Established direct operations across Rwanda, Burundi, and the DRC,
            building a resilient supply chain and bringing authentic Great Lakes
            produce to millions more households across the region.
          </p>
        </article>

        <article class="principle-card reveal" data-delay="4">
          <span class="principle-card__num" aria-hidden="true">Today</span>
          <h3 class="principle-card__title">Pan-African Ambitions</h3>
          <p class="principle-card__desc">
            Under professional management with 80+ years of combined African
            agribusiness expertise, expanding strategically across sub-Saharan
            Africa — anchored by the same commitment to purity that started it all.
          </p>
        </article>

      </div>
    </div>
  </section>


  <!-- ============================================================
       SECTION 6 — Team
       ============================================================ -->
  <section class="section team-section" id="team" aria-labelledby="team-heading">
    <div class="container">

      <header class="section-header reveal">
        <span class="eyebrow">The People Behind It</span>
        <h2 id="team-heading">Leadership &amp; <em>Ownership.</em></h2>
      </header>

      <div class="team-grid">

        <article class="team-card reveal" data-delay="1">
          <span class="team-card__role">Shareholder</span>
          <h3 class="team-card__name">Dillux SA</h3>
          <p class="team-card__bio">A Mauritius-based private equity company founded in May 2009, with a focus on East and Central Africa. Dillux invests in high-growth industries that have a strong track record of profitability or strong prospects for future growth.</p>
        </article>

        <article class="team-card reveal" data-delay="2">
          <span class="team-card__role">Chairman</span>
          <h3 class="team-card__name">James Kibera</h3>
          <p class="team-card__bio">Started his career with Citibank Kenya as a Trainee Manager in 1992 and became a full manager within two years. Responsible for bank asset and liability strategy, credit structuring, and foreign exchange management across agriculture, industry, and services sectors.</p>
        </article>

        <article class="team-card reveal" data-delay="3">
          <span class="team-card__role">Managing Director</span>
          <h3 class="team-card__name">Vip Kumar</h3>
          <p class="team-card__bio">Over 25 years of professional leadership and management expertise at multinational, corporate, SME, and developmental levels across Sub-Saharan Africa.</p>
        </article>

      </div>
    </div>
  </section>

</main><!-- /#main-content -->

<?php include 'partials/footer.php'; ?>
<?php include 'partials/_scripts.php'; ?>

<script>
/* Count-up animation for stats — triggers once on scroll into view */
(function () {
  var els = document.querySelectorAll('.stats-bar__value[data-count]');
  if (!els.length) return;

  function animateCount(el) {
    var target   = parseInt(el.dataset.count, 10);
    var suffix   = el.dataset.suffix || '';
    var duration = 1600;
    var start    = null;

    function step(ts) {
      if (!start) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var ease     = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(ease * target) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { animateCount(e.target); io.unobserve(e.target); }
      });
    }, { threshold: 0.5 });
    els.forEach(function (el) { io.observe(el); });
  } else {
    els.forEach(function (el) {
      el.textContent = el.dataset.count + (el.dataset.suffix || '');
    });
  }
})();
</script>

</body>
</html>

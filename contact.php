<?php
$page_title       = 'Get in Touch — Sorwatom';
$page_description = 'Contact Sorwatom for distribution, wholesale export, or general inquiries. Offices in Rwanda, Burundi and the DRC.';
$page_css         = ['pages/contact.css'];
$page_js          = ['contact.js'];
$body_class       = 'page-contact';
$current_page     = 'contact';
$hero_img         = 'contact-map';
$hero_img_mobile  = 'contact-map.png';
include 'partials/_head.php';
?>

<body class="<?= htmlspecialchars($body_class) ?>">

<?php include 'partials/nav.php'; ?>

<main id="main-content">

  <!-- ============================================================
       SECTION 1 — HERO
       ============================================================ -->
  <section class="hero hero--half" aria-label="Contact page introduction">

    <picture>
      <source media="(max-width: 767px)" srcset="/assets/img/slider/Mobile/contact-map.png">
      <img class="hero__bg"
        src="/assets/img/slider/contact-map.webp"
        alt="" aria-hidden="true" fetchpriority="high" loading="eager" decoding="async">
    </picture>

    <div class="hero__content container">

      <p class="eyebrow eyebrow--light reveal" data-delay="1">GET IN TOUCH</p>

      <h1 class="hero__title reveal" data-delay="2">
        Let's start a <em>conversation.</em>
      </h1>

      <p class="hero__subtitle reveal" data-delay="3">
        Distribution, export, or partnership — our team across Rwanda, Burundi
        and the DRC is ready to help your business succeed.
      </p>

      <!-- Country flags row -->
      <div class="cluster reveal" data-delay="4" aria-label="Countries we operate in">
        <span class="country-flag">🇷🇼 <span>Rwanda</span></span>
        <span class="country-flag">🇧🇮 <span>Burundi</span></span>
        <span class="country-flag">🇨🇩 <span>DRC</span></span>
      </div>

    </div>
  </section>


  <!-- ============================================================
       SECTION 2 — FORM + OFFICES
       ============================================================ -->
  <section class="section" aria-labelledby="contact-form-heading">
    <div class="container">

      <div class="contact-grid">

        <!-- ---- LEFT: Contact Form ---- -->
        <div class="form-card reveal">

          <p class="eyebrow eyebrow--accent">INQUIRY FORM</p>
          <h2 id="contact-form-heading">Send us a message</h2>

          <!-- Inquiry type pills -->
          <div class="inquiry-pills" role="group" aria-label="Select inquiry type">
            <button class="inquiry-pill active" type="button" data-type="distribution">Distribution</button>
            <button class="inquiry-pill" type="button" data-type="wholesale">Wholesale &amp; Export</button>
            <button class="inquiry-pill" type="button" data-type="media">Media &amp; Press</button>
            <button class="inquiry-pill" type="button" data-type="careers">Careers</button>
            <button class="inquiry-pill" type="button" data-type="general">General Inquiry</button>
          </div>

          <form id="contact-form" novalidate>

            <input type="hidden" name="inquiry_type" id="inquiry_type" value="distribution">

            <div class="form-grid">

              <div class="form-field">
                <label for="name">
                  Full Name <span aria-hidden="true">*</span>
                </label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  required
                  autocomplete="name"
                  placeholder="Your full name"
                >
              </div>

              <div class="form-field">
                <label for="company">
                  Company <span class="label-optional">(optional)</span>
                </label>
                <input
                  type="text"
                  id="company"
                  name="company"
                  autocomplete="organization"
                  placeholder="Company name"
                >
              </div>

              <div class="form-field">
                <label for="email">
                  Email <span aria-hidden="true">*</span>
                </label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  autocomplete="email"
                  placeholder="your@email.com"
                >
              </div>

              <div class="form-field">
                <label for="mobile">Mobile</label>
                <input
                  type="tel"
                  id="mobile"
                  name="mobile"
                  autocomplete="tel"
                  placeholder="+250 7xx xxx xxx"
                >
              </div>

              <div class="form-field form-field--full">
                <label for="message">
                  Message <span aria-hidden="true">*</span>
                </label>
                <textarea
                  id="message"
                  name="message"
                  required
                  rows="5"
                  placeholder="Tell us about your inquiry…"
                ></textarea>
              </div>

            </div><!-- /.form-grid -->

            <!-- Feedback message — populated by contact.js -->
            <div
              class="form-feedback"
              id="form-feedback"
              role="alert"
              aria-live="polite"
            ></div>

            <button type="submit" class="btn btn--primary" id="form-submit">
              <span class="btn-label">Send Message</span>
              <span class="btn-arrow" aria-hidden="true">→</span>
            </button>

          </form>

        </div><!-- /.form-card -->


        <!-- ---- RIGHT: Regional Offices ---- -->
        <div class="offices-col reveal" data-delay="1">

          <p class="eyebrow">REGIONAL OFFICES</p>

          <!-- Rwanda HQ -->
          <article class="office-card office-card--hq" aria-label="Rwanda headquarters">
            <div class="office-card__country">
              <span class="office-card__flag" aria-hidden="true">🇷🇼</span>
              RWANDA &middot; HQ
            </div>
            <p class="office-card__number">+250 787 160 000</p>
            <div class="office-card__detail">
              <a href="mailto:info@sorwatom.com">info@sorwatom.com</a><br>
              Kigali Special Economic Zone, Rwanda<br>
              <span>MON–FRI &middot; 8:00–17:00</span>
            </div>
          </article>

          <!-- Burundi -->
          <article class="office-card" aria-label="Burundi office">
            <div class="office-card__country">
              <span class="office-card__flag" aria-hidden="true">🇧🇮</span>
              BURUNDI
            </div>
            <p class="office-card__number">+257 76 779 999</p>
            <div class="office-card__detail">
              <a href="mailto:info@sorwatom.com">info@sorwatom.com</a><br>
              Quartier Industriel, Bujumbura<br>
              <span>MON–FRI &middot; 8:00–17:00</span>
            </div>
          </article>

          <!-- DRC -->
          <article class="office-card" aria-label="DRC office">
            <div class="office-card__country">
              <span class="office-card__flag" aria-hidden="true">🇨🇩</span>
              DRC
            </div>
            <p class="office-card__number">+243 999 906 50</p>
            <div class="office-card__detail">
              <a href="mailto:info@sorwatom.com">info@sorwatom.com</a><br>
              Avenue de l'Industrie, Goma<br>
              <span>MON–FRI &middot; 8:00–17:00</span>
            </div>
          </article>

        </div><!-- /.offices-col -->

      </div><!-- /.contact-grid -->

    </div><!-- /.container -->
  </section>


  <!-- ============================================================
       SECTION 3 — FAQ
       Dark green background, two-column layout.
       ============================================================ -->
  <section class="section section--faq on-dark" aria-labelledby="faq-heading">
    <div class="container">

      <div class="faq-grid">

        <!-- Left: prompt copy -->
        <div class="faq-prompt reveal">
          <p class="eyebrow eyebrow--light">QUICK ANSWERS</p>
          <h2 id="faq-heading">
            Before you write, you might be<br>
            looking for&hellip;
          </h2>
        </div>

        <!-- Right: accordion -->
        <div class="accordion reveal" data-delay="1" role="list">

          <!-- Q1 -->
          <div class="accordion__item" role="listitem">
            <button
              class="accordion__trigger"
              type="button"
              aria-expanded="false"
              aria-controls="faq-body-1"
              id="faq-trigger-1"
            >
              Where can I buy Sorwatom?
              <span class="accordion__icon" aria-hidden="true">+</span>
            </button>
            <div
              class="accordion__body"
              id="faq-body-1"
              role="region"
              aria-labelledby="faq-trigger-1"
            >
              <div class="accordion__content">
                Sorwatom products are available in supermarkets, grocery stores, and
                distributors across Rwanda, Burundi, and the DRC. Contact us to find
                your nearest stockist.
              </div>
            </div>
          </div>

          <!-- Q2 -->
          <div class="accordion__item" role="listitem">
            <button
              class="accordion__trigger"
              type="button"
              aria-expanded="false"
              aria-controls="faq-body-2"
              id="faq-trigger-2"
            >
              Do you ship internationally?
              <span class="accordion__icon" aria-hidden="true">+</span>
            </button>
            <div
              class="accordion__body"
              id="faq-body-2"
              role="region"
              aria-labelledby="faq-trigger-2"
            >
              <div class="accordion__content">
                Yes. We supply distributors across sub-Saharan Africa and accept
                international export orders with a minimum quantity. Contact our sales
                team for export pricing.
              </div>
            </div>
          </div>

          <!-- Q3 -->
          <div class="accordion__item" role="listitem">
            <button
              class="accordion__trigger"
              type="button"
              aria-expanded="false"
              aria-controls="faq-body-3"
              id="faq-trigger-3"
            >
              Are products certified?
              <span class="accordion__icon" aria-hidden="true">+</span>
            </button>
            <div
              class="accordion__body"
              id="faq-body-3"
              role="region"
              aria-labelledby="faq-trigger-3"
            >
              <div class="accordion__content">
                All Sorwatom products meet international food safety standards. We are
                ISO certified and comply with East African Community (EAC) food standards.
              </div>
            </div>
          </div>

          <!-- Q4 -->
          <div class="accordion__item" role="listitem">
            <button
              class="accordion__trigger"
              type="button"
              aria-expanded="false"
              aria-controls="faq-body-4"
              id="faq-trigger-4"
            >
              Private label / co-pack?
              <span class="accordion__icon" aria-hidden="true">+</span>
            </button>
            <div
              class="accordion__body"
              id="faq-body-4"
              role="region"
              aria-labelledby="faq-trigger-4"
            >
              <div class="accordion__content">
                Yes, we offer private label and co-packing services for retail and
                food-service clients. Custom packaging in our standard sachet, tin, and
                bottle formats. Minimum orders apply.
              </div>
            </div>
          </div>

        </div><!-- /.accordion -->

      </div><!-- /.faq-grid -->

    </div><!-- /.container -->
  </section>

</main><!-- /#main-content -->


<?php include 'partials/footer.php'; ?>

<?php include 'partials/_scripts.php'; ?>

</body>
</html>

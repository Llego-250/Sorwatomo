<?php
require_once 'data/posts.php';
$data_dir = __DIR__ . '/data';

$active_cat = $_GET['category'] ?? 'all';
$all_posts  = load_posts($data_dir);
$categories = get_all_categories($data_dir);

$posts = ($active_cat === 'all')
    ? $all_posts
    : array_values(get_posts_by_category($active_cat, $data_dir));

$page_title       = 'Journal — Sorwatom';
$page_description = 'Stories from the field, recipes from the kitchen, and news from the Great Lakes region.';
$page_css         = ['pages/blog.css'];
$body_class       = 'page-blog';
$current_page     = 'blog';
include 'partials/_head.php';
?>
<body class="<?= htmlspecialchars($body_class) ?>">

<?php include 'partials/nav.php'; ?>

<main id="main-content">

  <!-- HERO -->
  <section class="hero hero--half" aria-label="Journal">
    <img class="hero__bg" src="assets/img/slider/story-field.jpg" alt="" aria-hidden="true" fetchpriority="high" loading="eager">
    <div class="hero__content container">
      <p class="eyebrow eyebrow--light">The Sorwatom Journal</p>
      <h1 class="hero__title">Stories from the <em>field.</em></h1>
      <p class="hero__subtitle">Recipes, harvest notes, and news from the Great Lakes region.</p>
    </div>
  </section>

  <!-- FILTER + POSTS -->
  <section class="section" aria-labelledby="blog-heading">
    <div class="container">

      <!-- Category filter -->
      <div class="blog-filter" role="group" aria-label="Filter posts by category">
        <a
          href="/blog"
          class="filter-pill <?= $active_cat === 'all' ? 'active' : '' ?>"
          aria-pressed="<?= $active_cat === 'all' ? 'true' : 'false' ?>"
        >All</a>
        <?php foreach ($categories as $cat): ?>
        <a
          href="/blog?category=<?= urlencode($cat) ?>"
          class="filter-pill <?= $active_cat === $cat ? 'active' : '' ?>"
          aria-pressed="<?= $active_cat === $cat ? 'true' : 'false' ?>"
        ><?= htmlspecialchars($cat) ?></a>
        <?php endforeach; ?>
      </div>

      <!-- Post grid -->
      <?php if (empty($posts)): ?>
      <p class="blog-empty">No posts in this category yet.</p>
      <?php else: ?>
      <div class="blog-grid" id="blog-grid">
        <?php foreach ($posts as $i => $post): ?>
        <article class="post-card reveal" data-delay="<?= ($i % 3) + 1 ?>">
          <a href="/blog/<?= htmlspecialchars($post['slug']) ?>" class="post-card__link" aria-label="Read: <?= htmlspecialchars($post['title']) ?>">

            <!-- Image / placeholder -->
            <div class="post-card__img-wrap">
              <?php if (!empty($post['image'])): ?>
              <img src="<?= htmlspecialchars($post['image']) ?>" alt="" loading="lazy">
              <?php else: ?>
              <div class="post-card__img-placeholder" aria-hidden="true"></div>
              <?php endif; ?>
              <span class="post-card__category"><?= htmlspecialchars($post['category']) ?></span>
            </div>

            <div class="post-card__body">
              <time class="post-card__date" datetime="<?= htmlspecialchars($post['date']) ?>">
                <?= htmlspecialchars($post['date_formatted']) ?>
              </time>
              <h2 class="post-card__title"><?= htmlspecialchars($post['title']) ?></h2>
              <p class="post-card__excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
              <span class="post-card__read-more" aria-hidden="true">Read article →</span>
            </div>

          </a>
        </article>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php include 'partials/footer.php'; ?>
<?php include 'partials/_scripts.php'; ?>
</body>
</html>

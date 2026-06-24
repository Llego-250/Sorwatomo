<?php
require_once 'data/posts.php';
$data_dir = __DIR__ . '/data';

$slug = $_GET['slug'] ?? '';
$post = get_post_by_slug($slug, $data_dir);

if (!$post) {
    http_response_code(404);
    include '404.php';
    exit;
}

// Related posts: same category, excluding current
$all_posts    = load_posts($data_dir);
$related      = array_values(array_filter($all_posts, fn($p) => $p['slug'] !== $slug && $p['category'] === $post['category']));
$related      = array_slice($related, 0, 3);

$page_title       = htmlspecialchars($post['title']) . ' — Sorwatom Journal';
$page_description = htmlspecialchars($post['excerpt']);
$page_css         = ['pages/blog.css'];
$body_class       = 'page-blog-post';
$current_page     = 'blog';
include 'partials/_head.php';
?>
<body class="<?= htmlspecialchars($body_class) ?>">

<?php include 'partials/nav.php'; ?>

<main id="main-content">

  <!-- POST HERO -->
  <section class="post-hero hero hero--half" aria-label="Article header">
    <div class="hero__bg hero__bg--pattern" aria-hidden="true"></div>
    <div class="hero__content container">
      <nav class="post-breadcrumb" aria-label="Breadcrumb">
        <a href="/blog">Journal</a>
        <span aria-hidden="true"> / </span>
        <span class="post-card__category"><?= htmlspecialchars($post['category']) ?></span>
      </nav>
      <h1 class="hero__title post-hero__title"><?= htmlspecialchars($post['title']) ?></h1>
      <div class="post-hero__meta">
        <span class="post-hero__author"><?= htmlspecialchars($post['author']) ?></span>
        <span aria-hidden="true">·</span>
        <time datetime="<?= htmlspecialchars($post['date']) ?>">
          <?= htmlspecialchars($post['date_formatted']) ?>
        </time>
      </div>
    </div>
  </section>

  <!-- POST BODY -->
  <article class="section post-body" aria-label="Article content">
    <div class="container container--narrow">

      <!-- Tags -->
      <?php if (!empty($post['tags'])): ?>
      <div class="post-tags cluster" aria-label="Tags">
        <?php foreach ($post['tags'] as $tag): ?>
        <span class="badge badge--outline"><?= htmlspecialchars($tag) ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- Content -->
      <div class="post-content">
        <?= $post['content'] ?>
      </div>

      <!-- Back link -->
      <div class="post-footer-nav">
        <a href="/blog" class="btn--text">← Back to Journal</a>
      </div>

    </div>
  </article>

  <!-- RELATED POSTS -->
  <?php if (!empty($related)): ?>
  <section class="section section--sm related-posts" style="background:var(--col-surface-2);" aria-labelledby="related-heading">
    <div class="container">
      <p class="eyebrow">More from the Journal</p>
      <h2 id="related-heading" style="margin-bottom:var(--space-xl);">You might also <em>enjoy.</em></h2>
      <div class="blog-grid blog-grid--related">
        <?php foreach ($related as $i => $r): ?>
        <article class="post-card reveal" data-delay="<?= $i + 1 ?>">
          <a href="/blog/<?= htmlspecialchars($r['slug']) ?>" class="post-card__link" aria-label="Read: <?= htmlspecialchars($r['title']) ?>">
            <div class="post-card__img-wrap">
              <?php if (!empty($r['image'])): ?>
              <img src="<?= htmlspecialchars($r['image']) ?>" alt="" loading="lazy">
              <?php else: ?>
              <div class="post-card__img-placeholder" aria-hidden="true"></div>
              <?php endif; ?>
              <span class="post-card__category"><?= htmlspecialchars($r['category']) ?></span>
            </div>
            <div class="post-card__body">
              <time class="post-card__date" datetime="<?= htmlspecialchars($r['date']) ?>"><?= htmlspecialchars($r['date_formatted']) ?></time>
              <h3 class="post-card__title"><?= htmlspecialchars($r['title']) ?></h3>
              <span class="post-card__read-more" aria-hidden="true">Read article →</span>
            </div>
          </a>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

</main>

<?php include 'partials/footer.php'; ?>
<?php include 'partials/_scripts.php'; ?>
</body>
</html>

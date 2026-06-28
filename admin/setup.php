<?php
/**
 * One-time setup: creates tables, seeds categories & authors, migrates PHP-file posts.
 * Visit /admin/setup.php once, then delete or block the file.
 */
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../data/blog.php';

$db  = get_db();
$log = [];

// ─── 1. Schema ────────────────────────────────────────────────────────────────
$db->exec("
CREATE TABLE IF NOT EXISTS blog_categories (
    id    INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name  VARCHAR(100) NOT NULL,
    slug  VARCHAR(100) NOT NULL UNIQUE,
    color VARCHAR(7)   NOT NULL DEFAULT '#0d1e12'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS blog_authors (
    id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(100) NOT NULL,
    bio        TEXT,
    avatar_url VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS blog_posts (
    id           INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    slug         VARCHAR(255) NOT NULL UNIQUE,
    title        VARCHAR(255) NOT NULL,
    excerpt      TEXT,
    content      LONGTEXT,
    category_id  INT UNSIGNED,
    author_id    INT UNSIGNED,
    image_url    VARCHAR(255),
    status       ENUM('draft','published') NOT NULL DEFAULT 'draft',
    published_at DATETIME,
    created_at   DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at   DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES blog_categories(id) ON DELETE SET NULL,
    FOREIGN KEY (author_id)   REFERENCES blog_authors(id)    ON DELETE SET NULL,
    INDEX idx_status_date (status, published_at),
    INDEX idx_slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS blog_post_tags (
    post_id INT UNSIGNED NOT NULL,
    tag     VARCHAR(60)  NOT NULL,
    PRIMARY KEY (post_id, tag),
    FOREIGN KEY (post_id) REFERENCES blog_posts(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
");
$log[] = '✓ Tables created (or already exist)';

// ─── 2. Seed categories ───────────────────────────────────────────────────────
$cats = [
    ['Recipes',             'recipes',             '#c4472a'],
    ['Harvest & Farming',   'harvest-farming',     '#0d1e12'],
    ['Sustainability',      'sustainability',      '#2d6a4f'],
    ['News',                'news',                '#c8923a'],
    ['Food Culture',        'food-culture',        '#6b4226'],
];
$ins = $db->prepare("INSERT IGNORE INTO blog_categories (name, slug, color) VALUES (?, ?, ?)");
foreach ($cats as $c) { $ins->execute($c); }
$log[] = '✓ Categories seeded';

// ─── 3. Seed authors ──────────────────────────────────────────────────────────
$authors = [
    ['Sorwatom Team',    'The Sorwatom editorial team — sharing stories from the field, factory and kitchen.', null],
    ['Sorwatom Kitchen', 'Our kitchen team developing and testing recipes using Sorwatom products.',           null],
];
$ins = $db->prepare("INSERT IGNORE INTO blog_authors (name, bio, avatar_url) VALUES (?, ?, ?)");
foreach ($authors as $a) { $ins->execute($a); }
$log[] = '✓ Authors seeded';

// ─── 4. Migrate existing PHP-file posts ───────────────────────────────────────
$posts_dir = __DIR__ . '/../data/posts';
$migrated  = 0;
if (is_dir($posts_dir)) {
    foreach (glob($posts_dir . '/*.php') as $file) {
        $post = require $file;
        if (!is_array($post) || empty($post['slug'])) continue;

        // Resolve category
        $slug_map = [
            'Harvest & Farming' => 'harvest-farming',
            'Recipes'           => 'recipes',
            'Sustainability'    => 'sustainability',
            'News'              => 'news',
            'Food Culture'      => 'food-culture',
        ];
        $cat_slug = $slug_map[$post['category']] ?? blog_slugify($post['category'] ?? '');
        $cstmt = $db->prepare("SELECT id FROM blog_categories WHERE slug = ?");
        $cstmt->execute([$cat_slug]);
        $cat_id = $cstmt->fetchColumn() ?: null;

        // Resolve author
        $astmt = $db->prepare("SELECT id FROM blog_authors WHERE name = ?");
        $astmt->execute([$post['author'] ?? 'Sorwatom Team']);
        $author_id = $astmt->fetchColumn() ?: 1;

        // Check duplicate
        $dup = $db->prepare("SELECT id FROM blog_posts WHERE slug = ?");
        $dup->execute([$post['slug']]);
        if ($dup->fetchColumn()) continue;

        $post_id = blog_save_post([
            'slug'         => $post['slug'],
            'title'        => $post['title']   ?? '',
            'excerpt'      => $post['excerpt']  ?? '',
            'content'      => $post['content']  ?? '',
            'category_id'  => $cat_id,
            'author_id'    => $author_id,
            'image_url'    => $post['image']    ?? '',
            'status'       => 'published',
            'published_at' => ($post['date'] ?? date('Y-m-d')) . ' 08:00:00',
            'tags'         => $post['tags']     ?? [],
        ]);
        $migrated++;
    }
}
$log[] = "✓ Migrated $migrated posts from PHP files";
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sorwatom — Blog Setup</title>
<style>
  body{font-family:system-ui,sans-serif;max-width:640px;margin:3rem auto;padding:0 1rem;color:#1a1a1a}
  h1{font-size:1.5rem;margin-bottom:1.5rem}
  .log{background:#f4f4f4;border-radius:8px;padding:1.5rem;list-style:none;margin:0 0 2rem}
  .log li{padding:.35rem 0;border-bottom:1px solid #e0e0e0;font-size:.9rem}
  .log li:last-child{border:none}
  .done{color:#2d6a4f;font-weight:600}
  .warn{color:#c8923a}
  a.btn{display:inline-block;background:#0d1e12;color:white;padding:.65rem 1.5rem;border-radius:6px;text-decoration:none;font-size:.9rem}
</style>
</head>
<body>
<h1>Blog Setup Complete</h1>
<ul class="log">
<?php foreach ($log as $line): ?>
  <li class="done"><?= htmlspecialchars($line) ?></li>
<?php endforeach; ?>
</ul>
<p class="warn"><strong>Important:</strong> Delete or block this file after setup — it re-runs every time it is visited.</p>
<p><a href="/admin" class="btn">Go to Admin Panel →</a></p>
</body>
</html>

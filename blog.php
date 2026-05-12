<?php
require_once 'data/formations.php';

$page_title       = 'Blog — Skalys Business School';
$page_desc        = 'Actualités business, formation et alternance : la veille Skalys, sélection d\'articles & ressources pour les futurs pros.';
$home_url         = '/';
$extra_css        = ['/assets/css/blog.css'];
$page_js          = '/assets/js/blog.js';
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';
// Le blog republie un flux RSS tiers (contenu non-original) → noindex pour éviter
// le risque de pénalité « duplicate content » côté Google.
$robots_meta      = 'noindex, follow';

// ===== RSS CONFIG =====
// Remplacez l'URL ci-dessous par votre flux RSS si besoin.
$rss_url   = 'https://www.maddyness.com/feed/';
$max_items = 18;

function blog_fetch_url(string $url, int $timeout = 6): ?string {
  // cURL (recommandé)
  if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_CONNECTTIMEOUT => $timeout,
      CURLOPT_TIMEOUT => $timeout,
      CURLOPT_USERAGENT => 'SkalysRSS/1.0 (+https://skalys-bs.fr)'
    ]);
    $data = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);
    if ($data !== false && $code >= 200 && $code < 400) return $data;
  }

  // Fallback (si allow_url_fopen est activé)
  $ctx = stream_context_create([
    'http' => [
      'timeout' => $timeout,
      'header'  => "User-Agent: SkalysRSS/1.0\r\n"
    ]
  ]);
  $data = @file_get_contents($url, false, $ctx);
  return $data !== false ? $data : null;
}

function blog_extract_first_image_url(string $html): ?string {
  if (!preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $m)) return null;
  $url = trim($m[1] ?? '');
  if ($url === '') return null;
  if (!filter_var($url, FILTER_VALIDATE_URL)) return null;
  $scheme = strtolower((string)parse_url($url, PHP_URL_SCHEME));
  if ($scheme !== 'http' && $scheme !== 'https') return null;
  return $url;
}

function blog_excerpt(string $text, int $maxLen = 180): string {
  $clean = trim(preg_replace('/\s+/', ' ', strip_tags($text)));

  if (function_exists('mb_strlen') && function_exists('mb_substr')) {
    if (mb_strlen($clean) <= $maxLen) return $clean;
    return rtrim(mb_substr($clean, 0, $maxLen - 1)) . '…';
  }

  if (strlen($clean) <= $maxLen) return $clean;
  return rtrim(substr($clean, 0, $maxLen - 1)) . '…';
}

function blog_lower(string $s): string {
  if (function_exists('mb_strtolower')) return mb_strtolower($s);
  return strtolower($s);
}

function blog_random_emoji(): string {
  static $pool = [
    '✨', '⚡', '🚀', '🧠', '📚', '🗞️', '🎓', '🧩', '📌', '🔎', '🌍', '💡'
  ];
  return $pool[random_int(0, count($pool) - 1)];
}

function blog_parse_date(?string $raw): ?int {
  if (!$raw) return null;
  $ts = strtotime($raw);
  return $ts !== false ? $ts : null;
}

function blog_format_date_fr(?int $ts): string {
  if (!$ts) return '';
  if (class_exists('IntlDateFormatter')) {
    $fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE);
    return $fmt->format($ts);
  }
  return date('d/m/Y', $ts);
}

function blog_fetch_rss_items(string $rss_url, int $max_items = 12): array {
  $cacheFile = __DIR__ . '/data/rss-cache.json';
  $ttl = 15 * 60;

  // Cache (si possible)
  if (is_file($cacheFile) && (time() - filemtime($cacheFile)) < $ttl) {
    $json = @file_get_contents($cacheFile);
    $cached = $json ? json_decode($json, true) : null;
    if (is_array($cached)) return array_slice($cached, 0, $max_items);
  }

  $xmlStr = blog_fetch_url($rss_url);
  if (!$xmlStr) return [];

  libxml_use_internal_errors(true);
  $xml = simplexml_load_string($xmlStr, 'SimpleXMLElement', LIBXML_NOCDATA);
  if (!$xml) return [];

  $items = [];

  // RSS 2.0
  if (!empty($xml->channel->item)) {
    foreach ($xml->channel->item as $it) {
      $title = (string)($it->title ?? '');
      $link  = (string)($it->link ?? '');
      $date  = blog_parse_date((string)($it->pubDate ?? ''));
      $desc  = (string)($it->description ?? '');

      // content:encoded (WordPress)
      $content = '';
      $children = $it->children('http://purl.org/rss/1.0/modules/content/');
      if (!empty($children->encoded)) $content = (string)$children->encoded;

      $img = blog_extract_first_image_url($content ?: $desc);
      $items[] = [
        'title' => $title,
        'link' => $link,
        'date' => $date,
        'date_label' => blog_format_date_fr($date),
        'excerpt' => blog_excerpt($desc ?: $content),
        'image' => $img,
      ];
      if (count($items) >= $max_items) break;
    }
  }

  // Atom
  if (empty($items) && !empty($xml->entry)) {
    foreach ($xml->entry as $entry) {
      $title = (string)($entry->title ?? '');
      $link = '';
      foreach ($entry->link as $l) {
        $attrs = $l->attributes();
        if (!empty($attrs['href'])) { $link = (string)$attrs['href']; break; }
      }
      $date = blog_parse_date((string)($entry->updated ?? $entry->published ?? ''));
      $summary = (string)($entry->summary ?? '');
      $content = (string)($entry->content ?? '');
      $img = blog_extract_first_image_url($content ?: $summary);

      $items[] = [
        'title' => $title,
        'link' => $link,
        'date' => $date,
        'date_label' => blog_format_date_fr($date),
        'excerpt' => blog_excerpt($summary ?: $content),
        'image' => $img,
      ];
      if (count($items) >= $max_items) break;
    }
  }

  // Écriture du cache (best-effort)
  if (!empty($items)) {
    @file_put_contents($cacheFile, json_encode($items, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
  }

  return $items;
}

$posts = blog_fetch_rss_items($rss_url, $max_items);

// Fallback : si le flux RSS est vide ou indisponible, affichage d'articles
// internes statiques pour ne pas laisser la page vide.
if (empty($posts)) {
  $static_posts = [
    [
      'title'      => "L'alternance à Skalys : comment ça marche ?",
      'link'       => 'candidature.php',
      'date'       => time(),
      'date_label' => blog_format_date_fr(time()),
      'excerpt'    => "Découvrez le fonctionnement de l'alternance à Skalys : rythme, rémunération, OPCO, suivi pédagogique. Tout ce qu'il faut savoir avant de se lancer.",
      'image'      => null,
    ],
    [
      'title'      => "L'IA dans nos formations : pourquoi et comment",
      'link'       => 'ia.php',
      'date'       => strtotime('-7 days'),
      'date_label' => blog_format_date_fr(strtotime('-7 days')),
      'excerpt'    => "Pourquoi Skalys intègre l'IA dans toutes ses formations, et comment cela transforme la valeur de nos alternants sur le marché.",
      'image'      => null,
    ],
    [
      'title'      => 'Trouver son entreprise d\'alternance : 5 conseils qui marchent',
      'link'       => 'faq.php#alternance',
      'date'       => strtotime('-14 days'),
      'date_label' => blog_format_date_fr(strtotime('-14 days')),
      'excerpt'    => "CV, lettre, LinkedIn, mise en relation : nos conseils pour trouver rapidement une entreprise d'accueil avec l'accompagnement Skalys.",
      'image'      => null,
    ],
    [
      'title'      => 'Bac, Bac+2, Bac+3, Bac+5 : quel parcours pour quel métier ?',
      'link'       => 'home.php#formations',
      'date'       => strtotime('-21 days'),
      'date_label' => blog_format_date_fr(strtotime('-21 days')),
      'excerpt'    => "Du Bac au Bac+5, panorama de nos parcours et des métiers auxquels chacun ouvre l'accès. CAP, BTS, Bachelor, Mastère — choisissez en connaissance de cause.",
      'image'      => null,
    ],
    [
      'title'      => 'Qualiopi, RNCP : ce que ces labels signifient vraiment pour vous',
      'link'       => 'home.php#why',
      'date'       => strtotime('-28 days'),
      'date_label' => blog_format_date_fr(strtotime('-28 days')),
      'excerpt'    => "On parle souvent de Qualiopi et de RNCP — mais qu'est-ce que cela change concrètement pour un alternant ? Décryptage simple.",
      'image'      => null,
    ],
    [
      'title'      => 'Recruter un alternant Skalys : aides, démarches et bonnes pratiques',
      'link'       => 'recruter.php',
      'date'       => strtotime('-35 days'),
      'date_label' => blog_format_date_fr(strtotime('-35 days')),
      'excerpt'    => "Aides à l'embauche, OPCO, exonérations : tout ce que doit savoir une entreprise qui souhaite accueillir un alternant Skalys.",
      'image'      => null,
    ],
  ];
  $posts = $static_posts;
  $is_static_fallback = true;
} else {
  $is_static_fallback = false;
}

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="blog-hero" id="top">
  <div class="blog-hero-bg-text">Blog</div>
  <div class="blog-hero-inner">
    <div class="blog-hero-meta">
      <span>Skalys — Édition 2026</span>
      <span>Ressources & actualités</span>
      <span>Flux RSS</span>
    </div>

    <h1>Le blog Skalys,<br><em>en direct</em> du RSS.</h1>
    <p class="blog-hero-sub">Cette page est un miroir automatique de notre flux RSS. Chaque article vous renvoie vers la source d'origine.</p>

    <div class="blog-hero-actions">
      <a href="<?= htmlspecialchars($rss_url) ?>" class="btn btn-yellow" target="_blank" rel="noopener">Ouvrir le RSS <span class="arrow">→</span></a>
      <a href="#posts" class="btn blog-btn-ghost">Voir les articles <span class="arrow">↓</span></a>
    </div>

    <div class="blog-search reveal">
      <label class="blog-search-label" for="blogSearch">Filtrer les articles</label>
      <input id="blogSearch" class="blog-search-input" type="search" placeholder="Ex : alternance, IA, recrutement…" autocomplete="off">
      <div class="blog-search-meta" id="blogSearchMeta"><?php if (!empty($posts)): ?><?= count($posts) ?> article<?= count($posts) > 1 ? 's' : '' ?><?php if (!$is_static_fallback): ?> chargés depuis le RSS<?php endif; ?>.<?php else: ?>Aucun article pour le moment.<?php endif; ?></div>
    </div>
  </div>
</section>

<!-- ===== POSTS ===== -->
<section class="blog-page" id="posts">
  <div class="container">

    <div class="blog-page-header reveal">
      <div class="section-label"><span class="num">01</span> Articles</div>
      <h2 class="section-h2">À lire,<br><em>à partager.</em></h2>
    </div>

    <?php if (empty($posts)): ?>
      <div class="blog-empty reveal">
        <div class="blog-empty-title">Flux indisponible</div>
        <p>Le flux RSS n'a pas pu être récupéré. Vous pouvez essayer directement ici : <a href="<?= htmlspecialchars($rss_url) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($rss_url) ?></a>.</p>
      </div>
    <?php else: ?>
      <div class="blog-grid" id="blogGrid">
        <?php foreach ($posts as $p): ?>
          <?php
            $is_new = !empty($p['date']) && (time() - (int)$p['date']) < (7 * 24 * 60 * 60);
            $img = $p['image'] ?? '';
            $fallback_emoji = blog_random_emoji();
          ?>
          <?php
            $link = $p['link'] ?? '#';
            $is_external = preg_match('#^https?://#i', $link);
            $target_attr = $is_external ? ' target="_blank" rel="noopener"' : '';
          ?>
          <article class="blog-card" data-title="<?= htmlspecialchars(blog_lower($p['title'] ?? '')) ?>" data-excerpt="<?= htmlspecialchars(blog_lower($p['excerpt'] ?? '')) ?>">
            <a class="blog-card-link" href="<?= htmlspecialchars($link) ?>"<?= $target_attr ?>>
              <div class="blog-card-media">
                <?php if (!empty($img)): ?>
                  <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($p['title'] ?? 'Article') ?>" width="800" height="450" loading="lazy" decoding="async">
                <?php else: ?>
                  <div class="blog-card-placeholder" aria-hidden="true"><?= htmlspecialchars($fallback_emoji) ?></div>
                <?php endif; ?>
                <?php if ($is_new): ?><div class="blog-card-badge">Nouveau</div><?php endif; ?>
              </div>
              <div class="blog-card-body">
                <div class="blog-card-meta">
                  <span class="blog-card-date"><?= htmlspecialchars($p['date_label'] ?? '') ?></span>
                  <span class="blog-card-src">RSS</span>
                </div>
                <h3 class="blog-card-title"><?= htmlspecialchars($p['title'] ?? '') ?></h3>
                <?php if (!empty($p['excerpt'])): ?>
                  <p class="blog-card-excerpt"><?= htmlspecialchars($p['excerpt']) ?></p>
                <?php endif; ?>
                <div class="blog-card-foot">
                  <span>Lire l'article</span>
                  <span class="blog-card-arrow">→</span>
                </div>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="blog-empty" id="blogEmpty" hidden>
        <div class="blog-empty-title">Aucun article trouvé</div>
        <p>Essayez avec un autre mot-clé.</p>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php require 'components/footer.php'; ?>

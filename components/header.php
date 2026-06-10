<?php
// Variables attendues (avec valeurs par défaut) :
// $page_title   (string) — titre de la page
// $page_desc    (string) — meta description
// $show_loader  (bool)   — afficher l'écran de chargement (défaut : false)
// $home_url     (string) — préfixe pour les liens de nav (défaut : '/')
$show_loader = $show_loader ?? false;
$home_url    = $home_url    ?? '/';

// Host figé pour éviter toute injection via HTTP_HOST dans canonical / og:url.
$scheme   = 'https';
$host     = 'skalys-bs.fr';
$path     = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');

// Normalise les URL équivalentes de la home vers "/"
if (in_array($path, ['/home.php', '/index.php'], true)) {
  $path = '/';
}

// Le formulaire de canonical peut être surchargé par la page (formation.php notamment)
$canonical_url = $canonical_url ?? ($scheme . '://' . $host . $path);
$og_image      = $og_image      ?? ($scheme . '://' . $host . '/assets/images/ecole.webp');
$og_image_w    = $og_image_w    ?? 1376;
$og_image_h    = $og_image_h    ?? 768;
$og_image_alt  = $og_image_alt  ?? 'Skalys Business School — Compiègne';
$robots_meta   = $robots_meta   ?? 'index, follow';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#0a0a0a">
<meta name="robots" content="<?= htmlspecialchars($robots_meta) ?>">
<title><?= htmlspecialchars($page_title ?? 'Skalys — Business School') ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc ?? '') ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">

<!-- Favicon -->
<link rel="icon" type="image/webp" href="/assets/images/skalys-logo.webp">
<link rel="apple-touch-icon" href="/assets/images/skalys-logo.webp">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Skalys Business School">
<meta property="og:locale" content="fr_FR">
<meta property="og:title" content="<?= htmlspecialchars($page_title ?? 'Skalys — Business School') ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_desc ?? '') ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
<meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
<meta property="og:image:width" content="<?= (int)$og_image_w ?>">
<meta property="og:image:height" content="<?= (int)$og_image_h ?>">
<meta property="og:image:alt" content="<?= htmlspecialchars($og_image_alt) ?>">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($page_title ?? 'Skalys — Business School') ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($page_desc ?? '') ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>">
<meta name="twitter:image:alt" content="<?= htmlspecialchars($og_image_alt) ?>">

<!-- Fonts (chargées après consentement RGPD — voir /assets/js/consent.js) -->
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Manrope:wght@300;400;500;600;700;800&family=Fraunces:opsz,wght@9..144,200..900;1,200..900&family=JetBrains+Mono:wght@400;500;700&display=swap"></noscript>

<link rel="stylesheet" href="/assets/css/main.css">
<?php if (!empty($extra_css)): foreach ($extra_css as $css): ?>
<link rel="stylesheet" href="<?= htmlspecialchars($css) ?>">
<?php endforeach; endif; ?>

<?php if (!empty($jsonld_blocks)): foreach ($jsonld_blocks as $jsonld): ?>
<script type="application/ld+json"><?= json_encode($jsonld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
<?php endforeach; endif; ?>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11545431711"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11545431711');
</script>
<body class="<?= $show_loader ? 'loading' : '' ?>">

<?php if ($show_loader): ?>
<!-- ===== LOADER ===== -->
<div class="loader" id="loader">
  <div class="loader-text">
    <span class="ltr">S</span><span class="ltr">k</span><span class="ltr">a</span><span class="ltr">l</span><span class="ltr">y</span><span class="ltr">s</span>
  </div>
  <div class="loader-meta">
    <span>Compiègne — France</span>
    <span>2026 / Édition 01</span>
  </div>
  <div class="loader-bar"></div>
</div>
<?php endif; ?>

<!-- ===== CURSOR ===== -->
<div class="cursor-dot" id="cursorDot"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- ===== SCROLL PROGRESS ===== -->
<div class="scroll-prog" id="scrollProg"></div>

<!-- ===== TOP CONTACT BAR ===== -->
<div class="top-bar">
  <div class="top-bar-inner">
    <a href="https://maps.google.com/?q=8+avenue+Flandres+Dunkerque+60200+Compiègne" target="_blank" rel="noopener" class="top-bar-link">
      <span class="top-bar-ico" aria-hidden="true">⌖</span> 8 av. Flandres Dunkerque, 60200 Compiègne
    </a>
    <a href="tel:0670934298" class="top-bar-link">
      <span class="top-bar-ico" aria-hidden="true">☎</span> 06 70 93 42 98
    </a>
  </div>
</div>

<!-- ===== TOP TICKER ===== -->
<div class="ticker-top">
  <div class="ticker-track">
    <span>
      ✦ Bac → Bac+5 &nbsp;<span class="star">/</span>&nbsp; 100% Alternance &nbsp;<span class="star">/</span>&nbsp; Frais Pris en Charge &nbsp;<span class="star">/</span>&nbsp; Certifié Qualiopi &nbsp;<span class="star">/</span>&nbsp; Compiègne ✦ Bac → Bac+5 &nbsp;<span class="star">/</span>&nbsp; 100% Alternance &nbsp;<span class="star">/</span>&nbsp; Frais Pris en Charge &nbsp;<span class="star">/</span>&nbsp; Certifié Qualiopi &nbsp;<span class="star">/</span>&nbsp; Compiègne ✦ Bac → Bac+5 &nbsp;<span class="star">/</span>&nbsp; 100% Alternance &nbsp;<span class="star">/</span>&nbsp; Frais Pris en Charge &nbsp;<span class="star">/</span>&nbsp; Certifié Qualiopi &nbsp;<span class="star">/</span>&nbsp; Compiègne &nbsp;
    </span>
  </div>
</div>

<!-- ===== NAV ===== -->
<nav class="main">
  <div class="nav-inner">
    <a href="<?= $home_url ?>" class="brand">
      <img class="brand-mark" src="/assets/images/skalys-logo.webp" alt="Skalys" width="40" height="40">
      <div>
        Skalys
        <small>Business School</small>
      </div>
    </a>
    <ul class="nav-links">
      <li class="has-dropdown">
        <a href="<?= $home_url ?>#formations">Formations <span class="chevron">&#8964;</span></a>
        <div class="nav-dropdown">
          <div class="nav-dropdown-header">Nos formations</div>
          <div class="nav-dropdown-body">
            <?php foreach ($tabs as $key => $tab):
              $tab_formations = array_filter($formations, fn($f) => $f['tab'] === $key);
            ?>
            <div class="nav-dropdown-group">
              <span class="nav-dropdown-group-label"><?= htmlspecialchars($tab['label']) ?> — <?= htmlspecialchars($tab['niveau_label']) ?></span>
              <?php foreach ($tab_formations as $f): ?>
              <a href="/formation/<?= htmlspecialchars($f['slug']) ?>" class="nav-dropdown-item<?= !empty($f['a_venir']) ? ' nav-dropdown-item--avenir' : '' ?>">
                <span class="nav-dropdown-badge"><?= htmlspecialchars($f['badge']) ?></span>
                <span class="nav-dropdown-title"><?= htmlspecialchars($f['title']) ?></span>
                <?php if (!empty($f['a_venir'])): ?>
                  <span class="nav-avenir-tag">À venir</span>
                <?php endif; ?>
              </a>
              <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </li>
      <li><a href="<?= $home_url ?>#manifesto">Manifesto</a></li>
      <li><a href="/ia.php">IA</a></li>
      <li class="has-dropdown">
        <a href="<?= $home_url ?>#why">L'école <span class="chevron">&#8964;</span></a>
        <div class="nav-dropdown nav-dropdown--simple">
          <div class="nav-dropdown-body">
            <div class="nav-dropdown-group">
              <a href="/equipe.php" class="nav-dropdown-item">
                <span class="nav-dropdown-title">Notre équipe</span>
              </a>
              <a href="/blog.php" class="nav-dropdown-item">
                <span class="nav-dropdown-title">Blog</span>
              </a>
              <a href="/faq.php" class="nav-dropdown-item">
                <span class="nav-dropdown-title">FAQ</span>
              </a>
              <a href="/contact.php" class="nav-dropdown-item">
                <span class="nav-dropdown-title">Contact</span>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li><a href="<?= $home_url ?>#process">Admission</a></li>
      <li><a href="/contact.php">Contact</a></li>
    </ul>
    <div class="nav-cta">
      <a href="/recruter.php" class="btn">Recruter un alternant</a>
      <a href="/candidature.php" class="btn btn-yellow">Je candidate <span class="arrow">→</span></a>
      <button class="menu-burger" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</nav>

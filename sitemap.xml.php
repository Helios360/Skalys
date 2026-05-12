<?php
require_once __DIR__ . '/data/formations.php';

header('Content-Type: application/xml; charset=UTF-8');

$base   = 'https://skalys-bs.fr';
$today  = date('Y-m-d');

$static_pages = [
  ['/',                              '1.0', 'weekly'],
  ['/ia.php',                        '0.9', 'monthly'],
  ['/equipe.php',                    '0.7', 'monthly'],
  ['/faq.php',                       '0.7', 'monthly'],
  ['/recruter.php',                  '0.8', 'monthly'],
  ['/candidature.php',               '0.9', 'monthly'],
  ['/qualiopi.php',                  '0.4', 'yearly'],
  ['/accessibilite.php',             '0.3', 'yearly'],
  ['/cgv.php',                       '0.3', 'yearly'],
  ['/mentions-legales.php',          '0.2', 'yearly'],
  ['/politique-confidentialite.php', '0.2', 'yearly'],
  // blog.php est en noindex (republication d'un flux RSS tiers) — exclu volontairement
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($static_pages as [$path, $prio, $freq]) {
  echo "  <url>\n";
  echo "    <loc>" . htmlspecialchars($base . $path) . "</loc>\n";
  echo "    <lastmod>$today</lastmod>\n";
  echo "    <changefreq>$freq</changefreq>\n";
  echo "    <priority>$prio</priority>\n";
  echo "  </url>\n";
}

foreach ($formations as $f) {
  if (!empty($f['a_venir'])) continue;
  $url = $base . '/formation/' . $f['slug'];
  echo "  <url>\n";
  echo "    <loc>" . htmlspecialchars($url) . "</loc>\n";
  echo "    <lastmod>$today</lastmod>\n";
  echo "    <changefreq>monthly</changefreq>\n";
  echo "    <priority>0.8</priority>\n";
  echo "  </url>\n";
}

echo '</urlset>' . "\n";

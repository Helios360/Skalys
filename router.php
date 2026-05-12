<?php
// Router pour le serveur PHP intégré (`php -S host:port router.php`).
// Reproduit les règles de rewrite du .htaccess (Apache) en environnement local.

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

// 1) Laisser le serveur intégré servir les fichiers existants tels quels
//    (assets, .php directs, etc.). `return false;` délègue au handler natif.
if ($path !== '/' && file_exists(__DIR__ . $path) && !is_dir(__DIR__ . $path)) {
    return false;
}

// 2) Bloquer l'accès direct aux dossiers internes (équivalent du F,L Apache)
if (preg_match('#^/(components|data)(/|$)#', $path)) {
    http_response_code(403);
    require __DIR__ . '/404.php';
    return true;
}

// 3) Canonical: /home.php et /index.php → /
if ($path === '/home.php' || $path === '/index.php') {
    header('Location: /', true, 301);
    return true;
}

// 4) Pretty URL formations: /formation/<slug>
if (preg_match('#^/formation/([a-z0-9-]+)/?$#i', $path, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/formation.php';
    return true;
}

// 5) Sitemap dynamique
if ($path === '/sitemap.xml') {
    require __DIR__ . '/sitemap.xml.php';
    return true;
}

// 6) Racine → home.php
if ($path === '/' || $path === '') {
    require __DIR__ . '/home.php';
    return true;
}

// 7) Tout le reste → 404
http_response_code(404);
require __DIR__ . '/404.php';
return true;

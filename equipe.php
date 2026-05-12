<?php
require_once 'data/formations.php';

$page_title       = 'Notre équipe — Skalys Business School';
$page_desc        = 'Découvrez l\'équipe Skalys Business School : direction, administration et formateurs experts. Des pros engagés à Compiègne pour votre alternance.';
$home_url         = '/';
$extra_css        = ['/assets/css/equipe.css'];
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';
$page_js          = '/assets/js/equipe.js';

// Helper : initiales (max 2 lettres) pour les placeholders quand l'image manque.
function equipe_initials(string $name): string {
  $parts = preg_split('/\s+/', trim($name));
  $out = '';
  foreach ($parts as $p) {
    if ($p === '') continue;
    $out .= mb_substr($p, 0, 1);
    if (mb_strlen($out) >= 2) break;
  }
  return mb_strtoupper($out);
}

// Helper : retourne le chemin si le fichier existe localement, sinon null.
function equipe_resolve_image(?string $rel): ?string {
  if (!$rel) return null;
  $full = __DIR__ . DIRECTORY_SEPARATOR . ltrim($rel, '/');
  return is_file($full) ? $rel : null;
}

// Helper : rendu d'une photo avec fallback initiales si l'image n'est pas dispo.
function equipe_render_photo(array $m): string {
  $img = equipe_resolve_image($m['image'] ?? null);
  $alt = htmlspecialchars($m['name']);
  if ($img) {
    return '<img src="' . htmlspecialchars($img) . '" alt="' . $alt . '" width="800" height="800" loading="lazy">';
  }
  return '<div class="membre-placeholder" role="img" aria-label="' . $alt . '"><span>' . htmlspecialchars(equipe_initials($m['name'])) . '</span></div>';
}

$admin_team = [
  ['name' => 'Abdelkader Barakat',  'role' => 'Directeur général',                                'tag' => 'Directeur général',     'image' => 'assets/images/abdel.webp'],
  ['name' => 'Dorothée Bouvignies', 'role' => 'Responsable relations entreprises & recrutement',  'tag' => 'Relations entreprises', 'image' => 'assets/images/dorothee.webp'],
  ['name' => 'Anouchka Blanchard',  'role' => 'Chargée des relations entreprises',                'tag' => 'Relations entreprises', 'image' => 'assets/images/anouchka.webp'],
  ['name' => 'Laetitia Toussaints', 'role' => 'Responsable administrative & pédagogique',         'tag' => 'Administration',        'image' => 'assets/images/laeticia.webp'],
  ['name' => 'Cassandre Bailly',    'role' => 'Chargée administrative',                           'tag' => 'Administration',        'image' => 'assets/images/cassandre.webp'],
  ['name' => 'Ylann Lamien',        'role' => 'Chargé de communication',                          'tag' => 'Communication',         'image' => 'assets/images/ylann.webp'],
];

$formateurs_team = [
  [
    'name'  => 'Marc Patiou',
    'role'  => 'Formateur — Commerce & Vente',
    'speciality' => 'Commerce & Vente',
    'image' => 'assets/images/marc-patiou.webp',
    'bio'   => "25 ans d'expérience dans le commerce, l'immobilier et le conseil en entreprise. Expert en techniques de vente et en accompagnement commercial, il transmet une vision pragmatique et directement applicable du métier.",
    'tags'  => ['BTS NDRC', 'TP NTC', 'Vente'],
  ],
  [
    'name'  => 'Benjamin Jonneaux',
    'role'  => 'Formateur — Digital & IA',
    'speciality' => 'Digital & IA',
    'image' => 'assets/images/benjamin-jonneau.webp',
    'bio'   => "Spécialiste de la montée en compétences digitales, il accompagne les professionnels dans leur transformation numérique. Ses formations sont interactives, concrètes et directement applicables en entreprise.",
    'tags'  => ['BTS NDRC', 'BTS GPME', 'Digital'],
  ],
  [
    'name'  => 'Julie Marcheteau',
    'role'  => 'Formatrice — LinkedIn & Marketing',
    'speciality' => 'LinkedIn & Marketing',
    'image' => 'assets/images/julie-marcheteau.webp',
    'bio'   => "Ancienne directrice marketing dans l'industrie pharmaceutique, aujourd'hui stratège en personal branding et coach d'entrepreneurs sur LinkedIn. Elle forme à la visibilité professionnelle et au marketing de contenu.",
    'tags'  => ['BTS NDRC', 'Marketing', 'Réseaux sociaux'],
  ],
  [
    'name'  => 'Marion Fouquet',
    'role'  => 'Formatrice — Communication & Gestion de projet',
    'speciality' => 'Communication & Projet',
    'image' => 'assets/images/marion-fouquet.webp',
    'bio'   => "Fondatrice du cabinet Pilote, elle allie communication stratégique et gestion de projet. Ses cours sont axés sur des outils pratiques, directement utiles sur le terrain.",
    'tags'  => ['BTS GPME', 'Communication', 'Projet'],
  ],
];

$team_members = array_merge($admin_team, $formateurs_team);

$jsonld_blocks = [
  [
    '@context' => 'https://schema.org',
    '@graph'   => array_map(fn($m) => [
      '@type'    => 'Person',
      'name'     => $m['name'],
      'jobTitle' => $m['role'],
      'image'    => equipe_resolve_image($m['image'] ?? null),
      'worksFor' => [
        '@type' => 'EducationalOrganization',
        'name'  => 'Skalys Business School',
        'url'   => 'https://skalys-bs.fr/',
      ],
    ], $team_members),
  ],
  [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil',        'item' => 'https://skalys-bs.fr/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Notre équipe',   'item' => 'https://skalys-bs.fr/equipe.php'],
    ],
  ],
];

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="equipe-hero">
  <div class="equipe-hero-wrap">
    <div class="equipe-hero-inner">
      <div class="section-label section-label--on-dark">
        <span class="num">→</span> Notre équipe
      </div>
      <h1>Des humains,<br><em>avant tout.</em></h1>
      <p class="equipe-hero-sub">Une école, c'est avant tout des personnes. Voici celles et ceux qui forment, accompagnent et soutiennent chaque alternant Skalys au quotidien.</p>

      <div class="equipe-hero-tags">
        <span class="eq-tag">Proximité</span>
        <span class="eq-tag">Engagement</span>
        <span class="eq-tag">Professionnalisation</span>
        <span class="eq-tag">Responsabilité</span>
      </div>
    </div>

    <div class="equipe-hero-portrait">
      <img src="/assets/images/ecole.webp" alt="L'équipe Skalys Business School" width="1376" height="768" loading="eager" fetchpriority="high">
      <div class="equipe-hero-caption">Fig. 01 — Équipe Skalys, Compiègne 2026</div>
    </div>
  </div>
</section>

<!-- ===== MARQUEE VALEURS ===== -->
<div class="mega-marquee equipe-marquee">
  <div class="mega-marquee-track">
    <span>
      <em>Proximité</em> <span class="star">✦</span>
      <em>Engagement</em> <span class="star">✦</span>
      <em>Professionnalisation</em> <span class="star">✦</span>
      <em>Responsabilité</em> <span class="star">✦</span>
      <em>Proximité</em> <span class="star">✦</span>
      <em>Engagement</em> <span class="star">✦</span>
      <em>Professionnalisation</em> <span class="star">✦</span>
      <em>Responsabilité</em> <span class="star">✦</span>
    </span>
  </div>
</div>

<!-- ===== QUI SOMMES-NOUS ===== -->
<section class="equipe-mission">
  <div class="container">
    <div class="equipe-mission-grid">
      <div class="equipe-mission-left reveal">
        <div class="section-label"><span class="num">01</span> Notre mission</div>
        <h2 class="section-h2">Former des pros<br><em>opérationnels.</em></h2>
      </div>
      <div class="equipe-mission-right">
        <p class="reveal">Skalys Business School est un organisme de formation dédié aux métiers du commerce, de la gestion et des services. Notre ambition : former des professionnels compétents, autonomes et engagés, capables de s'adapter aux évolutions des métiers.</p>
        <div class="equipe-valeurs stagger">
          <div class="equipe-valeur-item">
            <div class="valeur-num">/01</div>
            <h4>Proximité</h4>
            <p>Une école accessible, à l'écoute des apprenants et des entreprises partenaires, réactive et disponible.</p>
          </div>
          <div class="equipe-valeur-item">
            <div class="valeur-num">/02</div>
            <h4>Engagement</h4>
            <p>Un accompagnement individualisé tout au long du parcours, de l'admission jusqu'à l'insertion professionnelle.</p>
          </div>
          <div class="equipe-valeur-item">
            <div class="valeur-num">/03</div>
            <h4>Professionnalisation</h4>
            <p>Des formations ancrées dans la réalité du terrain, avec des formateurs issus du monde professionnel.</p>
          </div>
          <div class="equipe-valeur-item">
            <div class="valeur-num">/04</div>
            <h4>Responsabilité</h4>
            <p>Des programmes accessibles qui lèvent les obstacles à la formation et favorisent l'égalité des chances.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== ÉQUIPE ADMINISTRATIVE ===== -->
<section class="equipe-admin" id="admin">
  <div class="container">
    <div class="equipe-section-header reveal">
      <div class="section-label"><span class="num">02</span> Administration</div>
      <h2 class="section-h2">L'équipe<br><em>qui fait tourner l'école.</em></h2>
    </div>

    <div class="membres-grid stagger">
      <?php foreach ($admin_team as $m): ?>
      <div class="membre-card">
        <div class="membre-photo">
          <?= equipe_render_photo($m) ?>
          <div class="membre-overlay">
            <span class="membre-role-tag"><?= htmlspecialchars($m['tag']) ?></span>
          </div>
        </div>
        <div class="membre-info">
          <h3><?= htmlspecialchars($m['name']) ?></h3>
          <span class="membre-role"><?= htmlspecialchars($m['role']) ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== FORMATEURS ===== -->
<section class="equipe-formateurs" id="formateurs">
  <div class="container">
    <div class="equipe-section-header reveal">
      <div class="section-label"><span class="num">03</span> Corps enseignant</div>
      <h2 class="section-h2">Des formateurs<br><em>experts du terrain.</em></h2>
      <p class="reveal">Des professionnels en activité ou issus du monde de l'entreprise. Ils n'enseignent pas la théorie — ils transmettent ce qu'ils vivent au quotidien.</p>
    </div>

    <div class="formateurs-grid stagger">
      <?php foreach ($formateurs_team as $f): ?>
      <div class="formateur-card">
        <div class="formateur-photo">
          <?= equipe_render_photo($f) ?>
        </div>
        <div class="formateur-body">
          <div class="formateur-specialite"><?= htmlspecialchars($f['speciality']) ?></div>
          <h3><?= htmlspecialchars($f['name']) ?></h3>
          <p><?= htmlspecialchars($f['bio']) ?></p>
          <div class="formateur-tags">
            <?php foreach ($f['tags'] as $t): ?>
            <span><?= htmlspecialchars($t) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== CTA ===== -->
<section class="equipe-cta">
  <div class="equipe-cta-inner">
    <div class="section-label section-label--on-dark reveal">
      <span class="num">→</span> Rejoignez l'aventure
    </div>
    <h2 class="reveal">Prêt à intégrer<br><em>l'école ?</em></h2>
    <p class="reveal">Candidatez dès maintenant et rejoignez une promotion motivée, entourée d'une équipe qui vous accompagne jusqu'à l'emploi.</p>
    <div class="equipe-cta-actions reveal">
      <a href="/candidature.php" class="btn btn-yellow">Je candidate <span class="arrow">→</span></a>
      <a href="/recruter.php" class="btn equipe-btn-ghost">Recruter un alternant</a>
    </div>
  </div>
</section>

<?php require 'components/footer.php'; ?>

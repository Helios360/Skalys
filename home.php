<?php
require_once 'data/formations.php';

$page_title  = 'Skalys — Business School / Compiègne / Bac à Bac+5';
$page_desc   = 'École en alternance à Compiègne : CAP, BTS, Bachelor, Mastère. 100% gratuit, rémunéré, certifié Qualiopi. Une école qui forme à l\'IA, pas contre.';
$home_url    = '';
$show_loader = true;
$extra_css   = ['/assets/css/home.css'];

// FAQ visible sur la home — reproduite en JSON-LD pour les rich results
$home_faq = [
  ["Combien coûte une formation à Skalys ?", "Strictement zéro pour l'alternant. Toutes nos formations sont 100% gratuites et prises en charge par l'OPCO de l'entreprise qui vous accueille. Vous êtes même rémunéré pendant toute la durée de votre parcours."],
  ["Quel est le rythme d'alternance ?", "Pour la majorité de nos formations : 3 jours en entreprise et 2 jours à l'école par semaine. Ce rythme permet d'appliquer chaque semaine les connaissances acquises et de monter en compétence rapidement."],
  ["Comment trouver mon entreprise d'accueil ?", "Notre équipe vous accompagne à chaque étape : optimisation de votre CV, préparation aux entretiens, mise en relation directe avec nos 120+ entreprises partenaires locales. Vous n'êtes jamais seul."],
  ["Quels sont les prérequis pour intégrer une formation ?", "La possession d'un bac est nécessaire pour intégrer nos formations. Au-delà des diplômes, c'est surtout votre motivation et votre projet professionnel qui comptent."],
  ["Les diplômes Skalys sont-ils reconnus par l'État ?", "Oui, tous nos diplômes sont enregistrés au RNCP (Répertoire National des Certifications Professionnelles), du Niveau 4 (Bac) au Niveau 7 (Bac+5). Skalys Business School est également certifié Qualiopi."],
];

$jsonld_blocks = [
  [
    '@context'    => 'https://schema.org',
    '@type'       => ['EducationalOrganization', 'LocalBusiness'],
    '@id'         => 'https://skalys-bs.fr/#organization',
    'name'        => 'Skalys Business School',
    'alternateName' => 'Skalys',
    'url'         => 'https://skalys-bs.fr/',
    'logo'        => 'https://skalys-bs.fr/assets/images/skalys-logo.webp',
    'image'       => 'https://skalys-bs.fr/assets/images/ecole.webp',
    'description' => $page_desc,
    'telephone'   => '+33652670444',
    'email'       => 'contact@skalys-bs.fr',
    'address'     => [
      '@type'           => 'PostalAddress',
      'streetAddress'   => '8 avenue Flandres Dunkerque',
      'postalCode'      => '60200',
      'addressLocality' => 'Compiègne',
      'addressRegion'   => 'Hauts-de-France',
      'addressCountry'  => 'FR',
    ],
    'geo' => [
      '@type'     => 'GeoCoordinates',
      'latitude'  => 49.4179,
      'longitude' => 2.8260,
    ],
    'openingHoursSpecification' => [[
      '@type'     => 'OpeningHoursSpecification',
      'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday'],
      'opens'     => '09:00',
      'closes'    => '18:00',
    ]],
    'sameAs' => [],
    'parentOrganization' => [
      '@type' => 'Organization',
      'name'  => 'AJ-Formation SARL',
    ],
  ],
  [
    '@context' => 'https://schema.org',
    '@type'    => 'WebSite',
    '@id'      => 'https://skalys-bs.fr/#website',
    'url'      => 'https://skalys-bs.fr/',
    'name'     => 'Skalys Business School',
    'inLanguage' => 'fr-FR',
    'publisher'  => ['@id' => 'https://skalys-bs.fr/#organization'],
  ],
  [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(fn($qa) => [
      '@type' => 'Question',
      'name'  => $qa[0],
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa[1]],
    ], $home_faq),
  ],
];

require 'components/header.php';
?>

<!-- ===== SIDE INDEX ===== -->
<div class="side-index" id="sideIndex">
  <a href="#hero" class="active"><span>01 — Intro</span></a>
  <a href="#manifesto"><span>02 — Manifesto</span></a>
  <a href="#formations"><span>03 — Formations</span></a>
  <a href="#ia"><span>04 — IA</span></a>
  <a href="#why"><span>05 — École</span></a>
  <a href="#process"><span>06 — Admission</span></a>
  <a href="#testimonials"><span>07 — Voix</span></a>
  <a href="#faq"><span>08 — FAQ</span></a>
</div>

<!-- ===== HERO ===== -->
<section id="hero" class="hero">
  <div class="hero-bg-text">Skalys</div>

  <div class="hero-content">
    <div>
      <div class="hero-meta-line">
        <span>Volume 01 — Édition 2026</span>
        <span>Compiègne, France</span>
        <span>Bac → Bac+5</span>
      </div>
      <h1>
        <span class="word-mask"><span class="word-inner">Apprendre</span></span>
        <span class="word-mask"><span class="word-inner em-italic">autrement,</span></span>
        <br>
        <span class="word-mask"><span class="word-inner">réussir</span></span>
        <span class="word-mask"><span class="word-inner em-italic"><span class="yellow-marker">concrètement.</span></span></span>
      </h1>
      <p class="hero-sub">Une école d'alternance à Compiègne. CAP, BTS, Bachelor, Mastère. Aucun frais, une rémunération, et une obsession : que vous soyez opérationnels avant tout le monde.</p>
      <div class="hero-actions">
        <a href="/candidature.php" class="btn btn-primary">Devenir alternant <span class="arrow">→</span></a>
        <a href="#formations" class="btn">Explorer les programmes</a>
      </div>
    </div>

    <div class="hero-side">
      <div class="caption">Fig. 01 — BTS NDRC, atelier IA &amp; prospection</div>
      <img src="/assets/images/ecole.webp" alt="Étudiants en formation Skalys" width="1376" height="768" fetchpriority="high" decoding="async">
      <div class="yellow-tag">Promo 2026</div>
    </div>
  </div>

  <div class="hero-foot">
    <div class="hero-foot-item">
      <span class="num"><em><?= count($formations) ?></em></span>
      <span class="lab">Formations<br>certifiantes</span>
    </div>
    <div class="hero-foot-item">
      <span class="num">4</span>
      <span class="lab">Niveaux,<br>du Bac au Bac+5</span>
    </div>
    <div class="hero-foot-item">
      <span class="num">100%</span>
      <span class="lab">Frais pris en charge<br>par l'OPCO</span>
    </div>
  </div>
</section>

<!-- ===== MEGA MARQUEE ===== -->
<div class="mega-marquee">
  <div class="mega-marquee-track">
    <span>
      <em>Former</em> <span class="star">✦</span> <em>Connecter</em> <span class="star">✦</span> <em>Transformer</em> <span class="star">✦</span> <em>Réussir</em> <span class="star">✦</span> <em>Former</em> <span class="star">✦</span> <em>Connecter</em> <span class="star">✦</span> <em>Transformer</em> <span class="star">✦</span> <em>Réussir</em> <span class="star">✦</span>
    </span>
  </div>
</div>

<!-- ===== MANIFESTO ===== -->
<section id="manifesto" class="manifesto">
  <div class="container">
    <div class="section-label reveal"><span class="num">02</span> Manifesto</div>
    <p class="manifesto-text reveal">
      <span class="light">Une école</span> qui ne <em>promet</em> rien — qui <span class="yellow">prouve</span> tout. Qui ne forme pas pour <span class="light">un diplôme</span>, mais pour <em>un métier</em>. Qui place la <span class="yellow">pratique</span> avant la théorie, l'<em>entreprise</em> avant le campus, et l'<span class="yellow">alternant</span> avant tout.
    </p>
    <div class="manifesto-credit reveal">
      <span>Skalys Business School — Édition 2026 — Compiègne</span>
    </div>
  </div>
</section>

<!-- ===== FORMATIONS ===== -->
<section id="formations" class="formations">
  <div class="container">
    <div class="formations-header">
      <div class="reveal">
        <div class="section-label"><span class="num">03</span> Formations</div>
        <h2 class="section-h2"><?= count($formations) ?> <em>formations</em>, zéro <em>frais</em>.</h2>
      </div>
      <p class="reveal">Du Bac au Bac+5, toutes nos formations sont enregistrées au RNCP et reconnues par l'État. Toutes, sans exception, sont gratuites pour vous.</p>
    </div>

    <div class="level-tabs">
      <?php $first = true; foreach ($tabs as $key => $tab): ?>
        <?php
          $count = count(array_filter($formations, fn($f) => $f['tab'] === $key));
          $count_label = sprintf('%02d', $count) . ' ' . ($count > 1 ? 'formations' : 'formation');
        ?>
        <button class="level-tab <?= $first ? 'active' : '' ?>" data-level="<?= htmlspecialchars($key) ?>">
          <em><?= htmlspecialchars($tab['label']) ?></em>
          <small><?= htmlspecialchars($tab['niveau_label']) ?> — <?= $count_label ?></small>
        </button>
      <?php $first = false; endforeach; ?>
    </div>

    <?php $first = true; foreach ($tabs as $key => $tab): ?>
      <?php $tab_formations = array_filter($formations, fn($f) => $f['tab'] === $key); ?>
      <div class="level-content <?= $first ? 'active' : '' ?>" data-level="<?= htmlspecialchars($key) ?>">
        <div class="formation-grid">
          <?php foreach ($tab_formations as $f): ?>
            <?php require 'components/formation-card.php'; ?>
          <?php endforeach; ?>
        </div>
      </div>
    <?php $first = false; endforeach; ?>

  </div>
</section>

<!-- ===== STATS ===== -->
<section class="stats">
  <div class="stats-grid">
    <div class="stat-cell reveal">
      <span class="stat-num"><em>15</em>+</span>
      <span class="stat-lab">Formateurs<br>experts en activité</span>
    </div>
    <div class="stat-cell reveal">
      <span class="stat-num">120<span class="pct">+</span></span>
      <span class="stat-lab">Entreprises<br>partenaires locales</span>
    </div>
    <div class="stat-cell reveal">
      <span class="stat-num">100<span class="pct">%</span></span>
      <span class="stat-lab">Suivi pédagogique<br>individuel</span>
    </div>
  </div>
</section>

<!-- ===== AI SECTION ===== -->
<section id="ia" class="ai-section">
  <div class="container">
    <div class="section-label reveal"><span class="num">04</span> Skalys × Intelligence Artificielle</div>
    <h2 class="ai-headline reveal">L'IA n'est pas une <em>option</em>.<br>C'est notre <em>matière première</em>.</h2>
    <p class="ai-lead reveal">Pendant que d'autres écoles débattent encore de l'IA, nos alternants l'utilisent tous les jours. Prospection automatisée, création de contenu, analyse de données, branding visuel : chaque programme intègre des modules IA pensés avec nos entreprises partenaires.</p>

    <div class="ai-grid stagger">
      <div class="ai-card">
        <div class="ai-card-num">/01</div>
        <h4>Vente assistée par IA</h4>
        <p>Prospection avec ChatGPT, scoring de leads, génération d'emails personnalisés à grande échelle, qualification automatique. Nos étudiants vendent comme en 2030.</p>
        <div class="ai-tools">
          <span class="ai-tool">ChatGPT</span>
          <span class="ai-tool">Lemlist AI</span>
          <span class="ai-tool">Apollo</span>
          <span class="ai-tool">Notion AI</span>
        </div>
      </div>
      <div class="ai-card">
        <div class="ai-card-num">/02</div>
        <h4>Marketing &amp; Création visuelle</h4>
        <p>Branding, posts réseaux sociaux, contenus vidéo, campagnes complètes générées et orchestrées avec les outils IA les plus avancés du marché.</p>
        <div class="ai-tools">
          <span class="ai-tool">Midjourney</span>
          <span class="ai-tool">Canva AI</span>
          <span class="ai-tool">Runway</span>
          <span class="ai-tool">ElevenLabs</span>
        </div>
      </div>
      <div class="ai-card">
        <div class="ai-card-num">/03</div>
        <h4>Data &amp; Décision</h4>
        <p>Analyse de cohortes clients, prévisions de ventes, segmentation comportementale. L'IA pour transformer la donnée brute en décision opérationnelle.</p>
        <div class="ai-tools">
          <span class="ai-tool">Claude</span>
          <span class="ai-tool">Excel Copilot</span>
          <span class="ai-tool">Power BI</span>
          <span class="ai-tool">Looker</span>
        </div>
      </div>
      <div class="ai-card">
        <div class="ai-card-num">/04</div>
        <h4>RH augmentée</h4>
        <p>Sourcing intelligent, screening de CV, onboarding automatisé, formation personnalisée. Une fonction RH à la fois plus humaine et plus performante.</p>
        <div class="ai-tools">
          <span class="ai-tool">LinkedIn AI</span>
          <span class="ai-tool">HireVue</span>
          <span class="ai-tool">ChatGPT</span>
          <span class="ai-tool">Pymetrics</span>
        </div>
      </div>
    </div>

    <div class="ai-bottom reveal">
      <p class="ai-bottom-text">Nous ne formons pas des étudiants à <em>résister</em> à l'IA. Nous les formons à la <em>maîtriser</em> — pour qu'ils deviennent les profils que les entreprises s'arrachent.</p>
      <a href="#formations" class="btn btn-yellow">Voir les programmes <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- ===== WHY US ===== -->
<section id="why" class="why">
  <div class="container">
    <div class="why-header">
      <div class="reveal">
        <div class="section-label"><span class="num">05</span> L'école</div>
        <h2 class="section-h2">Une école <em>concrète</em>,<br>une promesse <em>tenue</em>.</h2>
      </div>
      <p class="reveal">Nous ne formons pas pour un diplôme — nous formons pour un métier. Chaque programme est construit avec des entreprises partenaires pour coller aux compétences réellement attendues sur le marché.</p>
    </div>

    <div class="why-grid">
      <div class="why-item reveal">
        <span class="why-num">01</span>
        <h4>Pédagogie ancrée<br>dans le réel</h4>
        <p>3 jours en entreprise, 2 jours en cours. Vous appliquez chaque semaine ce que vous apprenez, encadrés par des formateurs qui sont eux-mêmes des professionnels en activité.</p>
      </div>
      <div class="why-item reveal">
        <span class="why-num">02</span>
        <h4>Accompagnement<br>de A à Z</h4>
        <p>Coaching CV, préparation aux entretiens, mise en relation avec nos 120+ entreprises partenaires. Vous n'êtes jamais seul dans votre recherche d'alternance.</p>
      </div>
      <div class="why-item reveal">
        <span class="why-num">03</span>
        <h4>Formation 100%<br>financée</h4>
        <p>Aucun frais de scolarité. Votre formation est intégralement prise en charge par l'OPCO de l'entreprise qui vous accueille. Et vous êtes rémunéré tout au long du parcours.</p>
      </div>
      <div class="why-item reveal">
        <span class="why-num">04</span>
        <h4>Diplômes reconnus<br>par l'État</h4>
        <p>Tous nos diplômes sont enregistrés au RNCP (Niveaux 4 à 7). Skalys est certifié Qualiopi pour les actions de formation et de formation par apprentissage.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== PROCESS ===== -->
<section id="process" class="process">
  <div class="container">
    <div class="process-header reveal">
      <div class="section-label"><span class="num">06</span> Admission</div>
      <h2 class="section-h2">Cinq étapes vers <em>votre alternance</em>.</h2>
    </div>

    <div class="process-steps">
      <div class="step reveal">
        <div class="step-num">01</div>
        <h4>Candidature en ligne</h4>
        <p>Vous remplissez notre formulaire en 5 minutes — c'est tout.</p>
        <a href="/candidature.php" class="step-cta">Je candidate <span class="arrow">→</span></a>
      </div>
      <div class="step reveal">
        <div class="step-num">02</div>
        <h4>Entretien individuel</h4>
        <p>Un échange de 30 minutes pour valider votre projet et votre motivation.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">03</div>
        <h4>Mise en relation</h4>
        <p>Nous vous présentons aux entreprises partenaires correspondant à votre profil.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">04</div>
        <h4>Signature du contrat</h4>
        <p>Notre équipe gère pour vous toutes les démarches administratives et OPCO.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">05</div>
        <h4>C'est parti.</h4>
        <p>Vous démarrez votre alternance avec un suivi pédagogique personnalisé.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section id="testimonials" class="testimonials">
  <div class="container">
    <div class="testimonials-header reveal">
      <div class="section-label"><span class="num">07</span> Voix</div>
      <h2 class="section-h2">Les <em>histoires</em> qui<br>nous font avancer.</h2>
    </div>

    <div class="testimonial-grid stagger">
      <div class="testimonial">
        <div class="testimonial-num">N° 01</div>
        <span class="quote-mark">"</span>
        <p>Une école humaine, à l'écoute, et qui s'investit vraiment pour ses alternants. L'équipe pédagogique est top, les formateurs maîtrisent leurs sujets et les retours en entreprise sont concrets.</p>
        <div class="testimonial-author">
          <div class="author-img">★</div>
          <div>
            <strong>Avis Google ★★★★★</strong>
            <small>Étudiant — Skalys Business School</small>
          </div>
        </div>
      </div>
      <div class="testimonial">
        <div class="testimonial-num">N° 02</div>
        <span class="quote-mark">"</span>
        <p>Excellent accompagnement dans la recherche d'entreprise, mise en relation rapide avec des partenaires locaux. Skalys ne vous laisse jamais seul, et ça change tout dans le parcours.</p>
        <div class="testimonial-author">
          <div class="author-img">★</div>
          <div>
            <strong>Avis Google ★★★★★</strong>
            <small>Alternant — BTS</small>
          </div>
        </div>
      </div>
      <div class="testimonial">
        <div class="testimonial-num">N° 03</div>
        <span class="quote-mark">"</span>
        <p>Cadre de formation moderne et bienveillant. On y apprend des choses utiles, directement applicables. Je recommande vivement Skalys pour qui veut une alternance vraiment professionnalisante.</p>
        <div class="testimonial-author">
          <div class="author-img">★</div>
          <div>
            <strong>Avis Google ★★★★★</strong>
            <small>Apprenant — Compiègne</small>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonials-cta reveal">
      <a href="https://www.google.com/search?q=skalys" target="_blank" rel="noopener" class="btn">Voir tous les avis Google <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- ===== PARTNERS ===== -->
<section class="partners-section">
  <div class="partners-title">Plus de 120 entreprises partenaires</div>
  <div class="partners-marquee">
    <div class="partners-track">
      <span>
        <span class="partner-logo">Norauto</span>
        <span class="dot">●</span>
        <span class="partner-logo">BabyChou</span>
        <span class="dot">●</span>
        <span class="partner-logo">Concentrix</span>
        <span class="dot">●</span>
        <span class="partner-logo">Libimmo</span>
        <span class="dot">●</span>
        <span class="partner-logo">Douceur de France</span>
        <span class="dot">●</span>
        <span class="partner-logo">Optic 2000</span>
        <span class="dot">●</span>
        <span class="partner-logo">Crit Intérim</span>
        <span class="dot">●</span>
        <span class="partner-logo">Norauto</span>
        <span class="dot">●</span>
        <span class="partner-logo">BabyChou</span>
        <span class="dot">●</span>
        <span class="partner-logo">Concentrix</span>
        <span class="dot">●</span>
        <span class="partner-logo">Libimmo</span>
        <span class="dot">●</span>
        <span class="partner-logo">Douceur de France</span>
        <span class="dot">●</span>
        <span class="partner-logo">Optic 2000</span>
        <span class="dot">●</span>
        <span class="partner-logo">Crit Intérim</span>
        <span class="dot">●</span>
      </span>
    </div>
  </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section id="entreprises" class="cta-banner">
  <div class="cta-content">
    <div class="section-label reveal"><span class="num">→</span> Aux entreprises</div>
    <h2 class="reveal">Recrutez vos<br><em>talents de demain.</em></h2>
    <p class="reveal">Présélection des candidats, mise en relation, suivi pédagogique, gestion administrative et OPCO : nous prenons tout en charge. Vous, vous accueillez un alternant motivé et formé à vos besoins.</p>
    <a href="#contact" class="btn reveal">Accueillir un alternant <span class="arrow">→</span></a>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section id="faq" class="faq">
  <div class="container">
    <div class="faq-header reveal">
      <div class="section-label"><span class="num">08</span> FAQ</div>
      <h2 class="section-h2">Tout ce que vous voulez<br><em>savoir avant</em> de vous lancer.</h2>
    </div>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question">Combien coûte une formation à Skalys ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Strictement zéro pour l'alternant. Toutes nos formations sont 100% gratuites et prises en charge par l'OPCO de l'entreprise qui vous accueille. Vous êtes même rémunéré pendant toute la durée de votre parcours.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Quel est le rythme d'alternance ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Pour la majorité de nos formations : 3 jours en entreprise et 2 jours à l'école par semaine. Ce rythme permet d'appliquer chaque semaine les connaissances acquises et de monter en compétence rapidement.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Comment trouver mon entreprise d'accueil ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Notre équipe vous accompagne à chaque étape : optimisation de votre CV, préparation aux entretiens, mise en relation directe avec nos 120+ entreprises partenaires locales. Vous n'êtes jamais seul.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Quels sont les prérequis pour intégrer une formation ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>La possession d'un bac est nécessaire pour intégrer nos formations. Au-delà des diplômes, c'est surtout votre motivation et votre projet professionnel qui comptent.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Les diplômes Skalys sont-ils reconnus par l'État ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Oui, tous nos diplômes sont enregistrés au RNCP (Répertoire National des Certifications Professionnelles), du Niveau 4 (Bac) au Niveau 7 (Bac+5). Skalys Business School est également certifié Qualiopi.</p></div>
      </div>
    </div>
  </div>
</section>

<?php require 'components/footer.php'; ?>

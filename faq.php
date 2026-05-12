<?php
require_once 'data/formations.php';

$page_title       = 'FAQ — Skalys Business School';
$page_desc        = 'Toutes les réponses aux questions fréquentes Skalys : admission, alternance, financement, diplômes, calendrier, contact et accompagnement étudiant.';
$home_url         = '/';
$extra_css        = ['/assets/css/faq.css'];
$page_js          = '/assets/js/faq.js';
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';

// Liste de toutes les Q/R affichées sur la page (synchronisée à la main avec le HTML ci-dessous)
$faq_all_items = [
  ["Quels sont les prérequis pour intégrer une formation ?", "La possession d'un bac est nécessaire pour intégrer nos formations. Au-delà des diplômes, c'est surtout votre motivation et votre projet professionnel qui comptent."],
  ["Comment se déroule l'admission ?", "Vous candidatez en ligne, puis on échange en entretien individuel pour valider votre projet. Ensuite, on vous accompagne sur la mise en relation entreprise et la signature du contrat."],
  ["Dois-je déjà avoir une entreprise pour candidater ?", "Non. Vous pouvez candidater sans entreprise. Notre équipe vous accompagne sur le CV, la préparation aux entretiens et la mise en relation avec nos partenaires."],
  ["Quel est le rythme d'alternance ?", "Pour la majorité de nos formations : 3 jours en entreprise et 2 jours à l'école chaque semaine. Le rythme exact peut s'adapter selon le calendrier du diplôme."],
  ["Comment m'aidez-vous à trouver une entreprise ?", "On travaille votre positionnement, votre CV, vos messages de candidature, et on vous met en relation avec des entreprises locales. L'objectif : vous faire signer un contrat rapidement."],
  ["Y a-t-il un suivi pendant l'alternance ?", "Oui. Suivi pédagogique individualisé, échanges réguliers avec l'entreprise, et intervention rapide en cas de blocage. Vous n'êtes jamais seul."],
  ["Combien coûte une formation à Skalys ?", "Pour l'alternant : 0 €. La formation est prise en charge par l'OPCO de l'entreprise. Vous êtes aussi rémunéré pendant toute la durée du contrat, selon la grille réglementaire."],
  ["Qui paie la formation ?", "En alternance, ce sont les dispositifs de financement (via l'OPCO) qui prennent en charge les coûts pédagogiques. Notre équipe gère les démarches administratives avec l'entreprise."],
  ["Est-ce que je suis rémunéré pendant la formation ?", "Oui. En contrat d'apprentissage (ou de professionnalisation selon les cas), vous êtes salarié et vous percevez une rémunération mensuelle, calculée en pourcentage du SMIC selon votre âge et votre niveau."],
  ["Les diplômes Skalys sont-ils reconnus par l'État ?", "Oui, tous nos diplômes sont enregistrés au RNCP (Répertoire National des Certifications Professionnelles), du Niveau 4 (Bac) au Niveau 7 (Bac+5). Skalys Business School est également certifié Qualiopi."],
  ["Puis-je poursuivre mes études après ?", "Oui. Après un CAP, vous pouvez poursuivre vers un Bac pro ou un autre parcours. Après un BTS / Titre Pro, vous pouvez viser un Bachelor ou un Mastère selon votre projet — Skalys propose des cursus jusqu'au Bac+5."],
  ["Où se situe l'école ?", "Skalys Business School est basée à Compiègne (Oise). L'adresse figure en bas de page dans la section Contact."],
  ["Comment vous contacter ?", "Vous pouvez nous écrire à contact@skalys-bs.fr ou nous appeler au 06 52 67 04 44."],
];

$jsonld_blocks = [
  [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(fn($qa) => [
      '@type' => 'Question',
      'name'  => $qa[0],
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa[1]],
    ], $faq_all_items),
  ],
  [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => 'https://skalys-bs.fr/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'FAQ',     'item' => 'https://skalys-bs.fr/faq.php'],
    ],
  ],
];

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="faq-hero" id="top">
  <div class="faq-hero-bg-text">FAQ</div>
  <div class="faq-hero-inner">
    <div class="section-label section-label--on-dark">
      <span class="num">→</span> Questions fréquentes
    </div>

    <h1>Vos questions,<br><em>nos réponses.</em></h1>
    <p class="faq-hero-sub">Admission, alternance, financement, diplômes, rythme… Retrouvez ici les réponses les plus utiles. Si un point manque, écrivez-nous : on répond vite.</p>

    <div class="faq-hero-actions">
      <a href="#faq" class="btn btn-yellow">Voir la FAQ <span class="arrow">↓</span></a>
      <a href="mailto:contact@skalys-bs.fr" class="btn faq-btn-ghost">Nous écrire</a>
    </div>

    <div class="faq-search reveal">
      <label class="faq-search-label" for="faqSearch">Rechercher dans la FAQ</label>
      <input id="faqSearch" class="faq-search-input" type="search" placeholder="Ex : alternance, OPCO, prérequis, RNCP…" autocomplete="off">
      <div class="faq-search-meta" id="faqSearchMeta">Tapez un mot-clé pour filtrer.</div>
    </div>

    <div class="faq-hero-tags reveal">
      <a class="faq-tag" href="#admission">Admission</a>
      <a class="faq-tag" href="#alternance">Alternance</a>
      <a class="faq-tag" href="#financement">Financement</a>
      <a class="faq-tag" href="#diplomes">Diplômes</a>
      <a class="faq-tag" href="#pratique">Infos pratiques</a>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="faq-page" id="faq">
  <div class="container">

    <div class="faq-page-header reveal">
      <div class="section-label"><span class="num">01</span> FAQ</div>
      <h2 class="section-h2">Tout ce qu'il faut<br><em>avant</em> de démarrer.</h2>
    </div>

    <div class="faq-empty" id="faqEmpty" aria-live="polite" hidden>
      <div class="faq-empty-title">Aucun résultat</div>
      <p>Essayez avec un autre mot-clé (ex : « alternance », « financement », « RNCP »).</p>
    </div>

    <!-- ===== Admission ===== -->
    <div class="faq-category" id="admission">
      <div class="faq-category-head reveal">
        <div class="faq-category-label">Admission</div>
        <h3 class="faq-category-title">Rejoindre Skalys</h3>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">Quels sont les prérequis pour intégrer une formation ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>La possession d'un bac est nécessaire pour intégrer nos formations. Au-delà des diplômes, c'est surtout votre motivation et votre projet professionnel qui comptent.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Comment se déroule l'admission ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Vous candidatez en ligne, puis on échange en entretien individuel pour valider votre projet. Ensuite, on vous accompagne sur la mise en relation entreprise et la signature du contrat.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Dois-je déjà avoir une entreprise pour candidater ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Non. Vous pouvez candidater sans entreprise. Notre équipe vous accompagne sur le CV, la préparation aux entretiens et la mise en relation avec nos partenaires.</p></div>
        </div>
      </div>
    </div>

    <!-- ===== Alternance ===== -->
    <div class="faq-category" id="alternance">
      <div class="faq-category-head reveal">
        <div class="faq-category-label">Alternance</div>
        <h3 class="faq-category-title">Rythme, entreprise, suivi</h3>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">Quel est le rythme d'alternance ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Pour la majorité de nos formations : <strong>3 jours en entreprise</strong> et <strong>2 jours à l'école</strong> chaque semaine. Le rythme exact peut s'adapter selon le calendrier du diplôme.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Comment m'aidez-vous à trouver une entreprise ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>On travaille votre positionnement, votre CV, vos messages de candidature, et on vous met en relation avec des entreprises locales. L'objectif : vous faire signer un contrat rapidement.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Y a-t-il un suivi pendant l'alternance ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Oui. Suivi pédagogique individualisé, échanges réguliers avec l'entreprise, et intervention rapide en cas de blocage. Vous n'êtes jamais seul.</p></div>
        </div>
      </div>
    </div>

    <!-- ===== Financement ===== -->
    <div class="faq-category" id="financement">
      <div class="faq-category-head reveal">
        <div class="faq-category-label">Financement</div>
        <h3 class="faq-category-title">Coût, prise en charge, rémunération</h3>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">Combien coûte une formation à Skalys ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Pour l'alternant : <strong>0€</strong>. La formation est prise en charge par l'OPCO de l'entreprise. Vous êtes aussi <strong>rémunéré</strong> pendant toute la durée du contrat, selon la grille réglementaire.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Qui paie la formation ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>En alternance, ce sont les dispositifs de financement (via l'OPCO) qui prennent en charge les coûts pédagogiques. Notre équipe gère les démarches administratives avec l'entreprise.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Est-ce que je suis rémunéré pendant la formation ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Oui. En contrat d'apprentissage (ou de professionnalisation selon les cas), vous êtes salarié et vous percevez une rémunération mensuelle, calculée en pourcentage du SMIC selon votre âge et votre niveau.</p></div>
        </div>
      </div>
    </div>

    <!-- ===== Diplômes ===== -->
    <div class="faq-category" id="diplomes">
      <div class="faq-category-head reveal">
        <div class="faq-category-label">Diplômes</div>
        <h3 class="faq-category-title">Reconnaissance & certification</h3>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">Les diplômes Skalys sont-ils reconnus par l'État ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Oui, tous nos diplômes sont enregistrés au <strong>RNCP</strong> (Répertoire National des Certifications Professionnelles), du Niveau 4 (Bac) au Niveau 7 (Bac+5). Skalys Business School est également certifié <strong>Qualiopi</strong>.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Puis-je poursuivre mes études après ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Oui. Après un CAP, vous pouvez poursuivre vers un Bac pro ou un autre parcours. Après un BTS / Titre Pro, vous pouvez viser un Bachelor ou un Mastère selon votre projet — Skalys propose des cursus jusqu'au Bac+5.</p></div>
        </div>
      </div>
    </div>

    <!-- ===== Pratique ===== -->
    <div class="faq-category" id="pratique">
      <div class="faq-category-head reveal">
        <div class="faq-category-label">Infos pratiques</div>
        <h3 class="faq-category-title">Lieu, horaires, contact</h3>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">Où se situe l'école ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Skalys Business School est basée à <strong>Compiègne</strong> (Oise). L'adresse figure en bas de page dans la section Contact.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Comment vous contacter ? <span class="faq-toggle">+</span></button>
          <div class="faq-answer"><p>Vous pouvez nous écrire à <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a> ou nous appeler au <a href="tel:0652670444">06 52 67 04 44</a>.</p></div>
        </div>
      </div>
    </div>

    <div class="faq-bottom-cta reveal">
      <div class="faq-bottom-cta-inner">
        <div class="faq-bottom-label"><span class="num">→</span> Toujours une question ?</div>
        <p>Si vous ne trouvez pas votre réponse ici, écrivez-nous : on vous répond simplement, sans jargon.</p>
        <div class="faq-bottom-actions">
          <a href="mailto:contact@skalys-bs.fr" class="btn btn-primary">Nous écrire <span class="arrow">→</span></a>
          <a href="/candidature.php" class="btn">Candidater</a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require 'components/footer.php'; ?>

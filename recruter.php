<?php
require_once 'data/formations.php';

$page_title       = 'Recruter un alternant — Skalys Business School';
$page_desc        = 'Accueillez un alternant Skalys à Compiègne : 0€ de frais, aides à l\'embauche, suivi complet. Commerce, gestion, RH, management, petite enfance.';
$home_url         = '/';
$extra_css        = ['/assets/css/recruter.css'];
$sticky_cta_url   = '#contact';
$sticky_cta_label = 'Recruter un alternant';

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="recruter-hero">
  <div class="recruter-hero-inner">

    <div>
      <div class="section-label section-label--on-dark">
        <span class="num">→</span> Entreprises
      </div>
      <h1>Recrutez votre prochain<br><em>talent en alternance.</em></h1>
      <p class="recruter-hero-sub">Des profils formés à l'IA, orientés terrain, opérationnels dès le premier jour. Zéro frais de formation. Accompagnement complet de A à Z.</p>
      <div class="recruter-hero-actions">
        <a href="#contact" class="btn btn-yellow">Nous contacter <span class="arrow">→</span></a>
        <a href="#profils" class="btn recruter-btn-ghost">Voir les profils</a>
      </div>
    </div>

    <div class="recruter-hero-aside">
      <div class="recruter-quick">
        <div>
          <div class="recruter-quick-label">Nous contacter</div>
          <div class="recruter-quick-item">
            <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a>
            <small>Réponse sous 48h</small>
          </div>
          <div class="recruter-quick-item quick-item--spaced">
            <a href="tel:0670934298">06 70 93 42 98</a>
            <small>Lun – Ven, 9h – 18h</small>
          </div>
        </div>
        <div class="recruter-quick-cert">
          <div class="recruter-quick-label">Certifié</div>
          <div class="recruter-quick-item">
            <span class="recruter-quick-cert-name">Qualiopi</span>
            <small>Formation &amp; Apprentissage</small>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="recruter-hero-foot">
    <div class="recruter-hero-foot-item">
      <span class="num"><em>120</em>+</span>
      <span class="lab">Entreprises<br>partenaires</span>
    </div>
    <div class="recruter-hero-foot-item">
      <span class="num">0€</span>
      <span class="lab">Frais de formation<br>pris en charge OPCO</span>
    </div>
    <div class="recruter-hero-foot-item">
      <span class="num">48h</span>
      <span class="lab">Délai de réponse<br>maximum</span>
    </div>
  </div>
</section>

<!-- ===== MARQUEE ===== -->
<div class="mega-marquee">
  <div class="mega-marquee-track">
    <span>
      <em>Recruter</em> <span class="star">✦</span> <em>Former</em> <span class="star">✦</span> <em>Accueillir</em> <span class="star">✦</span> <em>Fidéliser</em> <span class="star">✦</span> <em>Recruter</em> <span class="star">✦</span> <em>Former</em> <span class="star">✦</span> <em>Accueillir</em> <span class="star">✦</span> <em>Fidéliser</em> <span class="star">✦</span>
    </span>
  </div>
</div>

<!-- ===== AVANTAGES ===== -->
<section class="recruter-avantages" id="avantages">
  <div class="container">
    <div class="recruter-section-header">
      <div class="reveal">
        <div class="section-label"><span class="num">01</span> Pourquoi Skalys</div>
        <h2 class="section-h2">Accueillir un alternant,<br><em>sans contrainte.</em></h2>
      </div>
      <p class="reveal">Formation intégralement financée, aides à l'embauche, accompagnement administratif complet : nous gérons tout. Vous, vous accueillez un profil motivé et formé à vos besoins.</p>
    </div>

    <div class="avantages-grid stagger">
      <div class="avantage-card">
        <div class="avantage-num">/01</div>
        <h4>Aides à l'embauche de l'État</h4>
        <p>Jusqu'à plusieurs milliers d'euros selon la taille de votre entreprise et le niveau de la formation. Valables la première année du contrat.</p>
        <span class="avantage-tag">Aide variable</span>
      </div>
      <div class="avantage-card">
        <div class="avantage-num">/02</div>
        <h4>Formation 100% financée</h4>
        <p>Les frais pédagogiques sont intégralement pris en charge par l'OPCO de votre branche. Zéro reste à charge pour l'entreprise.</p>
        <span class="avantage-tag">0€ de frais</span>
      </div>
      <div class="avantage-card">
        <div class="avantage-num">/03</div>
        <h4>Exonérations de cotisations</h4>
        <p>Pour les entreprises de moins de 250 salariés, exonération quasi-totale des cotisations patronales et salariales liées au contrat d'apprentissage.</p>
        <span class="avantage-tag">-250 salariés</span>
      </div>
      <div class="avantage-card">
        <div class="avantage-num">/04</div>
        <h4>Opérationnel dès J+1</h4>
        <p>80% de pratique en entreprise. Nos alternants sont formés aux outils, aux méthodes et à l'IA pour être immédiatement utiles à votre structure.</p>
        <span class="avantage-tag">80% pratique</span>
      </div>
    </div>
  </div>
</section>

<!-- ===== PROFILS ===== -->
<section class="recruter-profils" id="profils">
  <div class="container">
    <div class="recruter-section-header">
      <div class="reveal">
        <div class="section-label"><span class="num">02</span> Profils disponibles</div>
        <h2 class="section-h2"><?= count($formations) ?> profils,<br><em>un seul appel.</em></h2>
      </div>
      <p class="reveal">Du Bac au Bac+5, nous formons des alternants aux métiers du commerce, de la gestion, des RH et de la petite enfance. Tous formés à l'IA. Tous prêts à contribuer.</p>
    </div>

    <div class="profils-grid stagger">

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">CAP AEPE</span>
          <span class="profil-niveau">Niveau 4 — 10 mois</span>
        </div>
        <h3>Accompagnant Éducatif<br>Petite Enfance</h3>
        <p>Prise en charge de jeunes enfants (0–6 ans). Activités éducatives, sécurité, hygiène, relation avec les familles. Idéal pour crèches, haltes-garderies et maternelles.</p>
        <div class="profil-tags">
          <span>Crèche</span>
          <span>Maternelle</span>
          <span>Domicile</span>
          <span>Halte-garderie</span>
        </div>
        <a href="/formation/cap-aepe" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">BTS NDRC</span>
          <span class="profil-niveau">Niveau 5 — 2 ans</span>
        </div>
        <h3>Négociation et Digitalisation<br>de la Relation Client</h3>
        <p>Prospection, négociation, e-commerce, IA et community management. L'expert de la relation client 360°, capable de vendre, fidéliser et piloter votre présence digitale.</p>
        <div class="profil-tags">
          <span>Commerce</span>
          <span>CRM</span>
          <span>Digital</span>
          <span>IA</span>
        </div>
        <a href="/formation/bts-ndrc" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">BTS GPME</span>
          <span class="profil-niveau">Niveau 5 — 2 ans</span>
        </div>
        <h3>Gestion de la Petite<br>et Moyenne Entreprise</h3>
        <p>Administration, comptabilité, RH, relation clients et fournisseurs. Le bras droit opérationnel du dirigeant — polyvalent, rigoureux, formé à vos outils de gestion.</p>
        <div class="profil-tags">
          <span>Gestion</span>
          <span>Admin</span>
          <span>RH</span>
          <span>PME</span>
        </div>
        <a href="/formation/bts-gpme" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">TP NTC</span>
          <span class="profil-niveau">Niveau 5 — 2 ans</span>
        </div>
        <h3>Négociateur<br>Technico-Commercial</h3>
        <p>Prospection omnicanale, argumentaire technique, négociation BtoB et BtoC. Le commercial qui comprend votre produit et sait le vendre — avec les outils IA du terrain.</p>
        <div class="profil-tags">
          <span>BtoB</span>
          <span>BtoC</span>
          <span>Technique</span>
          <span>Prospection</span>
        </div>
        <a href="/formation/tp-ntc" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">BTS MCO</span>
          <span class="profil-niveau">Niveau 5 — 2 ans</span>
        </div>
        <h3>Management Commercial<br>Opérationnel</h3>
        <p>Animation point de vente, dynamisation de l'offre, pilotage des KPI, management d'équipe junior. Le profil terrain pour faire tourner un magasin, une enseigne ou une unité commerciale.</p>
        <div class="profil-tags">
          <span>Retail</span>
          <span>Management</span>
          <span>Animation</span>
          <span>KPI</span>
        </div>
        <a href="/formation/bts-mco" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">Bachelor RDC</span>
          <span class="profil-niveau">Niveau 6 — 1 an</span>
        </div>
        <h3>Responsable<br>Développement Commercial</h3>
        <p>Stratégie d'acquisition, comptes clés, pilotage par la data. Un profil senior commercial, capable de structurer votre développement et de monter en autonomie sur les comptes stratégiques.</p>
        <div class="profil-tags">
          <span>Business Dev</span>
          <span>Grands comptes</span>
          <span>Stratégie</span>
          <span>Data</span>
        </div>
        <a href="/formation/bachelor-rdc" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">Bachelor RH</span>
          <span class="profil-niveau">Niveau 6 — 1 an</span>
        </div>
        <h3>Ressources<br>Humaines</h3>
        <p>Recrutement, GPEC, paie, formation, droit social. Un appui RH polyvalent et autonome, formé aux outils IA de sourcing et d'onboarding pour augmenter la performance de la fonction.</p>
        <div class="profil-tags">
          <span>RH</span>
          <span>Recrutement</span>
          <span>Formation</span>
          <span>Paie</span>
        </div>
        <a href="/formation/bachelor-rh" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">Bachelor MGE</span>
          <span class="profil-niveau">Niveau 6 — 1 an</span>
        </div>
        <h3>Manager en<br>Gestion d'Entreprise</h3>
        <p>Pilotage financier, contrôle de gestion, organisation interne. Le bras droit du dirigeant, capable de produire des tableaux de bord et de piloter la performance opérationnelle.</p>
        <div class="profil-tags">
          <span>Gestion</span>
          <span>Finance</span>
          <span>Contrôle</span>
          <span>Stratégie</span>
        </div>
        <a href="/formation/bachelor-mge" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">Mastère MCBD</span>
          <span class="profil-niveau">Niveau 7 — 2 ans</span>
        </div>
        <h3>Manager Commercial &amp;<br>Business Development</h3>
        <p>Stratégie commerciale globale, ouverture de nouveaux marchés, management commercial. Un cadre commercial expérimenté en formation pour piloter la croissance de votre activité.</p>
        <div class="profil-tags">
          <span>Direction commerciale</span>
          <span>BizDev</span>
          <span>Stratégie</span>
          <span>Management</span>
        </div>
        <a href="/formation/mastere-mcbd" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">Mastère MSRH</span>
          <span class="profil-niveau">Niveau 7 — 2 ans</span>
        </div>
        <h3>Manager Stratégie<br>RH</h3>
        <p>Politique RH, transformation, marque employeur, dialogue social. Un profil RH stratégique, capable de structurer la fonction RH et d'accompagner les transformations de votre organisation.</p>
        <div class="profil-tags">
          <span>Stratégie RH</span>
          <span>Transformation</span>
          <span>Marque employeur</span>
          <span>SIRH</span>
        </div>
        <a href="/formation/mastere-msrh" class="profil-link">Voir la formation <span>→</span></a>
      </div>

      <div class="profil-card">
        <div class="profil-header">
          <span class="profil-badge">Mastère ME</span>
          <span class="profil-niveau">Niveau 7 — 2 ans</span>
        </div>
        <h3>Manager<br>d'Entreprise</h3>
        <p>Direction générale, stratégie, gouvernance, transformation. Un futur manager généraliste formé à piloter une organisation dans toutes ses dimensions — finance, RH, commerce, innovation.</p>
        <div class="profil-tags">
          <span>Direction</span>
          <span>Gouvernance</span>
          <span>Stratégie</span>
          <span>Transformation</span>
        </div>
        <a href="/formation/mastere-me" class="profil-link">Voir la formation <span>→</span></a>
      </div>

    </div>
  </div>
</section>

<!-- ===== PROCESSUS ===== -->
<section class="recruter-process" id="process">
  <div class="container">
    <div class="recruter-process-header reveal">
      <div class="section-label"><span class="num">03</span> Comment recruter</div>
      <h2 class="section-h2">Quatre étapes,<br><em>zéro paperasse.</em></h2>
    </div>
    <div class="process-steps process-4">
      <div class="step reveal">
        <div class="step-num">01</div>
        <h4>Déposez votre offre</h4>
        <p>Envoyez-nous vos besoins par email ou téléphone. Pas de formulaire complexe — juste un échange humain.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">02</div>
        <h4>Recevez des profils</h4>
        <p>Sous 72h, nous vous proposons des candidats présélectionnés correspondant à votre secteur et vos attentes.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">03</div>
        <h4>Rencontrez les candidats</h4>
        <p>Entretien classique, job dating ou visio — à vous de choisir. Nous facilitons la mise en relation.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">04</div>
        <h4>On gère le reste</h4>
        <p>Contrat, OPCO, aides à l'embauche, suivi pédagogique : notre équipe prend en charge toute la partie administrative.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== TÉMOIGNAGE ===== -->
<section class="recruter-testimonial">
  <div class="container">
    <div class="section-label section-label--on-dark reveal">
      <span class="num">→</span> Ils nous font confiance
    </div>
    <div class="testimonial-big reveal">
      <span class="quote-mark-big">"</span>
      <p class="testimonial-big-text">Quatre alternants Skalys recrutés cette année. La qualité du suivi pédagogique et la motivation des étudiants font vraiment la différence. On les sent préparés, impliqués — et immédiatement utiles.</p>
      <div class="testimonial-big-author">
        <div class="author-img-big">N</div>
        <div>
          <strong>Norauto Compiègne</strong>
          <small>Entreprise partenaire — 4 alternants accueillis</small>
        </div>
        <div class="stars">★★★★★</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECTEURS ===== -->
<section class="recruter-secteurs">
  <div class="container">
    <div class="section-label reveal"><span class="num">04</span> Secteurs qui recrutent</div>
    <h2 class="section-h2 reveal">Votre secteur<br><em>est le bienvenu.</em></h2>
    <div class="secteurs-grid reveal">
      <span class="secteur-pill">Commerce &amp; Distribution</span>
      <span class="secteur-pill">Petite Enfance</span>
      <span class="secteur-pill">PME &amp; Services</span>
      <span class="secteur-pill">Immobilier</span>
      <span class="secteur-pill">Assurance &amp; Banque</span>
      <span class="secteur-pill">Marketing Digital</span>
      <span class="secteur-pill">Ressources Humaines</span>
      <span class="secteur-pill">Automobile</span>
      <span class="secteur-pill">Optique &amp; Santé</span>
      <span class="secteur-pill">Intérim &amp; Recrutement</span>
      <span class="secteur-pill">E-commerce</span>
      <span class="secteur-pill">Startups &amp; TPE</span>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="faq">
  <div class="container">
    <div class="faq-header reveal">
      <div class="section-label"><span class="num">05</span> FAQ Entreprise</div>
      <h2 class="section-h2">Vos questions,<br><em>nos réponses.</em></h2>
    </div>
    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question">Combien coûte l'accueil d'un alternant Skalys ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Rien, ou presque. Les frais de formation sont intégralement pris en charge par l'OPCO de votre branche professionnelle. Vous rémunérez l'alternant selon la grille réglementaire (en pourcentage du SMIC, selon son âge et son niveau de formation) — et vous bénéficiez d'aides à l'embauche et d'exonérations de cotisations sociales pour compenser.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Quels profils puis-je recruter ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Skalys forme des alternants sur l'ensemble du parcours Bac → Bac+5 : <strong>CAP AEPE</strong> (petite enfance), <strong>BTS NDRC</strong> (relation client & digital), <strong>BTS GPME</strong> (gestion de PME), <strong>BTS MCO</strong> (management commercial opérationnel), <strong>Titre Pro NTC</strong> (négociation technico-commerciale), <strong>Bachelor RDC</strong> (responsable développement commercial), <strong>Bachelor RH</strong>, <strong>Bachelor MGE</strong> (gestion d'entreprise), <strong>Mastère MCBD</strong> (manager commercial & business development), <strong>Mastère MSRH</strong> (manager stratégie RH) et <strong>Mastère ME</strong> (manager d'entreprise). Contactez-nous pour identifier le profil le plus adapté à vos besoins.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Y a-t-il des aides à l'embauche ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Oui. L'aide à l'embauche d'un apprenti est accordée pour la première année du contrat, selon la taille de votre entreprise et le niveau du diplôme préparé. Les entreprises de moins de 250 salariés bénéficient en plus d'une exonération quasi-totale des cotisations sociales. Notre équipe vous aide à identifier et activer toutes les aides auxquelles vous avez droit.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Quel est le rythme de présence de l'alternant en entreprise ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Pour la majorité de nos formations, le rythme est de 3 jours en entreprise et 2 jours à l'école, chaque semaine. Ce rythme soutenu est ce qui rend nos alternants si rapidement opérationnels.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Comment se passe le suivi de l'alternant ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Notre équipe pédagogique assure un suivi individuel tout au long de la formation : livrets de suivi, points réguliers avec le maître d'apprentissage. En cas de difficulté, nous intervenons rapidement. Vous n'êtes jamais seul dans l'accompagnement de votre alternant.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Puis-je embaucher définitivement mon alternant à l'issue de la formation ? <span class="faq-toggle">+</span></button>
        <div class="faq-answer"><p>Absolument — c'est même l'objectif pour beaucoup de nos entreprises partenaires. Après deux ans de collaboration, votre alternant connaît vos process, votre culture, vos clients. Plusieurs d'entre eux ont été embauchés en CDI dès la fin de leur formation. Skalys vous accompagne également dans cette transition si besoin.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CTA CONTACT ===== -->
<section class="recruter-contact" id="contact">
  <div class="recruter-contact-inner">
    <div class="recruter-contact-left">
      <div class="section-label section-label--on-dark reveal">
        <span class="num">→</span> Nous contacter
      </div>
      <h2 class="reveal">Prêt à accueillir<br><em>votre alternant ?</em></h2>
      <p class="reveal">Un message, un appel — notre équipe vous répond sous 48h et vous accompagne de la sélection à la signature du contrat.</p>
    </div>

    <div class="recruter-contact-right">
      <div class="rcontact-block reveal">
        <span class="rcontact-label">Email</span>
        <span class="rcontact-value">
          <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a>
        </span>
        <a href="mailto:contact@skalys-bs.fr?subject=Recruter%20un%20alternant%20Skalys&body=Bonjour%2C%0A%0AJe%20souhaite%20accueillir%20un%20alternant%20Skalys.%0A%0ANotre%20secteur%20d%27activit%C3%A9%20%3A%0AProfil%20recherch%C3%A9%20%3A%0A" class="rcontact-mailto">
          Envoyer un email <span class="arrow">→</span>
        </a>
      </div>
      <div class="rcontact-block reveal">
        <span class="rcontact-label">Téléphone</span>
        <span class="rcontact-value">
          <a href="tel:0670934298">06 70 93 42 98</a>
        </span>
        <span class="rcontact-hours">Lun – Ven · 9h – 18h</span>
      </div>
      <div class="rcontact-block reveal">
        <span class="rcontact-label">Adresse</span>
        <span class="rcontact-value">
          <a href="https://maps.google.com/?q=8+avenue+Flandres+Dunkerque+60200+Compiègne" target="_blank" rel="noopener">
            8 av. Flandres Dunkerque<br>60200 Compiègne
          </a>
        </span>
      </div>
    </div>
  </div>
</section>

<?php require 'components/footer.php'; ?>

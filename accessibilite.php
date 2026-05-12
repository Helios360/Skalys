<?php
require_once 'data/formations.php';

$page_title       = 'Accessibilité — Skalys Business School';
$page_desc        = 'Accessibilité Skalys : accueil des personnes en situation de handicap, référent handicap, adaptations pédagogiques et conformité RGAA du site.';
$home_url         = '/';
$extra_css        = ['/assets/css/legal.css'];
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="legal-hero">
  <div class="legal-hero-bg-text">Accès</div>
  <div class="legal-hero-inner">
    <div class="section-label section-label--on-dark">
      <span class="num">→</span> Accessibilité
    </div>
    <h1>Accessibilité &amp;<br>handicap, <em>nos engagements.</em></h1>
    <p class="legal-hero-sub">Skalys Business School s'engage à rendre ses formations accessibles à toutes et à tous, sans discrimination, et à proposer des aménagements adaptés aux personnes en situation de handicap. Cette page détaille nos engagements, notre dispositif d'accueil et nos référents.</p>
    <div class="legal-hero-meta">Dernière mise à jour : <?= date('d/m/Y') ?></div>
  </div>
</section>

<!-- ===== BODY ===== -->
<section class="legal-body">
  <div class="legal-body-inner">

    <div class="legal-toc">
      <div class="legal-toc-label">Sommaire</div>
      <ol>
        <li><a href="#engagements">Nos engagements</a></li>
        <li><a href="#dispositif">Dispositif d'accueil</a></li>
        <li><a href="#referent">Référent handicap</a></li>
        <li><a href="#adaptations">Adaptations pédagogiques &amp; matérielles</a></li>
        <li><a href="#numerique">Accessibilité numérique</a></li>
        <li><a href="#partenaires">Nos partenaires</a></li>
        <li><a href="#contact">Nous contacter</a></li>
      </ol>
    </div>

    <div class="legal-section" id="engagements">
      <h2>1. Nos engagements</h2>
      <p>Conformément à la loi du 11 février 2005 pour l'égalité des droits et des chances, la participation et la citoyenneté des personnes handicapées, Skalys Business School s'engage à&nbsp;:</p>
      <ul>
        <li>garantir l'égal accès des personnes en situation de handicap à l'ensemble de ses formations&nbsp;;</li>
        <li>évaluer, dès la candidature, les besoins spécifiques de chaque candidat afin d'identifier les adaptations possibles&nbsp;;</li>
        <li>mobiliser un référent handicap dédié pour accompagner les apprenants tout au long de leur parcours&nbsp;;</li>
        <li>travailler avec des partenaires spécialisés (Cap Emploi, MDPH, AGEFIPH, FIPHFP, etc.) pour activer les dispositifs adaptés&nbsp;;</li>
        <li>sensibiliser ses équipes pédagogiques à la prise en compte du handicap dans les pratiques quotidiennes.</li>
      </ul>
    </div>

    <div class="legal-section" id="dispositif">
      <h2>2. Dispositif d'accueil</h2>
      <p>Toute personne en situation de handicap, quel que soit le handicap (moteur, sensoriel, cognitif, psychique, troubles "dys", maladie invalidante), peut bénéficier d'un dispositif d'accueil personnalisé.</p>
      <h3>Étapes</h3>
      <ul>
        <li><strong>Premier contact</strong>&nbsp;: la candidature peut être déposée directement ou via un prescripteur (Cap Emploi, France Travail, mission locale, etc.).</li>
        <li><strong>Entretien d'accueil</strong>&nbsp;: un échange confidentiel avec notre référent handicap pour identifier les besoins spécifiques et les éventuelles adaptations à prévoir.</li>
        <li><strong>Étude individualisée</strong>&nbsp;: analyse de la faisabilité du parcours, des aménagements pédagogiques et matériels nécessaires, et coordination avec les partenaires spécialisés.</li>
        <li><strong>Mise en œuvre</strong>&nbsp;: déploiement des adaptations validées avant le démarrage de la formation, suivi régulier tout au long du parcours.</li>
      </ul>
    </div>

    <div class="legal-section" id="referent">
      <h2>3. Référent handicap</h2>
      <p>Skalys Business School a désigné un référent handicap dédié, interlocuteur unique pour toute question relative à l'accueil et à l'accompagnement des personnes en situation de handicap.</p>
      <div class="legal-table">
        <div>Référente handicap</div>
        <div><strong>Laetitia Toussaints</strong> — Responsable administrative &amp; pédagogique</div>

        <div>Email</div>
        <div><a href="mailto:laetitia@cloud-campus.fr">laetitia@cloud-campus.fr</a></div>

        <div>Téléphone</div>
        <div><a href="tel:0640814686">06 40 81 46 86</a></div>

        <div>Disponibilité</div>
        <div>Sur rendez-vous — du lundi au vendredi</div>
      </div>
    </div>

    <div class="legal-section" id="adaptations">
      <h2>4. Adaptations pédagogiques &amp; matérielles</h2>
      <p>Selon les besoins identifiés, Skalys peut mettre en œuvre les adaptations suivantes&nbsp;:</p>
      <ul>
        <li><strong>Adaptations pédagogiques</strong>&nbsp;: tutorat renforcé, supports adaptés (gros caractères, supports numériques accessibles, transcriptions), aménagement du rythme, allongement du temps des évaluations, etc.</li>
        <li><strong>Adaptations matérielles</strong>&nbsp;: matériels spécifiques, salles adaptées, accessibilité PMR des locaux, équipements informatiques compatibles.</li>
        <li><strong>Adaptations humaines</strong>&nbsp;: mobilisation d'auxiliaires de vie professionnels, interprètes en LSF, codeurs LPC, preneurs de notes, selon les besoins.</li>
        <li><strong>Adaptations d'évaluation</strong>&nbsp;: demandes d'aménagement des épreuves auprès des autorités compétentes (académies, Ministère du Travail, organismes certificateurs).</li>
      </ul>
      <p>Chaque adaptation est étudiée au cas par cas avec le référent handicap, en concertation avec le candidat et, le cas échéant, l'employeur et le médecin du travail.</p>
    </div>

    <div class="legal-section" id="numerique">
      <h2>5. Accessibilité numérique</h2>
      <p>Skalys s'efforce de rendre son site internet et ses supports numériques accessibles au plus grand nombre, en s'inspirant des recommandations WCAG 2.1 et du Référentiel Général d'Amélioration de l'Accessibilité (RGAA).</p>

      <h3>Déclaration de conformité RGAA</h3>
      <p>Conformément à l'article 47 de la loi n°&nbsp;2005-102 du 11 février 2005, Skalys Business School publie ci-dessous l'état de conformité de son site internet&nbsp;:</p>
      <div class="legal-table">
        <div>État de conformité</div>
        <div><strong>Non&nbsp;conforme</strong> — aucun audit RGAA formel n'a encore été réalisé sur le site (en cours de planification).</div>

        <div>Référentiel applicable</div>
        <div>RGAA version 4.1 — WCAG 2.1 niveau AA</div>

        <div>Périmètre</div>
        <div>Site public <a href="https://skalys-bs.fr">skalys-bs.fr</a> dans son intégralité</div>

        <div>Date de la déclaration</div>
        <div><?= date('d/m/Y') ?></div>
      </div>

      <h3>Schéma pluriannuel</h3>
      <p>Skalys Business School s'engage à conduire dans les 12 prochains mois un audit RGAA complet par un prestataire spécialisé, à publier les résultats détaillés (taux de conformité, non-conformités identifiées, dérogations) et à mettre en œuvre un plan d'action correctif annuel.</p>

      <h3>Signaler un défaut d'accessibilité</h3>
      <p>Si vous rencontrez une difficulté d'accès à un contenu ou un service&nbsp;: <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a>. Nous nous engageons à étudier votre demande et à proposer un mode d'accès alternatif dans un délai raisonnable.</p>
      <p>Si vous constatez un défaut d'accessibilité vous empêchant d'accéder à un contenu ou une fonctionnalité du site, que vous nous le signalez et que vous ne parvenez pas à obtenir une réponse de notre part, vous êtes en droit de saisir le Défenseur des droits (<a href="https://www.defenseurdesdroits.fr/" target="_blank" rel="noopener noreferrer">defenseurdesdroits.fr</a>).</p>
    </div>

    <div class="legal-section" id="partenaires">
      <h2>6. Nos partenaires</h2>
      <p>Pour accompagner au mieux les personnes en situation de handicap, Skalys s'appuie sur un réseau de partenaires spécialisés&nbsp;:</p>
      <ul>
        <li><strong>Cap Emploi</strong> — accompagnement vers l'emploi et la formation des personnes en situation de handicap.</li>
        <li><strong>AGEFIPH</strong> &amp; <strong>FIPHFP</strong> — financement d'aides techniques et humaines.</li>
        <li><strong>MDPH</strong> — Maison Départementale des Personnes Handicapées (reconnaissance RQTH, droits, prestations).</li>
        <li><strong>France Travail</strong> &amp; <strong>missions locales</strong> — orientation et accompagnement vers la formation en alternance.</li>
        <li><strong>Médecine du travail</strong> &amp; <strong>SAMETH</strong> — pour le maintien dans l'emploi et l'adaptation du poste.</li>
      </ul>
    </div>

    <div class="legal-section" id="contact">
      <h2>7. Nous contacter</h2>
      <p>Pour toute question relative à l'accessibilité de nos formations ou pour engager une démarche personnalisée&nbsp;:</p>
      <ul>
        <li>Référent handicap&nbsp;: <a href="mailto:laetitia@cloud-campus.fr">laetitia@cloud-campus.fr</a> — <a href="tel:0640814686">06 40 81 46 86</a></li>
        <li>Accueil général&nbsp;: <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a> — <a href="tel:0652670444">06 52 67 04 44</a></li>
        <li>Adresse&nbsp;: AJ-Formation SARL — 8 avenue Flandres Dunkerque — 60200 Compiègne</li>
      </ul>
      <p>Tous nos locaux sont accessibles aux personnes à mobilité réduite (PMR).</p>
    </div>

  </div>
</section>

<?php require 'components/footer.php'; ?>

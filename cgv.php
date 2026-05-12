<?php
require_once 'data/formations.php';

$page_title       = 'Conditions Générales de Vente — Skalys Business School';
$page_desc        = 'Conditions Générales de Vente Skalys Business School : inscription, prestations, financement, exécution et résiliation des contrats de formation.';
$home_url         = '/';
$extra_css        = ['/assets/css/legal.css'];
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="legal-hero">
  <div class="legal-hero-bg-text">CGV</div>
  <div class="legal-hero-inner">
    <div class="section-label section-label--on-dark">
      <span class="num">→</span> Conditions générales de vente
    </div>
    <h1>Conditions Générales<br>de <em>Vente.</em></h1>
    <p class="legal-hero-sub">Les présentes Conditions Générales de Vente (CGV) régissent les relations contractuelles entre AJ-Formation SARL — Skalys Business School et toute personne physique ou morale (« le Client ») souscrivant à une prestation de formation. Elles s'appliquent à l'exclusion de toutes autres conditions, sauf accord écrit préalable.</p>
    <div class="legal-hero-meta">Dernière mise à jour : <?= date('d/m/Y') ?></div>
  </div>
</section>

<!-- ===== BODY ===== -->
<section class="legal-body">
  <div class="legal-body-inner">

    <div class="legal-toc">
      <div class="legal-toc-label">Sommaire</div>
      <ol>
        <li><a href="#objet">Objet &amp; champ d'application</a></li>
        <li><a href="#prestations">Prestations proposées</a></li>
        <li><a href="#inscription">Inscription &amp; admission</a></li>
        <li><a href="#tarifs">Tarifs &amp; financement</a></li>
        <li><a href="#facturation">Facturation &amp; règlement</a></li>
        <li><a href="#execution">Exécution de la formation</a></li>
        <li><a href="#absence">Absences, retards &amp; sanctions</a></li>
        <li><a href="#resiliation">Annulation &amp; résiliation</a></li>
        <li><a href="#force-majeure">Force majeure</a></li>
        <li><a href="#propriete">Propriété intellectuelle</a></li>
        <li><a href="#donnees">Données personnelles</a></li>
        <li><a href="#reclamation">Réclamation, médiation &amp; litiges</a></li>
        <li><a href="#droit">Droit applicable</a></li>
      </ol>
    </div>

    <div class="legal-section" id="objet">
      <h2>1. Objet &amp; champ d'application</h2>
      <p>Les présentes CGV s'appliquent à toute prestation de formation, d'accompagnement ou de conseil proposée par AJ-Formation SARL (ci-après « l'Organisme ») sous la marque <strong>Skalys Business School</strong>. Toute commande, signature de contrat de formation, convention de formation ou contrat d'apprentissage emporte adhésion sans réserve aux présentes CGV.</p>
    </div>

    <div class="legal-section" id="prestations">
      <h2>2. Prestations proposées</h2>
      <p>L'Organisme propose des actions de formation professionnelle initiale et continue, dispensées en présentiel et/ou à distance, dans les domaines du commerce, de la gestion, des ressources humaines, du marketing, de la communication, du digital, de la petite enfance et de l'intelligence artificielle, du Niveau 4 (Bac) au Niveau 7 (Bac+5).</p>
      <p>Chaque formation fait l'objet d'un programme détaillé (objectifs, contenu, durée, modalités d'évaluation, public concerné, prérequis) tenu à disposition du Client avant l'inscription.</p>
    </div>

    <div class="legal-section" id="inscription">
      <h2>3. Inscription &amp; admission</h2>
      <p>L'inscription à une formation Skalys est subordonnée à :</p>
      <ul>
        <li>Le dépôt d'un dossier de candidature (CV, lettre de motivation, pièces administratives selon la formation)&nbsp;;</li>
        <li>Un entretien individuel de positionnement&nbsp;;</li>
        <li>La validation des prérequis pédagogiques de la formation visée&nbsp;;</li>
        <li>La signature du contrat de formation, de la convention de formation ou du contrat d'apprentissage&nbsp;;</li>
        <li>La validation de la prise en charge financière (OPCO, employeur, financement personnel).</li>
      </ul>
      <p>L'admission est définitive après réception du dossier complet et accord écrit de l'Organisme.</p>
    </div>

    <div class="legal-section" id="tarifs">
      <h2>4. Tarifs &amp; financement</h2>
      <p>Les tarifs des formations sont indiqués hors taxes et toutes taxes comprises sur les devis et conventions remis au Client. Les formations dispensées par un organisme de formation enregistré (Article 261-4-4° du CGI) sont exonérées de TVA.</p>
      <p>Les formations en alternance (contrat d'apprentissage ou de professionnalisation) sont prises en charge financièrement par les Opérateurs de Compétences (OPCO) de la branche professionnelle de l'employeur, dans les limites prévues par les niveaux de prise en charge en vigueur. L'alternant ne supporte aucun frais pédagogique.</p>
      <p>Les éventuels frais annexes (matériel, déplacements, hébergement, restauration) sont précisés au cas par cas et ne sont en principe pas inclus, sauf mention contraire au devis.</p>
    </div>

    <div class="legal-section" id="facturation">
      <h2>5. Facturation &amp; règlement</h2>
      <p>Les factures sont établies à l'issue de chaque période de formation, conformément aux modalités prévues à la convention. Le règlement est exigible à 30 jours fin de mois date de facture, sauf accord particulier. Tout retard de paiement entraîne, de plein droit, l'application de pénalités calculées au taux légal en vigueur, ainsi que d'une indemnité forfaitaire de 40 € pour frais de recouvrement (article L.441-10 du Code de commerce).</p>
    </div>

    <div class="legal-section" id="execution">
      <h2>6. Exécution de la formation</h2>
      <p>L'Organisme s'engage à mettre en œuvre tous les moyens pédagogiques, techniques et humains nécessaires à la bonne exécution de la formation : programme, supports, formateurs qualifiés, locaux adaptés. La présence des apprenants est attestée par des feuilles d'émargement.</p>
      <p>L'évaluation des acquis est réalisée selon les modalités définies par chaque diplôme (évaluations continues, examens, jury, dossier professionnel, mises en situation, etc.).</p>
    </div>

    <div class="legal-section" id="absence">
      <h2>7. Absences, retards &amp; sanctions</h2>
      <p>L'apprenant s'engage à respecter les horaires, le règlement intérieur et la déontologie de l'établissement. Les absences doivent être justifiées dans un délai raisonnable. Des absences répétées et non justifiées peuvent entraîner des sanctions, allant jusqu'à la rupture du contrat de formation ou d'apprentissage, dans le respect des procédures applicables.</p>
    </div>

    <div class="legal-section" id="resiliation">
      <h2>8. Annulation &amp; résiliation</h2>
      <p>Toute demande d'annulation à l'initiative du Client doit être notifiée à l'Organisme par écrit. Selon la date de la demande et la nature du contrat :</p>
      <ul>
        <li>Pour un contrat d'apprentissage&nbsp;: les conditions de rupture sont régies par le Code du travail (rupture pendant la période d'essai, rupture conventionnelle, rupture d'un commun accord, faute grave, force majeure, etc.).</li>
        <li>Pour un contrat de formation professionnelle continue à titre individuel&nbsp;: l'apprenant dispose d'un délai de rétractation de 10 jours à compter de la signature du contrat (article L.6353-5 du Code du travail).</li>
        <li>En cas d'abandon ou de cessation anticipée du fait de l'apprenant&nbsp;: l'Organisme conserve le bénéfice des prestations effectivement réalisées, conformément à la réglementation.</li>
      </ul>
      <p>L'Organisme se réserve le droit d'annuler ou de reporter une formation en cas d'effectif insuffisant ou de cause indépendante de sa volonté. Dans ce cas, les sommes versées sont remboursées intégralement ou reportées sur une session ultérieure, au choix du Client.</p>
    </div>

    <div class="legal-section" id="force-majeure">
      <h2>9. Force majeure</h2>
      <p>L'Organisme ne pourra être tenu responsable d'un manquement à l'une quelconque de ses obligations contractuelles, si ce manquement résulte d'un cas de force majeure au sens de l'article 1218 du Code civil (catastrophe naturelle, pandémie, crise sanitaire, grève générale, etc.).</p>
    </div>

    <div class="legal-section" id="propriete">
      <h2>10. Propriété intellectuelle</h2>
      <p>L'ensemble des supports pédagogiques (cours, présentations, exercices, livrets, vidéos, outils) demeure la propriété exclusive de l'Organisme ou de ses ayants droit. Toute reproduction, diffusion ou exploitation commerciale, totale ou partielle, est interdite sans autorisation écrite préalable.</p>
    </div>

    <div class="legal-section" id="donnees">
      <h2>11. Données personnelles</h2>
      <p>Les modalités de traitement des données personnelles sont décrites dans notre <a href="/politique-confidentialite.php">Politique de confidentialité</a>. L'apprenant et le Client disposent à tout moment des droits d'accès, de rectification, d'effacement, d'opposition et de portabilité prévus par le RGPD.</p>
    </div>

    <div class="legal-section" id="reclamation">
      <h2>12. Réclamation, médiation &amp; litiges</h2>
      <p>Toute réclamation peut être adressée à l'Organisme par email à <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a> ou par courrier à l'adresse indiquée en bas de page. L'Organisme s'engage à y répondre dans un délai raisonnable.</p>
      <p>Conformément aux dispositions du Code de la consommation, le Client consommateur peut recourir gratuitement au service de médiation compétent en cas de litige. Les coordonnées du médiateur sont disponibles sur demande.</p>
    </div>

    <div class="legal-section" id="droit">
      <h2>13. Droit applicable</h2>
      <p>Les présentes CGV sont régies par le droit français. Tout litige relatif à leur interprétation ou à leur exécution sera, à défaut d'accord amiable, soumis aux tribunaux compétents du ressort du siège social de l'Organisme.</p>
    </div>

  </div>
</section>

<?php require 'components/footer.php'; ?>

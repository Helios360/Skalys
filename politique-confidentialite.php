<?php
require_once 'data/formations.php';

$page_title       = 'Politique de confidentialité — Skalys Business School';
$page_desc        = 'Politique de protection des données personnelles de Skalys Business School : finalités, bases légales, durée de conservation, droits RGPD et cookies.';
$home_url         = '/';
$extra_css        = ['/assets/css/legal.css'];
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="legal-hero">
  <div class="legal-hero-bg-text">RGPD</div>
  <div class="legal-hero-inner">
    <div class="section-label section-label--on-dark">
      <span class="num">→</span> Données personnelles
    </div>
    <h1>Politique de <em>confidentialité.</em></h1>
    <p class="legal-hero-sub">Cette politique décrit comment Skalys Business School (AJ-Formation SARL) collecte, utilise et protège vos données personnelles, en conformité avec le Règlement Général sur la Protection des Données (RGPD — Règlement UE 2016/679) et la loi « Informatique et Libertés » modifiée.</p>
    <div class="legal-hero-meta">Dernière mise à jour : <?= date('d/m/Y') ?></div>
  </div>
</section>

<!-- ===== BODY ===== -->
<section class="legal-body">
  <div class="legal-body-inner">

    <div class="legal-toc">
      <div class="legal-toc-label">Sommaire</div>
      <ol>
        <li><a href="#responsable">Responsable du traitement</a></li>
        <li><a href="#donnees-collectees">Données collectées</a></li>
        <li><a href="#finalites">Finalités &amp; bases légales</a></li>
        <li><a href="#destinataires">Destinataires des données</a></li>
        <li><a href="#duree">Durée de conservation</a></li>
        <li><a href="#securite">Sécurité</a></li>
        <li><a href="#droits">Vos droits</a></li>
        <li><a href="#cookies">Cookies</a></li>
        <li><a href="#modifications">Modifications</a></li>
        <li><a href="#contact">Contact &amp; réclamation</a></li>
      </ol>
    </div>

    <div class="legal-section" id="responsable">
      <h2>1. Responsable du traitement</h2>
      <p>Le responsable du traitement des données personnelles collectées sur le site skalys-bs.fr est&nbsp;:</p>
      <div class="legal-table">
        <div>Responsable</div>
        <div><strong>AJ-Formation SARL</strong> — Skalys Business School</div>

        <div>Adresse</div>
        <div>8 avenue Flandres Dunkerque, 60200 Compiègne, France</div>

        <div>Email contact</div>
        <div><a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a></div>

      </div>
    </div>

    <div class="legal-section" id="donnees-collectees">
      <h2>2. Données collectées</h2>
      <p>Nous collectons uniquement les données strictement nécessaires aux finalités décrites ci-dessous. Selon le contexte, les données suivantes peuvent être traitées&nbsp;:</p>
      <h3>Lors d'une candidature ou d'une prise de contact</h3>
      <ul>
        <li>Identité&nbsp;: nom, prénom</li>
        <li>Coordonnées&nbsp;: adresse email, numéro de téléphone, adresse postale</li>
        <li>Données relatives au parcours&nbsp;: formation actuelle, projet professionnel, CV, lettre de motivation</li>
        <li>Toute information que vous nous transmettez volontairement dans vos échanges</li>
      </ul>
      <h3>Lors de la navigation sur le site</h3>
      <ul>
        <li>Données techniques&nbsp;: adresse IP, type de navigateur, pages consultées, dates et heures de connexion</li>
        <li>Données de mesure d'audience (si applicable)</li>
      </ul>
      <p>Nous ne collectons aucune donnée sensible au sens de l'article 9 du RGPD (origine raciale ou ethnique, opinions politiques, convictions religieuses, données de santé, etc.) sans votre consentement explicite et préalable.</p>
    </div>

    <div class="legal-section" id="finalites">
      <h2>3. Finalités &amp; bases légales</h2>
      <p>Vos données sont traitées pour les finalités suivantes&nbsp;:</p>
      <div class="legal-table">
        <div>Traitement des candidatures</div>
        <div>Examen du dossier, organisation des entretiens, mise en relation avec les entreprises partenaires. <strong>Base légale</strong>&nbsp;: mesures précontractuelles à la demande de la personne concernée (art. 6.1.b RGPD).</div>

        <div>Réponse aux demandes</div>
        <div>Traitement de vos demandes d'information et de contact. <strong>Base légale</strong>&nbsp;: intérêt légitime (art. 6.1.f RGPD).</div>

        <div>Suivi pédagogique &amp; administratif</div>
        <div>Gestion du parcours de formation, suivi des évaluations, relation avec les financeurs (OPCO). <strong>Base légale</strong>&nbsp;: exécution du contrat (art. 6.1.b) et obligations légales (art. 6.1.c).</div>

        <div>Mesure d'audience</div>
        <div>Statistiques de fréquentation et amélioration du site. <strong>Base légale</strong>&nbsp;: consentement (art. 6.1.a) ou intérêt légitime selon outils utilisés.</div>

        <div>Communication</div>
        <div>Envoi d'informations relatives à nos formations et événements. <strong>Base légale</strong>&nbsp;: consentement (art. 6.1.a).</div>
      </div>
    </div>

    <div class="legal-section" id="destinataires">
      <h2>4. Destinataires des données</h2>
      <p>Vos données sont accessibles uniquement aux personnes habilitées en interne (équipe pédagogique, administrative et relations entreprises) ainsi que, le cas échéant&nbsp;:</p>
      <ul>
        <li>Aux entreprises partenaires, dans le cadre exclusif de la mise en relation pour un contrat d'alternance et avec votre accord&nbsp;;</li>
        <li>Aux organismes financeurs (OPCO, France Travail, Région) dans le cadre des obligations liées à l'alternance et à la prise en charge des formations&nbsp;;</li>
        <li>Aux autorités administratives compétentes (Ministère du Travail, organismes certificateurs, etc.) lorsque la réglementation l'impose&nbsp;;</li>
        <li>À nos sous-traitants techniques (hébergeur, prestataires informatiques) qui agissent sur nos instructions et sont liés par des obligations de confidentialité conformes au RGPD.</li>
      </ul>
      <p>Vos données <strong>ne sont jamais vendues ni louées</strong> à des tiers à des fins commerciales.</p>
    </div>

    <div class="legal-section" id="duree">
      <h2>5. Durée de conservation</h2>
      <div class="legal-table">
        <div>Candidatures non retenues</div>
        <div>2 ans à compter du dernier contact, sauf opposition de votre part.</div>

        <div>Dossiers d'apprenants</div>
        <div>Pendant toute la durée de la formation, puis archivés conformément aux obligations réglementaires applicables aux organismes de formation (jusqu'à 10 ans pour certaines pièces).</div>

        <div>Données de contact (formulaires)</div>
        <div>3 ans après le dernier échange.</div>

        <div>Données de connexion</div>
        <div>13 mois maximum (recommandation CNIL).</div>

        <div>Données comptables &amp; contractuelles</div>
        <div>10 ans (art. L.123-22 du Code de commerce).</div>
      </div>
    </div>

    <div class="legal-section" id="securite">
      <h2>6. Sécurité</h2>
      <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données contre la perte, l'accès non autorisé, la divulgation, l'altération ou la destruction&nbsp;: chiffrement des communications (HTTPS), contrôle des accès, sauvegardes régulières, sensibilisation du personnel.</p>
      <p>Malgré nos efforts, aucune transmission de données sur Internet ne peut être garantie comme totalement sécurisée. Nous nous engageons à vous informer en cas de violation de données susceptible d'engendrer un risque élevé pour vos droits et libertés, conformément à l'article 34 du RGPD.</p>
    </div>

    <div class="legal-section" id="droits">
      <h2>7. Vos droits</h2>
      <p>Conformément au RGPD et à la loi « Informatique et Libertés », vous disposez des droits suivants concernant vos données personnelles&nbsp;:</p>
      <ul>
        <li><strong>Droit d'accès</strong>&nbsp;: obtenir la confirmation que des données vous concernant sont traitées et en recevoir une copie.</li>
        <li><strong>Droit de rectification</strong>&nbsp;: faire corriger des données inexactes ou incomplètes.</li>
        <li><strong>Droit à l'effacement</strong> (« droit à l'oubli »)&nbsp;: demander la suppression de vos données, sous réserve des obligations légales de conservation.</li>
        <li><strong>Droit à la limitation</strong>&nbsp;: demander la suspension du traitement dans certains cas.</li>
        <li><strong>Droit d'opposition</strong>&nbsp;: vous opposer, pour des motifs tenant à votre situation particulière, à un traitement fondé sur l'intérêt légitime ou à des fins de prospection.</li>
        <li><strong>Droit à la portabilité</strong>&nbsp;: récupérer les données que vous nous avez fournies, dans un format structuré et lisible par machine.</li>
        <li><strong>Droit de retirer votre consentement</strong> à tout moment, lorsque le traitement est fondé sur celui-ci.</li>
        <li><strong>Droit de définir des directives</strong> relatives au sort de vos données après votre décès.</li>
      </ul>
      <p>Pour exercer ces droits, écrivez-nous à <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a> ou par courrier à l'adresse indiquée au point 1, en justifiant de votre identité. Nous nous engageons à répondre dans un délai d'un mois (prorogeable de deux mois en cas de demande complexe).</p>
    </div>

    <div class="legal-section" id="cookies">
      <h2>8. Cookies</h2>
      <p>Le site skalys-bs.fr peut déposer des cookies sur votre terminal afin d'assurer son bon fonctionnement et, le cas échéant, de mesurer son audience. Les cookies utilisés relèvent des catégories suivantes&nbsp;:</p>
      <ul>
        <li><strong>Cookies strictement nécessaires</strong>&nbsp;: indispensables au fonctionnement du site (préférences techniques, sécurité). Ils ne nécessitent pas votre consentement.</li>
        <li><strong>Cookies de mesure d'audience</strong>&nbsp;: nous permettent de comprendre l'usage du site. <span class="legal-todo">À compléter</span> selon les outils utilisés (Google Analytics, Matomo, etc.).</li>
        <li><strong>Cookies tiers</strong>&nbsp;: notre site intègre des contenus tiers (carte Google Maps, lecteurs vidéo, polices) susceptibles de déposer leurs propres cookies. Consultez les politiques de ces tiers pour plus d'informations.</li>
      </ul>
      <p>Vous pouvez à tout moment paramétrer votre navigateur pour bloquer les cookies ou en être informé. Pour en savoir plus, consultez la <a href="https://www.cnil.fr/fr/cookies-et-traceurs" target="_blank" rel="noopener">page dédiée de la CNIL</a>.</p>
    </div>

    <div class="legal-section" id="modifications">
      <h2>9. Modifications de la politique</h2>
      <p>La présente politique peut être modifiée à tout moment afin de refléter les évolutions de la réglementation, de nos pratiques ou des fonctionnalités du site. La date de dernière mise à jour est indiquée en tête du document. Nous vous invitons à la consulter régulièrement.</p>
    </div>

    <div class="legal-section" id="contact">
      <h2>10. Contact &amp; réclamation</h2>
      <p>Pour toute question relative à cette politique ou au traitement de vos données&nbsp;:</p>
      <ul>
        <li>Email&nbsp;: <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a></li>
        <li>Courrier&nbsp;: AJ-Formation — 8 avenue Flandres Dunkerque — 60200 Compiègne</li>
      </ul>
      <p>Si vous estimez, après nous avoir contactés, que vos droits ne sont pas respectés, vous pouvez introduire une réclamation auprès de la <strong>Commission Nationale de l'Informatique et des Libertés (CNIL)</strong>&nbsp;: <a href="https://www.cnil.fr/fr/plaintes" target="_blank" rel="noopener">www.cnil.fr/fr/plaintes</a>.</p>
    </div>

  </div>
</section>

<?php require 'components/footer.php'; ?>

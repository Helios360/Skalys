<?php
require_once 'data/formations.php';

$page_title       = 'Mentions légales — Skalys Business School';
$page_desc        = 'Mentions légales Skalys Business School (AJ-Formation SARL) : éditeur du site, hébergeur, propriété intellectuelle, responsabilité, contact.';
$home_url         = '/';
$extra_css        = ['/assets/css/legal.css'];
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="legal-hero">
  <div class="legal-hero-bg-text">Légal</div>
  <div class="legal-hero-inner">
    <div class="section-label section-label--on-dark">
      <span class="num">→</span> Informations légales
    </div>
    <h1>Mentions <em>légales.</em></h1>
    <p class="legal-hero-sub">Conformément aux dispositions des articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique (LCEN), nous vous informons des éléments suivants concernant le site skalys-bs.fr.</p>
    <div class="legal-hero-meta">Dernière mise à jour : <?= date('d/m/Y') ?></div>
  </div>
</section>

<!-- ===== BODY ===== -->
<section class="legal-body">
  <div class="legal-body-inner">

    <div class="legal-toc">
      <div class="legal-toc-label">Sommaire</div>
      <ol>
        <li><a href="#editeur">Éditeur du site</a></li>
        <li><a href="#directeur">Directeur de la publication</a></li>
        <li><a href="#hebergeur">Hébergeur</a></li>
        <li><a href="#propriete">Propriété intellectuelle</a></li>
        <li><a href="#responsabilite">Responsabilité</a></li>
        <li><a href="#donnees">Données personnelles &amp; cookies</a></li>
        <li><a href="#droit">Droit applicable</a></li>
        <li><a href="#contact">Contact</a></li>
      </ol>
    </div>

    <div class="legal-section" id="editeur">
      <h2>1. Éditeur du site</h2>
      <p>Le site <strong>skalys-bs.fr</strong> est édité par&nbsp;:</p>
      <div class="legal-table">
        <div>Raison sociale</div>
        <div><strong>AJ-Formation</strong></div>

        <div>Forme juridique</div>
        <div>Société par actions simplifiée (SAS)</div>

        <div>Capital social</div>
        <div>2 000 €</div>

        <div>Siège social</div>
        <div>8 avenue Flandres Dunkerque, 60200 Compiègne, France</div>

        <div>SIRET</div>
        <div>791 428 980 00035</div>

        <div>RCS</div>
        <div>444 048 441 (Compiègne)</div>

        <div>N° TVA intracom.</div>
        <div>Exonéré de TVA — Article 261-4-4° a du CGI</div>

        <div>N° déclaration d'activité</div>
        <div>32 60 04134 60 (auprès du Préfet de région Hauts-de-France)</div>

        <div>Certification</div>
        <div>Qualiopi — Actions de formation et actions de formation par apprentissage (arrêté du 12/03/2026)</div>

        <div>Email</div>
        <div><a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a></div>
      </div>
    </div>

    <div class="legal-section" id="directeur">
      <h2>2. Directeur de la publication</h2>
      <p>Le directeur de la publication du site est <strong>BARAKAT Abdelkader</strong>, en qualité de représentant légal de AJ-Formation.</p>
    </div>

    <div class="legal-section" id="hebergeur">
      <h2>3. Hébergeur</h2>
      <div class="legal-table">
        <div>Hébergeur</div>
        <div><strong>OVH</strong></div>

        <div>Adresse</div>
        <div>2 rue Kellermann — 59100 Roubaix — France</div>

        <div>Téléphone</div>
        <div>1007 (numéro gratuit depuis un poste fixe en France)</div>

        <div>Site web</div>
        <div><a href="https://www.ovhcloud.com/fr/" target="_blank" rel="noopener">https://www.ovhcloud.com/fr/</a></div>

        <div>Contact</div>
        <div><a href="https://www.ovhcloud.com/fr/contact/" target="_blank" rel="noopener">https://www.ovhcloud.com/fr/contact/</a></div>
      </div>
    </div>

    <div class="legal-section" id="propriete">
      <h2>4. Propriété intellectuelle</h2>
      <p>L'ensemble des éléments composant le site skalys-bs.fr (structure générale, textes, images, logos, photographies, vidéos, sons, données, marques, bases de données, logiciels, etc.) est la propriété exclusive de AJ-Formation SARL ou fait l'objet d'une autorisation d'utilisation. Ils sont protégés par le droit français et international relatif à la propriété intellectuelle.</p>
      <p>Toute reproduction, représentation, modification, publication, transmission, dénaturation, totale ou partielle, du site ou de son contenu, par quelque procédé que ce soit et sur quelque support que ce soit, est interdite sans l'autorisation écrite préalable de AJ-Formation SARL. Toute exploitation non autorisée du site ou de l'un quelconque des éléments qu'il contient sera considérée comme constitutive d'une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de la propriété intellectuelle.</p>
      <p>La marque <strong>Skalys Business School</strong>, ainsi que les logos figurant sur le site, sont des marques (déposées ou en cours de dépôt) de AJ-Formation SARL. Toute utilisation, à quelque titre que ce soit, de ces marques sans autorisation préalable est interdite.</p>
    </div>

    <div class="legal-section" id="responsabilite">
      <h2>5. Responsabilité</h2>
      <p>Les informations fournies sur le site skalys-bs.fr le sont à titre indicatif. AJ-Formation SARL s'efforce d'assurer l'exactitude et la mise à jour des informations diffusées, dont elle se réserve le droit de modifier le contenu à tout moment et sans préavis. Toutefois, AJ-Formation SARL ne peut garantir l'exactitude, la précision ou l'exhaustivité des informations mises à disposition sur le site.</p>
      <p>En conséquence, AJ-Formation SARL décline toute responsabilité&nbsp;:</p>
      <ul>
        <li>pour toute imprécision, inexactitude ou omission portant sur des informations disponibles sur le site&nbsp;;</li>
        <li>pour tous dommages résultant d'une intrusion frauduleuse d'un tiers ayant entraîné une modification des informations mises à disposition sur le site&nbsp;;</li>
        <li>et plus généralement de tous dommages, directs ou indirects, qu'elles qu'en soient les causes, origines, natures ou conséquences, résultant de la consultation ou de l'utilisation du site.</li>
      </ul>
      <p>Le site peut contenir des liens hypertextes vers d'autres sites internet. AJ-Formation SARL ne saurait être tenue responsable du contenu de ces sites tiers ni des éventuels préjudices résultant de leur consultation.</p>
    </div>

    <div class="legal-section" id="donnees">
      <h2>6. Données personnelles &amp; cookies</h2>
      <p>Le traitement des données personnelles collectées sur le site skalys-bs.fr est régi par notre <a href="/politique-confidentialite.php">Politique de confidentialité</a>, qui détaille notamment les finalités du traitement, les bases légales, la durée de conservation des données et les droits dont vous disposez (accès, rectification, effacement, opposition, portabilité, limitation) au titre du Règlement (UE) 2016/679 du 27 avril 2016 (RGPD) et de la loi « Informatique et Libertés » modifiée.</p>
    </div>

    <div class="legal-section" id="droit">
      <h2>7. Droit applicable</h2>
      <p>Les présentes mentions légales sont régies par le droit français. En cas de litige relatif à l'utilisation du site, et à défaut de résolution amiable, compétence est attribuée aux tribunaux français.</p>
    </div>

    <div class="legal-section" id="contact">
      <h2>8. Contact</h2>
      <p>Pour toute question relative au site, à son contenu ou aux présentes mentions légales, vous pouvez nous contacter&nbsp;:</p>
      <ul>
        <li>Par courriel&nbsp;: <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a></li>
        <li>Par voie postale&nbsp;: AJ-Formation — 8 avenue Flandres Dunkerque — 60200 Compiègne</li>
      </ul>
    </div>

  </div>
</section>

<?php require 'components/footer.php'; ?>

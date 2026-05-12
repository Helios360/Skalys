<?php
require_once 'data/formations.php';

$page_title  = 'IA & Futur du Travail — Skalys Business School';
$page_desc   = 'L\'IA transforme chaque métier. Skalys vous forme avant tout le monde — maîtrisez les outils qui feront la différence sur le marché de demain.';
$home_url    = '/';
$extra_css   = ['/assets/css/ia.css'];
$page_js     = '/assets/js/ia.js';

require 'components/header.php';
?>

<!-- ===== SIDE INDEX ===== -->
<div class="side-index" id="sideIndex">
  <a href="#hero" class="active"><span>01 — Vision</span></a>
  <a href="#urgence"><span>02 — Urgence</span></a>
  <a href="#horizon"><span>03 — Horizon</span></a>
  <a href="#approche"><span>04 — Skalys × IA</span></a>
  <a href="#outils"><span>05 — Outils</span></a>
</div>

<!-- ===== HERO ===== -->
<section id="hero" class="ia-hero">
  <div class="ia-hero-bg-text">2030</div>

  <div class="ia-hero-inner">
    <div class="ia-hero-meta">
      <span>Intelligence Artificielle</span>
      <span>Skalys — Édition 2026</span>
      <span>Formation & Futur</span>
    </div>

    <h1 class="ia-hero-title">
      <span class="ia-mask"><span class="ia-word">L'IA ne remplace</span></span>
      <br>
      <span class="ia-mask"><span class="ia-word ia-em">pas les gens.</span></span>
      <br>
      <span class="ia-mask"><span class="ia-word">Elle remplace ceux</span></span>
      <br>
      <span class="ia-mask"><span class="ia-word ia-em"><span class="ia-yellow-hl">qui ne savent pas l'utiliser.</span></span></span>
    </h1>

    <p class="ia-hero-sub">D'ici 2030, des dizaines de millions de postes seront transformés par l'IA. Ce n'est pas une menace pour ceux qui se forment — c'est une opportunité sans précédent. Skalys vous prépare à en faire partie.</p>

    <div class="ia-hero-actions">
      <a href="/candidature.php" class="btn btn-yellow">Me former à l'IA <span class="arrow">→</span></a>
      <a href="#horizon" class="btn ia-btn-ghost">Voir l'horizon <span class="arrow">↓</span></a>
    </div>
  </div>

  <div class="ia-hero-foot">
    <div class="ia-stat">
      <span class="ia-stat-num">85<em>M</em></span>
      <span class="ia-stat-lab">postes transformés<br>d'ici 2025–2030 (WEF)</span>
    </div>
    <div class="ia-stat">
      <span class="ia-stat-num">97<em>M</em></span>
      <span class="ia-stat-lab">nouveaux rôles exigeant<br>des compétences IA</span>
    </div>
    <div class="ia-stat">
      <span class="ia-stat-num">67<em>%</em></span>
      <span class="ia-stat-lab">des recruteurs cherchent<br>des profils IA en 2025</span>
    </div>
    <div class="ia-stat">
      <span class="ia-stat-num">3<em>×</em></span>
      <span class="ia-stat-lab">plus de valeur pour<br>les profils IA-augmentés</span>
    </div>
  </div>
</section>

<!-- ===== MARQUEE ===== -->
<div class="ia-marquee">
  <div class="ia-marquee-track">
    <span>
      <em>Anticiper</em> <span class="star">✦</span> <em>Automatiser</em> <span class="star">✦</span> <em>Augmenter</em> <span class="star">✦</span> <em>Adapter</em> <span class="star">✦</span> <em>Anticiper</em> <span class="star">✦</span> <em>Automatiser</em> <span class="star">✦</span> <em>Augmenter</em> <span class="star">✦</span> <em>Adapter</em> <span class="star">✦</span>
    </span>
  </div>
</div>

<!-- ===== URGENCE ===== -->
<section id="urgence" class="ia-urgence">
  <div class="container">
    <div class="ia-urgence-header">
      <div class="reveal">
        <div class="section-label"><span class="num">02</span> L'urgence</div>
        <h2 class="section-h2">Le monde du travail<br>se <em>réécrit. Maintenant.</em></h2>
      </div>
      <p class="reveal">Ce n'est pas une révolution annoncée pour après-demain. Elle est déjà là. Les entreprises qui avancent vite ne cherchent plus des profils qui "découvrent" l'IA — elles cherchent des profils qui la <strong>maîtrisent</strong>.</p>
    </div>

    <div class="ia-urgence-grid stagger">

      <div class="ia-urgence-card">
        <div class="ia-urgence-accent"></div>
        <span class="ia-urgence-num">44<em>%</em></span>
        <h3>Des compétences devront évoluer d'ici 2027</h3>
        <p>Selon le World Economic Forum, près de la moitié des travailleurs devront se requalifier dans les cinq prochaines années. L'IA est au cœur de cette transformation.</p>
      </div>

      <div class="ia-urgence-card">
        <div class="ia-urgence-accent"></div>
        <span class="ia-urgence-num">10<em>×</em></span>
        <h3>Plus productive — une équipe formée à l'IA</h3>
        <p>Les études montrent que les équipes qui maîtrisent les outils IA produisent jusqu'à dix fois plus en temps comparable. Rédaction, analyse, prospection, création : tout va plus vite.</p>
      </div>

      <div class="ia-urgence-card">
        <div class="ia-urgence-accent"></div>
        <span class="ia-urgence-num">+35<em>%</em></span>
        <h3>De salaire pour les profils maîtrisant l'IA</h3>
        <p>À poste équivalent, les candidats capables de travailler avec des outils IA négocient en moyenne 30 à 40% de mieux. Une compétence qui se monnaie dès la sortie d'école.</p>
      </div>

      <div class="ia-urgence-card">
        <div class="ia-urgence-accent"></div>
        <span class="ia-urgence-num">2<em>ans</em></span>
        <h3>La fenêtre pour prendre de l'avance</h3>
        <p>Les premières promotions formées à l'IA arrivent sur le marché. Ceux qui se forment maintenant seront les références dans leur domaine. Ceux qui attendent rattraperont.</p>
      </div>

    </div>

    <p class="ia-urgence-source reveal">Sources : World Economic Forum Future of Jobs 2025 — McKinsey Global Institute — LinkedIn Workforce Report 2025</p>
  </div>
</section>

<!-- ===== HORIZON ===== -->
<section id="horizon" class="ia-horizon">
  <div class="container">
    <div class="ia-horizon-header reveal">
      <div class="section-label"><span class="num">03</span> L'horizon IA</div>
      <h2 class="ia-horizon-h2">Ce que l'IA rend possible.<br><em>Aujourd'hui et demain.</em></h2>
      <p class="ia-horizon-lead">L'Intelligence Artificielle n'est pas un outil de plus. C'est une couche transversale qui réinvente chaque fonction de l'entreprise. Voici les six transformations majeures que nos formations vous préparent à piloter.</p>
    </div>

    <div class="ia-horizon-grid stagger">

      <div class="ia-horizon-card">
        <div class="ia-horizon-num">/01</div>
        <div class="ia-horizon-icon">◈</div>
        <h3>Agents IA autonomes</h3>
        <p>Des logiciels qui agissent comme de vrais collaborateurs : prospectent, qualifient, relancent, rédigent et reportent sans intervention humaine. En 2026, certaines équipes travaillent déjà avec des "collègues" IA. En 2030, ce sera la norme.</p>
        <div class="ia-horizon-tag">Déjà en cours</div>
      </div>

      <div class="ia-horizon-card">
        <div class="ia-horizon-num">/02</div>
        <div class="ia-horizon-icon">◉</div>
        <h3>Création à grande échelle</h3>
        <p>Campagnes marketing, contenus vidéo, propositions commerciales, visuels de marque : ce qui prenait une semaine prend maintenant dix minutes. Le marketing de demain, c'est une personne avec la puissance de cent.</p>
        <div class="ia-horizon-tag">Déjà en cours</div>
      </div>

      <div class="ia-horizon-card">
        <div class="ia-horizon-num">/03</div>
        <div class="ia-horizon-icon">◎</div>
        <h3>Décision prédictive</h3>
        <p>L'IA lit des milliers de signaux faibles pour anticiper les comportements clients, détecter les opportunités et prévenir les risques avant qu'ils n'apparaissent. La bonne décision, avant même que la question se pose.</p>
        <div class="ia-horizon-tag">Horizon 2027</div>
      </div>

      <div class="ia-horizon-card">
        <div class="ia-horizon-num">/04</div>
        <div class="ia-horizon-icon">◆</div>
        <h3>Commerce 24h/24</h3>
        <p>Des assistants IA qui vendent, conseillent, qualifient et convertissent à toute heure, sans jamais se fatiguer. Votre meilleur commercial ne dort jamais, ne démissionne jamais, et s'améliore à chaque interaction.</p>
        <div class="ia-horizon-tag">Déjà en cours</div>
      </div>

      <div class="ia-horizon-card">
        <div class="ia-horizon-num">/05</div>
        <div class="ia-horizon-icon">◇</div>
        <h3>RH régénérée</h3>
        <p>Sourcing prédictif, évaluation objective, onboarding personnalisé, détection précoce des talents. L'IA libère la DRH des tâches répétitives pour la recentrer sur ce qui compte : les humains, leur développement, leur engagement.</p>
        <div class="ia-horizon-tag">Horizon 2027</div>
      </div>

      <div class="ia-horizon-card">
        <div class="ia-horizon-num">/06</div>
        <div class="ia-horizon-icon">○</div>
        <h3>Automatisation totale</h3>
        <p>Devis, relances, rapports, plannings, conformité, comptabilité courante — les flux répétitifs s'automatisent. Les équipes se recentrent sur la création de valeur. La compétition, c'est ce qu'on fait avec ce temps retrouvé.</p>
        <div class="ia-horizon-tag">Horizon 2028</div>
      </div>

    </div>

    <div class="ia-horizon-bottom reveal">
      <p class="ia-horizon-quote">"Ceux qui forment les prochaines générations à l'IA ne leur donnent pas un avantage. Ils leur donnent les clés de la décennie."</p>
      <span class="ia-horizon-source">— Skalys Business School, 2026</span>
    </div>
  </div>
</section>

<!-- ===== APPROCHE SKALYS ===== -->
<section id="approche" class="ia-approche">
  <div class="container">
    <div class="ia-approche-header">
      <div class="reveal">
        <div class="section-label"><span class="num">04</span> Skalys × IA</div>
        <h2 class="section-h2">Pas un module de plus.<br><em>Une culture.</em></h2>
      </div>
      <p class="reveal">Pendant que d'autres écoles rajoutent l'IA en option, Skalys l'a intégrée au cœur de chaque formation, dès le premier jour. Ce n'est pas une case à cocher — c'est notre façon d'enseigner.</p>
    </div>

    <div class="ia-piliers">

      <div class="ia-pilier reveal">
        <span class="ia-pilier-num">01</span>
        <h3>Intégration transversale</h3>
        <p>L'IA traverse chaque module, chaque semaine, chaque évaluation. Au sein de toutes nos formations, nos étudiants utilisent des outils IA dans leurs missions réelles en entreprise — pas en salle de classe simulée.</p>
      </div>

      <div class="ia-pilier reveal">
        <span class="ia-pilier-num">02</span>
        <h3>Formateurs qui la pratiquent</h3>
        <p>Nos formateurs n'enseignent pas l'IA depuis un manuel. Ils l'utilisent dans leur activité professionnelle quotidienne. Ce qu'ils transmettent, c'est ce qu'ils font — avec les mêmes outils, les mêmes cas, les mêmes erreurs à éviter.</p>
      </div>

      <div class="ia-pilier reveal">
        <span class="ia-pilier-num">03</span>
        <h3>Ateliers live sur cas réels</h3>
        <p>Chaque outil s'apprend en action : challenge de prospection IA, création de campagne from scratch, analyse de données réelles. L'évaluation, c'est le résultat obtenu — pas la récitation d'une définition.</p>
      </div>

      <div class="ia-pilier reveal">
        <span class="ia-pilier-num">04</span>
        <h3>Entreprises qui l'exigent</h3>
        <p>Nos 120+ entreprises partenaires nous le disent clairement : ils recrutent des profils qui savent utiliser l'IA. On forme exactement à ce qu'elles attendent. Les alternants qui sortent sont opérationnels le premier jour.</p>
      </div>

    </div>

    <!-- Formations IA -->
    <div class="ia-formations reveal">
      <div class="ia-formations-label">IA dans nos formations</div>
      <div class="ia-formations-grid">

        <div class="ia-formation-item">
          <div class="ia-formation-badge">BTS NDRC</div>
          <h5>Négociation & Relation Client</h5>
          <ul>
            <li>Prospection automatisée avec ChatGPT & Apollo</li>
            <li>Génération d'emails de vente à grande échelle</li>
            <li>Community management assisté par IA</li>
            <li>Scoring de leads et qualification automatique</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">BTS GPME</div>
          <h5>Gestion de la PME</h5>
          <ul>
            <li>Automatisation des process administratifs</li>
            <li>Tableaux de bord et analyse IA avec Excel Copilot</li>
            <li>Rédaction de documents RH et commerciaux</li>
            <li>Veille concurrentielle et analyse de marché IA</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">TP NTC</div>
          <h5>Négociation Technico-Commerciale</h5>
          <ul>
            <li>Stratégie omnicanale pilotée par la data</li>
            <li>Proposals commerciales générées par IA</li>
            <li>CRM augmenté et analyse prédictive</li>
            <li>Pitch deck et contenus de vente avec IA</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">CAP AEPE</div>
          <h5>Accompagnement Petite Enfance</h5>
          <ul>
            <li>Outils de communication parentale assistés</li>
            <li>Ressources pédagogiques générées par IA</li>
            <li>Planification et organisation avec IA</li>
            <li>Veille sur les pratiques éducatives modernes</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">BTS MCO</div>
          <h5>Management Commercial Opérationnel</h5>
          <ul>
            <li>Animation point de vente assistée par IA</li>
            <li>Pilotage des KPI commerciaux avec Power BI</li>
            <li>Plan d'action et reporting générés par IA</li>
            <li>Optimisation merchandising via la data</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">Bachelor RDC</div>
          <h5>Responsable de Développement Commercial</h5>
          <ul>
            <li>Stratégie de prospection augmentée par IA</li>
            <li>Lead scoring &amp; CRM prédictif</li>
            <li>Pitch deck commerciaux générés par IA</li>
            <li>Pilotage du business par la data</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">Bachelor RH</div>
          <h5>Ressources Humaines</h5>
          <ul>
            <li>Sourcing &amp; screening de CV par IA</li>
            <li>Onboarding personnalisé automatisé</li>
            <li>Rédaction de fiches de poste assistée</li>
            <li>Analyse RH prédictive &amp; engagement</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">Bachelor MGE</div>
          <h5>Manager en Gestion d'Entreprise</h5>
          <ul>
            <li>Tableaux de bord pilotage augmentés IA</li>
            <li>Automatisation des process administratifs</li>
            <li>Analyse financière &amp; prévisions IA</li>
            <li>Aide à la décision stratégique data-driven</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">Mastère MCBD</div>
          <h5>Manager Commercial &amp; Business Development</h5>
          <ul>
            <li>Stratégie commerciale pilotée par IA</li>
            <li>Account Based Marketing &amp; data</li>
            <li>Négociation BtoB augmentée</li>
            <li>Pilotage de la performance commerciale</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">Mastère MSRH</div>
          <h5>Manager Stratégie RH</h5>
          <ul>
            <li>Stratégie de talent management IA</li>
            <li>People analytics &amp; prédictif</li>
            <li>Transformation digitale de la fonction RH</li>
            <li>Pilotage du dialogue social outillé IA</li>
          </ul>
        </div>

        <div class="ia-formation-item">
          <div class="ia-formation-badge">Mastère ME</div>
          <h5>Manager d'Entreprise</h5>
          <ul>
            <li>Gouvernance &amp; pilotage data-driven</li>
            <li>Transformation digitale de l'entreprise</li>
            <li>Stratégie d'innovation augmentée IA</li>
            <li>Prise de décision assistée par IA</li>
          </ul>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ===== ARSENAL ===== -->
<section id="outils" class="ia-outils">
  <div class="container">
    <div class="ia-outils-header">
      <div class="reveal">
        <div class="section-label"><span class="num">05</span> Outils</div>
        <h2 class="section-h2">L'arsenal IA que<br>vous <em>maîtriserez.</em></h2>
      </div>
      <p class="reveal">Ce ne sont pas des démonstrations. Ce sont les outils que vous utiliserez en entreprise dès votre premier jour d'alternance — et que les recruteurs attendent de vous.</p>
    </div>

    <div class="ia-outils-grid stagger">

      <div class="ia-outils-cat">
        <div class="ia-cat-label">IA Générative</div>
        <div class="ia-cat-tools">
          <span class="ai-tool">ChatGPT</span>
          <span class="ai-tool">Claude</span>
          <span class="ai-tool">Gemini</span>
          <span class="ai-tool">Mistral</span>
          <span class="ai-tool">Perplexity</span>
        </div>
      </div>

      <div class="ia-outils-cat">
        <div class="ia-cat-label">Création visuelle</div>
        <div class="ia-cat-tools">
          <span class="ai-tool">Midjourney</span>
          <span class="ai-tool">DALL·E</span>
          <span class="ai-tool">Canva AI</span>
          <span class="ai-tool">Adobe Firefly</span>
          <span class="ai-tool">Ideogram</span>
        </div>
      </div>

      <div class="ia-outils-cat">
        <div class="ia-cat-label">Vidéo & Audio</div>
        <div class="ia-cat-tools">
          <span class="ai-tool">Runway</span>
          <span class="ai-tool">ElevenLabs</span>
          <span class="ai-tool">HeyGen</span>
          <span class="ai-tool">Sora</span>
          <span class="ai-tool">CapCut AI</span>
        </div>
      </div>

      <div class="ia-outils-cat">
        <div class="ia-cat-label">Vente & CRM</div>
        <div class="ia-cat-tools">
          <span class="ai-tool">Apollo</span>
          <span class="ai-tool">Lemlist AI</span>
          <span class="ai-tool">HubSpot AI</span>
          <span class="ai-tool">Notion AI</span>
          <span class="ai-tool">Salesforce AI</span>
        </div>
      </div>

      <div class="ia-outils-cat">
        <div class="ia-cat-label">Data & Analyse</div>
        <div class="ia-cat-tools">
          <span class="ai-tool">Excel Copilot</span>
          <span class="ai-tool">Power BI</span>
          <span class="ai-tool">Looker</span>
          <span class="ai-tool">Tableau AI</span>
          <span class="ai-tool">Julius AI</span>
        </div>
      </div>

      <div class="ia-outils-cat">
        <div class="ia-cat-label">Productivité & Workflow</div>
        <div class="ia-cat-tools">
          <span class="ai-tool">Zapier AI</span>
          <span class="ai-tool">Make</span>
          <span class="ai-tool">Notion AI</span>
          <span class="ai-tool">Microsoft Copilot</span>
          <span class="ai-tool">Gamma AI</span>
        </div>
      </div>

    </div>

    <div class="ia-outils-note reveal">
      <span class="ia-outils-note-icon">✦</span>
      <p>La liste évolue chaque trimestre avec les entreprises partenaires — pour coller en permanence à ce que le marché utilise vraiment.</p>
    </div>
  </div>
</section>

<!-- ===== CTA ===== -->
<section class="ia-cta">
  <div class="ia-cta-inner">
    <div class="ia-cta-label reveal"><span class="num">→</span> L'avenir commence maintenant</div>
    <h2 class="reveal">Skalys vous prépare<br><em>pour le monde de demain.</em></h2>
    <p class="reveal">Formations 100% gratuites. Rémunérées. En alternance. Avec une obsession : que vous soyez opérationnels avant tout le monde — IA incluse.</p>
    <div class="ia-cta-actions reveal">
      <a href="/candidature.php" class="btn btn-primary">Je candidate maintenant <span class="arrow">→</span></a>
      <a href="home.php#formations" class="btn">Voir les formations</a>
    </div>
  </div>
</section>

<?php require 'components/footer.php'; ?>

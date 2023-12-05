<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./assets/icons/BS_squared.png" sizes="32x32">
    <title>BERTRAND Pauline - Portfolio</title>
    <meta name="google-site-verification" content="bQNBvyW3uhvUd-tlKFfyvfrz0wG10B-TDz9rWShBs4I" />
    <meta name="description" content="Je m'appelle Pauline BERTRAND. Je suis en BTS SIO option SLAM.">
    <meta name="author" content="BERTRAND Pauline">
    <meta name="copyright" content="BERTRAND Pauline">

    <link rel="stylesheet" href="./style/global.css" />
    <link rel="stylesheet" href="./style/navbar.css">
    <link rel="stylesheet" href="./style/banner.css">
    <link rel="stylesheet" href="./style/timeline.css">
    <link rel="stylesheet" href="./style/skills.css">
    <link rel="stylesheet" href="./style/works.css">
    <link rel="stylesheet" href="./style/dropdown.css">
    <link rel="stylesheet" href="./style/watch.css">
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="./style/fluxrss.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/responsive.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <script defer src="./script/main.js"></script>
</head>

<body>
    <!-- Navbar -->
    <header id="header">
        <div class="logo">
            <div class="socials">
                <a href="https://www.linkedin.com/in/pauline-bertrand-166b3624a/" title="Lien vers mon profil Linkedin"
                    target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <g>
                            <path
                                d="M77.796 214.238V98.986H39.488v115.252H77.8zM58.65 83.253c13.356 0 21.671-8.85 21.671-19.91-.25-11.312-8.315-19.915-21.417-19.915-13.111 0-21.674 8.603-21.674 19.914 0 11.06 8.312 19.91 21.169 19.91h.248zM99 214.238h38.305v-64.355c0-3.44.25-6.889 1.262-9.346 2.768-6.885 9.071-14.012 19.656-14.012 13.858 0 19.405 10.568 19.405 26.063v61.65h38.304v-66.082c0-35.399-18.896-51.872-44.099-51.872-20.663 0-29.738 11.549-34.78 19.415h.255V98.99H99.002c.5 10.812-.003 115.252-.003 115.252z" />
                        </g>
                    </svg>
                </a>
                <a href="https://github.com/Shrod18" title="Lien vers mon profil GitHub" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 999.937 999.937">
                        <path
                            d="M0 499.968c0-138.012 48.825-255.843 146.476-353.493C244.125 48.825 361.956 0 499.969 0 637.98 0 755.811 48.825 853.462 146.475c97.649 97.65 146.475 215.481 146.475 353.493s-48.825 255.843-146.475 353.493c-97.65 97.65-215.481 146.476-353.493 146.476-138.013 0-255.844-48.825-353.493-146.476C48.825 755.812 0 637.979 0 499.968zm54.684 0c0 122.389 43.617 227.199 130.851 314.434 87.234 87.233 192.045 130.851 314.434 130.851 122.388 0 227.199-43.617 314.433-130.851 87.234-87.234 130.851-192.045 130.851-314.434 0-122.388-43.616-227.199-130.851-314.433C727.168 98.301 622.356 54.684 499.969 54.684c-122.389 0-227.199 43.617-314.434 130.851C98.301 272.769 54.684 377.58 54.684 499.968zm140.617 107.415c-2.604-2.604-2.604-5.208 0-7.812 5.207-5.208 11.718-7.161 19.529-5.859 7.812 1.302 12.369 2.604 13.671 3.906 9.114 3.906 19.205 12.694 30.271 26.366 11.066 13.671 19.855 23.11 26.366 28.318 31.248 26.04 63.146 27.993 95.696 5.859 2.604-9.114 6.836-16.926 12.694-23.437 5.858-6.51 11.393-11.066 16.601-13.671 5.209-2.604 14.323-6.51 27.343-11.718-42.967-3.906-77.795-11.393-104.486-22.46s-47.849-25.063-63.473-41.989c-20.832-23.436-33.527-54.033-38.084-91.791-4.558-37.758-1.628-72.261 8.789-103.509 7.812-19.53 18.879-37.106 33.2-52.731-10.416-32.55-8.463-69.657 5.859-111.321 41.664 2.604 79.422 16.926 113.274 42.966 65.1-16.926 132.804-17.577 203.111-1.953 9.114-6.51 23.111-14.647 41.989-24.413 18.879-9.765 42.641-15.299 71.285-16.601 5.208 14.322 8.789 31.248 10.742 50.778s.977 37.758-2.929 54.684c29.945 31.248 45.569 72.912 46.871 124.992 0 41.664-7.16 76.167-21.482 103.509s-39.711 50.127-76.167 68.354c-24.738 11.719-57.288 18.879-97.65 21.483 18.229 9.114 31.574 18.554 40.037 28.319 8.464 9.765 13.997 25.063 16.602 45.895v61.521l1.952 59.566c3.906 6.511 8.464 12.044 13.672 16.602 5.208 4.557 9.765 7.812 13.671 9.765 3.905 1.953 5.208 4.883 3.905 8.789-1.302 3.906-6.51 5.859-15.623 5.859-22.135 0-39.711-7.812-52.731-23.437-3.906-6.51-5.859-14.321-5.859-23.436v-93.744c0-10.416-2.604-17.903-7.812-22.46-5.208-4.558-10.416-7.487-15.624-8.789v123.039c0 22.134 2.604 36.456 7.812 42.966s8.463 13.021 9.766 19.53c1.302 1.302.325 2.278-2.93 2.929-3.254.65-8.788-.325-16.601-2.929-16.926-3.906-28.644-12.695-35.154-26.366-6.51-13.671-9.765-28.319-9.765-43.943V667.926H488.25v121.086c0 15.624-3.256 30.598-9.766 44.919-9.113 18.229-26.04 27.993-50.777 29.295-3.906-1.302-5.859-2.604-5.859-3.905 1.302-1.303 5.208-7.812 11.718-19.53 1.302-2.604 2.93-7.812 4.883-15.624 1.954-7.812 2.93-16.926 2.93-27.342v-123.04c-5.208 1.302-10.091 4.231-14.648 8.789s-6.836 12.044-6.836 22.46v93.744c0 9.113-1.953 16.926-5.859 23.436-11.718 15.624-29.295 23.437-52.73 23.437-9.114 0-14.322-1.953-15.624-5.859-1.303-2.604-.977-4.883.977-6.836s4.883-4.232 8.789-6.836c3.906-2.604 6.51-4.558 7.812-5.859 5.208-3.906 9.113-9.114 11.718-15.624 3.906-5.208 4.882-18.879 2.929-41.013s-2.279-36.456-.977-42.966c-33.853 11.718-68.355 5.858-103.51-17.577-10.416-10.416-20.832-25.39-31.248-44.919-7.812-14.323-23.436-31.249-46.871-50.779z" />
                    </svg>
                </a>
            </div>
            <a href="#accueil" class="name">BERTRAND Pauline</a>
        </div>

        <div id="hamburger" tabindex="0" role="button" aria-roledescription="mobile menu open/close button"
            aria-label="open/close menu button" onclick="toggleMenu()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <nav>
            <ul id="menu">
                <li class="accueil active"><a href="#accueil" onclick="toggleMenu()">Accueil</a></li>
                <li class="profil"><a href="#profil" onclick="toggleMenu()">Profil</a></li>
                <li class="formationsXP"><a href="#formationsXP" onclick="toggleMenu()">Expériences</a></li>
                <li class="xpPro"><a href="#xpPro" onclick="toggleMenu()">Réalisations</a></li>
                <li class="skills"><a href="#skills" onclick="toggleMenu()">Compétences</a></li>
                <li class="veille"><a href="#veille" onclick="toggleMenu()">Veille</a></li>
                <li class="contact"><a href="#contact" onclick="toggleMenu()">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section class="banner" id="accueil">
        <div>
            <h1>
                <span>BERTRAND Pauline</span>
            </h1>
            <h2>BTS SIO option SLAM</h2>
            <a href="#profil" class="btn">En savoir plus</a>
        </div>
    </section>

    <!-- Profil -->
    <section class="about" id="profil">
        <div class="heading">
            <h2>Profil</h2>
        </div>
        <div class="content">
            <div class="contentBx w50">
                <h3>A propos de moi</h3>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Je m'appelle Pauline BERTRAND et je suis actuellement un BTS SIO option SLAM (Solutions Logicielles et Applications Métiers) depuis 2 ans au lycée Claude Nougaro à Monteils, 82300.
                </p>
                <h3>Parcours scolaire</h3>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    J'ai obtenu un Bac Général en 2022 comprenant les spécialités NSI et Arts Plastiques au lycée Clément Marot à Cahors, 46000. Ainsi que le brevet des collèges en 2019.
                </p>
                <h3>Parcours Professionnel</h3>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    J'ai travailler à de nombreuses reprises en entreprise pendant les périodes de vacances scolaires. Ces 2 mois à l'entreprise Intersport ainsi que les 2 mois à l'entreprise Gémo m'ont permis d'observer la vie en entreprise et également de m'intégrer dans une équipe.
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Etant intéressées depuis de nombreuses années par l'informatique, je souhaite continuer mes études en Licence Professionnelle afin de me spécialiser.
                </p>
                <h3>Mes qualités</h3>
                <p>
                    - Rigoureuse <br>
                    - Autonome <br>
                    - Bon relationnel et adaptabilité <br>
                </p>
                
                <div class="dropdown">
                    <figure class="heading">
                        <iframe class="center" src="./assets/docs/CV.pdf" allow="fullscreen" width="750" height="1000"
                            frameborder="0"></iframe>
                    </figure>
                    <!-- <a href="./assets/docs/CV.pdf" id="syntheseE4" target="_blank">
                            <span>
                                <i class="fa fa-eye"></i>
                                Consulter CV
                            </span>
                        </a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="timelineContainer" id="formationsXP">
        <div class="heading white">
            <h2>Formations et Expériences</h2>
        </div>
        <div class="timeline">
            <div></div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Janvier / Février 2024</h3>
                    <h3 class="card-subtitle">Stage 2ème année - Pro à Pro</h3>
                    <p class="card-detail">Pro à Pro - Montauban, 82121</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Juin 2023</h3>
                    <h3 class="card-subtitle">Stage 1ère année - Groupe OGEC</h3>
                    <p class="card-detail"> Ensemble scolaire Saint-Etienne - Cahors, 46000 </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">2023 - 2024</h3>
                    <h3 class="card-subtitle">BTS SIO option SLAM</h3>
                    <p class="card-detail">Lycée Claude Nougaro - Monteils, 82300</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">2022</h3>
                    <h3 class="card-subtitle">Baccalauréat Général</h3>
                    <p class="card-detail">Lycée Clément Marot - Cahors, 46000</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">2019</h3>
                    <h3 class="card-subtitle">Brevet des collèges</h3>
                    <p class="card-detail">Collège Gambetta - Cahors, 46000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Réalisations -->
    <section class="work" id="xpPro">
        <div class="heading white">
            <h2>Réalisations</h2>
            <div class="contentBx">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Au cours de ma préparation au BTS SIO option SLAM, j'ai réalisé plusieurs projets lors de stages en entreprise ou d'ateliers professionnels encadrés par l'équipe pédagogique de mon centre de formation. Ces réalisations en contexte professionnel ou pédagogique m'ont permis d'acquérir les blocs de compétences du réferentiel du BTS SIO.
                </p>
            </div>
            <div class="dropdown-wrapper">
                <!-- <div class="dropdown">
                        <a href="./assets/docs/bts/p.bertrandTableau de synthèse E4.pdf" id="syntheseE4"
                            target="_blank">
                            <span>
                                <i class="fa fa-eye"></i>
                                Tableau de synthèse épreuve E4
                            </span>
                        </a>
                    </div> -->
                <figure class="center">
                    <iframe class="center" src="./assets/docs/bts/p.bertrandTableau de synthèse E4.pdf"
                        allow="fullscreen" width="750" height="1000" frameborder="0"></iframe>
                </figure>
                <!-- <div class="dropdown">
                        <a href="./assets/docs/bts/Bloc_suivi_competences.pdf" id="suiviComp" target="_blank">
                            <span>
                                <i class="fa fa-eye"></i>
                                Description des compétences
                            </span>
                        </a>
                    </div> -->
            </div>
        </div>
        <div class="content">
            <div class="contentBx">
                <h3>Stages</h3>
                <button class="acc-btn">Stage 1ère année - Groupe OGEC - Juin 2023</button>
                <div class="acc-content">
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        La société Centre Formation Recrutement (CFR) propose des services de formation pour adulte
                        de courte durée (langues, bureautique, design... ) à destination d'employeurs ou de
                        particuliers. Lors de sa création en 2016, un <a href="./assets/docs/cfr/screen_old_cfr.pdf"
                            target="_blank">site web</a> a été déployé afin de permettre la prise de contact de
                        potentiels clients avec l'entreprise. Le site n'ayant pas ou peu été maintenu depuis, la
                        direction a souhaité moderniser ce site vitrine : <a href="https://www.groupecfr.com"
                            target="_blank">groupecfr.com</a>. J'ai donc participé au développement du nouveau site
                        vitrine, développé en HTML/CSS/JavaScript et PHP, au sein d'une équipe de 4 stagiaires.
                    </p>
                    <div class="missions-comp">
                        <div class="missions">
                            <h4>Missions</h4>
                            <ul>
                                <li>Veille concurrentielle</li>
                                <li>Création d'une maquette de la page formation du site</li>
                                <li>Conception et développement d'un nouveau site web</li>
                                <li><span style="text-decoration: underline; font-weight: 700;">Front-end :</span>
                                    HTML / CSS / JS <br> <span
                                        style="text-decoration: underline; font-weight: 700;">Back-end :</span> PHP
                                    / MySQL et phpMyAdmin pour la gestion de la base de données </li>
                                <li>Design responsive pour la navigation mobile</li>
                                <li>Git & GitHub pour le travail collaboratif</li>
                                <li>Mise en ligne du site sur O2Switch via l'interface Cpanel</li>
                                <li>Rédaction d'un document technique</li>
                                <li>Optimisation du référencement "naturel" du nouveau site web</li>
                            </ul>
                        </div>
                        <div class="comp">
                            <h4>Compétences</h4>
                            <ul>
                                <li>Mettre à disposition des utilisateurs un service informatique</li>
                                <li>▸ Réaliser les tests d’intégration et d’acceptation d’un service</li>
                                <li>▸ Déployer un service</li>
                            </ul>
                        </div>
                    </div>
                    <p>
                    <div class="dropdown">
                        <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                        <div class="dropdown-content">
                            <a href="assets/docs/cfr/analyse_concurrentielle.pdf" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Veille concurrentielle
                            </a>
                            <a href="assets/docs/cfr/maquette_formation.pdf" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Maquette et charte graphique
                            </a>
                            <a href="assets/docs/cfr/CFR_Worksheet.pdf" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Document de travail
                            </a>
                            <a href="assets/docs/cfr/DocTechnique.pdf" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Documentation technique
                            </a>
                        </div>
                    </div>
                    </p>
                </div>

                <button class="acc-btn">Stage 2ème année - Pro à Pro - Janvier / Fevrier 2024</button>
                <div class="acc-content">
                    <p>
                        description
                    </p>
                    <div class="missions-comp">
                        <div class="missions">
                            <h4>Missions</h4>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul>
                        </div>
                        <div class="comp">
                            <h4>Compétences</h4>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul>
                        </div>
                    </div>
                    <p>
                    <div class="dropdown">
                        <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                        <div class="dropdown-content">
                            <a href="assets/docs/eastechnology/Trello EASTECHNOLOGY.png" target="_blank">
                                <i class="fa fa-picture-o"></i>
                                Capture d'écran Trello
                            </a>
                            <a href="assets/docs/eastechnology/screen_visionneuse3D.png" target="_blank">
                                <i class="fa fa-picture-o"></i>
                                Capture d'écran visionneuse 3D
                            </a>
                            <a href="assets/docs/eastechnology/screen_vectary.png" target="_blank">
                                <i class="fa fa-picture-o"></i>
                                Capture d'écran Vectary
                            </a>
                        </div>
                    </div>
                    </p>
                </div>

            </div>
            <div class="contentBx">
                <h3>Ateliers Professionnels</h3>

                <button class="acc-btn">AP2 - Netto</button>
                <div class="acc-content">
                    <div class="missions-comp">
                        <div class="missions">
                            <h4>Activité réalisée</h4>
                            <ul>
                                <p>Ce projet s'inscrit dans le contexte suivant :</p>
                                <li>La société Intermarché vous demande d'établir des devis relatifs à l'évolution de
                                    leur parc informatique. </li>
                            </ul>
                        </div>
                        <div class="comp">
                            <h4>Compétences</h4>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                    <div class="dropdown">

                        <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                        <div class="dropdown-content">
                            <a href="assets\docs\AP2_Netto\Contexte.pdf" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Contexte
                            </a>
                            <a href="assets\docs\AP2_Netto\Projet Netto.pdf" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Projet Netto
                            </a>
                            <a href="assets\docs\AP2_Netto\AP2_Rapport_Netto_SanchezBertrandChaouiLoirot.pdf"
                                target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Rapport Netto
                            </a>
                        </div>
                    </div>
                    </p>
                </div>

                <button class="acc-btn">AP3 - KSAV</button>
                <div class="acc-content">
                    <div class="missions-comp">
                        <div class="missions">
                            <h4>Activité réalisée</h4>
                            <ul>
                                <p>Ce projet s'inscrit dans le contexte suivant :</p>
                                <li>La société Salaün Voyage. </li>
                            </ul>
                            <p>
                                <a href="https://github.com/Shrod18/KSAV2" target="_blank"
                                    onclick="window.open('https://github.com/Shrod18/KSAV2');">
                                    Liens GitHub du projet
                                </a>
                            </p>
                        </div>
                        <div class="comp">
                            <h4>Compétences</h4>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                    <div class="dropdown">

                        <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                        <div class="dropdown-content">
                            <a href="assets\docs\AP3_KSAV\SALAUN-AppliSAVagence-KSAV-Fiche Descriptive.pdf"
                                target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Cahier des charges
                            </a>
                            <a href="assets/docs/ap1/Devis.pdf" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Rapport
                            </a>
                        </div>
                    </div>
                    </p>
                </div>

                <button class="acc-btn">AP4 - </button>
                <div class="acc-content">
                    <div class="missions-comp">
                        <div class="missions">
                            <h4>Activité réalisée</h4>
                            <ul>
                                <p>Ce projet s'inscrit dans le contexte suivant :</p>
                                <li>La société Salaün Voyage. </li>
                            </ul>
                            <p>
                                <a href="https://github.com/Shrod18/KSAV2" target="_blank"
                                    onclick="window.open('https://github.com/Shrod18/KSAV2');">
                                    Liens GitHub du projet
                                </a>
                            </p>
                        </div>
                        <div class="comp">
                            <h4>Compétences</h4>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                    <div class="dropdown">
                        <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                        <div class="dropdown-content">
                            <a href="assets\docs\AP3_KSAV\SALAUN-AppliSAVagence-KSAV-Fiche Descriptive.pdf"
                                target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Cahier des charges
                            </a>
                            <a href="assets/docs/ap1/Devis.pdf" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Rapport
                            </a>
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <div class="content">
                <div class="contentBx">
                    <br><br>
                    <h3>Projets</h3>
                    <button class="acc-btn">TC4_Réseau : Mission GLPI</button>
                    <div class="acc-content">
                        <p>
                            
                        </p>
                        <div class="missions-comp">
                            <div class="missions">
                                <h4>Missions</h4>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="comp">
                                <h4>Compétences</h4>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                        <div class="dropdown">
                            <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                            <div class="dropdown-content">
                                <a href="assets\docs\GLPI\Mission GLPI 1 - gestion de parc.pdf" target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Mission GLPI
                                </a>
                                <a href="assets\docs\GLPI\BERTRANDPauline_MissionGLPI1.pdf" target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Rapport 
                                </a>
                            </div>
                        </div>
                        </p>
                    </div>
                    <button class="acc-btn">TC4_Réseau - Réplication de données GLPI</button>
                    <div class="acc-content">
                        <p>

                        </p>
                        <div class="missions-comp">
                            <div class="missions">
                                <h4>Missions</h4>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="comp">
                                <h4>Compétences</h4>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                        <div class="dropdown">
                            <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                            <div class="dropdown-content">
                                <a href="assets\docs\Azure\Réplication MariaDB sur AZURE.pdf" target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Mission Réplication des données GLPI
                                </a>
                                <a href="assets\docs\Azure\BERTRANDPauline_RapportReplicationDeDonneesGLPI.pdf" target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Rapport
                                </a>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compétences -->
    <section id="skills">
        <div class="heading white">
            <h2>Compétences</h2>
        </div>
        <div class="skills-container">
            <div class="skill-badge">
                <img src="./assets/icons/skills/html5.svg" alt="Logo HTML5" class="skill-logo">
                <h3 class="skill-name">HTML</h3>
            </div>
            <div class="skill-badge">
                <img src="./assets/icons/skills/css.svg" alt="Logo CSS3" class="skill-logo">
                <h3 class="skill-name">CSS</h3>
            </div>
            <div class="skill-badge">
                <img src="./assets/icons/skills/javascript.svg" alt="Logo JavaScript" class="skill-logo">
                <h3 class="skill-name">JavaScript</h3>
            </div>
            <div class="skill-badge">
                <img src="./assets/icons/skills/mysql.svg" alt="Logo MySQL" class="skill-logo">
                <h3 class="skill-name">MySQL</h3>
            </div>
            <div class="skill-badge">
                <img src="./assets/icons/skills/java.svg" alt="Logo Java" class="skill-logo">
                <h3 class="skill-name">Java</h3>
            </div>
            <div class="skill-badge">
                <img src="./assets/icons/skills/c.png" alt="Logo c#" class="skill-logo">
                <h3 class="skill-name">C#</h3>
            </div>
            <div class="skill-badge">
                <img src="./assets/icons/skills/python.png" alt="Logo Python" class="skill-logo">
                <h3 class="skill-name">Python</h3>
            </div>
            <div class="skill-badge">
                <img src="./assets/icons/skills/php.png" alt="Logo PHP" class="skill-logo">
                <h3 class="skill-name">PHP</h3>
            </div>
            <div class="skill-badge">
                <img src="./assets/icons/skills/git.svg" alt="Logo Git" class="skill-logo">
                <h3 class="skill-name">Git</h3>
            </div>
        </div>
    </section>



    <!-- Veille technologique -->
    <section class="veille" id="veille">
        <div class="heading">
            <h2>Veille technologique</h2>
            <div class="contentBx">
                <p>La veille technologique consiste à se tenir informé des évolutions techniques et des innovations dans un secteur d’activité donné. Cela comprend notamment la surveillance, la collecte, le partage et la diffusion d’information permettant d’anticiper ou d'avoir connaissance des changements en matière de recherche, développement, brevet, lancement de nouveaux produits, matériaux, processus, concepts, innovation de fabrication, etc….</p>
                <p>Aujourd’hui, la sécurité est un enjeu majeur pour les entreprises ainsi que pour l’ensemble des acteurs qui l’entourent. Aussi j'ai choisi d'axer ma veille sur le thème de la cybersécurité. </p>
                <p>Pour réaliser cette veille, j'utilise l'aggrégateur de flux RSS Feedly pour visualiser des articles autour de différents thèmes (cybersécurité, développement...), puis je sélectionne les articles pertinents, les trie, et les enregistre grâce à l'outil Pearltrees, visible ci-dessous </p>
            </div>
        </div>
        <div class="content">
            <?php
                include_once('application/rss.php');
                $feedlist = parseFlux('https://news.mit.edu/rss/topic/artificial-intelligence2');
                echo displayFlux($feedlist, 5, "L'avancée de l'Intelligence Artificielle");
            ?> 

        </div>
    </section>

    <!-- Contact -->
    <section class="contactForm">
        <div class="contactInfo">
            <h3>Contact Info</h3>
            <div class="flexeur">
            <div class="contactInfoBx">
                <div class="box">
                    <div class="icon adress"><i class="far fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>pauline.bertrand.461@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon adress"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="text">
                        <h3>Adresse</h3>
                        <p>Pradines, 46090</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div>
            <p>BERTRAND Pauline <img class="paws" src="./assets/icons/paws.png" alt="Icone de pattes de chat"></p>
            <p>© 2024 All rights reserved</p>
        </div>
    </footer>
</body>

</html>
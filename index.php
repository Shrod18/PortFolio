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
                <li class="formationsXP"><a href="#experiences" onclick="toggleMenu()">Expériences</a></li>
                <li class="xpPro"><a href="#projets" onclick="toggleMenu()">Réalisations</a></li>
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
                    Je m'appelle Pauline BERTRAND, j'ai 19 ans et je suis actuellement un BTS SIO option SLAM (Solutions
                    Logicielles
                    et Applications Métiers) depuis 2 ans au lycée Claude Nougaro à Monteils, 82300.
                </p>
                <h3>Parcours scolaire</h3>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    J'ai obtenu un Bac Général en 2022 comprenant les spécialités NSI et Arts Plastiques au lycée
                    Clément Marot à Cahors, 46000. Ainsi que le brevet des collèges en 2019.
                </p>
                <h3>Parcours Professionnel</h3>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    J'ai travailler à de nombreuses reprises en entreprise pendant les périodes de vacances scolaires.
                    Ces 2 mois à l'entreprise Intersport ainsi que les 2 mois à l'entreprise Gémo m'ont permis
                    d'observer la vie en entreprise et également de m'intégrer dans une équipe.
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Etant intéressées depuis de nombreuses années par l'informatique, je souhaite continuer mes études
                    en Licence Professionnelle afin de me spécialiser.
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
                    Au cours de ma préparation au BTS SIO option SLAM, j'ai réalisé plusieurs projets lors de stages en
                    entreprise ou d'ateliers professionnels encadrés par l'équipe pédagogique de mon centre de
                    formation. Ces réalisations en contexte professionnel ou pédagogique m'ont permis d'acquérir les
                    blocs de compétences du réferentiel du BTS SIO.
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
                        L’OGEC (Organisme de Gestion de l’Enseignement Catholique) est une association loi 1901,
                        regroupant des personnes bénévoles qui, lors de l’assemblée générale peuvent être élus et
                        devenir membres du Conseil d’Administration.
                        Ce groupe collabore avec l'ensemble scolaire Saint Etienne situé a Cahors, afin de valoriser
                        l’établissement tout en apportant un bien être à chacun : élèves, personnels, enseignants,
                        parents. Cela se traduit par des achats de matériels, des aménagements de locaux, des
                        constructions et le calcul à sa plus juste valeur des frais de scolarité, de restauration et
                        d’internat.
                    </p>
                    <p class="date"> Du 30/05/2023 au 30/06/2023.</p>
                    <div class="missions-comp">
                        <div class="missions">
                            <h4>Missions</h4>
                            <p>Créer un fichier .xml afin de déployer un service sur un parc informatique de plusieurs centaines de postes.</p>
                            <ul>
                                <li>Utiliser un exécutable .exe ainsi qu'un fichier d'installation .msi pour déployer ce
                                    service.</li>
                                <li>Utiliser le packages.xml WPKG, un programme automatisé de déploiement, de mise à
                                    niveau et de suppression de logiciels pour Windows. En d'autres mots, c'est une
                                    liste de tous les paquets et scripts pouvant être déployés ou exécuter sur les
                                    stations de travail.</li>
                            </ul>
                        </div>
                        <div class="comp">
                            <h4>Compétences</h4>
                            <ul>
                                <li>Mettre à disposition des utilisateurs un service informatique</li>
                                <li>Réaliser les tests d’intégration et d’acceptation d’un service</li>
                                <li>Déployer un service</li>
                            </ul>
                        </div>
                    </div>
                    <p>
                    <div class="dropdown">
                        <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                        <div class="dropdown-content">
                            <a href="assets\docs\Stage XML\tscc.xml" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Fichier .xml
                            </a>
                            <a href="assets\docs\Stage XML\tscc.txt" target="_blank">
                                <i class="far fa-file-pdf-o"></i>
                                Fichier .bat
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
                    <p class="date"> Du 08/01/2024 au 16/02/2024</p>
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
                            <a href="/" target="_blank">
                                <i class="fa fa-picture-o"></i>
                                1
                            </a>
                            <a href="/" target="_blank">
                                <i class="fa fa-picture-o"></i>
                                2
                            </a>
                            <a href="/" target="_blank">
                                <i class="fa fa-picture-o"></i>
                                3
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
                    <button class="acc-btn">AP2 - Netto</button>
                    <div class="acc-content">
                        <p>
                            <u>Ce projet s'inscrit dans le contexte suivant :<br><br></u>
                            &nbsp;&nbsp;&nbsp;&nbsp;Intermarché, enseigne française de grande distribution du groupe Les
                            mousquetaires, a depuis
                            quelques années élargi son domaine d'activités, en proposant à ses clients la possibilité de
                            louer des véhicules (utilitaires ou véhicules de tourisme)
                            Madame B., directrice du magasin Netto d'Aubusson, constate une difficulté pour gérer les
                            opérations d'entretien de sa flotte de véhicules. Le magasin est doté d'une application
                            fournie par le groupe Intermarché, permettant de gérer ces locations de véhicules, mais
                            cette application n'inclut pas de fonctionnalité permettant de gérer les entretiens des
                            véhicules.
                            Mme B fait appel à une société de services Informatiques locale (Aubusson IT Services) pour
                            tenter de solutionner le problème
                        </p>
                        <p class="date"> Du 07/03/2023 au 16/05/2023.</p>
                        <p>
                            <a href="https://github.com/Shrod18/Netto" target="_blank"
                                onclick="window.open('https://github.com/Shrod18/Netto');">
                                Lien GitHub du projet
                            </a>

                        </p>
                        <div class="missions-comp">
                            <div class="missions">
                                <h4>Activités réalisées</h4>
                                <ul>
                                    <li>Plan et maquette du site</li>
                                    <li>Pages Web</li>
                                    <li>Dictionnaire de données, Dépendances fonctionnelles, MCD, MLD</li>
                                    <li>Site web fonctionnel</li>
                                    <li>Rapport écrit</li>
                                </ul>
                            </div>
                            <div class="comp">
                                <h4>Compétences</h4>
                                <ul>
                                    <li>Participer à l’évolution d’un site Web exploitant les données de
                                        l’organisation.</li>
                                    <li>Analyser les objectifs et les modalités d’organisation d’un projet</li>
                                    <li>Développer son projet professionnel</li>
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
                                <!-- <a href="assets\docs\AP2_Netto\netto\php\pages\authentification.php"
                                    target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Site Netto
                                </a> -->
                            </div>
                        </div>
                        </p>
                    </div>

                    <button class="acc-btn">AP3 - KSAV</button>
                    <div class="acc-content">
                        <p>
                            <u>Ce projet s'inscrit dans le contexte suivant :</u><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Le Groupe Salaün est une entreprise familiale spécialisée dans les
                            métiers du tourisme. Il
                            est notamment devenu l’un des plus importants Touropérateurs français avec plus de 500
                            collaborateurs et un réseau de plus de 160 points de vente en France et en Belgique.
                        </p>
                        <p>Comme tout organisateur de voyage, l’entreprise est confrontée à la difficulté de mesurer le
                            niveau de
                            satisfaction des personnes qui lui ont fait confiance pour organiser leurs vacances.
                            L'application envisagée, doit ainsi permettre la saisie, la modification et le suivi des
                            retours clients par
                            des fonctions de reporting simples. Cette application permettra d’homogénéiser le traitement
                            et
                            l’analyse de la satisfaction des clients qui ont voyagé avec SALAUN que ce soit avec une
                            marque du
                            Groupe ou avec d’autres Tour Opérateur. </p>
                        <p class="date"> Du 07/09/2023 au 14/12/2023.</p>
                        <p>
                            <a href="https://github.com/Shrod18/KSAV2" target="_blank"
                                onclick="window.open('https://github.com/Shrod18/KSAV2');">
                                Lien GitHub du projet
                            </a>
                        </p>
                        <div class="missions-comp">
                            <div class="missions">
                                <h4>Activités réalisée</h4>
                                <ul>
                                    <li>Plan & Maquettes</li>
                                    <li>Dictionnaire des Données, Dépendances Fonctionnelles, MCD, MLD</li>
                                    <li>Mise en place modèle MVC</li>
                                    <li>CRUD Modèle Voyages, Instances Voyages, Clients, Avis</li>
                                    <li>Création du filtre Login</li>
                                    <li>Rapport</li>
                                </ul>
                            </div>
                            <div class="comp">
                                <h4>Compétences</h4>
                                <ul>
                                    <li>Collecter, suivre et orienter des demandes</li>
                                    <li>Participer à l’évolution d’un site Web exploitant les données de
                                        l’organisation.</li>
                                    <li>Analyser les objectifs et les modalités d’organisation d’un projet</li>
                                    <li>Développer son projet professionnel</li>
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
                                <a href="assets/docs/AP3_KSAV/BlandinBertrand_RapportKSAV2.pdf" target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Rapport
                                </a>
                            </div>
                        </div>
                        </p>
                    </div>

                    <button class="acc-btn">AP4 - </button>
                    <div class="acc-content">
                        <p>
                            <u>Ce projet s'inscrit dans le contexte suivant :<br><br></u>

                        </p>
                        <p>
                            <a href="https://github.com/" target="_blank" onclick="window.open('https://github.com/');">
                                Lien GitHub du projet
                            </a>
                        </p>
                        <div class="missions-comp">
                            <div class="missions">
                                <h4>Activité réalisée</h4>
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
                                <a href="assets/docs/AP3_KSAV/BlandinBertrand_RapportKSAV2.pdf" target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Rapport
                                </a>
                            </div>
                        </div>
                        </p>
                    </div>
                    <button class="acc-btn">TC4_Réseau : Mission GLPI</button>
                    <div class="acc-content">
                        <p>
                            <u>Ce TP s'inscrit dans le contexte suivant :<br><br></u>
                            &nbsp;&nbsp;&nbsp;&nbsp;SAMSIC est une entreprise spécialisée dans le service aux
                            entreprises. Elle intervient dans
                            de
                            nombreux domaines d’activités : Aéroportuaire, BTP, Commerce et distribution,
                            hôtellerierestauration, industrie, etc
                            M. Lebourg, le responsable SI de SAMSIC, a un gros problème. Il se rend bien compte que la
                            gestion
                            de son parc informatique est défaillante. Afin de régler le problème, M. Lebourg décide de
                            mettre en place une solution de gestion du parc
                            informatique basé sur le couple GLPI/fusionInventory. L’application a été récemment
                            installée sur un
                            serveur et remonte déjà des informations du parc existant.
                        </p>
                        <p class="date"> Du 02/02/2023 au 16/03/2023.</p>
                        <div class="missions-comp">
                            <div class="missions">
                                <h4>Missions</h4>
                                <ul>
                                    <li>Maintenir l’inventaire des équipements informatiques. Ceci permettra d’éviter les
                                        oublis et les pertes et de réduire les vols.
                                    </li>
                                    <li>Réaliser la gestion administrative du parc informatique. Il s’agit principalement de gérer les garanties et les contrats de maintenance.
                                    </li>
                                    <li>Assurer la continuité du service. Vous devez vous assurer que tout matériel
                                        arrivant dans l’entreprise est correctement réceptionné et enregistré dans la
                                        base. Vous allez
                                        également devoir gérer les remplacements et gérer les stocks de consommables
                                        afin qu’il n’y ait jamais de pénurie. </li>
                                    <li>Suivre l’évolution financière du matériel. </li>
                                </ul>
                            </div>
                            <div class="comp">
                                <h4>Compétences</h4>
                                <ul>
                                    <li>Recenser et identifier les ressources numériques</li>
                                    <li>Exploiter des référentiels, normes et standards adoptés par le prestataire
                                        informatique</li>
                                    <li>Mettre en place et vérifier les niveaux d’habilitation associés à un service
                                    </li>
                                    <li>Vérifier les conditions de la continuité d’un service informatique</li>
                                    <li>Gérer des sauvegardes</li>
                                    <li>Vérifier le respect des règles d’utilisation des ressources numériques</li>
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

                    <button class="acc-btn">TC5_Dev : Choco&co</button>
                    <div class="acc-content">
                        <p>
                            <u>Ce TP s'inscrit dans le contexte suivant :<br><br></u>
                            &nbsp;&nbsp;&nbsp;&nbsp;M. Lepoulain, directeur de la chocolaterie artisanale Choco & Co
                            vend des œufs, des poules
                            et des
                            lapins qui sont les objets chocolatés qui ont le plus de succès, mais il vend aussi toutes
                            sortes d’objets ou
                            d’animaux en chocolat. M. Lepoulain décide de lancer une campagne de promotion spéciale sur
                            le web
                            intitulée « Joyeuses Pâques avec Choco & Co !».
                            Dans le cadre de cette campagne, une sélection de produits Choco & Co seront proposée à la
                            vente à prix réduits sur un site Internet construit pour l’occasion (chocopaques.fr).
                            M. Lepoulain fait appel à l’entreprise CoolWebDesign pour réaliser le site web.
                            Un formulaire web permettant aux visiteurs du site de commander les chocolats et de payer en
                            ligne a été créé par l’un de vos collègues.
                        </p>
                        <p class="date"> Du 09/02/2023 au 07/04/2023.</p>
                        <div class="missions-comp">
                            <div class="missions">
                                <h4>Missions</h4>
                                <ul>
                                    <li>Récupérer les données de ce formulaire de commande et créer une page web
                                        affichant le récapitulatif de la commande d’un client. </li>
                                    <li>Cette page permettra au
                                        client de vérifier sa commande avant de passer au règlement. Le travail sera
                                        réalisé en PHP.</li>
                                </ul>
                            </div>
                            <div class="comp">
                                <h4>Compétences</h4>
                                <ul>
                                    <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                        <div class="dropdown">
                            <span class="dropdown-btn"><i class="fa fa-download"></i>Documents</span>
                            <div class="dropdown-content">
                                <a href="assets\docs\Choco&co\TP2 - traiter les données d'un formulaire avec PHP.pdf"
                                    target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Mission
                                </a>
                                <a href="assets\docs\Choco&co\index.html" target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Site Choco&co
                                </a>
                                <a href="assets\docs\Choco&co\recap.txt" target="_blank">
                                    <i class="far fa-file-pdf-o"></i>
                                    Code recap.php
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
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;La veille technologique consiste à se tenir informé des évolutions
                    techniques et des innovations dans
                    un secteur d’activité donné. Cela comprend notamment la surveillance, la collecte, le partage et la
                    diffusion d’information permettant d’anticiper ou d'avoir connaissance des changements en matière de
                    recherche, développement, brevet, lancement de nouveaux produits, matériaux, processus, concepts,
                    innovation de fabrication, etc….</p>
            </div>
        </div>
        <div class="content">
            <?php
            include_once('application/rss.php');
            $feedlist = parseFlux('https://www.kdnuggets.com/feed');
            echo displayFlux($feedlist, 3, "L'IA dans KDNugget");
            $feedlist = parseFlux('https://blogs.nvidia.com/feed/');
            echo displayFlux($feedlist, 3, "Les intelligences artificielles dans NVIDIA");
            ?>

        </div>
    </section>

    <!-- Contact -->
    <section class="contactForm" id="contact">
        <div class="heading white">
            <h2>Contactez-moi</h2>
        </div>
        <div class="content">
            <div class="contactInfo">
                <h3>Contact Info</h3>
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

            <!-- https://formsubmit.co -->
            <div class="formBx">
                <form action="" method="POST">
                    <input type="hidden" name="_subject" value="Nouveau mail depuis le portfolio">
                    <input type="hidden" name="_template" value="table">
                    <label for="prenom">Votre prénom
                        <input type="text" name="prenom" id="prenom" placeholder="* Champ requis" required>
                    </label>
                    <label for="nom">Votre nom
                        <input type="text" name="nom" id="nom" placeholder="* Champ requis" required>
                    </label>
                    <label for="email">Votre adresse e-mail
                        <input type="email" name="email" id="email" placeholder="* Champ requis" required>
                    </label>
                    <label for="message">Votre message
                        <textarea name="message" id="message" placeholder="* Champ requis" required></textarea>
                    </label>
                    <input class="btn" type="submit" value="Envoyer">
                </form>
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
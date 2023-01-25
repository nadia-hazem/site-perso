<!DOCTYPE html>
<html lang="fr">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="description" content="Nadia Hazem: développeuse web à Marseille. Je réalise des sites et autres web designs. Consultez mon CV, découvrez mes réalisations et contactez-moi." />

<link rel="canonical" href="index.html" />

<!-- Title -->
<title>Nadia Hazem | Développeuse web , Création de sites internet à Marseille</title>

<!-- Balises Open Graph -->
<meta property="og:title" content="CV Nadia Hazem | Développeuse web à Marseille" />
<meta property="og:type" content="website" />
<meta property="og:url" content="index.html" />
<meta property="og:image" content="assets/img/boss-lady.jpg" />
<meta property="og:description" content="Webmaster, développeuse web et création de sites web à Marseille" />

<!-- Favicons -->
<link rel="shortcut icon" href="assets/img/favicon.ico">
<link rel="apple-touch-icon" href="assets/img/favicon.ico">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon.ico">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon.ico">

<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,300,100' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=Passions+Conflict&family=Arizonia&display=swap" rel="stylesheet">

<!-- Bootstrap-v336.css -->
<link rel="stylesheet" href="assets/css/Bootstrap-min.css" />

<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/94c102a146.js" crossorigin="anonymous"></script>

<!-- CSS Styles -->
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/animate.css" />
<link rel="stylesheet" href="assets/css/themify.css" />
<link rel="stylesheet" href="assets/css/owl-carousel.css" />
<link rel="stylesheet" href="assets/css/fontawsome.css" />

<!-- CSS Template -->
<link rel="stylesheet" href="assets/css/theme.min.css" />
<link rel="stylesheet" href="assets/css/colors.css" id="color" />

</head>

<body class="header-vertical">

<!-- Loader -->
<div id="page-loader" class="bg-white"></div>
<!-- Loader / End -->

    <!-- Header -->
    <header id="header" class="bg-white hidden-sm hidden-xs">

        <!-- Logo -->
        <div class="logo bg-primary">
            <h1 class="name">Nadia Hazem</h1>
            <p class="caption text-secondary">Développeuse web/mobile</p><br>
            <p onclick="goTo('contact')"><i class="fas fa-location-arrow"></i> Marseille, France</p>
        </div>

        <!-- Navigation -->
        <nav id="main-menu">
            <ul class="nav nav-vertical">
                <li><a href="#" onclick="goTo('start')"><span>Haut de page</span></a></li>
                <li><a href="#" title="Mon CV" onclick="goTo('resume')"><span>CV</span></a></li>
                <li><a href="#" title="Mes réalisations" onclick="goTo('portfolio')"><span>Réalisations</span></a></li>
                <li><a href="#" title="Me contacter" onclick="goTo('contact')"><span>Contact</span></a></li>
            </ul>
        </nav>

        <!-- Social media -->
        <div class="social-media">
            <div class="row">
                <div class="icon icon-hover icon-sm col-6"><a href="https://linkedin.com/in/pictelle" target="_blank" title="Mon profil LinkedIn"><i class="ti-linkedin"></i></a></div>
                <div class="altern small col-6 text-white px-2">Recherche alternance</div>
            </div>
        </div>
    </header>
    <!-- Header / End -->

    <!-- Content -->
    <div id="content" class="bg-white">

        <!-- Section - Home -->
        <section id="start" class="section fullheight bg-secondary dark padding-v-60">

            <!-- BG Image -->
            <div class="bg-image animated infinite zooming"><img src="assets/img/photos/boss-lady.jpg" alt="Fond d'écran"></div>

            <!-- Typewriter -->
            <div class="container container-wide v-bottom padding-v-80">
                <h2 class="text-tertiary margin-t-40 margin-b-40">
                <span data-target="local-scroll"><a href="#" onclick="goTo('resume')" class="btn btn-lg btn-primary animated" data-animation="bounceIn" title="Voir mon CV"><span>Voir mon CV</span><i class="ti-arrow-down"></i></a></span>
                <a href="assets/img/cv-dev_nadia-hazem-fr.pdf" target="_blank" class="btn btn-lg btn-primary animated" title="Télécharger mon CV"><span>Télécharger mon CV</span><i class="ti-file"></i></a>
                </h2>
                <!-- script dynamique -->
                <div id="myself">
                    <pre id="typewriter">
                        <span class="var-highlight">var</span> bonjour = {
                            name: <span class="string-highlight">'Hazem Nadia'</span>,
                            location: <span class="string-highlight">'Marseille'</span>,
                            function: <span class="string-highlight">'Developer'</span>,
                            available: <span class="string-highlight">'true'</span>,
                            properties:[<span class="string-highlight">'HTML / CSS'</span>,
                            <span class="string-highlight">'PHP'</span>,
                            <span class="string-highlight">'Javascript'</span>];
                            
                        }; 
                    </pre>
                </div>
            </div>

        </section>
        <!-- Section - Home / End -->

        <!-- Section - Portfolio -->
        <section id="portfolio" class="section bg-grey padding-v-60">

            <!-- Content -->
            <div class="container container-wide">

                <h3 class="margin-b-50">Mes Réalisations</h3>

                <!-- Filters -->
                <nav class="text-center">
                    <ul class="nav nav-filter nav-pills margin-b-40" data-filter-grid="#portfolio-list">
                        <li class="active"><a href="#" data-filter="*" title="Toutes mes réalistaions">Tout</a></li>
                        <li><a href="#" data-filter=".css" title="Travaux CSS">Travaux CSS</a></li>
                        <li><a href="#" data-filter=".php" title="Travaux PHP/MySQL">Travaux PHP/MySQL</a></li>
                        <li><a href="#" data-filter=".js" title="Travaux Javascript">Travaux Javascript</a></li>
                    </ul>
                </nav>

                <div id="portfolio-list" class="row masonry">
                    <!-- Masonry Sizer -->
                    <div class="masonry-sizer col-lg-3 col-sm-6 col-xs-12"></div>

                    <!-- Masonry Element --> <!--Runtrack-3 JS-->
                    <div class="js masonry-item margin-b-30 col-lg-4 col-sm-12 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://github.com/nadia-hazem/runtrack3.git" data-target="ajax-modal" title="Runtrack-3 JS">
                                <img src="assets/img/screenshot-runtrack-3.jpg" alt="Runtrack-3 JS" /></a>
                            </div>
                            <div class="item-hover bg-dark dark">
                                <div class="item-hover-content">
                                    <a href="https://github.com/nadia-hazem/runtrack3.git" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Runtrack-3 JS"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4>Runtrack-3 JavaScript</h4>
                                <h6>10<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">Runtrack-3 JS</span>
                                <a href="https://github.com/nadia-hazem/runtrack3.git" target="_blank" class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--memory-->
                    <div class="php masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://nadia-hazem.students-laplateforme.io/memory/index.php" data-target="ajax-modal" title="Jeu Memory">
                                <img src="assets/img/screenshot-memory.jpg" alt="Jeu Memory" />
                            </div>
                            <div class="item-hover bg-dark dark">
                                <div class="item-hover-content">
                                    <a href="https://nadia-hazem.students-laplateforme.io/memory/index.php" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Jeu Memory"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4><a href="https://nadia-hazem.students-laplateforme.io/memory/index.php" data-target="ajax-modal" title="Jeu Memory">Jeu Memory</a></h4>
                                <h6>9<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">Création d'un Jeu Memory PHP/SQL.</span>
                                <a href="https://github.com/nadia-hazem/memory.git" target="_blank" class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--classes & PDO-->
                    <div class="php masonry-item margin-b-30 col-lg-4 col-sm-12 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://github.com/nadia-hazem/classes-php.git" data-target="ajax-modal" title="Les classes">
                                <img src="assets/img/screenshot-classes.jpg" alt="Classes php" /></a>
                            </div>
                            <div class="item-hover bg-dark dark">
                                <div class="item-hover-content">
                                    <a href="https://github.com/nadia-hazem/classes-php.git" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Les Classes php"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4>Les classes</h4>
                                <h6>8<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">PHP & PDO</span>
                                <a href="https://github.com/nadia-hazem/classes-php.git" target="_blank" class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--moncms-->
                    <div class="css masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://nadia-hazem.students-laplateforme.io/moncms/index.php" data-target="ajax-modal" title="Module réservation de salle">
                                <img src="assets/img/screenshot-moncms.jpg" alt="WordPress Shop" />
                            </div>
                            <div class="item-hover bg-dark dark">
                                <div class="item-hover-content">
                                    <a href="https://nadia-hazem.students-laplateforme.io/moncms/index.php" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="WordPress Shop"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4><a href="https://nadia-hazem.students-laplateforme.io/moncms/index.php" data-target="ajax-modal" title="Module réservation de salle">MonCMS site boutique WordPress</a></h4>
                                <h6>7<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">Création d'un site boutique avec le CMS WordPress.</span>
                                <a href="https://github.com/nadia-hazem/reservation-salles.git" target="_blank"  class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--reservation salle-->
                    <div class="php masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://nadia-hazem.students-laplateforme.io/reservation-salles/index.php" data-target="ajax-modal" title="Module réservation de salle">
                                    <img src="assets/img/screenshot-reservation-salle.jpg" alt="Réservation salle" /></a>
                                <div class="item-hover bg-dark dark">
                                    <div class="item-hover-content">
                                        <a href="https://nadia-hazem.students-laplateforme.io/reservation-salles/index.php" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Module réservation de salle"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4><a class="title" title="Réservation de salle" href="https://nadia-hazem.students-laplateforme.io/reservation-salles/index.php" data-target="ajax-modal">Réservation de salle</a></h4>
                                <h6>6<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">Site module de réservation de salle avec base de données.</span>
                                <a href="https://github.com/nadia-hazem/reservation-salles.git" target="_blank"  class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--site la plateforme-->
                    <div class="css masonry-item margin-b-30 col-lg-3 col-sm-6 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://nadia-hazem.students-laplateforme.io/site-la-plateforme/accueil.html" data-target="ajax-modal" title="Le site LA PLATEFORME">
                                    <img src="assets/img/screenshot-sitelaplateforme.jpg" alt="Le site LA PLATEFORME" /></a>
                                <div class="item-hover bg-dark dark">
                                    <div class="item-hover-content">
                                        <a href="https://nadia-hazem.students-laplateforme.io/site-la-plateforme/accueil.html" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Le site LA PLATEFORME"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4><a href="https://nadia-hazem.students-laplateforme.io/site-la-plateforme/accueil.html" class="title" title="Le site LA PLATEFORME"  data-target="ajax-modal">Le site La Plateforme</a></h4>
                                <h6>1<sup>er</sup> Job</h6>
                                <span class="caption text-muted">Reproduction de certaines pages du site La Plateforme, centre de formation.
                                </span>
                                <a href="https://github.com/nadia-hazem/site-la-plateforme.git" target="_blank" class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--voyage-->
                    <div class="css masonry-item margin-b-30 col-lg-3 col-sm-6 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://nadia-hazem.students-laplateforme.io/voyages/index.html" data-target="ajax-modal" title="Hot 21 Radio"><img src="assets/img/screenshot-voyage.jpg" alt="Le site VOYAGES" /></a>
                                <div class="item-hover bg-dark dark">
                                    <div class="item-hover-content">
                                        <a href="https://nadia-hazem.students-laplateforme.io/voyages/index.html" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Le site VOYAGES"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4><a href="https://nadia-hazem.students-laplateforme.io/voyages/index.html" class="title" title="Le site VOYAGES"  data-target="ajax-modal">Le site VOYAGES</a></h4>
                                <h6>3<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">Travail collaboratif avec 3 autres étudiants. J'ai réalisé la page "Indonésie" et le menu.
                                </span>
                                <a href="https://github.com/thomas-spinec/voyages.git" target="_blank" class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--fansite-->
                    <div class="css masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://nadia-hazem.students-laplateforme.io/fansite/index.php" data-target="ajax-modal" title="Le site Fansite">
                                <img src="assets/img/screenshot-fansite.jpg" alt="Le site Fansite" />
                            </div>
                            <div class="item-hover bg-dark dark">
                                <div class="item-hover-content">
                                    <a href="https://nadia-hazem.students-laplateforme.io/fansite/index.php" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Le site Fansite"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4><a href="https://nadia-hazem.students-laplateforme.io/fansite/index.php" data-target="ajax-modal" title="Le site Fansite">Site Fansite sujet au choix</a></h4>
                                <h6>2<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">Création d'un site Fansite. J'ai choisi la photographie.
                                </span>
                                <a href="https://github.com/nadia-hazem/fansite.git" target="_blank" class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--module connexion-->
                    <div class="php masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://nadia-hazem.students-laplateforme.io/module-connexion/index.php" data-target="ajax-modal" title="Module de connexion"><img src="assets/img/screenshot-module-connexion.jpg" alt="Module de connexion" /></a>
                                <div class="item-hover bg-dark dark">
                                    <div class="item-hover-content">
                                        <a href="https://nadia-hazem.students-laplateforme.io/module-connexion/index.php" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Module de connexion"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4><a href="https://nadia-hazem.students-laplateforme.io/module-connexion/index.php" class="title" title="Module de connexion"  data-target="ajax-modal">Module de connexion</a></h4>
                                <h6>4<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">Création d'un site module de connexion PHP/SQL.
                                </span>
                                <a href="https://github.com/nadia-hazem/module-connexion.git" target="_blank" class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Element --> <!--livre d'or-->
                    <div class="php masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                        <div class="filter gallery-item">
                            <div class="item-photo">
                                <a href="https://nadia-hazem.students-laplateforme.io/livre-or/index.php" data-target="ajax-modal" title="Livre d'or">
                                    <img src="assets/img/screenshot-livreor.jpg" alt="Livre d'or" /></a>
                                <div class="item-hover bg-dark dark">
                                    <div class="item-hover-content">
                                        <a href="https://nadia-hazem.students-laplateforme.io/livre-or/index.php" target="_blank" class="icon icon-sm icon-circle icon-white icon-hover" title="Livre d'or"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-title">
                                <h4><a href="https://nadia-hazem.students-laplateforme.io/livre-or/index.php" class="title" title="Livre d'or"  data-target="ajax-modal">Livre d'or</a></h4>
                                <h6>5<sup>ème</sup> Job</h6>
                                <span class="caption text-muted">Site avec module livre d'or avec PHP/SQL</span>
                                <a href="https://github.com/nadia-hazem/livre-or.git" target="_blank"  class="btn btn-xs btn-primary margin-t-10" title="Voir le code source"><span>Voir le code source&nbsp;</span><i class="ti-2x ti-github"></i></a>
                            </div>
                        </div>
                    </div> <!-- Masonry Element --> 

                </div> <!-- Masonry / End -->

            </div> <!-- Content / End -->

        </section>
        <!-- Section - Portfolio / End -->

        <!-- Section - Resume -->
        <section id="resume" class="section padding-v-60">

            <!-- Content -->
            <div class="container container-wide">

                <h3 class="margin-b-50">Mon CV</h3>

                <div class="row padding-lg">
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <!-- Resume Box / About -->
                        <div class="resume-box">
                            <span class="icon animated" data-animation="fadeInDown"><i class="fa-regular fa-comment text-tertiary" aria-hidden="true"></i></span>
                            <h4><strong>A propos de</strong> Moi</h4>
                            <p class="lead">54 ans, permis B, vivant à Marseille.</p>
                            <p>En reconversion professionnelle, j'ai souhaité me diriger vers ma plus grande passion depuis toujours : L'informatique.</p>
                            <p>Je suis aujourd'hui en formation de développement web débouchant sur le titre RNCP de niveau 3.</p>
                            <p>au Campus numérique de <b>La Plateforme à Marseille</b></p>
                            <img src="assets/img/logo_laplateforme.png" alt="La Plateforme">
                            <p>N'hésitez pas à me contacter.</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <!-- Resume Box / Skills -->
                        <div class="resume-box">
                            <span class="icon animated" data-animation="fadeInDown"><i class="fa-solid fa-trophy text-tertiary" aria-hidden="true"></i></span>
                            <h4><strong>Compétences</strong> techniques</h4>
                            <!-- Skill -->
                            <div class="skill">
                                <div class="progress progress-animated">
                                    <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span>85%</span>
                                    </div>
                                </div>
                                <strong>HTML5</strong>
                            </div>
                            <!-- Skill -->
                            <div class="skill">
                                <div class="progress progress-animated">
                                    <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <span>80%</span>
                                    </div>
                                </div>
                                <strong>CSS3</strong>
                            </div>
                            <!-- Skill -->
                            <div class="skill">
                                <div class="progress progress-animated">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <span>40%</span>
                                    </div>
                                </div>
                                <strong>PHP/MySQL</strong>
                            </div>
                            <!-- Skill -->
                            <div class="skill">
                                <div class="progress progress-animated">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <span>40%</span>
                                    </div>
                                </div>
                                <strong>Python</strong>
                            </div>
                            <!-- Skill -->
                            <div class="skill">
                                <div class="progress progress-animated">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <strong>Javascript JQuery</strong>
                            </div>
                            <!-- Skill -->
                            <div class="skill">
                                <div class="progress progress-animated">
                                    <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <span>75%</span>
                                    </div>
                                </div>
                                <strong>Bootstrap Wordpress</strong>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <!-- Tools -->
                        <div class="resume-box">
                            <span class="icon animated" data-animation="fadeInDown"><i class="fa fa-code text-tertiary" aria-hidden="true"></i></span>
                            <h4><strong>Mes outils</strong> techniques</h4>
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img class="mr-3 media-middle" width="50px" src="assets/img/vsc.png" alt="Visual Studio Code">
                                    Visual Studio Code
                                </li>
                                <li class="media my-4">
                                    <img class="mr-3 media-middle" width="50px" src="assets/img/github.png" alt="GitHub">
                                    GitHub
                                </li>
                                <li class="media">
                                    <img class="mr-3 media-middle" width="50px" src="assets/img/plesk.png" alt="Plesk">
                                    Plesk
                                </li>
                                <li class="media">
                                    <img class="mr-3 media-middle" width="50px" src="assets/img/wordpress.png" alt="WordPress">
                                    Wordpress
                                </li>
                                <li class="media">
                                    <img class="mr-3 media-middle" width="50px" src="assets/img/divi.png" alt="Divi">
                                    Divi
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="row padding-lg">

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <!-- Resume Box / Specialities -->
                        <div class="resume-box">
                            <span class="icon animated" data-animation="fadeInDown"><i class="fa-solid fa-computer-mouse text-tertiary"></i></span>
                            <h4>Mes <strong>Capacités</strong></h4>
                            <!-- Speciality -->
                            <div class="speciality">
                                <span class="speciality-icon"><i class="text-muted-2x fa-solid fa-desktop"></i></span>
                                <div class="speciality-content">
                                    <h5 class="margin-b-0">Développement front-end</h5>
                                    <p class="speciaity-description">Sites web - Graphic Design - Bootstrap</p>
                                </div>
                            </div>
                            <!-- Speciality -->
                            <div class="speciality">
                                <span class="speciality-icon"><i class="text-muted-2x fa-solid fa-layer-group"></i></span>
                                <div class="speciality-content">
                                    <h5 class="margin-b-0">Développement back-end</h5>
                                    <p class="speciaity-description">Actuellement en formation, PHP, Python et bientôt JS.</p>
                                </div>
                            </div>
                            <!-- Speciality -->
                            <div class="speciality">
                                <span class="speciality-icon"><i class="text-muted-2x fa-solid fa-mobile-screen"></i></span>
                                <div class="speciality-content">
                                    <h5 class="margin-b-0">Responsive cms design</h5>
                                    <p class="speciaity-description">WordPress/Divi</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <!-- Resume Box / Languages -->
                        <div class="resume-box">
                            <span class="icon animated" data-animation="fadeInDown"><i class="fa fa-language text-tertiary" aria-hidden="true"></i></span>
                            <h4><strong>Langues</strong> (écrit &amp; parlé)</h4>

                            <!-- Skill -->
                            <div class="pl-2">
                                <div class="chart visible" data-bar-color="#85B448" data-track-color="#E5E5E5" data-size="60" data-line-width="4" data-value="80" style="width: 60px; height: 60px;"><span class="percent" style="line-height: 60px;">80</span>
                                    Anglais<canvas height="60" width="60"></canvas></div><br>
                                <!-- Skill -->
                                <div class="chart visible" data-bar-color="#D86A39" data-track-color="#E5E5E5" data-size="60" data-line-width="4" data-value="40" style="width: 60px; height: 60px;"><span class="percent" style="line-height: 60px;">40</span>
                                    Espagnol<canvas height="60" width="60"></canvas></div><br>
                                <!-- Skill -->
                                <div class="chart visible" data-bar-color="#D86A39" data-track-color="#E5E5E5" data-size="60" data-line-width="4" data-value="40" style="width: 60px; height: 60px;"><span class="percent" style="line-height: 60px;">40</span>
                                    Italien<canvas height="60" width="60"></canvas></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Resume Box / Hobbies -->
                        <div class="resume-box-hobbies">
                            <span class="icon animated" data-animation="fadeInDown"><i class="fa-solid fa-icons text-tertiary"></i></span>
                            <h4><strong>Loisirs</strong> &amp; fun</h4>
                            <ul class="list-inline row">
                                <li class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="icon-box text-center">
                                        <span class="icon icon-sm icon-circle icon-primary icon-filled icon animated" data-animation="rotateIn"><i class="fa-solid fa-camera-retro"></i></span>
                                        <strong><span class="title">Photographie<br></span></strong><a href="https://pictelle.com/photo/" target="_blank" title="Photos Pictelle.com">Shootings<!-- <i class="fa-brands fa-google-play"></i> --></a>
                                    </div>
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="icon-box text-center">
                                        <span class="icon icon-sm icon-circle icon-blue icon-filled icon animated" data-animation="rotateIn"><i class="fa-solid fa-palette"></i></span>
                                        <strong><span class="title">design<br></span></strong><!-- <a href="https://pictelle.com/projets/" target="_blank" title="projets cms"> -->Web<!-- <i class="fa-brands fa-google-play"></i> </a> -->
                                    </div>
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="icon-box text-center">
                                        <span class="icon icon-sm icon-circle icon-primary icon-filled icon animated" data-animation="rotateIn"><i class="fa-solid fa-mountain-sun"></i></span>
                                        <strong><span class="title">La nature</span></strong>
                                        <span>Permaculture</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-inline row">
                                <li class="col-md-6 col-sm-6 col-xs-6 text-center">
                                    <div class="icon-box text-center">
                                        <span class="icon icon-sm icon-circle icon-blue icon-filled icon animated" data-animation="rotateIn"><i class="fa-solid fa-clapperboard"></i></span>
                                        <strong><span class="title">Médias</span></strong>
                                        <span>Cinéma, séries</span>
                                    </div>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6 text-center">
                                    <div class="icon-box text-center">
                                        <span class="icon icon-sm icon-circle icon-primary icon-filled icon animated" data-animation="rotateIn"><i class="fa-solid fa-globe"></i></span>
                                        <strong><span class="title">Technologies informatiques</span></strong>Code & Design
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row padding-lg">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <!-- Resume Box / Education and Jobs -->
                        <div class="resume-box">
                        <span class="icon animated" data-animation="fadeInDown"><i class="fa-regular fa-calendar text-tertiary"></i></span>
                        <h4><strong>Formation</strong> &amp; expériences professionnelles</h4>
                        <div class="timeline">

                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2011 à 2015</span>
                                <span class="event-name text-blue">Reconversion domaine agricole</span>
                                <span class="event-description">Pépiniérie, agriculture bio, permaculture</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2010</span>
                                <span class="event-name text-gold">Auto-entreprise</span>
                                <span class="event-description">Occaz'où - Friperie brocante</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2009</span>
                                <span class="event-name text-blue">Auto-entreprise</span>
                                <span class="event-description">Styl'O Graph - Web design, créations garphiques print, enseignes, suivi administratif...</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2005 à 2007</span>
                                <span class="event-name text-gold">Réceptionniste, responsable groupes séjours</span>
                                <span class="event-description">Albatros hôtel *** Mouans-Sartoux 06</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2002</span>
                                <span class="event-name text-blue">Agent de sécurité, contrôle d'identité.</span>
                                <span class="event-description">S.A.S. – Sophia-Antipolis (prestataire en sécurité, placement dans diverses entreprises dont : France Télécom et laboratoires Galderma)</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2002</span>
                                <span class="event-name text-gold">Agent de sécurité.</span>
                                <span class="event-description">Gestion sécurité de divers sites d'entreprises (Galderma, France Télécom)</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">1997</span>
                                <span class="event-name text-blue">AUto-entreprise</span>
                                <span class="event-description">Ecrivain public, créations print
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">1996</span>
                                <span class="event-name text-gold">Agent d'accueil, gestion documentation et stocks, gestion des groupes artistiques et scènes estivales.</span>
                                <span class="event-description">Office de Tourisme de Valbonne 06.</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">1994</span>
                                <span class="event-name text-blue">Bureau des admissions</span>
                                <span class="event-description">Hôpital privé de Massy 91</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">1993 à 1994</span>
                                <span class="event-name text-gold">Responsable achats, Responsable administrative</span>
                                <span class="event-description">SARL Venus - Import-export Paris 75</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">1991</span>
                                <span class="event-name text-blue">Responsable administrative - radio-speakerine</span>
                                <span class="event-description">Ok-Service</span>
                                <span>Dépannages à domicile à domicile.</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">1987</span>
                                <span class="event-name text-gold">Assistante administartive</span>
                                <span class="event-description">Flash-Union - agence matrimoniale</span>
                                <span>Accueil, entretiens, contrats et marketing publicitaire </span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">Septembre 1986/1987</span>
                                <span class="event-name text-blue">1ère année de DEUG Langues</span>
                                <span class="event-description">Nice 06</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">Juin 1986</span>
                                <span class="event-name text-gold">Baccalauréat</span>
                                <span class="event-description">Institut privé Fénelon, Grasse 06</span>
                                <span>Bac A2 - LV2 langues vivantes</span>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>


            </div>


        </section>
        <!-- Section - Resume / End -->

        <!-- Section - Contact -->
        <section id="contact" class="section contact padding-v-60 min-fullheight">

            <!-- Contact Box -->
            <div class="contact-box bg-secondary dark animated" data-animation="flipInY">
                <h2>N'hésitez pas <strong>contactez moi</strong>!</h2>
                <!-- Contact List -->
                <ul class="list-unstyled list-unstyled-icons">
                    <li><i class="inline-icon icon-before-and-after text-primary fa fa-location-arrow"></i>Marseille, France</li>
                    <li><i class="inline-icon icon-before-and-after text-primary fa fa-comment"></i><a href="mailto:nadia.hazem@laplateforme.io" title="Mon e-mail">nadia.hazem@laplateforme.io</a></li>
                    <li><i class="inline-icon icon-before-and-after text-primary fa fa-phone"></i><a href="tel:[+33]0 676181339" title="Mon numéro de téléphone">+33(0)6 76 18 13 39</a></li>
                </ul>
                <a href="#" id="gotoform" class="btn btn-primary" data-target="#messenger" title="Formulaire de contact"><span>Voir mes liens perso</span><i class="ti-email"></i></a>
                <!-- Social Media -->
                <div class="social-media" style="text-align:center;margin-top:5rem">
                    <span class="icon icon-hover icon-sm"><a href="https://linkedin.com/in/pictelle" target="_blank" title="Mon profil LinkedIn"><i class="ti-linkedin"></i></a></span>
                    </div><br>
            </div> <!-- Contact Box / End -->

        </section>
        <!-- Section - Contact / End -->

    </div>
    <!-- Content / End -->

    <!-- Messenger -->
    <a href="#" style="background-color:lightgrey" id="messenger-toggle" data-target="messenger" class="icon icon-sm icon-circle animated" data-animation="bounceIn" data-animation-delay="300" title="Formulaire de contact"><i class="fa fa-comments"></i></a>
    <div id="messenger" class="dark">
        <div id="messenger-box">
            <div class="messenger-box-content">
                <!-- Close -->

                <a href="#" class="messenger-close icon icon-hover icon-xs icon-circle icon-white" data-target="messenger" title="Fermer"><i class="fa fa-times"></i></a>
                <div class="space">
                    <a href="mailto:nadia.hazem@laplateforme.io"><h3>Envoyez moi un email - Je vous répondrai rapidement&nbsp;&nbsp;<ti class="ti-layout-cta-right"></ti></h3></a>
                </div>

                <div class="row flex">
                    <img class="qrc" src="assets/img/qrc_github.png" width="64">
                    <a href="https://github.com/nadia-hazem"><img src="assets/img/github.png" width="32">&nbsp;&nbsp;<lead>Mon GitHub</lead></a>
                </div>
                <hr>
                <div class="row flex">
                    <img class="qrc" src="assets/img/qrc_pictelle.png" width="64">
                    <a href="https://pictelle.com" target="_blank"><img src="assets/img/logow-big.png" alt="Mon Wordpress" width="32">&nbsp;&nbsp;<lead>Mon Wordpress</lead></a>
                </div>
                <hr>
                <div class="row flex">
                    <a href="assets/img/cv-dev_nadia-hazem-fr.pdf" target="_blank"><img src="assets/img/cv.png" alt="Mon CV" width="32">&nbsp;&nbsp;<lead>Télécharger mon cv</lead></a>
                </div>


                <!-- Contact Form -->
                <!-- <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
                    <fieldset>
                        <?php if(isset($hasError)) { //If errors are found ?>
                        <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
                        <?php } ?>

                        <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                        <div class="alert alert-success">
                            <p><strong>Message Successfully Sent!</strong></p>
                            <p>Thank you for using our contact form, <strong><?php echo $name;?></strong>! Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>
                        </div>
                        <?php } ?>

                        <div class="form-group">
                        <label for="name">Nom<span class="help-required">*</span></label>
                        <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
                        </div>

                        <div class="form-group">
                        <label for="email">Your Email<span class="help-required">*</span></label>
                        <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
                        </div>

                        <div class="form-group">
                        <label for="subject">Subject<span class="help-required">*</span></label>
                        <input type="text" name="subject" id="subject" value="" class="form-control required" role="input" aria-required="true" />

                        <div class="form-group">
                        <label for="message">Message<span class="help-required">*</span></label>
                        <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
                        </div>

                        <div class="actions">
                        <input type="submit" value="Envoyer" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
                        <input type="reset" value="Clear Form" class="btn btn-danger" title="Remove all the data from the form." />
                        </div>
                    </fieldset>
                </form> -->
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <a href="#" id="mobile-nav-toggle" class="icon icon-circle icon-sm icon-primary icon-hover visible-xs visible-sm" data-target="mobile-nav" title="Menu">
        <i class="ti-menu"></i>
    </a>
    <nav id="mobile-nav" class="bg-white">
        <div class="mobile-nav-wrapper">
            <!-- Nav -->
            <ul class="nav nav-vertical">
                <li> <span data-target="local-scroll"><a href="#" onclick="goTo('start')" title="Haut de la page"><span>Top</span></a></li>
                <li><span data-target="local-scroll"><a href="#" onclick="goTo('resume')"  title="Mon CV"><span>CV</span></a></li>
                <li><span data-target="local-scroll"><a href="#" onclick="goTo('portfolio')" title="Mes réalisations"><span>Réalisations</span></a></li>
                <li><span data-target="local-scroll"><a href="#" onclick="goTo('contact')" title="Me contacter"><span>Contact</span></a></li>
            </ul>
            <div class="social-media">
                <span class="icon icon-hover icon-sm"><a href="https://www.linkedin.com/in/pictelle/" target="_blank" title="Mon profil LinkedIn"><i class="fa-brands fa-linkedin"></i></a></span>
            </div>

        </div>
        <a href="#" class="mobile-nav-close icon icon-hover icon-xs icon-circle icon-primary" data-target="mobile-nav" title="Fermer"><i class="fa fa-times"></i></a>
    </nav>

    <!----------------------- SCRIPTS ----------------------------->
    <!-- Ajax Wrapper & Loader -->
    <div id="ajax-modal"></div>
    <div id="ajax-loader"><i class="fa fa-spinner fa-spin"></i></div>

    <!-- JS Libraries -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>

    <!-- JS Plugins -->
    <script>
    window.paceOptions = {
        target: '#page-loader',
        ajax: false
    };
    </script>

    <!-- JS Fonction gotoMessenger -->
    <script>
    $(document).ready(function(){
        $('#gotoform').click(function(){
            var e = $("#messenger"),
            t = $("#messenger-box");
        return (
            e.hasClass("active")
                ? (t.find(".messenger-box-content").fadeOut(), e.fadeOut(300).removeClass("active"))
                : e
                    .fadeIn(300, function () {
                        t.find(".messenger-box-content").fadeIn(400);
                    })
                    .addClass("active"),
            !1
        );
    })});
    </script>

    <!-- JS Fonction Pluggins -->
    <script src="assets/js/plugins.js"></script>

    <!-- JS Core -->
    <script src="assets/js/core.min.js"></script>

    <!-- JS user -->
    <script src="assets/js/script.js"></script>

    <!-- Fonction scroll to -->
    <script>
    function goTo(id){
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#"+id).offset().top
        }, 2000);
    }
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Web | Site Pro</title>
    <!-- Liens des styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
     <!-- Header -->
     <header class="header">
        <div class="container navbar">
            <!-- logo -->
            <a href="index.php" class="logo">Smart<span>Service</span> </a>

            <!-- menus -->
            <ul class="nav-links">
                <li><a href="index.php"><i class="fas fa-home"></i>Accueil</a></li>
                <li><a href="services.php"><i class="fas fa-wrench"></i>Services</a></li>
                <li><a href="portfolio.php"><i class="fas fa-briefcase"></i>Portfolio</a></li>
                <li><a href="about.php"><i class="fas fa-info-circle"></i>A Propos</a></li>
                <li><a href="contact.php"><i class="fas fa-address-book"></i>Contact</a></li>
            </ul>
            <button class="menu-toggle"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <!-- Bani-re de service -->
     <section class="services-banner">
        <div class="container">
            <h1 data-aos="fade-down" >Nos Services</h1>
            <p data-aos="fade-up">Découvrez comment nous pouvons transformer vos idées en succès.</p>
        </div>
     </section>

     <!-- Services detaillées -->
     <section class="services">
        <div class="container">
            <h2 class="service-title" data-aos="fade-right">Ce que nous proposons</h2>
            <div class="services-grid service-page">
                <div class="service-card"  data-aos="fade-up">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3> Développement web et mobile</h3>
                    <p>Nous concevons et développons des sites internet performants,
                         esthétiques et optimisés pour tous les appareils, 
                         ainsi que des applications mobiles sur mesure.
                          Que ce soit pour un site vitrine, une boutique 
                          en ligne ou une application complexe, nous utilisons 
                          les dernières technologies pour garantir des solutions fiables et évolutives.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200" >
                    <div class="service-icon">
                        <i class="fas fa-poll"></i>
                    </div>
                    <h3> SEO et marketing digital</h3>
                    <p>Maximisez votre visibilité sur les moteurs de recherche grâce à nos services de référencement naturel (SEO). Nous élaborons également des stratégies de marketing digital (réseaux sociaux, campagnes publicitaires, e-mailing) pour booster votre notoriété et attirer plus de clients.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-shield"></i>
                    </div>
                    <h3>Sécurité informatique</h3>
                    <p>La cybersécurité est au cœur de nos préoccupations. Nous proposons des audits, des solutions de protection contre les cyberattaques, la sécurisation des données sensibles, et la mise en place de pare-feu, VPN, et autres dispositifs pour garantir la sûreté de vos infrastructures.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-rss"></i>
                    </div>
                    <h3>Réseaux informatiques</h3>
                    <p>Nous concevons, installons et maintenons des réseaux informatiques adaptés aux besoins des entreprises et des particuliers. Que ce soit pour une PME ou un réseau domestique, nous assurons une connectivité stable et performante, avec une configuration optimisée pour vos équipements.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section FAQ -->
     <section class="faq">
        <div class="container">
            <h2 data-aos="fade-up" >Questions Fréquemment Posées</h2>
            <div class="faq-item " data-aos="fade-right">
                <h3 class="faq-question">
                    Quels types de sites développez-vous ?
                    <span class="icon"><i class="fas fa-plus"></i></span>
                </h3>
                <p class="faq-answer">Nous créons des sites vitrines, e-commerce et plateformes personnalisées.</p>
            </div>
            <div class="faq-item" data-aos="fade-left">
                <h3 class="faq-question">
                    Comment garantissez-vous la qualité SEO ?
                    <span class="icon"><i class="fas fa-plus"></i></span>
                </h3>
                <p class="faq-answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sint dolorum iusto in saepe enim error earum, pariatur dicta corporis n</p>
            </div>
            <div class="faq-item" data-aos="fade-right">
                <h3 class="faq-question">
                    Quels sont vos délais de livraison ?
                    <span class="icon"><i class="fas fa-plus"></i></span>
                </h3>
                <p class="faq-answer">umquam inventore vero illum nam beatae placeat cumque expedita perferendis!s.</p>
            </div>
        </div>
     </section>

     <!-- Secton de footer -->
     <footer>
        <div class="container">
            <p>© 2025 Smart Service. Tous droits réservés. | Conception et développement par Smart Service.</p>
        </div>
     </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/main.js"></script>
    <script src="js/service.js"></script>
</body>
</html>
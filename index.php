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

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"
        integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag=="
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

    <!-- Section hero -->
    <section class="hero">
        <div class="container" data-aos="fade-up">
            <h1>Transformez vos idées en <span>réalité digitale</span></h1>
            <p>Nous créons des solutions sur mesure pour votre succès en ligne.</p>
            <a href="services.php" class="btn">Découvrir nos services</a>
        </div>
    </section>

    <!-- Section de services -->
    <section class="services">
        <div class="container">
            <h2 class="service-title" data-aos="fade-right">Nos Services</h2>
            <div class="services-grid">
                <div class="service-card"  data-aos="zoom-in">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Développement web et mobile</h3>
                    <p>Création de sites web et d'applications mobiles sur mesure, fiables et adaptés à tous les appareils.</p>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-poll"></i>
                    </div>
                    <h3>SEO et marketing digital</h3>
                    <p>Optimisation SEO et stratégies de marketing digital pour améliorer votre visibilité et attirer des clients.</p>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-shield"></i>
                    </div>
                    <h3>Sécurité informatique</h3>
                    <p>Audits et solutions de protection contre les cyberattaques, sécurisation des données et infrastructures.</p>
                </div>
            </div>
        </div>
              <!--   <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-poll"></i>
                    </div>
                    <h3>Réseaux informatiques</h3>
                    <p>Conception et installation de réseaux informatiques pour une connectivité stable et performante.</p>
                </div>
            </div>
        </div> -->
    </section>

    <!-- Section de témoignages -->
    <section class="testimonilas">
        <div class="container swiper" data-aos="fade-up">
            <h2>Témoignages Clients</h2>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial">
                        <img src="assets/images/client1.jpg" alt="client 1">
                        <p>"Une quipe professionnels et à l'ecoute de vos besoins."</p>
                        <h4>Cynthia De BORDEAUX</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial">
                        <img src="assets/images/client2.jpg" alt="client 2">
                        <p>"Une quipe professionnels et à l'ecoute de vos besoins."</p>
                        <h4>Angele SACK</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial">
                        <img src="assets/images/client3.jpg" alt="client 3">
                        <p>"Une quipe professionnels et à l'ecoute de vos besoins."</p>
                        <h4>Charles IRON</h4>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Section de realisation -->
     <section class="projects">
        <div class="container">
            <h2>Nos Réalisations</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="assets/images/project1.jpg" alt="project 1">
                    <h3>Projet 1</h3>
                    <p>Des conceptions modernes et innovantes de votre application pour vos besoins professionnels.</p>
                </div>
                <div class="project-card">
                    <img src="assets/images/project2.jpg" alt="project 2">
                    <h3>Projet 2</h3>
                    <p>Des conceptions modernes et innovantes de votre application pour vos besoins professionnels.</p>
                </div>
                <div class="project-card">
                    <img src="assets/images/project3.jpg" alt="project 3">
                    <h3>Projet 3</h3>
                    <p>Des conceptions modernes et innovantes de votre application pour vos besoins professionnels.</p>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"
        integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/main.js"></script>
    <script src="js/home.js"></script>
</body>

</html>
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

    <!-- Banière de service -->
    <section class="main-header portfolio-header">
        <div class="container">
            <h1 data-aos="fade-down">Notre Portfolio</h1>
            <p data-aos="fade-up">Découvrez nos projets les plus remarquables.            </p>
        </div>
    </section>

    <!-- Galerie -->
     <section class="portfolio-gallery">
        <div class="container">
            <h2 data-aos="fade-up" >Nos Réalisations</h2>
            <div class="gallery-grid">
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100" >
                    <img src="assets/images/project1.jpg" alt="">
                    <div class="overlay">
                        <h3>Projet 1</h3>
                        <p>Site web corporatif pour une entreprise innovante.</p>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="200" >
                    <img src="assets/images/project2.jpg" alt="">
                    <div class="overlay">
                        <h3>Projet 2</h3>
                        <p>Site web corporatif pour une entreprise innovante.</p>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="300" >
                    <img src="assets/images/project3.jpg" alt="">
                    <div class="overlay">
                        <h3>Projet 3</h3>
                        <p>Site web corporatif pour une entreprise innovante.</p>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="400" >
                    <img src="assets/images/project4.jpg" alt="">
                    <div class="overlay">
                        <h3>Projet 4</h3>
                        <p>Site web corporatif pour une entreprise innovante.</p>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100" >
                    <img src="assets/images/project5.jpg" alt="">
                    <div class="overlay">
                        <h3>Projet 5</h3>
                        <p>Site web corporatif pour une entreprise innovante.</p>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="300" >
                    <img src="assets/images/project6.jpg" alt="">
                    <div class="overlay">
                        <h3>Projet 6</h3>
                        <p>Site web corporatif pour une entreprise innovante.</p>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- Temoignages -->
      <section class="portfolio-testimonials">
        <div class="container">
            <h2>Ce que disent nos clients</h2>
            <div class="testimonials-slider">
                <div class="testimonial" data-aos="fade-right">
                    <p>"Travailler avec cette équipe a été une
                         expérience formidable. Ils ont su dépasser nos attentes."</p>
                         <h3>- Jean Dupuis</h3>
                </div>
                <div class="testimonial" data-aos="fade-right" data-aos-delay="100" >
                    <p>"Travailler avec cette équipe a été une
                         expérience formidable. Ils ont su dépasser nos attentes."</p>
                         <h3>- Marie Collin</h3>
                </div>
                <div class="testimonial" data-aos="fade-right" data-aos-delay="200">
                    <p>"Travailler avec cette équipe a été une
                         expérience formidable. Ils ont su dépasser nos attentes."</p>
                         <h3>-  Paul Martin</h3>
                </div>
            </div>
        </div>
      </section>
      <!-- contact -->
       <section class="portfolio-contact">
        <div class="container">
            <h2 data-aos="fade-up" >Vous avez un projet en tête ?</h2>
            <p data-aos="fade-up" data-aos-delay="100">N'hésitez pas à nous contacter pour discuter de votre idée.</p>
            <a href="contact.php" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200">Contactez-nous</a>
        </div>
       </section>

     <!-- Secton de footer -->
     <footer>
        <div class="container">
        <p>© 2025 Smart Service. Tous droits réservés. | Conception et développement par Smart Service.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/main.js"></script>
    <script src="js/about.js"></script>
</body>

</html>
    
</body>
</html>
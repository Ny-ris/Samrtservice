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

        <!-- SweetAlert2 -->
        <link href="
        https://cdn.jsdelivr.net/npm/sweetalert2@11.15.2/dist/sweetalert2.min.css
        " rel="stylesheet">
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
    <section class="main-header contact-header">
        <div class="container">
            <h1 data-aos="fade-down">Contactez-nous</h1>
            <p data-aos="fade-up">Nous sommes là pour répondre à toutes vos questions. </p>
        </div>
    </section>

    <!-- Section de formulaire -->
    <section class="contact-form">
        <div class="container">
            <h2 data-aos="fade-up" style="text-align: center;" >Envoyez-nous un message</h2>
            <form id="contactForm" action="#" method="post" data-aos="fade-up" data-aos-delay="100">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre email" >
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" name="subject" placeholder="Sujet du message" >
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Votre message" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
            <div id="formMessage" class="form-message" data-aos="fade-up" data-aos-delay="200"></div>
        </div>
    </section>

    <!-- section de la carte -->
     <section class="contact-map">
        <div class="container">
            <h2 data-aos="fade-up" >Localisation</h2>
            <p data-aos="fade-up" data-aos-delay="100" >Retrouvez-nous à notre bureau pour un rendez-vous.</p>
            <div id="map" data-aos="fade-up" data-aos-delay="200" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4422.52462516778!2d2.3867342037045187!3d6.376500262519752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102355dc895ec3b1%3A0x785e6db622a7921c!2sToyota%20B%C3%A9nin%20-%20CFAO%20Mobility!5e0!3m2!1sfr!2sbj!4v1734555097907!5m2!1sfr!2sbj" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.2/dist/sweetalert2.all.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/contact.js"></script>
</body>

</html>
    
</body>
</html>
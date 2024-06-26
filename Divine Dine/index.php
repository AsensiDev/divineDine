<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "users";

$enlace = mysqli_connect ($server,$user,$password,$db);
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divine Dine</title>
    <!-- css link -->
    <link rel="stylesheet" href="src/scss/app.css">
    <!-- google fonts logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Whisper&display=swap" rel="stylesheet">
    <!-- swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>   
    <!-- header section starts -->
    <header id="header">
        <div class="container">
            <div class="header-left">
                <h1 class="logo">Divine Dine</h1>
            </div>
            <nav class="navbar">
                <a href="#about">About Us</a>
                <a href="#menu">Menu</a>
                <a href="#private">Private Rooms</a>
                <a href="https://api.whatsapp.com/send?phone=618440793" target="_blank">
                    <button>
                        <img src="src/img/whatsapp.ico" alt="whatsapp icon">
                        Book Now
                    </button>
                </a>
            </nav>
        </div>  
    </header>
    <!-- header section ends -->
    <!-- slider section starts -->
    <section class="home" id="home">
        <div class="swiper home-slider">    
            <div class="swiper-wrapper">                
                <div class="box swiper-slide">
                    <picture>
                        <source srcset="src/img/slider1.webp" type="image/webp">
                        <source srcset="src/img/slider1.jpg" type="image/jpeg">
                        <img src="src/img/slider1.jpg" alt="waiter serving wine" loading="lazy">
                    </picture>
                </div>    
                <div class="box swiper-slide">
                    <picture>
                        <source srcset="src/img/slider.webp" type="image/webp">
                        <source srcset="src/img/slider.jpg" type="image/jpeg">
                        <img src="src/img/slider2.jpg" alt="restaurant with dim lights" loading="lazy">
                    </picture>
                </div>    
                <div class="box swiper-slide">
                    <picture>
                        <source srcset="src/img/slider3.webp" type="image/webp">
                        <source srcset="src/img/slider3.jpg" type="image/jpeg">
                        <img src="src/img/slider3.jpg" alt="drinks selection" loading="lazy">
                    </picture>
                </div>    
            </div>    
        </div>   
    </section>
    <!-- slider section ends -->
    <!-- gallery section starts -->
    <section>
        <h2 class="galleryHeader"></h2>
        <div class="container gallery">
            <div class="image">
                <picture>
                    <source srcset="src/img/gallery1.webp" type="image/webp">
                    <source srcset="src/img/gallery1.jpg" type="image/jpeg">
                    <img src="src/img/gallery1.jpg" alt="strawberry and chocolate dessert" loading="lazy">
                </picture>
            </div>
            <div class="image">
                <picture>
                    <source srcset="src/img/gallery2.webp" type="image/webp">
                    <source srcset="src/img/gallery2.jpg" type="image/jpeg">
                    <img src="src/img/gallery2.jpg" alt="varied sushi plate" loading="lazy">
                </picture>
            </div>
            <div class="image">
                <picture>
                    <source srcset="src/img/gallery3.webp" type="image/webp">
                    <source srcset="src/img/gallery3.jpg" type="image/jpeg">
                    <img src="src/img/gallery3.jpg" alt="rice with salad and beans" loading="lazy">
                </picture>
            </div>
            <div class="image">
                <picture>
                    <source srcset="src/img/gallery4.webp" type="image/webp">
                    <source srcset="src/img/gallery4.jpg" type="image/jpeg">
                    <img src="src/img/gallery4.jpg" alt="varied and fresh salad" loading="lazy">
                </picture>
            </div>
            <div class="image">
                <picture>
                    <source srcset="src/img/gallery5.webp" type="image/webp">
                    <source srcset="src/img/gallery5.jpg" type="image/jpeg">
                    <img src="src/img/gallery5.jpg" alt="crispy chicken with potatoes" loading="lazy">
                </picture>
            </div>
            <div class="image">
                <picture>
                    <source srcset="src/img/gallery6.webp" type="image/webp">
                    <source srcset="src/img/gallery6.jpg" type="image/jpeg">
                    <img src="src/img/gallery6.jpg" alt="spaghetti with chicken wings" loading="lazy">
                </picture>
            </div>           
    </section>
    <!-- gallery section ends -->
    <!-- about us section starts -->
    <section id="about">
        <div class="about-container">
            <div class="about-information">
                <div class="about-text">
                    <h3>Owner</h3>
                    <h2>Michael Brown</h2>
                    <p>"Grateful for the exceptional team behind our luxury restaurant's succes. Thanks to each person who has trusted in us, eternally grateful."</p>
                </div>
                <div class="about-text">
                    <h3>Chef</h3>
                    <h2>Kevin Draxler</h2>
                    <p>"Never in my entire career have I known such a united team as the one we have here; undoubtedly, we are a great family."</p>
                </div>
                <div class="about-text">
                    <h3>Manager</h3>
                    <h2>Tomas Edison</h2>
                    <p>"As a manager, I feel proud of everything we are achieving and of how people are receiving us every day."</p>
                </div>  
            </div>
        </div>
    </section>
    <!-- about us section ends -->
    <!-- menu section starts -->
    <section class="menu" id="menu">
        <div class="menu-container">
            <picture>
                <source srcset="src/img/menu.webp" type="image/webp">
                <source srcset="src/img/menu.png" type="image/png">
                <img src="src/img/menu.png" alt="fish dish with asparagus" loading="lazy">
            </picture>
            <div class="menu-info">
                <h2>Exclusive Gourmet Menu</h2>
                <p>
                    Discover a unique selection of dishes carefully crafted with fresh, high-quality ingredients, designed to satisfy the most discerning palates.
                </p>
                <a href="src/img/gourmet-menu.pdf" download="gourmet-menu.pdf">
                    Explore Our Menu
                </a>
            </div>
        </div>
    </section>
    <!-- menu section ends -->
    <!-- private rooms section starts -->
    <section id="private">
        <div class="private-container">
            <div class="private-info">
                <div class="private-text">
                    <h2>Private Rooms</h2>
                    <p>Indulge in our luxury dining experience with exclusive private rooms, offering intimate settings for an unforgettable culinary journey.</p>
                </div>
                <div class="private-form">
                <form action="#" name="ejemplo" method="post">
                        <h2>Contact Us</h2>

                        <label for="name">Full Name:</label>
                        <input type="text" name="nombre" placeholder="nombre">

                        <label for="email">Email:</label>
                        <input type="email" name="correo" placeholder="correo">

                        <label for="message">Number:</label>
                        <input type="number" name="telefono" placeholder="number">    

                        <input type="submit" name="registro">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- private rooms section ends -->
    <!-- footer section starts -->
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <div class="contact">
                    <p><span>Tlfn:</span> 234 574 863</p>
                    <p><span>Email:</span> divinedine@gmail.com</p>
                </div>
                <a href="#header">
                    <h1 class="logo">Divine Dine</h1>
                </a>
                
            </div>
        </div>
    </footer>
    <!-- footer section ends -->
    <!-- swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- javascript  -->
    <script src="src/js/app.js"></script>
</body>
</html>

<?php

    if(isset($_POST['registro'])) {
        $nombre = $_POST ['nombre'];
        $correo = $_POST ['correo'];
        $telefono = $_POST ['telefono'];

        $insertarDatos = "INSERT INTO data VALUES('$nombre','$correo','$telefono','')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    }
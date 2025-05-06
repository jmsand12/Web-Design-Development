<?php
session_start();
include_once('connection.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>StunGo | Wisata</title>
        <link rel="icon" href="foto\logostungo.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styleright.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <!-- Header -->
        <header>
            <ul>
                <li><a href="index.php"><img src="foto\logostungo.png" alt="logo"></a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="indexWisata.php" class="active">Wisata</a></li>
                <li><a href="indexSpa.php">Spa</a></li>
                <li><a href="indexSport.php">Sport</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li id="login"><a href="login.php">Login</a></li>
             </ul>
        </header>
    <!-- End Of Header -->  
    
    <!-- Bagian Isi/body -->

    <div class="bodysection">
        <h1 class="judul1">Ikut Berwisata Yuk! 🎠</h1>
        <h4 class="judul2"><span>Ayo Bermain Bersama Kami! Nikmati berbagai promo menarik dari StunGo!</span></h4>
        <div class="pembungkus">
            <div class="satu">
                <a href="login.php"><img class="gambars" src="foto\biji.png" alt="Foto Singa Singapura">
            </div>
            <div class="dua">
                <a href="login.php"><img class="gambars" src="foto\jembul.png" alt="Foto Tebing Labuan Bajo">
            </div>
            <div class="tiga">
                <a href="login.php"><img class="gambars" src="foto\gas.jpg" alt="Foto Dufan">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-left">
            <h3>Payment Method</h3>
            <div class="credit-card">
                <img src="foto\bca.png" alt="bca">
                <img src="foto\mandiri.png" alt="mandiri">
                <img src="foto\alfamidi.png" alt="alfamidi">
            </div>
            <p class="footer-copyright">COPYRIGHT 2023 StunGo | ALL RIGHTS RESERVED</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span>Tangerang Selatan, Banten</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+62 081-6969-420</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">stungogmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>About</span>
                StunGo adalah platfrom yang menyediakan akomodasi wisata, spa, dan sport guna menunjang kebahagiaan Kamu...iya Kamu. Pelayanan yang ditawarkan StunGo memiliki banyak keistimewaan dibandingkan platform lainnya.
                </p>

            <div class="footer-media">
                <a href="https://www.youtube.com/channel/UCw04kvpbg6XQ5O7AGg0iDdw"><i class="fa fa-youtube"></i></a>
                <a href="https://twitter.com/abrariangibta"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/abrariangibta/"><i class="fa fa-instagram"></i></a>
                <a href="https://www.instagram.com/abrariangibta/"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
        

    </footer>
    <!-- End of Footer -->
    </body>
</html>
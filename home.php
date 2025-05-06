<?php

include_once('connection.php');

$query = "SELECT nama_akun FROM akun";
$hasil = mysqli_query($conn, $query);
if (!$hasil) {
    die("Query gagal: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($hasil)) {
   
    $nama = $row['nama_akun'];
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>StunGo | Home</title>
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
                <li><a href="home.php"><img src="foto\logostungo.png" alt="logo"></a></li>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="destination.php">Wisata</a></li>
                <li><a href="journey.php">Spa</a></li>
                <li><a href="infopenawaran.php">Sport</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li id="login"><a href="index.php">Logout</a></li>
             </ul>
        </header>
    <!-- End Of Header -->  
    
    <!-- Bagian Isi/body -->

        <div class="container">
            <h3 class="judul1">Welcome&nbsp; <span>to StunGo</span></h3>
        </div>
    <!-- Ini Buat Naroh Slide -->
    <div class="slides">
        <div class="slide">
            <img src="foto\albertjelek.png" alt="slide1">
        </div>
        <div class="slide">
            <img src="foto\meky.jpg" alt="slide2">
        </div>
        <div class="slide">
            <img src="foto\albertbau.png" alt="slide3">
        </div>
        <div class="navigation">
            <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
            <a class="next" onclick="plusSlide(-1)">&#10095;</a>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlide(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            if (n > slides.length) 
            {
                slideIndex = 1;
            }
            if (n < 1)
            {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++)
            {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>
    <!--Slidenya sudah beres-->

    <div class="bodysection">
        <h1 class="judul1">Ikut Berwisata Yuk! 🎠</h1>
        <h4 class="judul2"><span>Ayo Bermain Bersama Kami!</span></h4>
        <div class="pembungkus">
            <div class="satu">
                <a href="destination.php"><img class="gambars" src="foto\biji.png" alt="Foto Bali"></a>
            </div>
            <div class="dua">
                <a href="destination.php"><img class="gambars" src="foto\jembul.png" alt="Foto Singapore"></a>
            </div>
            <div class="tiga">
                <a href="destination.php"><img class="gambars" src="foto\gas.jpg" alt="Foto Thailand"></a>
            </div>
        </div>
    </div>
    <div class="jp">
        <h1 class="judul3">Manjakan Diri Anda 💆🏻</h1>
        <h4 class="judul4">Rasakan Sensasi Dari Layanan Terbaik Kami</h4>
        <div class="bungkus">
            <div class="satu">
                <a href="journey.php"><img class="gambarwisata" src="foto\spa4.png" alt="Foto Spa"></a>
            </div>
            <div class="dua">
                <a href="journey.php"><img class="gambarwisata" src="foto\spa3.png" alt="Foto papua"></a>
            </div>
            <div class="tiga">
                <a href="journey.php"><img class="gambarwisata" src="foto\spa2.png" alt="Foto magelang"></a>
            </div>
            <div class="tiga">
                <a href="journey.php"><img class="gambarwisata" src="foto\spa1.png" alt="Foto lombok"></a>
            </div>
        </div>
        </div>
        <div>
            <h1 class="judul69">Bukan Cuman Jalan-Jalan!</h1>
            <h4 class="judul70">StunGo memiliki fitur Spa untuk Kamu yang ingin mempercantik diri ataupun relaksaksi dari kejenuhan sehari-hari Kamu. Dengan StunGo, Kamu dapat melakukan reservasi dengan mudah tanpa perlu ribet. Kami memberikan rekomendasi tempat refleksi yang banyak dan menarik hanyak untuk kamu. Jadi, jangan tunggu apa lagi, Pesan Sekarang!!!
            </div>
    </div>
    <div class="bodysection">
    <h1 class="judul1">Penuh Tantangan 🏂</h1>
        <h4 class="judul2">Eksplorasi Alam, Tantangan Sejati </h4>
        <div class="pembungkus">
            <div class="satu">
                <a href="infopenawaran.php"><img class="puki" src="foto\sport1.png" alt="Foto bali"></a>
            </div>
            <div class="dua">
                <a href="infopenawaran.php"><img class="puki" src="foto\sport2.png" alt="Foto singapore"></a>
            </div>
            <div class="tiga">
                <a href="infopenawaran.php"><img class="puki" src="foto\sport3.png" alt="Foto thailand"></a>
            </div>
        </div>
        <div>
            <h1 class="judul111">Puaskan Fisik Mu!</h1>
            <h4 class="judul222">StunGo hadir untuk memberikan hibuaran dan kesenangan bagi Kamu. Eitsss...StunGo juga memberikan hiburan sekaligus olahraga fisik loh. StunGo menawarkan wisata ski seluncur di Pegunungan Alpen, Berselancar di Pantai Dewata, dan masih banyak lagi. Ayo pesan sekarang!!!</h4>
        </div>
    </div>
    <div class="jpp">
        <h1 class="judul1">Contact Us ☎️</h1>
        <h4 class="judul2">Customer Service Kami Siap Melayani Anda 24/7</h4>
        <div class="bungkuss">
            <div class="satu">
                <img class="liat" src="foto\phone.png" alt="Foto telpon">
                <h4 class="kece">Phone Number</h4>
                <p class="p">08129203745</p>
            </div>
            <div class="dua">
                <img class="liat" src="foto\email.png" alt="Foto email">
                <h4 class="kece">Email</h4>
                <p class="p">stun.go@gmail.com</p>
            </div>
            <div class="tiga">
                <img class="liat" src="foto\alamat.png" alt="Foto alamat">
                <h4 class="kece">Address</h4>
                <p class="p">Serpong, South Tangerang</p>
            </div>
        </div>
         <!-- Peta -->
         <div class="lepas">
            <div class="ah">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0521817332065!2d106.61592027439488!3d-6.256856561257577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb56b25975f9%3A0x50c7d605ba8542f5!2sUniversitas%20Multimedia%20Nusantara!5e0!3m2!1sid!2sid!4v1685173431862!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="ahh">
                <div class="pew">
                    <div class="dalem">
                        <p class="judul1">Address</p>
                        <p class="judul22222">Jalan Scientia Boulevard Gading, Curug Sangereng, Serpong, Kabupaten Tangerang, Banten 15810</p>
                    </div>
                </div>
            </div>
        </div>
    <!-- End of peta -->
        <div>
            <h1 class="judul1111">Hubungi Kami Sekarang!</h1>
            <h4 class="judul2222">Anda memiliki pertanyaan, saran, atau masukan untuk kami? Kami senang mendengarnya! Kami selalu siap membantu dan memberikan jawaban terbaik untuk kebutuhan Anda. Untuk menghubungi kami, Anda dapat mengunjungi website kami dan mengisi formulir kontak yang tersedia. Tim kami akan segera merespon setiap pertanyaan yang Anda ajukan. Anda juga dapat menghubungi kami melalui email atau telepon yang tertera pada website kami. Kami akan merespon dengan cepat dan memberikan solusi terbaik untuk setiap masalah yang Anda hadapi. Kami sangat menghargai setiap masukan dan saran dari pelanggan kami, karena itu kami selalu berusaha untuk meningkatkan kualitas pelayanan kami. Jangan ragu untuk menghubungi kami jika Anda membutuhkan bantuan atau informasi lebih lanjut. Terima kasih telah mempercayakan kebutuhan Anda pada kami. Kami siap membantu dan melayani Anda dengan sepenuh hati.</h4>
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
            <p class="footer-copyright">COPYRIGHT 2023 STUNGO | ALL RIGHTS RESERVED</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span>Tangerang Selatan, Banten</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+62 081-7450-696</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">stun.go@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>About</span>
                StunGo adalah platfrom yang menyediakan akomodasi wisata, spa, dan sport guna menunjang kebahagiaan Kamu...iya Kamu. Pelayanan yang ditawarkan StunGo memiliki banyak keistimewaan dibandingkan platform lainnya.
                </p>

            <div class="footer-media">
                <a href="https://www.youtube.com/watch?v=S4HCcrysoUw"><i class="fa fa-youtube"></i></a>
                <a href="https://twitter.com/travel"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/traveljaya/"><i class="fa fa-instagram"></i></a>
                <a href="https://www.instagram.com/traveljaya/"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
        

    </footer>
    <!-- End of Footer -->
    </body>
</html>
<?php
include('connection.php');
session_start();
$id = $_SESSION['id_akun'];
$sql= "SELECT * FROM reservasi_sport JOIN sport ON reservasi_sport.id_sport = sport.id_sport WHERE id_akun=$id  ORDER BY transaksi_sport DESC LIMIT 1";

$result = mysqli_query($conn, $sql);
   
while ($row = mysqli_fetch_assoc($result)) {
    //var_dump($row);
    $namasport = $row['nama_sport'];
    $lokasi = $row['alamat'];
    $nama = $row['nama_pemesan'];
    $tanggal = $row['tanggal_hari'];
    $jumlah = $row['jumlah_pengunjung'];
    $total = $row['total_harga'];
    $metode = $row['metode_pembayaran'];


    //echo "Nama Spa: " . $namaspa . "<br>";
    //echo "Alamat Spa: " . $lokasi . "<br>";
    //echo "Nama: " . $nama . "<br>";
    //echo "Tanggal Pemesanan: " . $tanggal . "<br>";
    //echo "Jumlah Pengunjung:"  . $jumlah . "<br>";
    //echo "Harga: " . $total . "<br>";
    //echo "Metode: " . $metode . "<br>";
    //echo "<br>";      
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>StunGo | e-Tiket</title>
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
            <li><a href="home.php">Home</a></li>
            <li><a href="destination.php">Wisata</a></li>
            <li><a href="journey.php">Spa</a></li>
            <li><a href="infopenawaran.php">Sport</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li id="login"><a href="index.php">Logout</a></li>
        </ul>
</header>
<!-- End Of Header -->  

<!-- Bagian Isi/body -->

<div class="abrar">
    <div class="abraratas">
        <div class="kiriatas"><p class="tiketabrar"><?php echo $namasport; ?></p></div>
        <div class="kiriatas"><p class="tiketabrars">e-ticket</p></div>
    </div>
    <div class="abrarbawah">
        <div class="abrarkiri">
            <img class="barcode" src="foto\barcode.png" alt="Deskripsi Gambar">
        </div>
        <div class="abrartengah">
            <p class="texttengah">Name: <?php
                    echo $nama ;
                ?><p>
            <p class="texttengah">Tanggal Pemesanan: <?php echo $tanggal; ?></p>
            <p class="texttengah">Jumlah Pengunjung: <?php echo $jumlah; ?></p>
            <p class="texttengah">Alamat: <?php echo $lokasi; ?></p>
            <p class="texttengah">Metode Pembayaran: <?php echo $metode; ?></p>
            <p class="texttengah">Total Harga: <?php echo $total; ?></p>
        </div>
    </div>
    <div class="bawahbanget">
        <p class="males">No Refund. Please Follow Terms and Policy. </p>
    </div>
</div>

<!-- Button untuk mencetak hasil form sebagai PDF -->
<button class="pdf" onclick="printPDF()">Export PDF</button>

<!-- Script untuk mencetak hasil form sebagai PDF -->
<script>
    function printPDF() {
        // Menggunakan window.print() untuk mencetak halaman
        window.print();
    }
</script>

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
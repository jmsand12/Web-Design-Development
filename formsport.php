<?php
include_once('connection.php');
session_start();

$query = "SELECT id_sport,id_akun FROM sport, akun";
$hasil = mysqli_query($conn, $query);


if (!$hasil) {
    die("Query gagal: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($hasil)) {

    $idsport = $row['id_sport'];
    $ida = $row['id_akun'];

}

if (isset($_GET['id_sport'])) {
    //echo "Ini id, " . $_GET['id_sport'];
}


if(isset($_POST['submit'])) { 
    $idsport = $_GET['id_sport'];
    $ida = $_SESSION['id_akun'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['jumlah']*$_POST['kisaran'];
    $metode = $_POST['metode'];


    $sql = "INSERT INTO `reservasi_sport`(`id_sport`,`id_akun`,`nama_pemesan`, `tanggal_hari`, `jumlah_pengunjung`,`total_harga`,`metode_pembayaran`) 
    VALUES ('$idsport','$ida','$nama', '$tanggal', '$jumlah','$total','$metode')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Selamat data anda berhasil disimpan')</script>";
        header('location:hasil.sport.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>StunGo | Form Pemesanan Reservasi Sport</title>
    <link rel="stylesheet" type="text/css" href="styleright.css">
    <link rel="icon" href="foto\logostungo.png" type="image/x-icon">
</head>
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
<body>
    <h1 class="judul1">Form Pemesanan Reservasi Sport</h1>
    <div class="jangan">
        <form method="POST" action="">
            <div class="form-group">
                <label for="nama_penumpang">Nama Pemesan:</label>
                <input type="text" name="nama" id="nama" required>
            </div>
           
            <div class="form-group">
                <label for="tanggal_pergi">Tanggal Kunjungan:</label>
                <input type="date" name="tanggal" id="tanggal" required>
                <script>
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1; // January is 0
                    var yyyy = today.getFullYear();

                if (dd < 10) {
                 dd = '0' + dd;
                }

                if (mm < 10) {
                  mm = '0' + mm;
                }

                var minDate = yyyy + '-' + mm + '-' + dd;
                    document.getElementById("tanggal").setAttribute("min", minDate);
                </script>
            </div>
            <div class="form-group">
                <label for="jumlah_penumpang">Jumlah Pengunjung:</label>
                <input type="number" name="jumlah" id="jumlah" min="1" required>*
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="bank">Waktu Bermain:</label>
                    <select name="kisaran" id="kisaran" required>
                        <option>- Pilih Waktu Bermain -</option>
                        <option value="250000">2 Jam + Meal (Rp250.000)</option>
                        <option value="140000">2 Jam(Rp140.000)</option>
                        <option value="70000">1 Jam (Rp70.000)</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="bank">Metode Pembayaran:</label>
                    <select name="metode" id="metode" required>
                        <option>- Pilih Metode Pembayaran -</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="BCA">BCA</option>
                        <option value="BNI">Alfamidi</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="form-group">
                    <button type="submit" name="submit" value="Submit">Proses Data</button>
                    <button type="reset" name="reset" value="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <script>
		// //function sum() {
		// //	var txtFirstNumberValue = document.getElementById('jumlah').value;
		// 	//var txtSecondNumberValue = document.getElementById('kisaran').value;
		// 	var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
        //     console.log(txtFirstNumberValue);
        //     console.log(txtSecondNumberValue);
		// 	if (!isNaN(result)) {
		// 		document.getElementById('total').value = result;
		// 	}
		//}
	</script>
</body>
</html>

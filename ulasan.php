<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Ulasan Para Pengguna</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include('connection.php');

$sql = "SELECT * FROM `spa`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while ($row = mysqli_fetch_assoc($result)) {
        $nama = $row['nama_spa'];
        $no = $row['no_telp'];
        $alamat = $row['alamat'];
        $harga = $row['harga'];
        $ulasan = $row['ulasan'];

        echo "Nama: " . $nama . "<br>";
        echo "Nomor Telpon: " . $no . "<br>";
        echo "Alamat:"  . $alamat . "<br>";
        echo "Harga: " . $harga . "<br>";
        echo "Ulasan: " . $ulasan . "<br>";
        echo "<br>";
        
        
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

?>



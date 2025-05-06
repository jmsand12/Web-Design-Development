<?php
include_once('connection.php');

if(isset($_POST['register']))
{
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=($_POST['password']);
    $notelp=$_POST['notelp'];
    $lahir=$_POST['lahir'];


    $sql   ="INSERT INTO `akun`(`nama_akun`, `email`, `password`,`no_telp`, `tanggal_lahir`) VALUES ('$nama','$email','$password','$notelp','$lahir')";
    $result=mysqli_query($conn,$sql);
    
    if($result){ 
    header('location:login.php');
    echo"<script>alert('New User Register Success');</script>";   
    }else{
        die(mysqli_error($conn)) ;
    }
   
}

<?php
include_once('connection.php');


if (isset($_POST['login'])) {
    if (empty($_POST['email']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill Username and Password');</script>";
        exit;
    } else {
        $email = $_POST['email'];
        $password =($_POST['password']);

        $sql = "SELECT * FROM `akun` WHERE `email`='$email' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $email = $row['email'];
            $password = $row['password'];
            $id = $row['id_akun'];
            

            if ($email == $_POST['email'] && $password == $_POST['password']) {
                session_start();
                
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['id_akun'] = $id;
                header('location:home.php');
                
            }

        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
            exit;
        }
    }
}

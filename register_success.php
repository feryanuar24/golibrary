<?php
session_start();    
include 'config.php';

if(isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = sha1($password);

    $sql = "SELECT email FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($email == $row['email']) {
        $_SESSION['danger'] = "E-mail telah digunakan";
        header("Location: register.php");
    } else {
        $sql = "INSERT INTO user VALUES (null,'$nama','$email','$password')";
        $result = mysqli_query($conn, $sql);
        $_SESSION['nama'] = $nama;
        $_SESSION['success'] = "Selamat ".$_SESSION['nama']." pendaftaran anda berhasil.";
        header("Location: login.php");
    }

}
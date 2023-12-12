<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {
    $username   =   $_POST['username'];
    $password   =   $_POST['password'];
    $qry = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' AND password = md5('$password')");
    $cek = mysqli_num_rows($qry);
    if ($cek == 1) {
        $_SESSION['userweb'] = $username;
        header("location:dashboard");
        exit;
    } else {
        echo "<center>Maaf, Username atau Password anda salah!</center>";
    }
}

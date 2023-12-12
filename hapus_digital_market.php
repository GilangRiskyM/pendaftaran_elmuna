<?php
include 'koneksi.php';

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $hapus = mysqli_query($conn, "delete from daftar_digital_market where id= '$id' ");
    if ($hapus) {
        header('location:data_peserta_digital_market');
    } else {
        echo 'Gagal';
        header('location:data_peserta_digital_market');
    }
}

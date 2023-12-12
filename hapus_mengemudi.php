<?php
include 'koneksi.php';

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $hapus = mysqli_query($conn, "delete from daftar_mengemudi where id= '$id' ");
    if ($hapus) {
        header('location:data_peserta_mengemudi');
    } else {
        echo 'Gagal';
        header('location:data_peserta_mengemudi');
    }
}

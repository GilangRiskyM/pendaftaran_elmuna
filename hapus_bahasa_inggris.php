<?php
include 'koneksi.php';

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $hapus = mysqli_query($conn, "delete from daftar_bahasa_inggris where id= '$id' ");
    if ($hapus) {
        header('location:data_peserta_bahasa_inggris');
    } else {
        echo 'Gagal';
        header('location:data_peserta_bahasa_inggris');
    }
}

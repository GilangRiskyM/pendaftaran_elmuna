<?php

include 'koneksi.php';

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $hapus = mysqli_query($conn, "delete from bukti_bayar_kursus_komputer where id= '$id' ");
    if ($hapus) {
        header('location:bukti_bayar_kursus_komputer');
    } else {
        echo 'Gagal';
        header('location:bukti_bayar_kursus_komputer');
    }
}

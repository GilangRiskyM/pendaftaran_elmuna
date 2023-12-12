<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/foto/icon1.png" />
    <title>Elmuna | Pendaftaran Kursus Komputer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *,
        html,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 800px;
            height: 190vh;
        }

        .card {
            margin-top: 10px;
            background-color: #191970;
        }

        .card-body {
            background-color: #4169E1;
        }

        @media screen and (max-width: 500px) {
            .container {
                height: 230vh;
            }

        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #1A2238;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index" style="margin-left: auto; margin-right: auto;">
                    <img src="assets/foto/elmuna.png" alt="" width="310,25px" height="64,25px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="index">Program Kursus</a>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Bukti Pembayaran
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" style="background-color: #1A2238;">
                                <li><a class="dropdown-item text-white" href="form_bukti_bayar_mengemudi">Kursus Mengemudi</a></li>
                                <li><a class="dropdown-item text-white" href="form_bukti_bayar_komputer">Kursus Komputer</a></li>
                                <li><a class="dropdown-item text-white" href="form_bukti_bayar_digital_market">Kursus Digital Marketing</a></li>
                                <li><a class="dropdown-item text-white" href="form_bukti_bayar_bahasa_inggris">Kursus Bahasa Inggris</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link active" href="login_admin">Login Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <br><br><br><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3 class="text-light">Form Pendaftaran Kursus Komputer</h3>
                </center>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <center>
                        <h5 class="text-light">Identitas Peserta</h5>
                    </center>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>NIK</center>
                        </span>
                        <input type="text" class="form-control" name="nik" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Nama Lengkap</center>
                        </span>
                        <input type="text" class="form-control" name="nama" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Alamat</center>
                        </span>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Tempat Lahir</center>
                        </span>
                        <input type="text" class="form-control" name="tempat_lahir" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Tanggal Lahir</center>
                        </span>
                        <input type="date" class="form-control" name="tanggal_lahir" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Jenis Kelamin</center>
                        </span>
                        <select class="form-select" aria-label="Default select example" name="jk">
                            <option>-- Pilih Jenis Kelamin --</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Nama Ayah</center>
                        </span>
                        <input type="text" class="form-control" name="nama_ayah" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Nama Ibu</center>
                        </span>
                        <input type="text" class="form-control" name="nama_ibu" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>No. WA</center>
                        </span>
                        <input type="text" class="form-control" name="telepon" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>E-mail</center>
                        </span>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Kecamatan</center>
                        </span>
                        <select class="form-select" aria-label="Default select example" name="kecamatan">
                            <option>-- Pilih Kecamatan --</option>
                            <option>Adimulyo</option>
                            <option>Alian</option>
                            <option>Ambal</option>
                            <option>Ayah</option>
                            <option>Bonorowo</option>
                            <option>Buayan</option>
                            <option>Buluspesantren</option>
                            <option>Gombong</option>
                            <option>Karanganyar</option>
                            <option>Karanggayam</option>
                            <option>Karangsambung</option>
                            <option>Kebumen</option>
                            <option>Klirong</option>
                            <option>Kutowinangun</option>
                            <option>Kuwarasan</option>
                            <option>Mirit</option>
                            <option>Padureso</option>
                            <option>Pejagoan</option>
                            <option>Petanahan</option>
                            <option>Poncowarno</option>
                            <option>Prembun</option>
                            <option>Puring</option>
                            <option>Rowokele</option>
                            <option>Sadang</option>
                            <option>Sempor</option>
                            <option>Sruweng</option>
                        </select>
                    </div>

                    <div class="input-group mb-1">
                        <label class="input-group-text" style="width: 800px; justify-content: center;">
                            <center>Pilih Paket</center>
                        </label>
                    </div>
                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET OFFICE WORD">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET MS. OFFICE WORD</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET OFFICE EXCEL">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET MS. OFFICE EXCEL</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET OFFICE POWER POINT">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET MS. OFFICE POWER POINT</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET OFFICE KOMPLIT">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET MS. OFFICE KOMPLIT</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET SPECIAL POWER POINT PRESENTASI">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET MS. P.P. PRESENTASI</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET SPECIAL POWER POINT BISNIS">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET MS. P.P. BISNIS</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET SPECIAL POWER POINT VIDEO ANIMASI">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET MS. P.P. VIDEO ANIMASI</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="DESAIN GRAFIS COREL DRAW">
                            <label class="form-check-label" for="inlineCheckbox1">DESAIN GRAFIS COREL DRAW</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="DESAIN GRAFIS PHOTOSHOP">
                            <label class="form-check-label" for="inlineCheckbox1">DESAIN GRAFIS PHOTOSHOP</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="DESAIN GRAFIS CANVA">
                            <label class="form-check-label" for="inlineCheckbox1">DESAIN GRAFIS CANVA</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET DESAIN GRAFIS COREL DRAW & PHOTOSHOP">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET COREL DRAW & PHOTOSHOP</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="EDITING VIDEO FILMORA">
                            <label class="form-check-label" for="inlineCheckbox1">EDITING VIDEO FILMORA</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="FOTOGRAFI">
                            <label class="form-check-label" for="inlineCheckbox1">FOTOGRAFI</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Pilih Bayar</center>
                        </span>
                        <select class="form-select" aria-label="Default select example" name="pilih_bayar">
                            <option>-- Pilih Jenis Pembayaran --</option>
                            <option>Transfer</option>
                            <option>Langsung</option>
                        </select>
                    </div>

                    <center>
                        <p class="text-light">No. Rekening : <br>672401001816531<br> A.N MUHDORI</p>
                    </center>
                    <center>
                        <p class="text-light">Untuk mengirim bukti transfer silahkan klik tombol "Kirim Bukti Transfer" atau klik Bukti Pembayaran pada navigasi bar di tombol garis setrip 3.</p>
                    </center>
                    <center><button type="submit" class="btn btn-success" name="kirim">Daftar</button>&nbsp;&nbsp;<button type="reset" class="btn btn-danger">Batal</button></center>
                    <center><a href="form_bukti_bayar_komputer"><button type="button" class="btn btn-info" style="margin-top: 8px;">Kirim Bukti Pembayaran</button></a></center>
                </form>
            </div>
        </div>
    </div>

    <footer style="text-align: center; background: #1A2238; color: #eaeaea; bottom: 0px; width: 100%; position: fixed;">
        <p>
        <h3>&copy; Elmuna Team 2022</h3>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<?php

include "koneksi.php";

date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['kirim'])) {

    $nik            = $_POST['nik'];
    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jk             = $_POST['jk'];
    $nama_ayah      = $_POST['nama_ayah'];
    $nama_ibu       = $_POST['nama_ibu'];
    $telepon        = $_POST['telepon'];
    $email          = $_POST['email'];
    $kecamatan      = $_POST['kecamatan'];
    $paket = implode(", ", $_POST['paket']);
    $pilih_bayar    = $_POST['pilih_bayar'];

    $simpan = "INSERT INTO daftar_komputer(nik, nama, alamat, tempat_lahir, tanggal_lahir, jk, nama_ayah, nama_ibu, telepon, email, kecamatan, paket, pilih_bayar,tanggal_upload) VALUES ('.$nik.','$nama','$alamat','$tempat_lahir','$tanggal_lahir','$jk','$nama_ayah','$nama_ibu','.$telepon.','$email','$kecamatan','$paket','$pilih_bayar',now())";
    $result = mysqli_query($conn, $simpan);

    if ($result) {
        echo "
        <script>
            alert('Data Telah Dikirim!');window.location='daftar_komputer.php'
        </script>
        ";
    }
}

?>

</html>
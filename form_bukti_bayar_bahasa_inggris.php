<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/foto/icon1.png" />
    <title>Elmuna | Bukti Pembayaran Kursus Bahasa Inggris</title>
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
            height: 100vh;
        }

        .card {
            margin-top: 10px;
            background-color: #191970;
        }

        .card-body {
            background-color: #4169E1;
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
                    <h3 class="text-light">Form Bukti Pembayaran Kursus Bahasa Inggris</h3>
                </center>
            </div>
            <div class="card-body">
                <form action="fungsi_bukti_bayar_bahasa_inggris" method="post" enctype="multipart/form-data">
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
                    <div class="input-group mb-1">
                        <label class="input-group-text" style="width: 800px; justify-content: center;">
                            <center>Pilih Paket</center>
                        </label>
                    </div>
                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET ELEMENTARY">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET ELEMENTARY</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET INTERMEDIATE">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET INTERMEDIATE</label>
                        </div>
                    </div>

                    <div class="input-group-text mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET CONVERSATION">
                            <label class="form-check-label" for="inlineCheckbox1">PAKET CONVERSATION</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Jumlah Transfer</center>
                        </span>
                        <input type="text" class="form-control" name="harga">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Foto</center>
                        </span>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px;">
                            <center>Keterangan</center>
                        </span>
                        <input type="text" class="form-control" name="keterangan">
                    </div>
                    <center><button type="submit" class="btn btn-success" name="kirim">Kirim</button>&nbsp;&nbsp;<button type="reset" class="btn btn-danger">Batal</button></center>
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
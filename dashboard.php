<?php
session_start();
if (!isset($_SESSION['userweb'])) {
    header("location: invalid");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/foto/icon1.png" />
    <title>Admin | Dashboard</title>
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
            height: 500vh;
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
                            <a class="nav-link active" href="keluar">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <br><br><br><br>
    <div class="container">
        <center>
            <p class="fs-2">Selamat Datang Admin<br>Elmuna Institut<br>Ini adalah menu Dashboard</p>
        </center>
        <center>
            <div class="card-group">
                <div class="card" style="width: 18rem;">
                    <img src="assets/foto/mobil.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <p style="font-size: 14pt;">Data Peserta Program Mengemudi</p>
                        </center>
                        <center><a href="data_peserta_mengemudi"><button type="button" class="btn btn-primary">Cek Data</button></a></center>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="assets/foto/programkomputer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <p style="font-size: 14pt;">Data Peserta Program Komputer</p>
                        </center>
                        <center><a href="data_peserta_komputer"><button type="button" class="btn btn-primary">Cek Data</button></a></center>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="assets/foto/digitalmarketing.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <p style="font-size: 14pt;">Data Peserta Program Digital Marketing</p>
                        </center>
                        <center><a href="data_peserta_digital_market"><button type="button" class="btn btn-primary">Cek Data</button></a></center>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="assets/foto/bahasainggris.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <p style="font-size: 14pt;">Data Peserta Program Bahasa Inggris</p>
                        </center>
                        <center><a href="data_peserta_bahasa_inggris"><button type="button" class="btn btn-primary">Cek Data</button></a></center>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <footer style="text-align: center; background: #1A2238; color: #eaeaea; bottom: 0px; width: 100%; position: fixed;">
        <p>
        <h3>&copy; Elmuna Team 2022</h3>
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
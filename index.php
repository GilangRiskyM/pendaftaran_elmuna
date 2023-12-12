<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/foto/icon1.png" />
    <title>Elmuna | Program Kursus</title>
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

        .contain {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            max-width: auto;
            margin: 0 auto;
            padding: 70px 0;
            gap: 20px;
        }

        .kartu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .item-kartu {
            width: 300px;
            height: 500px;
            text-align: center;
            background: #f7f7f7;
            color: #222;
            padding: 20px;
            box-shadow: 2px 5px 5px 1px rgba(0, 0, 0, 0.5);
        }

        .item-kartu img {
            width: 200px;
            height: 150px;
        }

        @media screen and (max-width: 500px) {
            .kartu {
                flex-direction: column;
                gap: 0;
            }

            .item-kartu {
                width: 100%;
                opacity: 0.9;
            }

            .contain {
                width: 100%;
                padding: 0;
            }

            .container {
                height: 290vh;
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
        <center>
            <h1>Selamat Datang di Sistem Pendaftaran Kursus <br>ELMUNA INSTITUT</h1>
        </center>
        <center>
            <div class="contain">
                <div class="kartu" style="width: 18rem;">
                    <div class="item-kartu">
                        <img src="assets/foto/mobil.png" alt="...">
                        <center>
                            <p style="font-size: 14pt;">Program Mengemudi</p>
                        </center>
                        <p class="text-start" style="font-size: 10pt;">1. PAKET MANUAL 1 (Melancarkan)</p>
                        <p class="text-start" style="font-size: 10pt;">2. PAKET MANUAL 2 (Pemula)</p>
                        <p class="text-start" style="font-size: 10pt;">3. PAKET MANUAL 3 (Mahir)</p>
                        <p class="text-start" style="font-size: 10pt;">4. PAKET MATIC 1 (Pemula)</p>
                        <p class="text-start" style="font-size: 10pt;">5. PAKET MATIC 2 (Mahir)</p>
                        <br>
                        <center>
                            <a href="daftar_mengemudi">
                                <button type="button" class="btn btn-primary">Daftar Sekarang</button>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="kartu" style="width: 18rem;">
                    <div class="item-kartu">
                        <img src="assets/foto/programkomputer.png" alt="...">
                        <center>
                            <p style="font-size: 14pt;">Program Komputer</p>
                        </center>
                        <p class="text-start" style="font-size: 10pt;">1. MICROSOFT OFFICE</p>
                        <p class="text-start" style="font-size: 10pt;">2. DESAIN GRAFIS</p>
                        <p class="text-start" style="font-size: 10pt;">3. EIDITING VIDEO</p>
                        <p class="text-start" style="font-size: 10pt;">4. FOTOGRAFI</p>
                        <div class="footer">
                            <br>
                            <br>
                            <a href="daftar_komputer">
                                <button type="button" class="btn btn-primary">Daftar Sekarang</button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="kartu" style="width: 18rem;">
                    <div class="item-kartu">
                        <img src="assets/foto/digitalmarketing.png" alt="...">
                        <center>
                            <p style="font-size: 14pt;">Program Digital Marketing</p>
                        </center>
                        <p class="text-start" style="font-size: 10pt;">1. PAKET PEMULA</p>
                        <p class="text-start" style="font-size: 10pt;">2. PAKET MAHIR</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="daftar_digital_market">
                            <button type="button" class="btn btn-primary">Daftar Sekarang</button>
                        </a>
                    </div>

                </div>
                <div class="kartu" style="width: 18rem;">

                    <div class="item-kartu">
                        <img src="assets/foto/bahasainggris.png" alt="...">
                        <center>
                            <p style="font-size: 14pt;">Program Bahasa Inggris</p>
                        </center>
                        <p class="text-start" style="font-size: 10pt;">1. PAKET ELEMENTARY</p>
                        <p class="text-start" style="font-size: 10pt;">2. PAKET INTERMEDIATE</p>
                        <p class="text-start" style="font-size: 10pt;">3. PAKET CONVERSATION</p>
                        <br>
                        <br>
                        <br>
                        <a href="daftar_bahasa_inggris">
                            <button type="button" class="btn btn-primary">Daftar Sekarang</button>
                        </a>
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
<?php
session_start();
if (!isset($_SESSION['userweb'])) {
    header("location: invalid");
    exit;
}
?>

<?php
include 'koneksi.php';
require "hapus_bukti_bayar_digital_market.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/foto/icon1.png" />
    <title>Admin| Bukti Bayar Kursus Digital Market</title>
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
            max-width: fit-content;
            height: 500vh;
        }

        .outer-wrapper {
            margin: 10px;
            margin-left: 20px;
            margin-right: 20px;
            max-width: fit-content;
            max-height: fit-content;
        }

        .table-wrapper {
            overflow-y: scroll;
            overflow-x: scroll;
            height: fit-content;
            max-height: 500px;
            margin-top: 22px;
            margin: 15px;
            padding-bottom: 20px;
        }

        table th {
            position: sticky;
            top: 0px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #1A2238;">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard" style="margin-left: auto; margin-right: auto;">
                    <img src="assets/foto/elmuna.png" alt="" width="310,25px" height="64,25px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="data_peserta_digital_market">Data Peserta</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link active" href="dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link active" href="keluar">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br><br><br><br>

    <div class="mx-auto">
        <form action="" method="">
            <center>
                <p class="fs-3">Data Bukti Bayar Kursus Digital Market</p>
            </center>
            <div class="mb-3">
                <center>
                    <label>Silahkan Cari Data : </label>
                    <input type="text" name="kata_cari" value="<?php if (isset($_GET['kata_cari'])) {
                                                                    echo $_GET['kata_cari'];
                                                                } ?>" />
                    <button type="submit" class="btn btn-info btn-sm">Cari Data</button>
                    <a href="bukti_bayar_kursus_digital_market"><button type="button" class="btn btn-danger btn-sm">Batal</button></a>
                </center>
            </div>
        </form>

        <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <table class="table table-sm table-bordered">
                        <thead class="table-dark">
                            <tr class="align-middle">
                                <th scope="col">No.</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Paket</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>

                        <?php
                        $no = 1;

                        if (isset($_GET['kata_cari'])) {
                            $kata_cari = $_GET['kata_cari'];
                            $query = "SELECT * FROM bukti_bayar_kursus_digital_market WHERE nama LIKE '%" . $kata_cari . "%' OR nik LIKE '%" . $kata_cari . "%' OR paket LIKE '%" . $kata_cari . "%' ORDER BY id ASC";
                        } else {
                            $query = "SELECT * FROM bukti_bayar_kursus_digital_market ORDER BY id ASC";
                        }

                        $select = mysqli_query($conn, $query);
                        if (mysqli_num_rows($select) > 0) {
                            while ($hasil = mysqli_fetch_array($select)) {
                                $id = $hasil['id'];
                                $nama = $hasil['nama'];
                                $nik = $hasil['nik'];
                        ?>

                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td scope="row"><?= $hasil['nik'] ?></td>
                                        <td scope="row"><?= $hasil['nama'] ?></td>
                                        <td scope="row"><?= $hasil['paket'] ?></td>
                                        <td scope="row"><?= $hasil['harga'] ?></td>
                                        <td scope="row"><?= "<img src='bukti_bayar_digital_market/" . $hasil['foto'] . "' width='35%' height='35%'>" ?></td>
                                        <td scope="row"><?= $hasil['keterangan'] ?></td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?= $id ?>">
                                                Hapus
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="hapus<?= $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin mengahapus data dengan NIK <?= $nik ?> dan Nama <?= $nama ?>?
                                                                <input type="hidden" value="<?= $id ?>" name="id">
                                                                <div class="alert alert-danger">
                                                                    <strong>Perhatian!</strong> Data yang telah dihapus tidak dapat dikembalikan.
                                                                </div>
                                                                <br><br>
                                                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger btn-sm" name="hapus">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            <?php }
                        } else { ?>
                            <tr>
                                <td scope="row" colspan="7">
                                    <center>
                                        <h3>Data Kosong</h3>
                                    </center>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                    </center>

                    </table>
                </div>
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

</html>
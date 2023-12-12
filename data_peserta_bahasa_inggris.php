<?php
session_start();
if (!isset($_SESSION['userweb'])) {
    header("location: invalid");
    exit;
}
?>

<?php
require "koneksi.php";
require "ex_data_bing.php";
require "hapus_bahasa_inggris.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/foto/icon1.png" />
    <title>Admin | Data Peserta Kursus Bahasa Inggris</title>
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
                            <a class="nav-link active" aria-current="page" href="bukti_bayar_kursus_bahasa_inggris">Bukti Pembayaran</a>
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
        <form action="data_peserta_bahasa_inggris" method="get">
            <center>
                <p class="fs-3">DATA PESERTA KURSUS BAHASA INGGRIS</p>
            </center>
            <div class="mb-3">
                <center>
                    <label>Dari Tanggal : </label>
                    <input type="date" name="tglawal" required>
                    <label>Sampai Tanggal : </label>
                    <input type="date" name="tglakhir" required>
                    <button type="submit" class="btn btn-info btn-sm">Filter</button>
                    <a href="data_peserta_bahasa_inggris"><button type="button" class="btn btn-danger btn-sm">Batal</button></a>
                    <button type="submit" class="btn btn-success btn-sm" name="export">Export Data</button>
                </center>
            </div>
        </form>

        <form action="data_peserta_bahasa inggris" method="get">
            <div class="mb-3">
                <center>
                    <label>Pencarian Data : </label>
                    <input type="text" name="cari" required>
                    <button type="submit" class="btn btn-info btn-sm">Cari</button>
                    <a href="data_peserta_bahasa_inggris"><button type="button" class="btn btn-danger btn-sm">Batal</button></a>
                    <a href="to_excel_daftar_bing" class="btn btn-sm btn-success">Cetak Seluruh Data</a>
                </center>
            </div>
        </form>

        <center>
            <label>Cara Penggunaan</label>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Klik disini
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cara Penggunaan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Tombol Filter digunakan untuk memilah data berdasarkan tanggal.<br>Untuk menggunakan Tombol Export Data harap pilih tanggal terlebih dahulu kemudian klik tombol Export Data.<br>Tombol Cari digunakan untuk mencari data yang akan dicari.<br>Tombol Batal digunakan untuk mereset data yang sudah diinput.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

        </center>
        <br>

        <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <table class="table table-sm table-bordered">
                        <thead class="table-dark">
                            <tr class="align-middle">
                                <th scope="col">No.</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Nama Ayah</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Kecamatan</th>
                                <th scope="col">Paket</th>

                                <th scope="col">Jenis Pembayaran</th>
                                <th scope="col">Tanggal Upload</th>
                                <th scope="col">Opsi</td>
                            </tr>
                        </thead>

                        <?php
                        include "koneksi.php";
                        $no = 1;

                        if (isset($_GET['cari'])) {
                            $cari = $_GET['cari'];
                            $tampil = mysqli_query($conn, "select * from daftar_bahasa_inggris where nik like '%" . $cari . "%' or nama like '%" . $cari . "%' or telepon like '%" . $cari . "%' or paket like '%" . $cari . "%' or pilih_bayar like '%" . $cari . "%' or kecamatan like '%" . $cari . "%' or jk like '%" . $cari . "%'");
                        } elseif (isset($_GET['tglawal'])) {
                            $tglawal = $_GET['tglawal'];
                            $tglakhir = $_GET['tglakhir'];
                            $tampil = mysqli_query($conn, "select * from daftar_bahasa_inggris where tanggal_upload between '" . $tglawal . "' and '" . $tglakhir . "' order by id asc");
                        } else {
                            $tampil = mysqli_query($conn, "select * from daftar_bahasa_inggris");
                        }
                        if (mysqli_num_rows($tampil) > 0) {
                            while ($data = mysqli_fetch_array($tampil)) {
                                $id = $data['id'];
                                $nama = $data['nama'];
                                $nik = $data['nik'];
                        ?>

                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td scope="row"><?= $data['nik'] ?></td>
                                        <td scope="row"><?= $data['nama'] ?></td>
                                        <td scope="row"><?= $data['alamat'] ?></td>
                                        <td scope="row"><?= $data['tempat_lahir'] ?></td>
                                        <td scope="row"><?= $data['tanggal_lahir'] ?></td>
                                        <td scope="row"><?= $data['jk'] ?></td>
                                        <td scope="row"><?= $data['nama_ayah'] ?></td>
                                        <td scope="row"><?= $data['nama_ibu'] ?></td>
                                        <td scope="row"><?= $data['telepon'] ?></td>
                                        <td scope="row"><?= $data['email'] ?></td>
                                        <td scope="row"><?= $data['kecamatan'] ?></td>
                                        <td scope="row"><?= $data['paket'] ?></td>

                                        <td scope="row"><?= $data['pilih_bayar'] ?></td>
                                        <td scope="row"><?= $data['tanggal_upload'] ?></td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="form_edit_bahasa_inggris?id=<?php echo $data['id'] ?>">Edit</a>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?= $id ?>">
                                                Hapus
                                            </button>

                                            <!-- Modal Hapus -->
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
                                <?php }
                        } else { ?>
                                <tr>
                                    <td scope="row" colspan="17">
                                        <center>
                                            <h3>Data Kosong</h3>
                                        </center>
                                    </td>
                                </tr>
                            <?php } ?>
                                </tbody>

                    </table>
                </div>
            </div>

            <center>
                <h3>Jumlah Pendaftar</h3>
                <?php
                $laki_laki = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM daftar_bahasa_inggris where jk='Laki-laki'"));
                $perempuan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM daftar_bahasa_inggris where jk='Perempuan'"));
                $total = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM daftar_bahasa_inggris where id"));
                ?>
                <table class="table table-sm table-bordered" style="width: 250px;">
                    <tr>
                        <td colspan="3" rowspan="3" class="align-middle">Jumlah</td>
                        <td colspan="2">Laki-laki</td>
                        <td><?= "$laki_laki Orang" ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Perempuan</td>
                        <td><?= "$perempuan Orang" ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Total</td>
                        <td><?= "$total Orang" ?></td>
                    </tr>
                </table>
            </center>
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
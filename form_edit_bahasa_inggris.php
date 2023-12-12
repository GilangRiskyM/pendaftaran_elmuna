<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM daftar_bahasa_inggris WHERE id = '" . $_GET['id'] . "'");
$result = mysqli_fetch_array($data_edit);
$datapaket = explode(', ', $result['paket']);
$update = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/foto/icon1.png" />
    <title>Admin | Edit Data Peserta Kursus</title>
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
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #1A2238;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="margin-left: auto; margin-right: auto;">
                    <img src="assets/foto/elmuna.png" alt="" width="310,25px" height="64,25px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" href="data_peserta_bahasa_inggris">Kembali</a>
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
                    <h3>Form Edit Peserta Kursus Bahasa Inggris</h3>
                </center>
            </div>
            <br>
            <div class="card-body">
                <form action="" method="post">
                    <center>
                        <h5>Identitas Peserta</h5>
                    </center>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>NIK</center>
                        </span>
                        <input type="text" class="form-control" name="nik" value="<?php echo $result['nik'] ?>" required>
                    </div>
                    <center>
                        <p>Titik pada NIK jangan dihapus!</p>
                    </center>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Nama Lengkap</center>
                        </span>
                        <input type="text" class="form-control" name="nama" value="<?php echo $result['nama'] ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Alamat</center>
                        </span>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat'] ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Tempat Lahir</center>
                        </span>
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $result['tempat_lahir'] ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Tanggal Lahir</center>
                        </span>
                        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $result['tanggal_lahir'] ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Jenis Kelamin</center>
                        </span>
                        <select class="form-select" aria-label="Default select example" name="jk">
                            <option><?php echo $result['jk'] ?></option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Nama Ayah</center>
                        </span>
                        <input type="text" class="form-control" name="nama_ayah" value="<?php echo $result['nama_ayah'] ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Nama Ibu</center>
                        </span>
                        <input type="text" class="form-control" name="nama_ibu" value="<?php echo $result['nama_ibu'] ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>No. WA</center>
                        </span>
                        <input type="text" class="form-control" name="telepon" value="<?php echo $result['telepon'] ?>" required>
                    </div>
                    <center>
                        <p>Titik pada No. WA jangan dihapus!</p>
                    </center>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>E-mail</center>
                        </span>
                        <input type="email" class="form-control" value="<?php echo $result['email'] ?>" name="email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Kecamatan</center>
                        </span>
                        <select class="form-select" aria-label="Default select example" name="kecamatan">
                            <option><?php echo $result['kecamatan'] ?></option>
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
                    <div class="input-group mb-3">
                        <span><label class="input-group-text" style="width: 135px; height: 120px;">
                                <center>Paket</center>
                            </label>
                        </span>

                        <span>
                            <div class="input-group-text ms-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET ELEMENTARY" <?php if (in_array("PAKET ELEMENTARY", $datapaket)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">PAKET ELEMENTARY</label>
                                </div>
                            </div>

                            <div class="input-group-text ms-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET INTERMEDIATE" <?php if (in_array("PAKET INTERMEDIATE", $datapaket)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">PAKET INTERMEDIATE</label>
                                </div>
                            </div>

                            <div class="input-group-text ms-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="paket[]" value="PAKET CONVERSATION" <?php if (in_array("PAKET CONVERSATION", $datapaket)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">PAKET CONVERSATION</label>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 135px; justify-content:center;">
                            <center>Pilih Bayar</center>
                        </span>
                        <select class="form-select" aria-label="Default select example" name="pilih_bayar">
                            <option><?php echo $result['pilih_bayar'] ?></option>
                            <option>Transfer</option>
                            <option>Langsung</option>
                        </select>
                    </div>
                    <center><button type="submit" class="btn btn-primary" name="edit">Edit</button></center>
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

    <?php
    if (isset($_POST['edit'])) {
        $update = mysqli_query($conn, "UPDATE daftar_bahasa_inggris SET nik = '" . $_POST['nik'] . "', nama = '" . $_POST['nama'] . "', alamat = '" . $_POST['alamat'] . "', tempat_lahir = '" . $_POST['tempat_lahir'] . "', tanggal_lahir = '" . $_POST['tanggal_lahir'] . "', jk = '" . $_POST['jk'] . "', nama_ayah = '" . $_POST['nama_ayah'] . "', nama_ibu = '" . $_POST['nama_ibu'] . "', telepon = '" . $_POST['telepon'] . "', email = '" . $_POST['email'] . "', kecamatan = '" . $_POST['kecamatan'] . "', paket = '" . implode(", ", $_POST['paket']) . "', pilih_bayar = '" . $_POST['pilih_bayar'] . "' WHERE id = '" . $_GET['id'] . "' ");
    }
    if ($update) {
        echo "
                <script>
                    alert('Data Telah Di UPDATE!');window.location='data_peserta_bahasa_inggris'
                </script>
                ";
    }
    ?>

</body>

</html>
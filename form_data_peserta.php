<?php
ob_start();
session_start();
include 'koneksi.php';
$data    =mysqli_query($conn, "SELECT * FROM daftar_mengemudi WHERE nik = '$_SESSION[nik]'");
$result = mysqli_fetch_array($data);
$update = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/foto/icon1.png" />
    <link rel="stylesheet" href="style_form_edit.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elmuna | Form Data Peserta</title>
</head>
<body>
    <header>
        <div class="logo" onclick="Refresh()">
            <img src="assets/foto/icon2.png" alt="logo" class="logo-img"/>
        </div>
        <nav>
            <ul>
                <li><a href="https://wa.me/+6281390605650">Hubungi Admin</a></li>
                <li><a href="index.php">Keluar</a></li>
            </ul>
        </nav>
    </header>
    <div class="parallax">
    <br>
        <div class="form">
        <center><h1>Form Data Peserta</h1></center>
        <br>
        <center><h5>Jika data salah harap hubungi admin!</h5></center>
        <br>
            <form action="fungsi_kirim_gambar.php" method="post" enctype="multipart/form-data">
                <table>
                <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td><input type="text" name="nik" value="<?php echo $result['id'] ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="text" name="nik" value="<?php echo $result['nik'] ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $result['nama'] ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" readonly><?php echo $result['alamat'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" value="<?php echo $result['tempat_lahir'] ?>" name="tempat_lahir" readonly></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" value="<?php echo $result['tanggal_lahir'] ?>" name="tanggal_lahir" readonly></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="text" value="<?php echo $result['jk'] ?>" name="jk" readonly>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td><input type="text" value="<?php echo $result['nama_ayah'] ?>" name="nama_ortu" readonly></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td><input type="text" value="<?php echo $result['nama_ibu'] ?>" name="nama_ortu" readonly></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td><input type="text" value="<?php echo $result['telepon'] ?>" name="telepon" readonly></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><textarea name="email" readonly><?php echo $result['email'] ?></textarea></td></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><input type="text" value="<?php echo $result['kecamatan'] ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Paket</td>
                        <td>:</td>
                        <td>
                            <textarea name="paket" readonly><?php echo $result['paket'] ?></textarea>
                            <input type="hidden" name="paket" id="namapaket" value="<?= $result['paket']?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><input type="text" name="harga" id="pilihpaket" value="<?= $result['harga']?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>:</td>
                        <td><input type="text" name="pilih_bayar" value="Transfer" readonly></td>
                    </tr>
                    <tr>
                        <td>Upload Bukti Transfer</td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="file" name="foto" id="foto">
                        </td>
                    </tr>
                </table>
                <br>
                <center><h4>File harus berformat .jpg, .jpeg atau .png<br>dan ukuran kurang dari 10mb!</h4></center>
                <br>
                <center><button type="submit" name="kirim" id='kirim'>Kirim</button></center>
            </form>
            <br>
        </div>
    </div>
    <br>
    <footer><p class="title">&copy; Elmuna Team 2022</p></footer>
    <script>
        function Refresh(){
            window.location.href = "index.php";
        }
        const sel=document.getElementById("paket");
        sel.addEventListener("change", changeOpt);

        function changeOpt(){
            let opt=sel.options[sel.selectedIndex];

            document.getElementById("namapaket").value=opt.text;
            document.getElementById("pilihpaket").value=opt.value;
        }
    </script>
</body>
</html>
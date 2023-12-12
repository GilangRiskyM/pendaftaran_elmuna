<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Daftar Peserta</title>
    <link rel="stylesheet" href="#">
    <link rel="icon" href="assets\foto\icon1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


    <br>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Peserta Mengemudi.xls");
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Kecamatan</th>
                <th>Paket</th>

                <th>Jenis Pembayaran</th>
                <th>Tanggal Upload</th>
            </tr>
        </thead>

        <?php
        $id = 1;

        if (isset($_GET['kata_cari'])) {
            $kata_cari = $_GET['kata_cari'];
            $query = "SELECT * FROM daftar_mengemudi WHERE nik LIKE '%" . $kata_cari . "%' OR nama LIKE '%" . $kata_cari . "%' OR paket LIKE '%" . $kata_cari . "%' ORDER BY id ASC";
        } else {
            $query = "SELECT * FROM daftar_mengemudi ORDER BY id ASC";
        }

        $select = mysqli_query($conn, $query);
        if (mysqli_num_rows($select) > 0) {
            while ($hasil = mysqli_fetch_array($select)) {
        ?>

                <tbody>
                    <tr>
                        <td><?php echo $id++ ?></td>
                        <td><?php echo $hasil['nik'] ?></td>
                        <td><?php echo $hasil['nama'] ?></td>
                        <td><?php echo $hasil['alamat'] ?></td>
                        <td><?php echo $hasil['tempat_lahir'] ?></td>
                        <td><?php echo $hasil['tanggal_lahir'] ?></td>
                        <td><?php echo $hasil['jk'] ?></td>
                        <td><?php echo $hasil['nama_ayah'] ?></td>
                        <td><?php echo $hasil['nama_ibu'] ?></td>
                        <td><?php echo $hasil['telepon'] ?></td>
                        <td><?php echo $hasil['email'] ?></td>
                        <td><?php echo $hasil['kecamatan'] ?></td>
                        <td><?php echo $hasil['paket'] ?></td>

                        <td><?php echo $hasil['pilih_bayar'] ?></td>
                        <td><?php echo $hasil['tanggal_upload'] ?></td>
                    </tr>
                </tbody>

            <?php }
        } else { ?>
            <tr>
                <td colspan="17"> Data Kosong </td>
            </tr>
        <?php } ?>

        <?php
        $laki_laki = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM daftar_mengemudi where jk='Laki-laki'"));
        $perempuan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM daftar_mengemudi where jk='Perempuan'"));
        ?>

        <tr>
            <td colspan="3" rowspan="2">Jumlah</td>
            <td colspan="2">Laki - Laki </td>
            <td><?php echo "$laki_laki orang"; ?></td>
        </tr>

        <tr>
            <td colspan="2">Perempuan</td>
            <td><?php echo "$perempuan orang"; ?></td>
        </tr>

    </table>
</body>

</html>
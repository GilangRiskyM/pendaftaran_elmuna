<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$paket          = implode(", ", $_POST['paket']);
$harga          = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
$keterangan = $_POST['keterangan'];

// Set path folder tempat menyimpan gambarnya
$path = "bukti_bayar_komputer/" . $foto;

if ($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg") { // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if ($ukuran_file <= 10000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 10MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if (move_uploaded_file($tmp_file, $path)) { // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :	
      // Proses simpan ke Database
      $query = "INSERT INTO bukti_bayar_kursus_komputer(nik, nama, paket, harga, foto, keterangan) VALUES ('$nik','$nama','$paket','$harga','$foto','$keterangan')";
      $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query

      if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "
        <script>
            alert('Data Telah Dikirim!');window.location='form_bukti_bayar_komputer'
        </script>
        ";
      } else {
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_bukti_bayar_komputer'>Kembali Ke Form</a>";
      }
    } else {
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='form_bukti_bayar_komputer'>Kembali Ke Form</a>";
    }
  } else {
    // Jika ukuran file lebih dari 10MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 10MB";
    echo "<br><a href='form_bukti_bayar_komputer'>Kembali Ke Form</a>";
  }
} else {
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='form_bukti_bayar_komputer'>Kembali Ke Form</a>";
}

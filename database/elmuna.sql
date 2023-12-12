-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 07:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elmuna`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_bayar_kursus_bahasa_inggris`
--

CREATE TABLE `bukti_bayar_kursus_bahasa_inggris` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal_bayar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti_bayar_kursus_bahasa_inggris`
--

INSERT INTO `bukti_bayar_kursus_bahasa_inggris` (`id`, `nik`, `nama`, `paket`, `harga`, `foto`, `keterangan`, `tanggal_bayar`) VALUES
(2, '3305052120005555', 'Rahadi ruyanto', 'PAKET CONVERSATION', 'Rp. 2.000.000,-', 'best-seo-services-slide-1.png', '', '2022-11-05 04:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_bayar_kursus_digital_market`
--

CREATE TABLE `bukti_bayar_kursus_digital_market` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal_bayar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti_bayar_kursus_digital_market`
--

INSERT INTO `bukti_bayar_kursus_digital_market` (`id`, `nik`, `nama`, `paket`, `harga`, `foto`, `keterangan`, `tanggal_bayar`) VALUES
(4, '121221334455177013', 'mamet toal', 'PAKET PEMULA', 'Rp. 350.000,-', 'best-seo-services-slide-1.png', '', '2022-11-05 04:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_bayar_kursus_komputer`
--

CREATE TABLE `bukti_bayar_kursus_komputer` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal_bayar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti_bayar_kursus_komputer`
--

INSERT INTO `bukti_bayar_kursus_komputer` (`id`, `nik`, `nama`, `paket`, `harga`, `foto`, `keterangan`, `tanggal_bayar`) VALUES
(1, '3344556677889900', 'the rasputin', 'PAKET POWER POINT BISNIS', 'Rp. 400.000,-', '3738670871.jpg', '', '2022-11-05 03:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_bayar_kursus_mengemudi`
--

CREATE TABLE `bukti_bayar_kursus_mengemudi` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal_bayar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti_bayar_kursus_mengemudi`
--

INSERT INTO `bukti_bayar_kursus_mengemudi` (`id`, `nik`, `nama`, `paket`, `harga`, `foto`, `keterangan`, `tanggal_bayar`) VALUES
(19, '1122334455667788', 'Rahamat Widadi', 'PAKET MANUAL 1 (Melancarkan)', 'Rp. 600.000,-', 'Honda-mobilio-samping.png', '', '2022-11-04 07:30:47'),
(20, '2233445566778899', 'Giring Nidji', 'PAKET MATIC 1 (Pemula)', 'Rp. 650.000,-', '1739503268.jpg', '', '2022-11-04 07:41:15'),
(21, '2233445566778899', 'Giring Nidji', 'PAKET MATIC 1 (Pemula)', 'Rp. 650.000,-', '1739503268.jpg', '', '2022-11-04 07:42:01'),
(22, '2233445566778899', 'Giring Nidji', 'PAKET MATIC 1 (Pemula)', 'Rp. 650.000,-', '1739503268.jpg', '', '2022-11-04 07:43:11'),
(23, '4123412', 'dddd', 'PAKET MANUAL 1 (Melancarkan)', 'Rp. 600.000,-', '290_12_BATIK.jpg', '', '2022-11-05 04:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_bahasa_inggris`
--

CREATE TABLE `daftar_bahasa_inggris` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `pilih_bayar` varchar(100) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_digital_market`
--

CREATE TABLE `daftar_digital_market` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `pilih_bayar` varchar(100) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_digital_market`
--

INSERT INTO `daftar_digital_market` (`id`, `nik`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jk`, `nama_ayah`, `nama_ibu`, `telepon`, `email`, `kecamatan`, `paket`, `pilih_bayar`, `tanggal_upload`) VALUES
(4, '.121221334455177013.', 'mamet toal', 'Klegenwonosari', 'Kandang wedhus', '2022-11-01', 'Laki-laki', 'zzzz', 'zzzz', '.123123123123.', '', 'Bonorowo', 'PAKET PEMULA', 'Transfer', '2022-11-01 04:00:03'),
(5, '.3305052105010003.', 'Rahmat', 'Karangturi', 'Kebumen', '2001-05-21', 'Laki-laki', 'Dasimun', 'Parsini', '.085702538190.', '', 'Klirong', 'PAKET PEMULA, PAKET MAHIR', 'Transfer', '2022-11-24 07:59:45'),
(6, '.3305052105010003.', 'Adi', 'Karangturi', 'Kebumen', '2022-11-09', 'Laki-laki', 'Dasimun', 'ddd', '.1111112222.', '', 'Klirong', 'PAKET PEMULA, PAKET MAHIR', 'Langsung', '2022-11-25 06:15:44'),
(7, '.3305052105010003.', 'Adi', 'Karangturi', 'Kebumen', '2022-11-09', 'Laki-laki', 'd', 'dd', '.44444444.', 'ddd@dd.d', 'Klirong', 'PAKET PEMULA, PAKET MAHIR', 'Transfer', '2022-11-25 06:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_komputer`
--

CREATE TABLE `daftar_komputer` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `pilih_bayar` varchar(100) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_komputer`
--

INSERT INTO `daftar_komputer` (`id`, `nik`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jk`, `nama_ayah`, `nama_ibu`, `telepon`, `email`, `kecamatan`, `paket`, `pilih_bayar`, `tanggal_upload`) VALUES
(8, '.00998877665544.', 'Penghoetang handal', 'Setia Korupsi', 'Sulawesi Tengah', '2022-11-17', 'Perempuan', 'the rent', 'the corupt', '.998877655442.', 'penghoetang@handal.vom', 'Pejagoan', 'PAKET SPECIAL POWER POINT BISNIS', 'Transfer', '2022-11-25 08:28:14'),
(9, '.3344556677889900.', 'the rasputin', 'sapi paling banyak', 'Gulag', '2022-11-22', 'Laki-laki', 'papa stalin', 'tripaloski', '.665544778833.', 'ussr@anthem.com', 'Mirit', 'PAKET OFFICE WORD, PAKET SPECIAL POWER POINT PRESENTASI, PAKET SPECIAL POWER POINT BISNIS, PAKET SPE', 'Transfer', '2022-11-25 07:54:20'),
(10, '.990667755443388.', 'Yhe Hitler', 'JEjeRan kauMan', 'The Nasi', '2022-11-08', 'Perempuan', 'Kumi Kotak', 'Sawastika', '.886677554499.', 'tiger@gustav.nn', 'Padureso', 'PAKET OFFICE WORD, PAKET OFFICE EXCEL, PAKET OFFICE POWER POINT', 'Langsung', '2022-11-25 07:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_mengemudi`
--

CREATE TABLE `daftar_mengemudi` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `pilih_bayar` varchar(100) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_mengemudi`
--

INSERT INTO `daftar_mengemudi` (`id`, `nik`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jk`, `nama_ayah`, `nama_ibu`, `telepon`, `email`, `kecamatan`, `paket`, `pilih_bayar`, `tanggal_upload`) VALUES
(42, '.2233445566778899.', 'Giring Nidji', 'Jl. los vagos', 'Gunung Tangkuban Perahu', '2022-11-16', 'Perempuan', 'Rick Roll', 'Serene seral', '.556677889900.', '', 'Padureso', 'PAKET MANUAL 1 (MELANCARKAN), PAKET MANUAL 2 (PEMULA), PAKET MANUAL 3 (MAHIR), PAKET MATIC 1 (PEMULA)', 'Transfer', '2022-11-26 04:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'elmuna', 'aec3a0b326a2a657d9fba79ccdcc1270');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_bayar_kursus_bahasa_inggris`
--
ALTER TABLE `bukti_bayar_kursus_bahasa_inggris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_bayar_kursus_digital_market`
--
ALTER TABLE `bukti_bayar_kursus_digital_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_bayar_kursus_komputer`
--
ALTER TABLE `bukti_bayar_kursus_komputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_bayar_kursus_mengemudi`
--
ALTER TABLE `bukti_bayar_kursus_mengemudi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_bahasa_inggris`
--
ALTER TABLE `daftar_bahasa_inggris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_digital_market`
--
ALTER TABLE `daftar_digital_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_komputer`
--
ALTER TABLE `daftar_komputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_mengemudi`
--
ALTER TABLE `daftar_mengemudi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_bayar_kursus_bahasa_inggris`
--
ALTER TABLE `bukti_bayar_kursus_bahasa_inggris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bukti_bayar_kursus_digital_market`
--
ALTER TABLE `bukti_bayar_kursus_digital_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bukti_bayar_kursus_komputer`
--
ALTER TABLE `bukti_bayar_kursus_komputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bukti_bayar_kursus_mengemudi`
--
ALTER TABLE `bukti_bayar_kursus_mengemudi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `daftar_bahasa_inggris`
--
ALTER TABLE `daftar_bahasa_inggris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar_digital_market`
--
ALTER TABLE `daftar_digital_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daftar_komputer`
--
ALTER TABLE `daftar_komputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `daftar_mengemudi`
--
ALTER TABLE `daftar_mengemudi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

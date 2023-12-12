-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 02:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'ac43724f16e9241d990427ab7c8f4228');

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

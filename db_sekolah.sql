-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2025 at 10:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `namaguru` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jeniskelamin` enum('L','P') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kontak` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `namaguru`, `jeniskelamin`, `kontak`, `foto`) VALUES
('1122334455667', 'halahh', 'L', '539201928210', 'uploads/67a41d5188311.jpg'),
('112233445566778888', 'awokawok', 'L', '019283719527', 'uploads/67a41d1c2d965.jpg'),
('2016450336525', 'Joel Nissi Aw', 'L', '123456789012', 'uploads/67a41c764bca6.jpg'),
('2019030336025', 'Joel Nissi', 'L', '085796072571', 'uploads/67a41c3eb6c25.png'),
('2019030351238', 'miwiawww', 'P', '086366072211', 'uploads/67a87f90a5dac.jpg'),
('2916380336525', 'miwiwww', 'P', '085796077152', 'uploads/67a41fbd84584.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int NOT NULL,
  `nis` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `namaproduk` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `nis`, `namaproduk`, `jumlah`, `harga`, `tanggal`) VALUES
(13, '22159', 'BUKU AJAAA', 900, 28800.00, '2025-01-26'),
(14, '22159', 'PISTOL RAKIT', 200, 400000.00, '2025-02-06'),
(15, '12', 'ayam bubuk', 40, 350000.00, '2025-02-06'),
(16, '12340', 'LAPTOP', 50, 20000000.00, '2025-01-28'),
(17, '87651', 'MOUSEee', 444, 12000.00, '2025-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `namasiswa` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_general_ci,
  `jeniskelamin` enum('L','P') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `namasiswa`, `alamat`, `jeniskelamin`, `kelas`, `ttl`, `foto`) VALUES
('11295', 'yanti', 'Jl.PakisIINo.220', 'P', '12 RPL 01', '2004-08-08', 'uploads/67a882bf25649.jpg'),
('22100', 'jowell', 'Jl.PakisIINo.011', 'L', '12 RPL 01', '2006-12-31', 'uploads/67a880576556d.jpg'),
('22170', 'awokwok', 'Jl.PakisIINo.62', 'L', '12', '2025-01-26', 'uploads/67a427c3239dd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namauser` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `emailuser` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` enum('guru','siswa','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `namauser`, `emailuser`, `level`) VALUES
(30, 'hujanan010', '$2y$10$iAgwESx8P5xwfCRO22aZBey.h/B/l.cvO9S3PtNuRhe/UB6C.l8fO', 'hujannn444', '11ujanaja@gmail.com', 'user'),
(31, 'vanvan', '$2y$10$4mlZvuIWmtPr6l8puUo6hOigOsDKcOnfJgbaRsNhLFE/PG0L9Oyv6', 'Vanessa', 'van@gmail.com', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `emailuser` (`emailuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

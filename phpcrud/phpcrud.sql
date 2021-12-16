-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 10:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `usia` varchar(50) NOT NULL,
  `jenispenyakit` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `notelp`, `jeniskelamin`, `usia`, `jenispenyakit`, `alamat`, `keterangan`) VALUES
(4, 'Bayu Adib', '08159522486', 'pria', '21 Tahun', 'Jantung', 'Bukit Pala 2', 'Habis Ditolak dada saya sakit'),
(5, 'Ghaffar Hadista', '08159522486', 'Pria', '21 Tahun', 'Tangan Nyangkut', 'Bukit Pala 2', 'Tangan nyangkut di ember wkwkw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

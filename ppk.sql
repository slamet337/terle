-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 06:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppk`
--

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `id` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `mak` varchar(10) NOT NULL,
  `pek` varchar(200) NOT NULL,
  `penye` varchar(255) NOT NULL,
  `spk` varchar(900) NOT NULL,
  `kalender` varchar(200) NOT NULL,
  `nilai_kon` varchar(255) NOT NULL,
  `nilai_kwi` varchar(900) NOT NULL,
  `sisa` varchar(900) NOT NULL,
  `sp2d` varchar(900) NOT NULL,
  `no_sp2d` varchar(50) NOT NULL,
  `sp2dp` varchar(900) NOT NULL,
  `no_sp2dp` varchar(50) NOT NULL,
  `bast` varchar(900) NOT NULL,
  `sumber` varchar(5) NOT NULL,
  `nilai` varchar(900) NOT NULL,
  `ppn` varchar(255) NOT NULL,
  `pph` varchar(255) NOT NULL,
  `kualifikasi` varchar(10) NOT NULL,
  `denda` int(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id` int(11) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `periode`, `status`) VALUES
(1, '2024', 'NO'),
(2, '2025', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `termin`
--

CREATE TABLE `termin` (
  `id` int(10) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `kwit` varchar(30) NOT NULL,
  `sp2dt` varchar(20) NOT NULL,
  `no_sp2dt` varchar(30) NOT NULL,
  `sp2dpt` varchar(30) NOT NULL,
  `bersiht` varchar(200) NOT NULL,
  `no_sp2dpt` varchar(30) NOT NULL,
  `bastt` varchar(300) NOT NULL,
  `ppnt` varchar(30) NOT NULL,
  `ppht` varchar(30) NOT NULL,
  `kode` varchar(90) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idppk` char(60) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idppk`, `username`, `password`, `nama`, `status`, `role`, `waktu`) VALUES
('853fghz-12dfshgh-sadasdg-45Redgc', 'admin', 'admin', 'memed', '1', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termin`
--
ALTER TABLE `termin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idppk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `termin`
--
ALTER TABLE `termin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

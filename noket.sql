-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 08:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noket`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatankeuangan`
--

CREATE TABLE `catatankeuangan` (
  `id` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_pengguna` int(255) NOT NULL,
  `id_subkategori` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatankeuangan`
--

INSERT INTO `catatankeuangan` (`id`, `jumlah`, `tanggal`, `keterangan`, `id_pengguna`, `id_subkategori`) VALUES
(5, 125061, '2021-12-22', 'Tes edit', 1, 6),
(6, 125000, '2021-11-09', 'Tes', 1, 6),
(8, 50021, '2021-11-18', 'Testis', 1, 5),
(13, 2311231, '2021-12-13', 'TESD', 1, 1),
(14, 21313123, '2021-12-22', '123123', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `catatanutang`
--

CREATE TABLE `catatanutang` (
  `id` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pengguna` int(255) NOT NULL,
  `id_subkategori` int(255) NOT NULL,
  `id_instansi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatanutang`
--

INSERT INTO `catatanutang` (`id`, `jumlah`, `tanggal`, `id_pengguna`, `id_subkategori`, `id_instansi`) VALUES
(43, 25000, '2021-12-15', 1, 4, 2),
(44, 50000, '2021-12-01', 1, 3, 8),
(45, 50000, '2021-12-09', 1, 4, 3),
(46, 12500, '2021-11-10', 1, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(255) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama`) VALUES
(1, 'Jon Setiawan'),
(2, 'Helmi Raihan'),
(3, 'Rama Fachri'),
(4, 'Suryo Guritno'),
(5, 'Simu Law'),
(6, 'Dony Adam'),
(7, 'Julia Mulia'),
(8, 'Ela Citra'),
(9, 'Candra Kirana'),
(10, 'Purnama Lestari');

-- --------------------------------------------------------

--
-- Table structure for table `kategoricatatan`
--

CREATE TABLE `kategoricatatan` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoricatatan`
--

INSERT INTO `kategoricatatan` (`id`, `nama`) VALUES
(1, 'penjualan'),
(2, 'pengeluaran'),
(3, 'utang'),
(4, 'piutang');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `email`, `nohp`) VALUES
(1, 'rama', '1234', 'fahri279', 23231322),
(2, 'rama', 'rama', '1234', 1234),
(3, 'helmi', 'helmi', 'helmi@gmail.com', 88888888),
(4, 'admin', '1234', '123@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE `subkategori` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_kategori` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`id`, `nama`, `id_kategori`) VALUES
(1, 'produk offline', 1),
(2, 'suplai alat dan barang', 2),
(3, 'piutang', 4),
(4, 'utang', 3),
(5, 'pembaruan dan pembangunan', 2),
(6, 'produk online', 1);

-- --------------------------------------------------------

--
-- Table structure for table `targetpencapaian`
--

CREATE TABLE `targetpencapaian` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `target` int(255) NOT NULL,
  `sisa` int(255) NOT NULL,
  `id_pengguna` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatankeuangan`
--
ALTER TABLE `catatankeuangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`,`id_subkategori`),
  ADD KEY `id_subkategori` (`id_subkategori`);

--
-- Indexes for table `catatanutang`
--
ALTER TABLE `catatanutang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`,`id_subkategori`),
  ADD KEY `id_subkategori` (`id_subkategori`),
  ADD KEY `id_instansi` (`id_instansi`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoricatatan`
--
ALTER TABLE `kategoricatatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kategori_2` (`id_kategori`);

--
-- Indexes for table `targetpencapaian`
--
ALTER TABLE `targetpencapaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatankeuangan`
--
ALTER TABLE `catatankeuangan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `catatanutang`
--
ALTER TABLE `catatanutang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategoricatatan`
--
ALTER TABLE `kategoricatatan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `targetpencapaian`
--
ALTER TABLE `targetpencapaian`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatankeuangan`
--
ALTER TABLE `catatankeuangan`
  ADD CONSTRAINT `catatankeuangan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`),
  ADD CONSTRAINT `catatankeuangan_ibfk_2` FOREIGN KEY (`id_subkategori`) REFERENCES `subkategori` (`id`);

--
-- Constraints for table `catatanutang`
--
ALTER TABLE `catatanutang`
  ADD CONSTRAINT `catatanutang_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`),
  ADD CONSTRAINT `catatanutang_ibfk_2` FOREIGN KEY (`id_subkategori`) REFERENCES `subkategori` (`id`),
  ADD CONSTRAINT `catatanutang_ibfk_3` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id`);

--
-- Constraints for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD CONSTRAINT `subkategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategoricatatan` (`id`);

--
-- Constraints for table `targetpencapaian`
--
ALTER TABLE `targetpencapaian`
  ADD CONSTRAINT `targetpencapaian_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

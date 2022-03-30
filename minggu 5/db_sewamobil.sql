-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 01:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sewamobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `no_plat` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `tarif` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`no_plat`, `tahun`, `tarif`, `status`, `id_type`) VALUES
(6544, 2012, 400000, 'Tersedia', 3),
(7655, 2012, 500000, 'Tersedia', 2),
(9877, 2008, 200000, 'Tersedia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_ktp` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_ktp`, `nama`, `alamat`, `telepon`) VALUES
(665432, 'Alexander Budi', 'Jalan moro no.2', '08815543765');

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `id_sopir` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(11) NOT NULL,
  `sim` varchar(16) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`id_sopir`, `nama`, `alamat`, `telepon`, `sim`, `tarif`) VALUES
(0, 'Dodit Triyadi', 'Jalan harapan no. 40', '08563343224', '000432', 90000),
(1, 'Setiadi', 'Jalan toro no.3', '08576432543', '000124', 80000),
(2, 'Bato Tanaka', 'jalan kemana no. 90', '08764321453', '000887', 85000);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kendaraan`
--

CREATE TABLE `tipe_kendaraan` (
  `id_type` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_kendaraan`
--

INSERT INTO `tipe_kendaraan` (`id_type`, `type`) VALUES
(1, 'SUV'),
(2, 'Sport'),
(3, 'Coupe');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `rcn_tglkembali` date NOT NULL,
  `rcn_wktkembali` time NOT NULL,
  `real_tglkembali` date NOT NULL,
  `real_wktkembali` time NOT NULL,
  `denda` int(11) NOT NULL,
  `kilo_pinjam` int(11) NOT NULL,
  `kilo_kembali` int(11) NOT NULL,
  `bbm_pinjam` int(11) NOT NULL,
  `bbm_kembali` int(11) NOT NULL,
  `kondisi_pinjam` varchar(50) NOT NULL,
  `kondisi_kembali` varchar(50) NOT NULL,
  `kerusakan` text NOT NULL,
  `biaya_kerusakan` int(11) NOT NULL,
  `biaya_bbm` int(11) NOT NULL,
  `no_plat` int(11) NOT NULL,
  `id_sopir` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `tgl_pesan`, `tgl_pinjam`, `rcn_tglkembali`, `rcn_wktkembali`, `real_tglkembali`, `real_wktkembali`, `denda`, `kilo_pinjam`, `kilo_kembali`, `bbm_pinjam`, `bbm_kembali`, `kondisi_pinjam`, `kondisi_kembali`, `kerusakan`, `biaya_kerusakan`, `biaya_bbm`, `no_plat`, `id_sopir`, `id_pelanggan`) VALUES
(1, '2022-03-29', '2022-03-30', '2022-03-31', '09:00:00', '2022-03-31', '09:30:00', 50000, 90, 120, 40, 30, 'Seperti baru', 'Seperti baru', 'Tidak ada', 0, 98500, 6544, 1, 665432);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`no_plat`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indexes for table `tipe_kendaraan`
--
ALTER TABLE `tipe_kendaraan`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_sopir` (`id_sopir`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `no_plat` (`no_plat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipe_kendaraan`
--
ALTER TABLE `tipe_kendaraan`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `tipe_kendaraan` (`id_type`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`no_plat`) REFERENCES `kendaraan` (`no_plat`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`no_ktp`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_sopir`) REFERENCES `sopir` (`id_sopir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

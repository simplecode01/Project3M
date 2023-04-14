-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 08:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_telucloth`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpesanan`
--

CREATE TABLE `tbl_detailpesanan` (
  `id_detailpesanan` int(11) NOT NULL,
  `id_pesanan` int(11) DEFAULT NULL,
  `status_pesanan` enum('Menunggu Pembayaran','Sedang Di Proses','Dalam Pengiriman','Sudah Selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` text DEFAULT NULL,
  `dekripsi_kategori` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `tgl_pemesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `banyak_pesanan` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kurir` enum('JNE','J&T','SiCepat','Tiki','Ninja Express','Pos Indonesia') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(250) DEFAULT NULL,
  `detail_pakaian` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `gambar_produk` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_show` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detailpesanan`
--
ALTER TABLE `tbl_detailpesanan`
  ADD PRIMARY KEY (`id_detailpesanan`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detailpesanan`
--
ALTER TABLE `tbl_detailpesanan`
  MODIFY `id_detailpesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detailpesanan`
--
ALTER TABLE `tbl_detailpesanan`
  ADD CONSTRAINT `tbl_detailpesanan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `tbl_pesanan` (`id_pesanan`);

--
-- Constraints for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD CONSTRAINT `tbl_pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_pesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`);

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

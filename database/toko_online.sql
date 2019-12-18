-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2019 at 03:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `kategori` varchar(60) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(4) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sepatu', 'Sepatu Merk All Star', 'Pakaian Pria', 300000, 9, 'sepatu.jpg'),
(2, 'Kamera', 'Kamera Canon EOS 700D', 'Elektronik', 5900000, 8, 'kamera.jpg'),
(3, 'Samsung Galaxy A20', 'Samsung Galaxy A20', 'Elektronik', 3400000, 29, 'hp.jpg'),
(4, 'Asus ROG', 'Asus ROG, RAM 2GB, Processor i7', 'Elektronik', 15000000, 18, 'laptop.jpg'),
(12, 'Jam', 'Jam Tangan Asli Indonesia', 'Pakaian Pria', 500000, 5, 'jam1.jpeg'),
(13, 'Kaos Oblong', 'Kaos Putih Oblong', 'Pakaian Pria', 150000, 20, 'kaos-oblong1.jpeg'),
(14, 'Baju Putih', 'Baju Putih Wanita', 'Pakaian Wanita', 150000, 50, 'wanita1.jpeg'),
(15, 'Baju Wanita', 'Baju Khusus Wanita', 'Pakaian Wanita', 250000, 10, 'wanita2.jpeg'),
(16, 'Baju Anak', 'Baju Khusus Anak-anak', 'Pakaian Anak', 100000, 50, 'anak1.jpeg'),
(17, 'Baju Anak 2', 'Baju Khusus Anak-anak', 'Pakaian Anak', 150000, 50, 'anak2.jpeg'),
(18, 'Baju Anak 3', 'Baju Khusus Anak-anak', 'Pakaian Anak', 500000, 20, 'anak3.jpeg'),
(19, 'Baju Anak 4', 'Baju Khusus Anak-anak', 'Pakaian Anak', 100000, 30, 'anak4.jpeg'),
(20, 'Baju Anak 5', 'Baju Khusus Anak-anak', 'Pakaian Anak', 100000, 30, 'anak5.jpeg'),
(21, 'Baju Anak 6', 'Baju Khusus Anak-anak', 'Pakaian Anak', 300000, 30, 'anak6.jpeg'),
(22, 'Baju Anak 7', 'Baju Khusus Anak-anak', 'Pakaian Anak', 100000, 20, 'anak7.jpeg'),
(23, 'Baju Anak 8', 'Baju Khusus Anak-anak', 'Pakaian Anak', 100000, 40, 'anak8.jpeg'),
(24, 'Baju Anak 9', 'Baju Khusus Anak-anak', 'Pakaian Anak', 200000, 30, 'anak9.jpeg'),
(25, 'Baju Anak 10', 'Baju Khusus Anak-anak', 'Pakaian Anak', 300000, 10, 'anak10.jpeg'),
(26, 'Olahraga 1', 'Alat Olahraga', 'Peralatan Olahraga', 400000, 30, 'olahraga1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `tgl_pesan` datetime DEFAULT NULL,
  `batas_bayar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(10, 'Andri Aryanto Doke', 'Malang, Jawa Timur', '2019-12-18 04:38:44', '2019-12-19 04:38:44'),
(11, 'Andri Aryanto Doke', 'Malang, Jawa Timur', '2019-12-18 19:04:25', '2019-12-19 19:04:25'),
(12, 'Andri Aryanto Doke', 'Malang, Jawa Timur', '2019-12-18 19:05:19', '2019-12-19 19:05:19'),
(13, 'Andri Aryanto Doke', 'Malang, Jawa Timur', '2019-12-18 19:06:43', '2019-12-19 19:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) DEFAULT NULL,
  `id_brg` int(11) DEFAULT NULL,
  `nama_brg` varchar(50) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `pilihan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 10, 1, 'Sepatu', 2, 300000, NULL),
(2, 10, 4, 'Asus ROG', 1, 15000000, NULL),
(3, 11, 1, 'Sepatu', 1, 300000, NULL),
(4, 12, 3, 'Samsung Galaxy A20', 1, 3400000, NULL),
(5, 13, 4, 'Asus ROG', 2, 15000000, NULL),
(6, 14, 2, 'Kamera', 1, 5900000, NULL);

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(3, 'Andri Aryanto Doke', 'andridoke2', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

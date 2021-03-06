-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 09:04 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(1) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `owner` varchar(30) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `alamat`, `telp`, `email`, `website`, `owner`, `deskripsi`) VALUES
(1, 'Venus Multimedia', 'Jakarta', '123456', 'admin@venus-multimedia.com', 'http://venus-multimedia.com', 'Mark', 'Be Smart, Be Carrefully');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `kd_penjualan` varchar(5) NOT NULL,
  `kd_produk` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_header`
--

CREATE TABLE `penjualan_header` (
  `kd_penjualan` varchar(5) NOT NULL,
  `kd_store` varchar(10) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `kd_user` varchar(5) DEFAULT NULL,
  `buyer` varchar(100) NOT NULL,
  `alamat_buyer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kd_produk` varchar(5) NOT NULL,
  `nm_produk` varchar(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kd_produk`, `nm_produk`, `stok`, `harga`) VALUES
('B-001', 'abc', 100, 5000),
('B-002', 'xyz', 400, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `kd_store` varchar(5) NOT NULL,
  `nm_store` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`kd_store`, `nm_store`, `alamat`, `email`) VALUES
('P-001', 'ghghghghgh', 'yytuytuy', 'mamat08nurahmat@gmail.com'),
('P-002', 'xyz', 'jln........', 'aaaaaaaaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `kd_user` varchar(5) NOT NULL DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `level` varchar(50) DEFAULT 'pegawai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`kd_user`, `email`, `password`, `nama`, `level`) VALUES
('K-001', 'kae@venus.com', '21232f297a57a5a743894a0e4a801fc3', 'Lucy', 'KAE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan_header`
--
ALTER TABLE `penjualan_header`
  ADD PRIMARY KEY (`kd_penjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`kd_store`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

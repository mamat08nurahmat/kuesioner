-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 08:14 AM
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
-- Database: `bni_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `purchase` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, 2013, 2000, 3000, 1000),
(2, 2014, 4500, 5000, 500),
(3, 2015, 3000, 4500, 1500),
(4, 2016, 2000, 3000, 1000),
(5, 2017, 2000, 4000, 2000),
(6, 2018, 2200, 3000, 800),
(7, 2019, 5000, 7000, 2000);

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
-- Table structure for table `hadiah`
--

CREATE TABLE `hadiah` (
  `kd_hadiah` varchar(5) NOT NULL,
  `nama_hadiah` varchar(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `kd_institusi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hadiah`
--

INSERT INTO `hadiah` (`kd_hadiah`, `nama_hadiah`, `stok`, `kd_institusi`) VALUES
('H-001', 'Tappenas', 25, 'I-001'),
('H-002', 'Taplus', 37, 'I-001'),
('H-003', 'tapcash', 63, 'I-001'),
('H-004', 'tappenas', 24, 'I-002'),
('H-005', 'taplus', 36, 'I-002'),
('H-006', 'tapcash', 60, 'I-002'),
('H-007', 'tappenas', 36, 'I-003'),
('H-008', 'taplus', 53, 'I-003'),
('H-009', 'tapcash', 89, 'I-003'),
('H-010', 'tappenas', 45, 'I-004'),
('H-011', 'taplus', 67, 'I-004'),
('H-012', 'tapcash', 112, 'I-004'),
('H-013', 'tappenas', 41, 'I-005'),
('H-014', 'taplus', 63, 'I-005'),
('H-015', 'tapcash', 105, 'I-005');

-- --------------------------------------------------------

--
-- Table structure for table `institusi`
--

CREATE TABLE `institusi` (
  `kd_institusi` varchar(5) NOT NULL,
  `nama_institusi` varchar(20) NOT NULL,
  `rm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institusi`
--

INSERT INTO `institusi` (`kd_institusi`, `nama_institusi`, `rm`) VALUES
('I-001', 'KEMENDIKBUD', 'Ingrid tera'),
('I-002', 'KEMENKES', 'Dwi Ayu'),
('I-003', 'KEMENKUMHAM', 'Yudi Setyawan'),
('I-004', 'KEMENLU', 'Juandri'),
('I-005', 'KKP', 'Juandri');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `kd_kuesioner` varchar(25) NOT NULL,
  `kd_user` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(5) DEFAULT NULL,
  `pekerjaan` int(5) DEFAULT NULL,
  `no_telpon` varchar(50) DEFAULT NULL,
  `bersedia` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `domisili` varchar(50) DEFAULT NULL,
  `penghasilan` int(5) DEFAULT NULL,
  `bank_utama` varchar(50) DEFAULT NULL,
  `produk_bank_utama` varchar(255) DEFAULT NULL,
  `produk_bni` varchar(50) DEFAULT NULL,
  `produk_bank_bni` varchar(255) DEFAULT NULL,
  `rencana` varchar(255) DEFAULT NULL,
  `tanggal_quiz` datetime NOT NULL,
  `kd_hadiah` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`kd_kuesioner`, `kd_user`, `nama`, `umur`, `jenis_kelamin`, `pekerjaan`, `no_telpon`, `bersedia`, `email`, `domisili`, `penghasilan`, `bank_utama`, `produk_bank_utama`, `produk_bni`, `produk_bank_bni`, `rencana`, `tanggal_quiz`, `kd_hadiah`) VALUES
('K-001', 'K-001', 'mamat', '8', 'L', 2, '878678', 'bersedia', 'admin@admin.com', 'hjakarta', 3, 'Mandiri', 'tabungan_utama,deposit_utama', 'YA', 'giro_bni,deposit_bni', 'beli_kendaraan', '2019-03-26 12:44:56', 'H-001'),
('K-002', 'K-001', 'mat', '45', 'L', 1, '345345', 'bersedia', 'admin@admin.com', 'hhhh', 3, 'BNI', 'tabungan_utama,deposit_utama', 'YA', 'tabungan_bni,giro_bni', 'sekolah,beli_rumah,wisata', '2019-03-27 03:27:33', NULL),
('K-003', 'K-002', 'gsg', '234', 'L', 0, '23423', 'bersedia', 'mamat08nurahmat@gmail.com', 'fsdf', 2, 'Mandiri', 'tabungan_utama,giro_utama', 'YA', 'deposit_bni,kartu_kredit_bni', 'sekolah,menikah', '2019-03-27 03:52:47', 'H-001'),
('K-004', 'K-002', 'aaa', '23', 'L', 2, '345345', 'bersedia', 'admin@admin.com', 'jakarta', 2, 'BCA', 'tabungan_utama,giro_utama', 'YA', 'tabungan_bni,giro_bni,deposit_bni', 'menikah,beli_rumah', '2019-03-27 04:12:12', 'H-002'),
('K-005', 'K-002', 'qqq', '23', 'L', 4, '234234', 'bersedia', 'admin@admin.com', 'cirebon', 2, 'BCA', 'giro_utama,deposit_utama', 'YA', 'giro_bni,deposit_bni', 'sekolah,menikah', '2019-03-27 04:14:00', 'H-002'),
('K-006', 'K-006', 'abcd', '23', 'L', 1, '087657567', 'bersedia', 'admin@admin.com', 'jakart', 3, 'Mandiri', 'tabungan_utama,giro_utama,deposit_utama', 'YA', 'tabungan_bni,giro_bni', 'sekolah,menikah,beli_rumah', '2019-03-27 04:42:06', 'H-013');

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
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `kd_quiz` varchar(5) NOT NULL,
  `kd_user` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_telpon` varchar(50) DEFAULT NULL,
  `q1` int(5) NOT NULL,
  `q1lainnya` varchar(100) DEFAULT NULL,
  `q2` int(5) NOT NULL,
  `q2lainnya` varchar(100) DEFAULT NULL,
  `q3` int(5) NOT NULL,
  `q3lainnya` varchar(100) DEFAULT NULL,
  `tanggal_quiz` datetime NOT NULL,
  `kd_hadiah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`kd_quiz`, `kd_user`, `nama_lengkap`, `no_telpon`, `q1`, `q1lainnya`, `q2`, `q2lainnya`, `q3`, `q3lainnya`, `tanggal_quiz`, `kd_hadiah`) VALUES
('Q-001', 'K-002', 'mat001', '0874875454545549', 1, '.', 1, '.', 1, '.', '2019-03-21 05:04:38', 'H-001'),
('Q-002', 'K-002', 'nur123', '087545454845', 3, '.', 1, '.', 5, 'aaaaa', '2019-03-21 05:05:31', 'H-003'),
('Q-003', 'K-003', 'Matt', '087545451515', 1, '.', 3, '.', 1, '.', '2019-03-21 05:46:09', 'H-002'),
('Q-004', 'K-004', 'ghjghj', '657657', 1, '.', 1, '.', 1, '.', '2019-03-21 08:03:06', 'H-002'),
('Q-005', 'K-004', 'Mamat nurahmat', '08777145452', 2, '.', 1, '.', 5, '.abc', '2019-03-21 08:24:36', 'H-003');

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
  `npp` varchar(100) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `level` varchar(50) DEFAULT 'pegawai',
  `kd_institusi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`kd_user`, `npp`, `password`, `nama`, `level`, `kd_institusi`) VALUES
('K-001', '55555', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin Kuesioner', 'KAE', 'ALL'),
('K-002', '39877', '827ccb0eea8a706c4c34a16891f84e7b', 'ingrid tera', 'KAE', 'I-001'),
('K-003', '46233', '827ccb0eea8a706c4c34a16891f84e7b', 'Dwi ayu', 'KAE', 'I-002'),
('K-004', '24778', '827ccb0eea8a706c4c34a16891f84e7b', 'yudi setyawan', 'KAE', 'I-003'),
('K-005', '47298A', '827ccb0eea8a706c4c34a16891f84e7b', 'juandri kemenlu', 'KAE', 'I-004'),
('K-006', '47298B', '827ccb0eea8a706c4c34a16891f84e7b', 'juandri kkp', 'KAE', 'I-005');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hadiah`
--
ALTER TABLE `hadiah`
  ADD PRIMARY KEY (`kd_hadiah`);

--
-- Indexes for table `institusi`
--
ALTER TABLE `institusi`
  ADD PRIMARY KEY (`kd_institusi`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`kd_kuesioner`);

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
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`kd_quiz`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`kd_store`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

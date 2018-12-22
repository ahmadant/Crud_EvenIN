-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 07:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `even`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(20) NOT NULL,
  `nama_acara` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_kat` int(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `gambar`, `id_kat`, `deskripsi`, `price`, `tempat`, `tanggal`) VALUES
(123343, 'basket', 'gambar', 0, 'COOL', '4000000', 'kalibeber', '2018-01-27'),
(123344, 'BASKET COMPETITION 2018', 'gambar', 0, 'Menyemarakan ', '20000000', 'JAKARTA ', '2018-01-06'),
(123345, 'Futsal', 'anon.jpg', 0, 'acara Ini diadakan karena Bhayangkara FC berulang tahun', '1000.000', 'Bhayangkara FC', '2018-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `level`) VALUES
(4, 'hadi', 'hadi', 'admin'),
(16, 'andi', 'andi', 'user'),
(17, 'kaka', 'kaka', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(20) NOT NULL,
  `nm_kat` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nm_kat`, `keterangan`) VALUES
(1, 'sepak bola', 'Olahraga ini sangat baik untuk kesehatan'),
(2, 'Takraw', 'HUT RI KE 69'),
(3, 'BADMINTON', 'Piala Thomas/Uber Cup'),
(4, 'BOOLING', 'BOLING COMPETITIONS OF MERBABU'),
(5, 'MUSIK', 'MUSIK MNET 2016');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `username`, `email`, `saran`) VALUES
(3, 'arsyad', 'arsyad742gmail.com', 'Maaf yang membuat situs ini no nya berapa?'),
(4, 'wahyudi', 'whayudi89@gmail.com', 'bagus rancangan website nya');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama_lengkap`, `email`, `kelamin`, `tgl_daftar`) VALUES
(2, '', '', 'perempuan', '0000-00-00'),
(3, '', '', 'laki laki', '0000-00-00'),
(4, '', '', 'perempuan', '0000-00-00'),
(5, 'asem', 'gorengads', 'perempuan', '0000-00-00'),
(6, '', '', '', '0000-00-00'),
(7, 'hadi prasetyo', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(8, 'hadi prasetyo', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(9, 'hadi prasetyo', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(10, 'hadi prasetyo', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(11, 'hadi prasetyo', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(12, 'hadi prasetyo', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(13, 'hadi prasetyo', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(14, 'hadi psy', 'hadi.victor777@gmail', 'laki laki', '0000-00-00'),
(15, 'dfda', 'asdfasd', 'dafsdf', '0000-00-00'),
(16, 'dfda', 'asdfasd', 'dafsdf', '0000-00-00'),
(17, 'dfda', 'asdfasd', 'dafsdf', '0000-00-00'),
(18, 'df', 'ddd', 'dd', '0000-00-00'),
(19, 'df', 'ddd', 'dd', '0000-00-00'),
(20, 'hadi', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(21, 'hadi', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(22, 'hadi', 'hadipsy27@gmail.com', 'laki laki', '0000-00-00'),
(23, 'hadi', 'hadi.victor777@gmail', 'laki laki', '0000-00-00'),
(24, 'hadi', 'hadi.victor777@gmail', 'laki laki', '0000-00-00'),
(25, 'hadi', 'hady.chosaku@gmail.c', 'laki laki', '0000-00-00'),
(26, 'hadi', 'hady.chosaku@gmail.c', 'laki laki', '0000-00-00'),
(27, 'hadi chosaku shin', 'hadi270797@mhs.fasti', 'laki laki', '0000-00-00'),
(28, 'hadi', 'hadi.victor777@gmail', 'laki', '0000-00-00'),
(29, 'hadi', 'hadi.victor777@gmail', 'laki laki', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123346;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

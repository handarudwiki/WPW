-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 06:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teman`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `nrp` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` char(12) NOT NULL,
  `asalsma` varchar(40) NOT NULL,
  `matkulfav` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `nrp`, `nama`, `jeniskelamin`, `jurusan`, `email`, `alamat`, `nohp`, `asalsma`, `matkulfav`) VALUES
(2, '3122500017', 'HDY', 'Laki - laki', 'Teknik Informatika', 'handarudwiki04@gmail.com', 'Sidoarjo', '083896167224', 'SMA Negeri 1 Trenggalek', 'Pemrograman Web'),
(3, '3122500071', 'Qouland Sadiyda', 'Perempuan', 'TRM', 'qouland.yahoo.com', 'Tulungagung', '082321214242', 'SMK Boyolangu', 'Kewarganegaraan'),
(13, '3122500018', 'Nurfadila Rahma', 'Peremuan', 'Statistika', 'nuriah@gmail.com', 'Ngadirenggo', '082121222234', 'SMA Negeri 1 Trenggalek', 'Kalkulus'),
(14, '3122500022', 'Zevalente', 'Laki - laki', 'Kedokteran', 'zevalente@google.com', 'Tuban', '089922334411', 'SMA Negeri 2 Trenggalek', 'Biologi'),
(15, '3122500020', 'Fadhilah Aditya', 'Laki - laki', 'Teknik Sipil', 'mamaduhadaru@gmail.com', 'Surondakan', '083848439262', 'SMA Negeri 1 Trenggalek', 'Fisika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

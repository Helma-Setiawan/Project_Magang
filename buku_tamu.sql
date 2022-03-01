-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 04:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cek_inout`
--

CREATE TABLE `cek_inout` (
  `id_inout` int(20) NOT NULL,
  `No_Ktp` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Keperluan` varchar(50) NOT NULL,
  `Check_in` time NOT NULL,
  `Check_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cek_inout`
--

INSERT INTO `cek_inout` (`id_inout`, `No_Ktp`, `Tanggal`, `Keperluan`, `Check_in`, `Check_out`) VALUES
(26, '23344565667789776', '2022-02-25', 'Kontrak', '10:00:00', '00:54:18'),
(27, '3472461674416', '2022-02-25', 'Magang', '11:00:00', '00:54:21'),
(28, '64573472416472174', '2022-02-25', 'Magang', '10:00:00', '00:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `No_Ktp` varchar(25) NOT NULL,
  `Nama_tamu` varchar(40) NOT NULL,
  `Alamat_tamu` varchar(50) NOT NULL,
  `No_Hp` varchar(12) NOT NULL,
  `Instansi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tamu`
--

INSERT INTO `tb_tamu` (`No_Ktp`, `Nama_tamu`, `Alamat_tamu`, `No_Hp`, `Instansi`) VALUES
('23344565667789776', 'Debry Aisyah', 'Gubeng', '085234123456', 'UNITOMO'),
('3472461674416', 'Yusuf Afriandi', 'Pasuruan', '087990987564', 'UNTAG'),
('64573472416472174', 'Helma Setiawan', 'Pasuruan', '082176223900', 'ITATS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_pengguna`, `status`) VALUES
(2, 'admin', 'admin123', 'Administrator', 'Aktif'),
(3, 'admin2', 'admin321', 'Administrator', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cek_inout`
--
ALTER TABLE `cek_inout`
  ADD PRIMARY KEY (`id_inout`),
  ADD KEY `No_Ktp` (`No_Ktp`);

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`No_Ktp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cek_inout`
--
ALTER TABLE `cek_inout`
  MODIFY `id_inout` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

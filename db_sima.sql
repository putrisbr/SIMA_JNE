-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 08:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sima`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aset`
--

CREATE TABLE `tbl_aset` (
  `id_aset` varchar(10) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `jumlah_aset` int(11) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `id_pengajuan` varchar(10) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_aset`
--

CREATE TABLE `tbl_kategori_aset` (
  `id_kategori` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jenis_kategori` varchar(50) NOT NULL,
  `nilai_penyusutan` float NOT NULL,
  `masa_manfaat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_aset`
--

INSERT INTO `tbl_kategori_aset` (`id_kategori`, `kategori`, `jenis_kategori`, `nilai_penyusutan`, `masa_manfaat`) VALUES
('1', 'kendaraan', 'motor', 5.5, 10),
('2', 'kendaraan', 'mobil', 10, 10),
('3', 'electronic', 'komputer', 30, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manajemen_aset`
--

CREATE TABLE `tbl_manajemen_aset` (
  `id` varchar(10) NOT NULL,
  `tahun_perkiraan` date NOT NULL,
  `biaya_perkiraan` int(11) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `id_kategori` varchar(50) NOT NULL,
  `jumlah_aset` int(11) NOT NULL,
  `harga_aset` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `id_user`, `tgl_pengajuan`, `nama_aset`, `id_kategori`, `jumlah_aset`, `harga_aset`, `total_harga`, `status`) VALUES
('PA-PLXMUL8', '1', '2021-10-08', 'Supra X', '1', 1, 15000000, 15000000, 0),
('PA-UcFVzfp', '1', '2021-10-08', 'ROG', '3', 2, 25000000, 50000000, 0),
('PA-wUgdol0', '1', '2021-10-03', 'Mobil ESEMKA', '2', 2, 25000000, 50000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyusutan`
--

CREATE TABLE `tbl_penyusutan` (
  `id_penyusutan` varchar(10) NOT NULL,
  `id_aset` varchar(10) NOT NULL,
  `residu` int(11) NOT NULL,
  `umur_ekonomis` int(11) NOT NULL,
  `uem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `alamat`, `email`, `username`, `password`, `jabatan`) VALUES
('abc', 'Sendy Dzikri Ferdiansyah', 'bandung', 'dzikrisendy6@gmail.com', 'sendy', '12345', 'admin'),
('aGblz6RfgS', 'Putri Salsabila', 'Bekasi', 'putrisbr27@gmail.com', 'putrisbr', '$2y$10$Ljn2rTFVhg7OSgRpg1t3tuEkgsubaUtkMfF/DnxUYbTR4/hBWXwW6', 'finance staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori_aset`
--
ALTER TABLE `tbl_kategori_aset`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

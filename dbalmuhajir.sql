-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 12:58 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbalmuhajir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ambulans`
--

CREATE TABLE `ambulans` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pengguna` varchar(15) NOT NULL,
  `keperluan` varchar(500) NOT NULL,
  `tujuan` varchar(500) NOT NULL,
  `id_supir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulans`
--

INSERT INTO `ambulans` (`no`, `nama`, `alamat`, `pengguna`, `keperluan`, `tujuan`, `id_supir`) VALUES
(1, 'Crisnandra Rahmita Mardiantien', 'Jalan Yupiter Barat X no. 1 Margahayu Raya', 'Warga', 'asdasdas', 'Merayakan Ulang tahunDirubah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `no` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `maksud` varchar(500) NOT NULL,
  `tujuan` varchar(500) NOT NULL,
  `rencana_kegiatan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku_undangan`
--

CREATE TABLE `buku_undangan` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `keperluan` varchar(500) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `id_ustadz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_undangan`
--

INSERT INTO `buku_undangan` (`no`, `tanggal`, `nama`, `alamat`, `telp`, `keperluan`, `tanggal_acara`, `jumlah_anak`, `id_ustadz`) VALUES
(1, '2018-08-17', 'AcengNurSalim', 'Jalan Yupiter gitu? lupa wkwk', '756564', '12312', '2018-08-25', 100, 1),
(2, '2018-08-17', 'SenaDirubah', 'qweqweq', '756564', '23232', '2018-08-30', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `jenis_sumbangan` varchar(10) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `id_supir` int(11) NOT NULL,
  `nama_supir` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ustadz`
--

CREATE TABLE `ustadz` (
  `id_ustadz` int(11) NOT NULL,
  `nama_ustadz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ambulans`
--
ALTER TABLE `ambulans`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `buku_undangan`
--
ALTER TABLE `buku_undangan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- Indexes for table `ustadz`
--
ALTER TABLE `ustadz`
  ADD PRIMARY KEY (`id_ustadz`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ambulans`
--
ALTER TABLE `ambulans`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku_undangan`
--
ALTER TABLE `buku_undangan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
  MODIFY `id_supir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ustadz`
--
ALTER TABLE `ustadz`
  MODIFY `id_ustadz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

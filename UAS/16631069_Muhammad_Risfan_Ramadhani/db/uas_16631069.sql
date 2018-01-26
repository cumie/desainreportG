-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 03:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_16631069`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `ID_Karyawan` varchar(3) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(99) NOT NULL,
  `Jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`ID_Karyawan`, `Nama`, `Alamat`, `Jabatan`) VALUES
('001', 'Muhammad Risfan Ramadhani', 'Landasan Ulin', 'Kasir'),
('002', 'Vanzhul', 'Banjarbaru', 'Satpam'),
('003', 'Udin', 'Sungai Miai', 'TukangService');

-- --------------------------------------------------------

--
-- Table structure for table `data_service`
--

CREATE TABLE `data_service` (
  `Kode_Barang` varchar(4) NOT NULL,
  `TipeHP` varchar(20) NOT NULL,
  `NamaPemilik` varchar(40) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_service`
--

INSERT INTO `data_service` (`Kode_Barang`, `TipeHP`, `NamaPemilik`, `Status`) VALUES
('001', 'Samsung', 'Roy', 'Proses'),
('002', 'Xiaomi', 'Indah', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `data_tipe_handphone`
--

CREATE TABLE `data_tipe_handphone` (
  `TipeHP` varchar(20) NOT NULL,
  `NamaPemilik` varchar(40) NOT NULL,
  `IMEI` varchar(12) NOT NULL,
  `KodeBarang` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tipe_handphone`
--

INSERT INTO `data_tipe_handphone` (`TipeHP`, `NamaPemilik`, `IMEI`, `KodeBarang`) VALUES
('Samsung', 'Roy', '8972617361', '001'),
('Xiaomi', 'Indah', '8876717217', '002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`ID_Karyawan`);

--
-- Indexes for table `data_service`
--
ALTER TABLE `data_service`
  ADD PRIMARY KEY (`Kode_Barang`);

--
-- Indexes for table `data_tipe_handphone`
--
ALTER TABLE `data_tipe_handphone`
  ADD PRIMARY KEY (`TipeHP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

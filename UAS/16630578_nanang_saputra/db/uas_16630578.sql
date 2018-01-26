-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 03:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_16630578`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id` varchar(30) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `umur_karyawan` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id`, `nama_karyawan`, `umur_karyawan`, `no_telp`, `status`) VALUES
('161512Q', 'Bbaga', '19', '917181313', 'Outsourcing'),
('1717', 'samsul', '29', '081614131617', 'Outsourcing'),
('1817', 'yogi', '20', '051174749068', 'Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `data_store`
--

CREATE TABLE `data_store` (
  `id` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `sold_barang` varchar(30) NOT NULL,
  `keterangan_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_store`
--

INSERT INTO `data_store` (`id`, `nama_barang`, `sold_barang`, `keterangan_barang`) VALUES
('1716', 'thxnsm', '50', 'kongsi');

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `id` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `suplier_barang` varchar(30) NOT NULL,
  `jumlah_barang` varchar(30) NOT NULL,
  `harga_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`id`, `nama_barang`, `suplier_barang`, `jumlah_barang`, `harga_barang`) VALUES
('1816', 'hafafa', 'agaf', '50', '110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_store`
--
ALTER TABLE `data_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

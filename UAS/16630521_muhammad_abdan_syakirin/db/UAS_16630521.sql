-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2018 pada 10.30
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmkicks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `brg_yg_bisa_diicicil`
--

CREATE TABLE `brg_yg_bisa_diicicil` (
  `nama` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `harga` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `brg_yg_bisa_diicicil`
--

INSERT INTO `brg_yg_bisa_diicicil` (`nama`, `jenis`, `warna`, `size`, `harga`) VALUES
('abdan', 'vans', 'biru', '10', '7000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyicil`
--

CREATE TABLE `penyicil` (
  `nama` varchar(50) NOT NULL,
  `nama_sepatu` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `dp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyicil`
--

INSERT INTO `penyicil` (`nama`, `nama_sepatu`, `harga`, `dp`) VALUES
('aaaa', 'aaaaa', '', '1234'),
('abdan', 'vans oldskool', '', '200000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brg_yg_bisa_diicicil`
--
ALTER TABLE `brg_yg_bisa_diicicil`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `penyicil`
--
ALTER TABLE `penyicil`
  ADD PRIMARY KEY (`nama`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

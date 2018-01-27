-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jan 2018 pada 05.31
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_16630762`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bengkel`
--

CREATE TABLE `data_bengkel` (
  `id` varchar(30) NOT NULL,
  `nama_sparepart` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_bengkel`
--

INSERT INTO `data_bengkel` (`id`, `nama_sparepart`, `jumlah`, `keterangan`) VALUES
('111', 'tangki', '9', 'masuk'),
('112', 'lampu', '5', 'masuk'),
('1345', 'shock belakang', '1', 'masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_motor`
--

CREATE TABLE `data_motor` (
  `id` varchar(5) NOT NULL,
  `jenis_motor` varchar(30) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `type_custom` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_motor`
--

INSERT INTO `data_motor` (`id`, `jenis_motor`, `nama_pemilik`, `type_custom`, `alamat`) VALUES
('01', 'honda cb400', 'ucok', 'japstyle', 'banjarbaru'),
('02', 'Honda Tiger', 'ujang', 'caferacer', 'banjarmasin'),
('05', 'Suzuki Thunder', 'babang', 'Bratstyle', 'batibati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_service`
--

CREATE TABLE `data_service` (
  `nama` varchar(30) NOT NULL,
  `jenis_motor` varchar(30) NOT NULL,
  `jenis_custom` varchar(39) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_service`
--

INSERT INTO `data_service` (`nama`, `jenis_motor`, `jenis_custom`, `keterangan`) VALUES
('jujuk', 'Honda Gl-Pro', 'bratstyle', 'clear');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bengkel`
--
ALTER TABLE `data_bengkel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_motor`
--
ALTER TABLE `data_motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_service`
--
ALTER TABLE `data_service`
  ADD PRIMARY KEY (`nama`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2018 pada 15.14
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_16630068`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tempat_lahir` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` char(12) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telpon`, `jabatan`, `status`) VALUES
('09876', 'io', 'mtp', '2001-11-08', '', '0955555', 'Leader', 'Tetap'),
('1234', 'Loli', 'plk', '1982-02-01', 'jl.negara', '0897', 'Operator', 'Kontrak'),
('17657', 'jiji', 'mtp', '1984-02-02', '', '0987', 'Operator', 'Kontrak'),
('23', 'pop', 'klo', '1997-01-12', 'klo', '08987', 'Operator', 'Outsourcing'),
('567', 'gero', 'loli', '1996-03-02', 'jl.pulau polu', '089756', 'Operator', 'Kontrak'),
('987', 'kobe', 'bjb', '2001-11-03', '', '0821', 'Leader', 'Outsourcing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `kode` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_sepatu` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`kode`, `nama`, `nama_sepatu`, `jumlah`, `harga`, `no_telpon`, `tanggal`) VALUES
('V3F1', 'Kendil', 'Vans Slip on', 3, 'Rp 500.000', '085251', '2018-01-24'),
('V4N5', 'Joki', 'Vans Slip on', 2, 'Rp600000', '087465', '2018-01-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ready`
--

CREATE TABLE `ready` (
  `kode` varchar(12) NOT NULL,
  `nama_sepatu` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ready`
--

INSERT INTO `ready` (`kode`, `nama_sepatu`, `tanggal`, `jumlah`, `harga`) VALUES
('V2F2', 'Vans Slip on', '0000-00-00', '3', 'Rp 500.000'),
('V3F1', 'Vans Old', '0000-00-00', '3', 'Rp 400.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `ready`
--
ALTER TABLE `ready`
  ADD PRIMARY KEY (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

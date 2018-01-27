-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jan 2018 pada 16.08
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_16630317`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `jabatan`, `status`) VALUES
(2147483647, 'sauqi', 'tambak danau', '1997-09-01', 'Ds.Tambak Danau', '08976674271', 'Operator', 'Tetap'),
(2147483647, 'Abdullah Noor', 'Bjm', '1996-01-01', 'Banjarmasin', '08976674270', 'Manager', 'Kontrak'),
(2147483647, 'Muhammad', 'Kandangan', '1995-01-09', 'Banjarbaru', '08967784278', 'Supervisor', 'Outsourching');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_telepon`, `fakultas`, `semester`) VALUES
(16630317, 'Muhammad Sauqi Abdi', 'Tatah', '1997-01-01', '08967784272', 'Teknik Informatika', 'Ganjil'),
(16630318, 'Muhammad Abil', 'Mtp', '1997-01-08', '08967744273', 'Sistem Informasi', 'Genap'),
(16630319, 'Halfiah', 'Bjb', '1998-01-16', '08967744274', 'Kesehatan Masyarakat', 'Ganjil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `kode_buku` int(15) NOT NULL,
  `npm` int(10) NOT NULL,
  `nama_peminjam` varchar(35) NOT NULL,
  `nama_buku` varchar(35) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman_buku`
--

INSERT INTO `peminjaman_buku` (`kode_buku`, `npm`, `nama_peminjam`, `nama_buku`, `jumlah`, `tanggal`) VALUES
(1, 16630320, 'asadsa', 'asdasdaa', '1', '2018-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`kode_buku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

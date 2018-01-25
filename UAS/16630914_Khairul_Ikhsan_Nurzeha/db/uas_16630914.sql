-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 25. Januari 2018 jam 09:08
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uas_16630914`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode` varchar(7) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `sumber_barang` varchar(64) NOT NULL,
  `tanggal_stok` date NOT NULL,
  `size` char(5) NOT NULL,
  `stok` char(5) NOT NULL,
  `merk` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `sumber_barang`, `tanggal_stok`, `size`, `stok`, `merk`, `status`) VALUES
('A1AD02', 'Adidas Neo Advantage White Black', 'Adidas store', '2018-01-25', '37', '5', 'Adidas', 'Ready'),
('A2AS03', 'Asics Gel 3 Black Red', 'Farmkicks Store', '2018-01-18', '38', '2', 'Asics', 'Preorder'),
('B1VN04', 'Vans Era Navy', 'Vietnam Store', '2018-01-10', '39', '1', 'Vans', 'Sold');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tempat_lahir` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` char(12) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `jabatan`, `status`) VALUES
('16630309', 'muhammad abdi setiawan', 'banjarbaru', '1998-06-18', 'jl komet raya', '087815425413', 'Admin', 'Tetap'),
('16630914', 'khairul ikhsan nurzeha', 'muara teweh', '1997-12-31', 'jl hercules', '081347609486', 'Kurir', 'Kontrak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` char(12) NOT NULL,
  `tanggal_order` date NOT NULL,
  `barang_order` varchar(64) NOT NULL,
  `size` char(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_telepon`, `tanggal_order`, `barang_order`, `size`, `status`) VALUES
('11015', 'khairul ikhsan', 'jl hercules', '081347609486', '2018-01-25', 'vans era navy', '39', 'Lunas');

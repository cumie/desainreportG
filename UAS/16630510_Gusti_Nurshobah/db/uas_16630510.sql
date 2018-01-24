-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 08:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_16630510`
--

-- --------------------------------------------------------

--
-- Table structure for table `bktmu`
--

CREATE TABLE `bktmu` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nik` int(14) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `matakuliah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_telepon`, `prodi`, `matakuliah`) VALUES
(34322, 'Rena', 'Banjarmasin', '1993-01-18', 2147483647, 'Sistem Informasi', 'KOMPUTER JARINGAN'),
(43488, 'Wena', 'Balikpapan', '1995-01-03', 878654354, 'Sistem Informasi', 'SISTEM INFORMASI MENEJEMEN');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
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
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `jabatan`, `status`) VALUES
(11111, 'Mifta', 'Martapura', '1998-07-08', 'Martapura', '082225009880', 'Leader', 'Outsourching'),
(113211, 'Novi', 'Banjarbaru', '1994-11-23', 'Banjarbaru', '082344662667', 'Supervisor', 'Kontrak'),
(4444, 'Sena', 'Banjarmasin', '2018-01-29', 'Banjarmasin', '0878569855', 'Operator', 'Kontrak');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `npm` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`npm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_telepon`, `fakultas`, `semester`) VALUES
(16630510, 'Gusti Nurshobah', 'Martapura', '1998-07-07', '082225009880', 'Teknik Informatika', 'Ganjil'),
(16630878, 'Dita ', 'Martapura', '1996-12-24', '085244318128', 'Teknik Informatika', 'Ganjil'),
(16635254, 'Esty Yuliani', 'Gambut', '1998-07-21', '085352117789', 'Teknik Informatika', 'Ganjil');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

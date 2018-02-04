-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2017 pada 06.09
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemasaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `telepon` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` enum('admin','member','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `telepon`, `email`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '087815111027', 'test@yahoo.com', 'admin'),
(3, 'test', 'test', 'test', 'test', 'test@yahoo.com', 'member'),
(10, 'budi', 'budi', '123', 'test', 'test', 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blok`
--

CREATE TABLE `blok` (
  `id` int(11) NOT NULL,
  `blok` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blok`
--

INSERT INTO `blok` (`id`, `blok`) VALUES
(1, 'blok a'),
(4, 'blok b'),
(5, 'blok c'),
(6, 'blok d'),
(12, 'blok e'),
(13, 'blok f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `id` int(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `no_kav` varchar(30) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `harga` varchar(40) NOT NULL,
  `blok` varchar(30) NOT NULL,
  `uang_muka` varchar(40) NOT NULL,
  `tgl_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`id`, `nama`, `alamat`, `telepon`, `tipe`, `no_kav`, `ukuran`, `harga`, `blok`, `uang_muka`, `tgl_order`) VALUES
(1, 'wkwkwkkw', 'wkwkwkkw', '077777777777777', 'tipe 36', 'a7', '120m2', '120000000', 'blok a', '1200000', '03-12-2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembelian`
--

CREATE TABLE `data_pembelian` (
  `id` int(30) NOT NULL,
  `no_kw` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tipe` varchar(40) NOT NULL,
  `no_kav` varchar(40) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `blok` varchar(30) NOT NULL,
  `uang_muka` varchar(30) NOT NULL,
  `tgl_beli` varchar(30) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pembelian`
--

INSERT INTO `data_pembelian` (`id`, `no_kw`, `nama`, `alamat`, `telepon`, `tipe`, `no_kav`, `ukuran`, `harga`, `blok`, `uang_muka`, `tgl_beli`, `ket`) VALUES
(7, '0001', 'anang', 'test', 'test', 'tipe 36', 'a10', '120m2', '120000000', 'blok c', '1200000', '03-12-2017', 'lengkap'),
(9, '0002', 'test', 'test', '0808080', 'tipe 36', 'a4', '120m2', '120000000', 'blok a', '120000', '03-12-2017', 'test '),
(10, '0003', 'Oyoh', 'Martapura', '09999999999999', 'tipe 36', 'b2', '120m2', '120000000', 'blok b', '1200000', '12-12-2017', 'berkas lengkap          ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_rumah`
--

CREATE TABLE `stok_rumah` (
  `id` int(20) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `no_kav` varchar(30) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `blok` varchar(30) NOT NULL,
  `uang_muka` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_rumah`
--

INSERT INTO `stok_rumah` (`id`, `tipe`, `no_kav`, `ukuran`, `harga`, `blok`, `uang_muka`) VALUES
(23, 'tipe 36', 'a3', '200m2', '120000000', 'blok a', '1200000'),
(25, 'tipe 36', 'a5', '120m2', '120000000', 'blok a', '23000'),
(26, 'tipe 36', 'a6', '120m2', '120000000', 'blok a', '1200000'),
(50, 'b16', 'c3', '200m2', '2000000', 'blok e', '200000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blok` (`blok`),
  ADD UNIQUE KEY `blok_2` (`blok`),
  ADD KEY `blok_3` (`blok`);

--
-- Indexes for table `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_kav` (`no_kav`);

--
-- Indexes for table `data_pembelian`
--
ALTER TABLE `data_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_rumah`
--
ALTER TABLE `stok_rumah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_kav` (`no_kav`),
  ADD KEY `blok` (`blok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `blok`
--
ALTER TABLE `blok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_pembelian`
--
ALTER TABLE `data_pembelian`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stok_rumah`
--
ALTER TABLE `stok_rumah`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `stok_rumah`
--
ALTER TABLE `stok_rumah`
  ADD CONSTRAINT `stok_rumah_ibfk_1` FOREIGN KEY (`blok`) REFERENCES `blok` (`blok`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

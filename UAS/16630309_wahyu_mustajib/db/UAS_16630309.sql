-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2018 pada 13.15
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(60) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `prodi` varchar(75) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jk`, `prodi`, `foto`) VALUES
(16101339, 'Cristiano Ronaldo', 'Lisbon, Portugal', '19 November 1990', 'Madrid, Spanyol', 'l', 'sb', '13122017230529RONALDO.jpg'),
(16239090, 'Alvin C.M.', 'New York', '12 Mei 1995', 'Jl. Au Ah Gelap', 'l', 'hj', '14122017133509images_040.jpg'),
(16630309, 'Wahyu Mustajib', 'Wonosobo', '24 November 1993', 'Jl. Sapta Marga, Banjarbaru', 'l', 'ti', '12122017214029IMG20170708103740.jpg'),
(16890808, 'James Bond', 'London', '18 Maret 1978', 'London Road', 'l', 'AR', '25012018201022jb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('Rak 1','Rak 2','Rak 3') NOT NULL,
  `tgl_input` date NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`, `gambar`) VALUES
(2, 'Jago Pemrograman PHP', 'Siapa Ya?', 'Cemerlang', '2010', '18JJHA78', 1, 'Rak 1', '2017-12-12', '12122017213837bukuphp.jpg'),
(3, 'Photoshop CS 6', 'Ada Aja', 'Gramedia', '2017', '189UJSD', 1, 'Rak 1', '2017-12-12', '1212201721473159797_f.jpg'),
(4, 'Corel Draw dan Photoshop', 'Ada', 'Andi Publisher', '2011', '97JD277UH', 1, 'Rak 1', '2017-12-12', '12122017214910Panduan Aplikatif dan Solusi- Ragam.jpg'),
(5, 'Kumpulan Resep Masakan Tradisional', 'B.M. Asti & Laela N.', 'Wahana', '2010', '423JSDIQ89', 1, 'Rak 1', '2017-12-12', '12122017215106ID_MP2012MTH09KRMTSM_B.jpg'),
(6, 'Masakan dan Kue Indonesia', 'Hiang M. & Roos Suyono', 'Femina', '2007', '3489SJLEWT', 1, 'Rak 1', '2017-12-12', '12122017215241buku-resep-femina-masakan-dan-kue1.jpg'),
(7, 'Tenggelamnya Kapal Van Der Wijck', 'Buya Hamka', 'Balai Pustaka', '1998', '17JET87DOS', 1, 'Rak 1', '2017-12-12', '1212201721540225535835.jpg'),
(8, 'Robotika Modern', 'Saya', 'Au Ah Gelap', '2012', 'QUS930JSKF', 1, 'Rak 1', '2018-01-25', '25012018183609images_038.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nim` varchar(11) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_pinjam` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_kembali` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `level` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16890809;
--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

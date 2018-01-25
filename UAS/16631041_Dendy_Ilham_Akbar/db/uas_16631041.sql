-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 07:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_16631041`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi`, `kategori`) VALUES
(6, '', '', 'linux'),
(7, 'WINDOWS 10 news update Des 2017', '<p>Sebagai informasi,&nbsp;<em>Timeline</em>&nbsp;merupakan fitur yang memungkinkan pengguna&nbsp;<a href="http://tekno.liputan6.com/read/2996556/microsoft-boyong-keyboard-virtual-baru-ke-pc-windows-10">Windows 10</a>&nbsp;beralih ke banyak perangkat, termasuk Android dan iOS. Fitur lain yang ditunda kehadirannya adalah&nbsp;<em>universal clipboard</em>&nbsp;untuk memudahkan proses penyalinan data antara&nbsp;<em>smartphone</em>&nbsp;dan PC.</p>\r\n\r\n<p>Kendati demikian, Microsoft tetap memboyong sejumlah fitur anyar. Windows 10 Fall Creators Update akan datang dengan integrasi fitur&nbsp;<em>People</em>&nbsp;terbaru. Kemampuan ini memungkinkan pengguna melakukan&nbsp;<em>pin</em>&nbsp;kontak favoritnya di&nbsp;<em>taskbar</em>.</p>\r\n\r\n<p>Perusahaan yang bermarkas di Redmond, Washington DC, Amerika Serikat itu turut meluncurkan&nbsp;<em>platform</em>&nbsp;<em>Mixed Reality</em>&nbsp;bersamaan dengan pembaruan ini.&nbsp;<em>Headset</em>&nbsp;<em>Mixed Reality</em>&nbsp;besutan perusahaan rekanan, seperti Acer, Lenovo, HP, dan Dell akan dipasarkan tak lama setelah pembaruan ini meluncur.&nbsp;</p>\r\n\r\n<p>Untuk pembaruan kali ini, Microsoft juga menyertakan&nbsp;<em>Files On-Demand</em>&nbsp;OneDrive. Dengan fitur ini&nbsp;pengguna dapat dengan mudah mengambil&nbsp;<em>file</em>&nbsp;di OneDrive tanpa perlu mengunduh keseluruhan&nbsp;<em>folder</em>.</p>\r\n\r\n<p>Perubahan juga dilakukan perusahaan yang dipimpin Satya Nadella itu dari segi tampilan. Sejumlah aplikasi bawaan Microsoft dipastikan hadir dengan tampilan berbeda. Ada pula penambahan untuk memilih emoji dengan menggunakan&nbsp;<em>shortcut</em>.</p>\r\n\r\n<p>Tak hanya itu,&nbsp;<a href="http://tekno.liputan6.com/read/3071299/update-os-windows-otomatis-microsoft-didenda-rp-133-juta">Microsoft&nbsp;</a>juga menghadirkan versi beta dari&nbsp;<em>software</em>&nbsp;pelacakan mata. Fitur ini hadir untuk membantu pengguna dengan keterbatasan motorik yang tak dapat mengoperasikan Windows 10 dengan&nbsp;<em>mouse</em>&nbsp;atau&nbsp;<em>keyboard</em>.&nbsp;</p>\r\n\r\n<p>Sesuai namanya, pengguna cukup memandang&nbsp;<em>software</em>&nbsp;untuk membukanya. Begitu pula saat ingin mengetik sesuatu, pengguna cukup melirik&nbsp;<em>keyboard</em>&nbsp;virtual untuk dapat mengetik kata di komputer.</p>\r\n', 'windows');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`isi`) VALUES
('<p>Kontak saya di Social Media :</p>\r\n\r\n<p>WA : 082153200413</p>\r\n\r\n<p>Line : dendyilhamakbar</p>\r\n\r\n<p>Facebook : Dendy Ilham&nbsp;</p>\r\n\r\n<p>Instagram : @dendyilhama</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`isi`) VALUES
('<p>Nama Lengkap : Dendy Ilham Akbar</p>\r\n\r\n<p>Kelas : 3F Reguler Malam</p>\r\n\r\n<p>NPM : 16631041</p>\r\n\r\n<p>Jurusan : Teknik Informatika (S1)</p>\r\n\r\n<p>TTL : Palangka Raya, 02 Maret 1998</p>\r\n\r\n<p>Agama : Islam</p>\r\n\r\n<p>Alumni SD : SDN 11 Langkai Palangka Raya th 2010</p>\r\n\r\n<p>Alumni SMP : SMPN 1 Palangka Raya th 2013&nbsp;</p>\r\n\r\n<p>Alumni SMA : SMK Telkom Banjarbaru th 2016</p>\r\n\r\n<p>Pengalaman Kerja : Staff IT dan Asisten Laboratorium SMK Telkom Banjarbaru</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`isi`) VALUES
('<p>Nama Lengkap : Dendy Ilham Akbar</p>\r\n\r\n<p>Kelas : 3F Reguler Malam</p>\r\n\r\n<p>NPM : 16631041</p>\r\n\r\n<p>Jurusan : Teknik Informatika (S1)</p>\r\n\r\n<p>TTL : Palangka Raya, 02 Maret 1998</p>\r\n\r\n<p>Agama : Islam</p>\r\n\r\n<p>&quot;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `email`, `username`, `password`) VALUES
(1, 'Dendy', 'Jl.P.Suriansyah No.3 Banjarbaru', 'dendyilhamakbar1@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Explore
 @W17aya
 Sign out
 Watch 3
  Star 0  Fork 0 cumie/pdfjunk
 Code  Issues 0  Pull requests 1  Projects 0  Wiki  Insights
Branch: master Find file Copy pathpdfjunk/pages/laporan/rekapitulasi.php
98c9b6d  21 days ago
@cumie cumie head2 footer2 for lampiran 2
1 contributor
RawBlameHistory     
152 lines (146 sloc)  4.52 KB
<?php 
session_start(); 
// include "../../lib/connection.php";
// include "../../lib/library.php";
//include_once "../masters/dosen_config.php";
// include_once "lib/seslogin.php"; 
// include_once "pages/masters/dosen_config.php"; 
// if($_GET) { 
	  
// $Kode	 = $_SESSION['ID_CRAB'];
// $sqlShow = "SELECT * FROM ".$tableName." WHERE ".$field[4]."='$Kode'";
// $qryShow = mysqli_query($koneksidb, $sqlShow)  or die ("Query ambil data salah : ".mysqli_error($koneksidb));
// $dataShow = mysqli_fetch_array($qryShow);
// for($i=0;$i<=$jmlField;$i++){
	// $data[$i] = $dataShow[$field[$i]];
// }
// } // Penutup GET
?>   

<?php include('head.php');
?>
 
<table class="tg"> 
  <tr>
    <th width="10" class="tg-baqh" rowspan="14">I</th>
    <th width="550" class="tg-baqh" colspan="7">KETERANGAN PERORANGAN</th>
  </tr>
  <tr>
    <td class="tg-yw4l" width="5">1.</td>
    <td class="tg-yw4l" width="160"	colspan="2">Nama</td>
    <td class="tg-yw4l" colspan="4">FATHUL HAFIDH, S.Kom., M.Kom</td>
  </tr>
  <tr>
    <td class="tg-yw4l">2.</td>
    <td class="tg-yw4l" colspan="2">Status Kepegawaian</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">3.</td>
    <td class="tg-yw4l" colspan="2">NIK/NIDN</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">4.</td>
    <td class="tg-yw4l" colspan="2">Nomor Seri Karpeg.</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">5.</td>
    <td class="tg-yw4l" colspan="2">Tempat dan Tanggal Lahir</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">6.</td>
    <td class="tg-yw4l" colspan="2">Jenis Kelamin</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">7.</td>
    <td class="tg-yw4l" colspan="2">Pendidikan Tertinggi</td>
    <td class="tg-yw4l" colspan="4">S2, Universitas Islam Kalimantan Muhammad Arsyad Al Banjari </td>
  </tr>
  <tr>
    <td class="tg-yw4l">8.</td>
    <td class="tg-yw4l" colspan="2">Pangkat dan Golongan Ruang / TMT</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">9.</td>
    <td class="tg-yw4l" colspan="2">Jabatan Fungsional / TMT</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">10.</td>
    <td class="tg-yw4l" colspan="2">Fakultas / Jurusan / Program Studi </td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l" rowspan="2">11.</td>
    <td class="tg-yw4l" rowspan="2">Masa Kerja Golongan</td>
    <td class="tg-yw4l">a.Lama</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">a.Baru</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">12.</td>
    <td class="tg-yw4l" colspan="2">Unit Kerja</td>
    <td class="tg-yw4l" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-baqh" rowspan="5">II</td>
    <td class="tg-baqh" colspan="3">PENETAPAN ANGKA KREDIT</td>
    <td class="tg-baqh">LAMA</td>
    <td class="tg-baqh">BARU</td>
    <td class="tg-baqh">LEBIHAN</td>
    <td class="tg-baqh">JUMLAH</td>
  </tr>
  <tr>
    <td class="tg-yw4l" rowspan="3">1.</td>
    <td class="tg-yw4l" colspan="2"> UNSUR UTAMA <br/> A. PENDIDIKAN</td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="2">B. TRIDHARMA PERGURUAN TINGGI 
	<br/> a. Melaksanakan Pendidikan dan Pengajaran
	<br/> b. Melaksanakan Penelitian
	<br/> c. Melaksanakan Pengabdian Kepada Masyarakat
	</td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-baqh" colspan="2">JUMLAH</td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">2.</td>
    <td class="tg-yw4l" colspan="2">UNSUR PENUNJANG <br/> Melaksanakan Penunjang Tugas Pokok Dosen</td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-baqh" colspan="4">JUMLAH UNSUR UTAMA DAN UNSUR PENUNJANG</td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-baqh">III</td>
    <td class="tg-yw4l" colspan="5">DAPAT DIANGKAT DALAM JABATAN: </td>
    <td class="tg-yw4l" colspan="2">TMT.: 01 Mei 2016</td>
  </tr>
</table>
<?php include('footer.php');
?>
© 2018 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About
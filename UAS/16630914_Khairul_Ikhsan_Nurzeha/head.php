<?php
include("koneksi.php");
include("library.php");
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Pemrograman Web</title>
    <link href="css/site.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="container">
   
<div class="header">

<img alt="foto profil" src="img/farmkicks1.jpg" width="100%" height="150px"  />

</div>
  <div class="content">
    
  </div>


<div class="content">
      <nav class="navbar navbar-inverse">
      <div id="navbar">
      <ul class="dropDownMenu">
          <li ><a href="index.php">Beranda</a>
          <li ><a href="#">Master Data </a>
              <ul>
              <li ><a href="karyawan_data.php">Karyawan Data</a></li>
			  <li ><a href="barang_data.php">Barang Data</a></li>
			  <li ><a href="pelanggan_data.php">Pelanggan Data</a></li>
              </ul>
         </li>
            
          <li> <a href="#" > Laporan </a>
            <ul>
            <li> <a href="karyawan_cetak.php">Cetak Data Karyawan </a></li>
			<li> <a href="barang_cetak.php">Cetak Data Barang </a></li>
			<li> <a href="pelanggan_cetak.php">Cetak Data Pelanggan </a></li>
            </ul>
          </li>
		   <li> <a href="#" > Profil Saya </a>
            <ul>
            <li ><a href="biodata.php">Biodata Saya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
    <div class="container">
    <div class="content">

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
<body background="black">


<body>
  <div class="container">
   
<div class="header">

<img alt="foto profil" src="img/bb.jpg" width="111%" height="100px"  />

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
              <li ><a href="karyawan_data.php">Data Karyawan</a></li>
			  <li ><a href="order_data.php">Data Barang</a></li>
			  <li ><a href="barangready_data.php">Data Barang Ready</a></li>
              </ul>
         </li>
            
          <li> <a href="#" > Laporan </a>
            <ul>
            <li> <a href="karyawan_cetak.php">Cetak Data Karyawan </a></li>
			 <li ><a href="order_cetak.php">Cetak Barang Order</a></li>
			 <li> <a href="barangready_cetak.php">Cetak Data Barang Ready </a></li>
            </ul>
          </li>
		   <li> <a href="#" > Profil Saya </a>
            <ul>
            <li ><a href="biodata_admin.php">Biodata Saya</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
    <div class="container">
    <div class="content">

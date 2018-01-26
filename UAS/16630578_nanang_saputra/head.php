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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<div class="content">
<div class="header">
  <img src="joys7.jpg" width="300pxl;" height="150pxl;">
</div>
      <nav class="navbar navbar-inverse">
      <div id="navbar">
      <ul class="dropDownMenu">
          <li ><a href="index.php">Beranda</a>
          <li ><a href="#">Master Data </a>
              <ul>
              <li ><a href="data_karyawan.php">Data Karyawan</a></li>
              <li ><a href="data_store.php">Data store</a></li>
              <li ><a href="stok_barang.php">Stok Barang</a></li>
          </li>
            </ul>
          <li> <a href="#" > Laporan </a>
            <ul>
            <li> <a href="data_karyawan_cetak.php">Cetak Data Karyawan </a></li>
            <li> <a href="data_store_cetak.php">Cetak Data Store </a></li>
            <li> <a href="stok_barang_cetak.php">Cetak Stok Barang </a></li>
          </li>
        </ul> 
          <li><a href="profil.php">Profil</a></li>
      </div>
    </nav>
  </div>
</div>
    <div class="container">
    <div class="content">

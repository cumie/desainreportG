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
  <img src="header.jpg" width="100%;" height="100%;">
</div>
      <nav class="navbar navbar-inverse">
      <div id="navbar">
      <ul class="dropDownMenu">
          <li ><a href="/test1/">Beranda</a>
          <li ><a href="#">Master Data </a>
              <ul>
              <li ><a href="karyawan_data.php">Karyawan Data</a></li>
              <li ><a href="penyicil_data.php">Data penyicil</a></li>
              <li ><a href="barang_data.php">Data sepatu yang bisa dicicil</a></li>
          </li>
            </ul>
          <li> <a href="#" > Laporan </a>
            <ul>
            <li> <a href="karyawan_cetak.php">Cetak Data Karyawan </a></li>
          </li>
        </ul> 
          <li><a href="profil.php">Profil</a></li>
      </div>
    </nav>
  </div>
</div>
    <div class="container">
    <div class="content">

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
  <img src="gasmonkey.png" width="666pxl;" height="100pxl;">
</div>
      <nav class="navbar navbar-inverse">
      <div id="navbar">
      <ul class="dropDownMenu">
          <li ><a href="index.php">Beranda</a>
          <li ><a href="#">Master Data </a>
              <ul>
              <li ><a href="data_bengkel.php">Data Bengkel</a></li>
              <li ><a href="data_motor.php">Data Motor</a></li>
              <li ><a href="data_service.php">Data Service</a></li>
          </li>
            </ul>
          <li> <a href="#" > Laporan </a>
            <ul>
            <li> <a href="data_bengkel_cetak.php">Cetak Data Bengkel </a></li>
            <li> <a href="data_motor_cetak.php">Cetak Data Motor </a></li>
            <li> <a href="data_service_cetak.php">Cetak Data Service </a></li>
          </li>
        </ul> 
          <li><a href="profil.php">Profil</a></li>
      </div>
    </nav>
  </div>
</div>
    <div class="container">
    <div class="content">

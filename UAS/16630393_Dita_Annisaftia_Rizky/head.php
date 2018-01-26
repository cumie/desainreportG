<?php
include("koneksi.php");
include("library.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
<div class= "background">
	<img background = #F0FFFF;>
    <meta charset="utf-8">
	<meta http-equiv="width=device-width, initial-scale=1">
	<meta name="viewpost" content="width=device-width, initial-scale=1">
	<title>Uas WEB</title>
	<link href="css/style.css" type = text/css rel="stylesheet">
	<link href="css/site.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	

</head>

<body>
<div class="container">

<div class="content">
	<nav class="navbar navbar-inverse ">
	<div id="navbar">
	<ul class="dropDownMenu">
	    <li ><a href="">Beranda</a>
		<li ><a href="#">Master Data</a>
		
		    <ul>
			<li ><a href="karyawan_data.php">Karyawan Data</a></li>
			<li><a href="mahasiswa_data.php">Mahasiswa Data</a></li>
			<li><a href="dosen_data.php">Dosen Data</a></li>
			</ul>	
		</li>
	    <li><a href="#" >Laporan</a>
			<ul>
				<li> <a href="karyawan_cetak.php">Cetak Data Karyawan</a></li>
				<li> <a href="mahasiswa_cetak.php">Cetak Data Mahasiswa</a></li>
				<li> <a href="dosen_cetak.php">Cetak Data Dosen</a></li>
			</ul>
		</li>
		<li> <a href="profil.php">Profil</a></li>
		</li>
	</ul>
	</div>
	</nav>
</div>
</div>
    <div class="container">
	   <div class="content">
</body>
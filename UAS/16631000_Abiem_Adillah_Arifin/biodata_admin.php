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
						<div class="content">
							  <nav class="navbar navbar-inverse">
							  <div id="navbar">
							  <ul class="dropDownMenu">
								  <li ><a href="index.php">Beranda</a>
								  <li ><a href="#">Master Data </a>
									  <ul>
									  <li ><a href="karyawan_data.php">Karyawan Data</a></li>   
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
							   </nav>

							   <h2>Selamat Datang di Biodata Saya</h2>
						<p><img alt="foto profil" src="img/foto.jpg" height="192" width"100" border="5" /> </p>
						<button class="accordion">Biodata</button>

						<div class="panel">
						  <div class="table-responsive">
						  <div class="content1">
						<table class="table table-striped table-hover">
									  <tr>
										<th width="40%">Nama</th>
										<td>&nbsp;:&nbsp;Abiem Adillah Arifin</td>
									  </tr>
									  <tr>
										<th>NPM</th>
										<td>&nbsp;:&nbsp;16.63.1000</td>
									  </tr>
										<tr>
										  <th>Tempat & Tanggal Lahir</th>
										  <td>&nbsp;:&nbsp;Banjarbaru, 30-01-1992</td>
										</tr>
									  <tr>
										<th>Alamat</th>
										<td>&nbsp;:&nbsp;Jl. Wana Bhakti 33 Sungai Besar Banjarbaru Selatan</td>
									  </tr>
									  <tr>
										<th>Email</th>
										<td>&nbsp;:&nbsp;abiem.adillah@gmail.com</td>
									  </tr>
									  <tr>
										<th>No Telepon / Whatsapp</th>
										<td>&nbsp;:&nbsp;081250635707</td>
									  </tr>
									  <tr>
										<th>Line</th>
										<td>&nbsp;:&nbsp;soulasylu</td>
									  </tr>
									  <tr>
										<th>Status</th>
										<td>&nbsp;:&nbsp;Menikah</td>
									  </tr>
									</table>
								  </div>
								</div>
						</div>
					<button class="accordion">Riwayat Pendidikan</button>
					<div class="panel">
					  <div class="table-responsive">
					  <div class="content1">
					<table class="table table-striped table-hover">
								  <tr>
									<th width="40%">Sekolah Dasar</th>
									<td>Comingsoon Update</td>
									<td>(Comingsoon Update)</td>
								  </tr><tr>
									<th width="40%">Sekolah Dasar</th>
									<<td>Comingsoon Update</td>
									<<td>(Comingsoon Update)</td>
								  </tr>
								  <tr>
									<th>SMP</th>
									<td>Comingsoon Update</td>
									<td>(Comingsoon Update)</td>
								  </tr>
									<tr>
									  <th>SMA</th>
									  <td>Comingsoon Update</td>
									  <td>(Comingsoon Update)</td>
									</tr>
								  <tr>
									<th>S1</th>
									<td>Universitas Islam Kalimantan Muhammad Arsyad Al-Banjari Banjarmasin(Teknik Informatika)</td>
									<td>(2016 - sekarang)</td>
								  </tr>
								  
								</table>
							  </div>
							</div>
					</div>
					<script>
					var acc = document.getElementsByClassName("accordion");
					var i;

					for (i = 0; i < acc.length; i++) {
					  acc[i].onclick = function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.maxHeight){
						  panel.style.maxHeight = null;
						} else {
						  panel.style.maxHeight = panel.scrollHeight + "px";
						} 
					  }
					}
					</script>
					   
					 <!--   <div class="right">
						 <center>
						 <h2>Abiem Adillah Arifin</h2>
					   <img alt="foto profil" src="img/foto.jpg" height="192" width"100" border="5" /></th> 
					 </center>
					  </div>
					  <div class="left">
						<center><h2>Biodata</h2></center>
					<table >
								  <tr>
									<th width="40%">Nama</th>
									<td>&nbsp;:&nbsp;Abiem Adillah Arifin</td>
								  </tr>
								  <tr>
									<th>NPM</th>
									<td>&nbsp;:&nbsp;16.63.1000</td>
								  </tr>
									<tr>
									  <th>Tempat & Tanggal Lahir</th>
									  <td>&nbsp;:&nbsp;Banjarbaru, 1992-04-30</td>
									</tr>
								  <tr>
									<th>Alamat</th>
									<td>&nbsp;:&nbsp;Jl.Wana Bhakti no 33 Sungai Besar Banjarbaru</td>
								  </tr>
								  <tr>
									<th>Email</th>
									<td>&nbsp;:&nbsp;abiem.adillah@gmail.com</td>
								  </tr>
								  <tr>
									<th>No Telepon / Whatsapp</th>
									<td>&nbsp;:&nbsp;081250635707</td>
								  </tr>
								  <tr>
									<th>Line</th>
									<td>&nbsp;:&nbsp;soulasylu</td>
								  </tr>
								  <tr>
									<th>Status</th>
									<td>&nbsp;:&nbsp;Menikah</td>
								  </tr>
								</table>
					</div>
					-->
					 
					  </div>
					  
					</div>

					  </div>
					  <div class="container">
					  <div class="footer">
						<center>Contact me <br>
					<a href="https://www.facebook.com/Abiem.Adillah.Arifin" target="_blank"><input type="image" src="img/facebook.jpg" height="20" width="20"></a>
					<a href="https://plus.google.com/u/1/103750649136986718067" target="_blank"><input type="image" src="img/gplus.jpg" height="20" width="20"></a>
					<a href="https://www.edmodo.com/home#/user?uid=113876677" target="_blank"><input type="image" src="img/edmodo.jpg" height="20" width="20"></a></center>
					  </div>
						</div>
					  
<div class="container">

   

<?php
session_start();
$koneksi = new mysqli("localhost","root","","db_perpustakaan");
$username = $_POST['username'];
$sql = $koneksi->query("SELECT*FROM tb_user WHERE username='$username'");

?>
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                             <center>HALAMAN BERANDA</center>
                        </div>
                        <div class="panel-body">
                        <h3>
                        <?php
						$a = date("H");
										if(($a>=6)&&($a<=11)){
											echo "Assalamu'alaikum, Selamat Pagi !!";
											}else if(($a>11)&&($a<=15)){
												echo "Assalamu'alaikum, Selamat Siang !!";
												}else if(($a>15)&&($a<=18)){
													echo "Assalamu'alaikum, Selamat Sore !!";
													}else{
														echo "Assalamu'alaikum, Selamat Malam !!";
														}
						
						?>
                        </h3>
                        <div class="table-responsive"></div>
                        </div>
                     </div>
                  </div>
               
 <div class="col-md-6">
 <div class="container-fluid bg-2">
 <i class="fa fa-laptop fa-3x">&nbsp;Tujuan</i>
 <h5>Dibuat dalam rangka memenuhi tugas Mata Kuliah Pemrograman Web 1. Universitas Kalimantan Syech Muhammad Arsyad Al-Banjary. Karena dalam tahap belajar, sehingga masih banyak kekurangan.</h5>
 </div>
 </div>
 <div class="col-md-6">
 <div class="container-fluid bg-2">
 <i class="fa fa-mobile-phone fa-3x">&nbsp;Informasi</i>
 <h5>Bisa dibuka dengan Smartphone anda, karena mengutamakan penampilan pada perangkat Mobile. Serta bertujuan memudahkan pengguna.</h5>
 </div>
 </div>
 </div>
               
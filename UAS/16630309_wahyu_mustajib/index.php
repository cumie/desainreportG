<?php 
	error_reporting(0);
	include "function.php";
	$koneksi = new mysqli("localhost","root","","db_perpustakaan");	
	
	session_start();
	
	if($_SESSION['admin'] || $_SESSION['user']){
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Ecek-Ecek</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="icon" href="assets/img/read.png">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="font">Perpustakaan Ecek-Ecek</div> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php
										$waktu = mktime(date("m"),date("d"),date("Y"));
										echo "Tanggal Sekarang: ".date("d- M -Y",$waktu);
										date_default_timezone_set('Asia/Singapore');
										
										$jam = date("H:i");
										echo "&nbsp;&nbsp;||&nbsp;&nbsp;Jam Sekarang: ".$jam;
										
										
											
									?>&nbsp;&nbsp;&nbsp;<a href="logout.php" onClick="return confirm('Apakah Anda Yakin akan Log Out??')" class="btn btn-info"><span class="glyphicon glyphicon-log-out"></span> Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side mainmenu-bg" role="navigation">
            <div class="sidebar-collapse mainmenu-bg">
                <ul class="nav mainmenu-bg" id="main-menu">
				<li class="text-center mainmenu-bg">
                    <img src="assets/img/read.png" class=" user-image img-responsive"/>
					</li>
				
					
                    <li class="mainmenu-bg">
                        <a  href="?page=home"><i class="fa fa-home fa-3x"></i> Beranda</a>
                    </li>

                    <li class="mainmenu-bg">
                        <a  href="?page=anggota"><i class="fa fa-users fa-3x"></i> Data Anggota</a>
                    </li>
                    <li class="mainmenu-bg">
                        <a  href="?page=buku"><i class="fa fa-book fa-3x"></i> Data Buku</a>
                    </li>
                    <li class="mainmenu-bg">
                        <a  href="?page=trans"><i class="fa fa-table fa-3x"></i> Transaksi</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
       			
                <div class="row con">
                    <div class="col-md-12">
                   	
                        <?php
							error_reporting(0);
                  			$page = $_GET['page'];
							$aksi = $_GET['aksi'];

                            if($page == "buku"){
                                if($aksi == ""){
                                    include "page/buku/buku.php";
                                }elseif($aksi == "tambah"){
									include "page/buku/tambah.php";
									}
								elseif($aksi == "ubah"){
									include "page/buku/ubah.php";
									}
								elseif($aksi == "hapus"){
									include "page/buku/hapus.php";
									}
								elseif($aksi == "detail"){
									include "page/buku/detail.php";
									}
                            }elseif($page == "anggota"){
                                if($aksi == ""){
                                     include "page/anggota/anggota.php";
                                }elseif($aksi == "tambah"){
									include "page/anggota/tambah.php";
									}
								elseif($aksi == "ubah"){
									include "page/anggota/ubah.php";
									}
								elseif($aksi == "hapus"){
									include "page/anggota/hapus.php";
									}
								elseif($aksi == "detail"){
									include "page/anggota/detail.php";
									}
                            }elseif($page == "trans"){
                                if($aksi == ""){
                                     include "page/trans/transaksi.php";
                                }elseif($aksi == "tambah"){
									include "page/trans/tambah.php";
									}
								elseif($aksi == "kembali"){
									include "page/trans/kembali.php";
									}
								elseif($aksi == "perpanjang"){
									include "page/trans/perpanjang.php";
									}
								elseif($aksi == "cari"){
									include "page/trans/cari.php";
									}
                            }elseif($page == "home"){
								include "page/home/home.php";
								}
							
                        ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
<?php
}else{
	header("location:login.php");
	}
?>
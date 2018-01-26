<?php
error_reporting(0);
ob_start();
session_start();
$koneksi = new mysqli("localhost","root","","db_perpustakaan");

if($_SESSION['admin'] || $_SESSION['user']){
	header("location:index.php?page=home");
	}else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Ecek-Ecek</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="assets/css/style.css" rel="stylesheet"/>
   <link rel="icon" href="assets/img/read.png">

</head>
<body class="bg">
    <div class="container bg">
        
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                  		<center><img src="assets/img/ogin.png" class="gambar"></center>
                        <div class="panel panel-primary bayang trans">
                            <div class="panel-heading">
                            <center><b>.:: LOGIN DI SINI ::.</b></center>
                            </div>
                            <div class="panel-body">
                              <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user warna"  ></i></span>
                                            <input type="text" name="username" class="form-control" autofocus placeholder="Username " autocomplete="off"/>
                                </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock warna"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Password" />
                                        </div>
                                   
                                     
                                     <input type="submit" name="login" value="Login" class="btn btn-primary tombol">
                                    <hr />
                                  Daftar ? <a href="#" >Klik di sini </a> 
                                   <div class="form-group">
                                            <span class="pull-right link">
                                                   <a href="#" >Lupa Password ? </a> 
                                            </span>
                                </div>
                                  </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
<?php
if(isset($_POST['login'])){
	$username	= $_POST['username'];
	$pass		= $_POST['password'];
	
	$sql = $koneksi->query("SELECT*FROM tb_user WHERE username='$username' AND password='$pass'");
	$data = $sql->fetch_assoc();
	
	$dapat = $sql->num_rows;
	
	if($dapat >0){
		session_start();
		if($data['level'] == "admin"){
			$_SESSION['admin'] = $data['id'];
			header("location: index.php?page=home");	
		}else if($data['level'] == "user"){
				$_SESSION['user'] = $data['id'];
				header("location: index.php?page=home");
		}
		}
	}
}
?>
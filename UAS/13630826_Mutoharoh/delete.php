<?php 
require_once"core/init.php";

if (isset($_GET['no_kav'])) {
	$no_kav=$_GET['no_kav'];
	$query="DELETE FROM stok_rumah WHERE no_kav='$no_kav'";
	if (mysqli_query($link,$query)) {
		header('location:pilih_blok.php');
	}else{
		die('gagal mengirim data silahkan kembali');
	}
}


?>
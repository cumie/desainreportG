<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="UAS_16630914";

$koneksi = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_errno()){
	echo 'Koneksi Gagal : '.mysqli_error();
	}
?>
<?php
$server ="localhost";
$username="root";
$password="";
$database="uas_16631041";

mysql_connect($server,$username,$password) or die("Koneksi Gagal");
mysql_select_db($database) or die("Database Tidak Ada");
?>

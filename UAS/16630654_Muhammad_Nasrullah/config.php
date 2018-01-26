<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "uas_1663065";
$table = "admin";
$table2 = "pengguna";
$table3 = "user";
$connect = mysql_connect($host, $user, $pass) or die("Gagal conek");
$pilih_db = mysql_select_db($db) or die("Database tidak ada");
$cookie_nama = $_COOKIE['nama'];
?>
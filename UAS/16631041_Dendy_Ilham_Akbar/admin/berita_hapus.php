<?php
include("../config/koneksi.php");
$id = $_GET["id"];
$sql = "delete from berita where id_berita = '$id'";
mysql_query($sql);
header('location:berita.php');
?>
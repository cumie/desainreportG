<?php
include("../config/koneksi.php");
$judul = $_POST['judul_berita'];
$isi= $_POST['isi'];

$sql = "insert into berita (judul_berita, isi) values ('$judul', '$isi')";
$exe = mysql_query($sql);
header('Location:berita.php');
?>
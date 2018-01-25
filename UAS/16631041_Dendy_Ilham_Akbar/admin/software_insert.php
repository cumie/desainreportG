<?php
include("../config/koneksi.php");
$judul = $_POST['judul_berita'];
$isi= $_POST['isi'];

$sql = "insert into berita (judul_berita, isi, kategori) values ('$judul', '$isi','software')";
$exe = mysql_query($sql);
header('Location:software_admin.php');
?>
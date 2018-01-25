<?php
include("../config/koneksi.php");
$judul = $_POST['judul_berita'];
$isi= $_POST['isi'];

$sql = "insert into berita (judul_berita, isi, kategori) values ('$judul', '$isi','hardware')";
$exe = mysql_query($sql);
header('Location:hardware_admin.php');
?>
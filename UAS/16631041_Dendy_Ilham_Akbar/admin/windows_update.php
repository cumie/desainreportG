<?php
include("../config/koneksi.php");
$id = $_POST['id'];
$judul_berita = $_POST['judul_berita'];
$isi = $_POST['isi'];

$sql = "update berita set judul_berita = '$judul_berita', isi = '$isi' where id_berita = '$id'";
$exe = mysql_query($sql);
header('Location:windows_admin.php');
?>
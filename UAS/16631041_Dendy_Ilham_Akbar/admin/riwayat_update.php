<?php
include("../config/koneksi.php");

$isi = $_POST['isi'];

$sql = "update riwayat set isi = '$isi' ";
$exe = mysql_query($sql);
header('Location:riwayat_admin.php');
?>
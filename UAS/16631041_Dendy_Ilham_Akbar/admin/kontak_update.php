<?php
include("../config/koneksi.php");

$isi = $_POST['isi'];

$sql = "update kontak set isi = '$isi' ";
$exe = mysql_query($sql);
header('Location:kontak_admin.php');
?>
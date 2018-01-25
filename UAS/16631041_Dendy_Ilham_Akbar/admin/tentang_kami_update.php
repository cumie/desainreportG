<?php
include("../config/koneksi.php");

$isi = $_POST['isi'];

$sql = "update tentang_kami set isi = '$isi' ";
$exe = mysql_query($sql);
header('Location:tentang_kami.php');
?>
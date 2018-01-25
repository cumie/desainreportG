<?php
include("../config/koneksi.php");
$id = $_GET["id"];
$sql = "delete from user where id_user = '$id'";
mysql_query($sql);
header('location:user.php');
?>
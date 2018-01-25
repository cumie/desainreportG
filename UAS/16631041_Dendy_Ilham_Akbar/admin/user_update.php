<?php
include("../config/koneksi.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "update user set nama = '$nama', alamat = '$alamat', email = '$email', username = '$username', password='$password' where id_user = '$id'";
$exe = mysql_query($sql);
header('Location:user.php');
?>
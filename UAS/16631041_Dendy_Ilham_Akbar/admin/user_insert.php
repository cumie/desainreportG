<?php
include("../config/koneksi.php");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "insert into user (nama, alamat, email, username, password) values
('$nama', '$alamat', '$email', '$username','$password')";
$exe = mysql_query($sql);
header('Location:user.php');
?>
<?php
session_start();
include("koneksi.php");
$u=$_POST['user'];
$p= md5($_POST['pass']);
$sql=mysql_query("select*from user where username='$u' and password='$p'");
$rowcount=mysql_num_rows($sql);
if ($rowcount!=0)
{
$_SESSION['USERNAME']=$u;
$_SESSION['PASSWORD']=$p;
header("location:../admin/beranda_admin.php");
}
else
{
echo"<script>  alert('Username atau Password anda salah');
    window.location.href='../admin/login_admin.php';
    </script>";
}
?>
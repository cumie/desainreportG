<?php
session_start();
$USERNAME=$_POST["USERNAME"];
$PASSWORD=$_POST["PASSWORD_ADMIN"];
include "db_connection.php";

$query="SELECT * from admin WHERE USERNAME="USERNAME" and PASSWORD_ADMIN="PASSWORD"";

$result=mysql_query($query);

if($data=mysql_fetch_array($result))
{
	$_SESSION["logged-in"] = true;
	$_SESSION["USERNAME"] = $_POST ["USERNAME"];
	header ("location: admin_homepage.php");
}
else if ($USERNAME=="" or $PASSWORD="")
{
$_SESSION["kosong"]="kosong";
header ("lcoation: index.php");
}
else
{
	$_SESSION["salah"]="salah";
	header ("location: index.php");
}
?>
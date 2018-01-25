<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
    header("location:../admin/login_admin.php");
}
include("../masterpages/header_admin.php");
?>
<div id="content">
<center><img src="../image/jaringan.jpg" width=700 height=500>

<?php
include("../masterpages/footer.php");
?>
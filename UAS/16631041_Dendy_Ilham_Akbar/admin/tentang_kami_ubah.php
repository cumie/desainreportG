<?php
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
header("Location:../admin/login.php");
}
?>
<title>inkom.co.id</title>
<head>
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../js/ckeditor/style.js"></script>
</head> 
<?php

include("../masterpages/header_admin.php");
include("../config/koneksi.php");

$sql = "select * from tentang_kami ";
$exe = mysql_query($sql);
$data = mysql_fetch_array($exe);
?>
<br/>
<br/>
<div style="margin: 5 0 5 0">
<center>
<h3>Ubah Profil</h3>
<hr style="color: #C4DAE8; width: 90%;"/>
</center>
</div>
<form id="tentang_kami" name="tentang_kami" method="post" action="tentang_kami_update.php">
<table width="70%" align="center" cellpadding="0" cellspacing="0"
style="border-color: #C4DAE8; font-size: small;">



<tr>

<td><textarea name="isi" type="text" class="ckeditor" id="isi" style="height: 400px; width: 500px;"><?php echo
$data['isi'] ?>"</textarea></td>
</tr>

<tr>

<td align="center">
<br>
<br>
<button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
<a href="../admin/tentang_kami.php"><button type="button" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-remove"></span> Batal</button></a>
</td>
</tr>
</table>
</form>
<?php
include("../masterpages/footer.php");
?>
<script type="text/javascript">
var f = new Validator("tentang_kami");
f.addValidation("isi","req","Data Tidak Boleh Kosong");

</script> 
<?php
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
header("Location:../config/login.php");
}
?>

<script language="javascript">
function simpan(evt)
   {
    var judul=document.getElementById( "judul_berita" ).value;
    var judul=document.getElementById( "isi" ).value;
    if (judul=="") {
	alert("Silahkan Masukkan Judul Artikel");
	document.getElementById("judul_berita").focus();
	return (false);
    }    
    else if (isi=="") {
	alert("Silahkan Masukkan Isi Artikel");
	document.getElementById( "isi" ).setfocus();
	return false;
    }   
    else{return true}
    } 
</script>
<head>
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../js/ckeditor/style.js"></script>
</head>    
<?php

include("../masterpages/header_admin.php");
?>
<br/>
<br/>
<div class="container">
    
<br/>
<br/>
<div style="margin: 5 0 5 0">
<div id=content>
<center>
<h3 style="color: black;">Tambah Artikel</h3>
<hr style="color: #C4DAE8; width: 90%;"/>
</center>
</div>
<form id="hardware_tambah" name="hardware_tambah" method="post" action="hardware_insert.php" onsubmit="return simpan(event)" >
<table width="90%" align="center" cellpadding="0" cellspacing="0" style="border-color: #C4DAE8; font-size: small;">
<tr>
    <td><font size="4">Judul Artikel</td>
    <td>
        <input type="text" class="form-control" name="judul_berita" id="judul_berita"/>
    </td>
</tr>

<tr>
<td><font size="4">Isi Artikel</td>

<td><textarea name="isi" type="text" class="ckeditor" id="isi" style="height: 90px; width: 500px;">
</textarea></td>
</tr>
</table>
<hr style="color: #C4DAE8; width: 90%;"/>
		<center>
		    <button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
		    <button type="reset" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-repeat"></span> Ulang</button>
                    <a href="../admin/hardware_admin.php"><button type="button" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-remove"></span> Batal</button></a>
		</center>
		<hr style="color: #C4DAE8; width: 90%;"/>
</form>

</div>
</div>
<?php
include("../masterpages/footer.php");
?>
</body>
</html>

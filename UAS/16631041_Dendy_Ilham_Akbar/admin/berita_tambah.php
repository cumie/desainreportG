<title>utd-rs_bjb.go.id</title>
<head>
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../js/ckeditor/style.js"></script>
</head>    
<?php
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
header("Location:../config/login.php");
}
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
<h3 style="color: black;">Tambah Berita</h3>
<hr style="color: #C4DAE8; width: 90%;"/>
</center>
</div>
<form id="berita_tambah" name="berita_tambah" method="post" action="berita_insert.php" onsubmit="return validasi(this)" >
<table width="90%" align="center" cellpadding="0" cellspacing="0" style="border-color: #C4DAE8; font-size: small;">
<tr>
    <td><font size="4">Judul Berita</td>
    <td>
        <input type="text" class="form-control" name="judul_berita" id="judul_berita" />
    </td>
</tr>

<tr>
<td><font size="4">Isi Berita</td>

<td><textarea name="isi" type="text" class="ckeditor" id="isi" style="height: 90px; width: 500px;">
</textarea></td>
</tr>
</table>
<hr style="color: #C4DAE8; width: 90%;"/>
		<center>
		    <button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
		    <button type="reset" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-repeat"></span> Ulang</button>
                    <a href="../admin/berita.php"><button type="button" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-remove"></span> Batal</button></a>
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
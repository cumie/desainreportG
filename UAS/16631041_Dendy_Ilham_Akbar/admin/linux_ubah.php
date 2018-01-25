<?php
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
header("Location:../admin/login.php");
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
include("../config/koneksi.php");
$id = $_GET['id'];
$sql = "select * from berita where id_berita = '$id'";
$exe = mysql_query($sql);
$data = mysql_fetch_array($exe);
?>
<br/>
<br/>
<div style="margin: 5 0 5 0">
<center>
<h3>Ubah Artikel</h3>
<hr style="color: #C4DAE8; width: 90%;"/>
</center>
</div>
<form id="berita_ubah" name="berita_ubah" method="post" action="linux_update.php" onsubmit="return simpan(event)">
<table width="70%" align="center" cellpadding="0" cellspacing="0"
style="border-color: #C4DAE8; font-size: small;">
<input type="hidden" name="id" id="id" value="<?php echo $id ?>" />

<tr>
<td>Judul Artikel</td>
<td>:</td>
<td><input type="text" class="form-control" name="judul_berita" maxlength="50" id="judul_berita" size=25" value="<?php echo
$data['judul_berita'] ?>" /></td></td>
</tr>
<tr>
<td>Isi Artikel</td>
<td>:</td>
<td><textarea name="isi" type="text" class="ckeditor" id="isi" style="height: 90px; width: 500px;"><?php echo
$data['isi'] ?>"</textarea></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>

<center>
<button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
<a href="../admin/linux_admin.php"><button type="button" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-remove"></span> Batal</button></a>
</center>
</td>
</tr>
</table>
</form>
<?php
include("../masterpages/footer.php");
?>
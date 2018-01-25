<?php
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
header("Location:../admin/login.php");
}
?>
<title>utd-rs_bjb.go.id</title>
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
<h3>Ubah berita</h3>
<hr style="color: #C4DAE8; width: 90%;"/>
</center>
</div>
<form id="berita_ubah" name="berita_ubah" method="post" action="berita_update.php">
<table width="70%" align="center" cellpadding="0" cellspacing="0"
style="border-color: #C4DAE8; font-size: small;">
<input type="hidden" name="id" id="id" value="<?php echo $id ?>" />

<tr>
<td>Judul Berita</td>
<td>:</td>
<td><input type="text" name="judul_berita" maxlength="50" id="judul_berita" size=25" value="<?php echo
$data['judul_berita'] ?>" /></td></td>
</tr>
<tr>
<td>Isi Berita</td>
<td>:</td>
<td><textarea name="isi" type="text" class="ckeditor" id="isi" style="height: 90px; width: 500px;"><?php echo
$data['isi'] ?>"</textarea></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<input type="submit" name="submit" id="button" value="Simpan" />

<a href="beranda_admin.php" style="text-decoration: none;"><input type="button"
name="button" id="button" value="Batal" /></a>
</td>
</tr>
</table>
</form>
<?php
include("../masterpages/footer.php");
?>
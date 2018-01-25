<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
header("Location:../admin/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>

<style>
    
table {
    border-collapse: collapse;
    border-spacing: 15px;
    width: 80%;
    position: center;
    border: 1px solid #ddd;
    
}

th, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 30px;
    border-spacing: 15px;
    
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<script>
function KonfirmasiHapus()
{
if(confirm("Anda yakin data ini akan dihapus?"))
return true;
else
return false;
}
</script>
</head>
<body>
<?php

include("../masterpages/header_admin.php");
include("../config/koneksi.php");
$sql = "select * from user ";
$exe = mysql_query($sql);
?>
<div class="container">
<div style="margin: 5 0 5 0">
<center>
<h3 style="color: black;">Data Manajemen User</h3>
<hr style="color: #C4DAE8; width: 90%;"/>
<a href="user_tambah.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data</button></a>
</center>
<div width:150%; style="overflow-x:auto;">
  <table width="90%"  align="center" border="1" style="border-color: #C4DAE8; font-size: medium;" >
<thead align="center" style="background-color:#C4DAE8;">

<th width="3%"><center>Nomor<center></th>
<th width="10%"><center>Nama Lengkap<center></th>
<th width="15%"><center>Alamat<center></th>
<th width="10%"><center>Email<center></th>
<th width="7%"><center>Username<center></th>
<th width="10%"><center>Aksi<center></th>
</thead>

<?php
$i=0;
while($list = mysql_fetch_array($exe)) {
$i++;
?>
<tbody>
<td><center><?php echo $i;?></center></td>
<td><?php echo $list['nama']; ?></td>
<td><?php echo $list['alamat']; ?></td>
<td><?php echo $list['email']; ?></td>
<td><?php echo $list['username']; ?></td>
<td>
<center>   
<a href="user_ubah.php?id=<?php echo $list[0]; ?>"><button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span> Ubah</button></a>
<a href="user_hapus.php?id=<?php echo $list[0]; ?>" onclick="return KonfirmasiHapus()" ><button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</button></a>
</center>
</td>
</tbody>
<?php
}
?>
</table>
</div>
</div>
<br>
<br>
<br>    
<?php
include("../masterpages/footer.php");
?>
</body>
</html>
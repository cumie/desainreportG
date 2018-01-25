<?php
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
header("Location:../config/login.php");
}
?>
<head>
    
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
<form id="user_tambah" name="user_tambah" method="post" action="user_insert.php" >
<table width="90%" align="center" cellpadding="0" cellspacing="0" style="border-color: #C4DAE8; font-size: small;">
<tr>
    <td><font size="4">Nama</td>
    <td>
        <input type="text" class="form-control" name="nama" id="nama" />
    </td>
</tr>
<tr>
    <td><font size="4">Alamat</td>
    <td>
        <input type="text" class="form-control" name="alamat" id="alamat" />
    </td>
</tr>
<tr>
    <td><font size="4">Email</td>
    <td>
        <input type="text" class="form-control" name="email" id="email" />
    </td>
</tr>
<tr>
    <td><font size="4">Username</td>
    <td>
        <input type="text" class="form-control" name="username" id="username" />
    </td>
</tr>
<tr>
    <td><font size="4">Password</td>
    <td>
        <input type="password" class="form-control" name="password" id="password" />
    </td>
</tr>


</table>
<hr style="color: #C4DAE8; width: 90%;"/>
		<center>
		    <button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
		    <button type="reset" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-repeat"></span> Ulang</button>
                    <a href="../admin/user.php"><button type="button" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-remove"></span> Batal</button></a>
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
<script type="text/javascript">
var f = new Validator("user_tambah");
f.addValidation("nama","req","nama harus diinputkan");
f.addValidation("nama","maxlen=45","maksimal karakter nama 45 digit");
f.addValidation("nama","alpha","nama harus berupa huruf");
f.addValidation("alamat","req","silakan masukkan alamat");
f.addValidation("email","req","silakan masukkan email");
f.addValidation("email","email","ketik format email dengan benar");
f.addValidation("email","maxlen=45","maksimal karakter email 45 digit");
f.addValidation("username","req","silakan masukkan username");
f.addValidation("username","maxlen=20","maksimal karakter username  20 digit"); 
f.addValidation("password","req","silakan masukkan password");
</script> 
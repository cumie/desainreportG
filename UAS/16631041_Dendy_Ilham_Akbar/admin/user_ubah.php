<?php
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD'])))
{
header("Location:../admin/login.php");
}
include("../masterpages/header_admin.php");
include("../config/koneksi.php");
$id = $_GET['id'];
$sql = "select * from user where id_user = '$id'";
$exe = mysql_query($sql);
$data = mysql_fetch_array($exe);
?>
<div class="container">
    <div class="col-sm-12"  style=" padding:15px;">
	<div class="col-sm-2" ></div>
	<div class="col-sm-8" >
	    <br/>
	    <br/>
	    <div style="margin: 5 0 5 0">
	    <div id=content>
		<center>
		<h3 style="color: black;">Ubah Data User</h3>
		<hr style="color: #C4DAE8; width: 90%;"/>
		</center>
	    </div>
	    <form id="petugas_ubah" name="petugas_ubah" method="post" action="user_update.php" role="form" data-toggle="validator">
            <table width="90%" align="center" cellpadding="0" cellspacing="0"
            style="border-color: #C4DAE8; font-size: small;">
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>" />
		    <tr>
		    <td><font size="4">Nama</td>
		    
		    <td>
			<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama'] ?>" required/>
		    </td>
		    </tr>
                    <tr>
			<td valign="top"><font size="4">Alamat</td>
			
			<td>
			    <div class="form-group">
			      <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat'] ?>" required/>
			    </div>
			</td>
		    </tr>
		    <tr>
			<td valign="top"><font size="4">Email</td>
			
			<td>
			    <div class="form-group">
			      <input type="text" class="form-control" name="email" id="email" value="<?php echo $data['email'] ?>" required/>
			    </div>
			</td>
		    </tr>
                    <tr>
			<td valign="top"><font size="4">Username</td>
			
			<td>
			    <div class="form-group">
			      <input type="text" class="form-control" name="username" id="username" value="<?php echo $data['username'] ?>" required/>
			    </div>
			</td>
		    </tr>
		    <tr>
			<td valign="top"><font size="4">Password</td>
			
			<td>
			    <div class="form-group">
			      <input type="password" class="form-control" name="password" id="password" required/>
			    </div>
			</td>
		    </tr>
		    <tr>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>
		    
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
	<div class="col-sm-2" ></div>
    </div>
</div>
</div>
<?php
include("../masterpages/footer.php");
?>
<script src="../js/validator/widgets.js"></script>
<script src="../js/validator/assets/js/application.js"></script>
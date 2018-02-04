<?php require_once"core/init.php"; 



	if (isset($_POST['submit'])) {
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$telepon=$_POST['telepon'];
		$email=$_POST['email'];
		$status=$_POST['status'];

		$input=tambah_user($nama,$username,$password,$telepon,$email,$status);
		if ($input) {
			header('location:data_admin.php');
		}else{
			die('cek koneksi');

		}
	}

?>
<!DOCTYPE html>
<html>

	<?php require_once"view/head.php"; ?>

<body>

<?php require_once"view/menu.php"; ?>


	<!-- konten -->
	<div id="content">

		<div id="content-isi">
			<p style="text-transform: uppercase;">tambah data user<p>
				<div class="garis"></div>
			
				<form action="" method="post">

					<input type="input" name="nama" placeholder="nama" required>
					<input type="input" name="username" placeholder="user" required>
					<input type="input" name="password" placeholder="password" required>
					<input type="input" name="telepon" placeholder="telepon" required>
					<input type="input" name="email" placeholder="email" required>
					<select name="status" required>
						<option></option>
						<option>admin</option>
						<option>member</option>
					</select>
					<input type="submit" name="submit" value="INPUT" class="btn btn-success">

					
				</form>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>
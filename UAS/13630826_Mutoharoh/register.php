<?php require_once"core/init.php"; 

	$error='';

	if (isset($_POST['submit'])) {
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$telepon=$_POST['telepon'];
		$email=$_POST['email'];
		$status=$_POST['status'];
		$_SESSION['user']=$username;

	if (trim($nama) && trim($username) && trim($password) && trim($telepon) && trim($email) && trim($status) ) {

		$input=tambah_user($nama,$username,$password,$telepon,$email,$status);
		if ($input) {
			header('location:pilih_blok.php?username='.$_SESSION['user']);
		}else{
			die('cek koneksi');

		}
	}else{
		$error='tidak boleh menggunakan karakter ^$%*<>%$&#';
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
					<input type="input" name="status" placeholder="status" value="member" required>
					<?= $error ?>
					<input type="submit" name="submit" value="INPUT" class="btn btn-success">

					
				</form>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>
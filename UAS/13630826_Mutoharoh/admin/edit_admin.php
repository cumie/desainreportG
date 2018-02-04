<?php require_once"core/init.php"; 

	if (isset($_POST['submit'])) {
		$id=$_POST['id'];
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$telepon=$_POST['telepon'];
		$email=$_POST['email'];
		$status=$_POST['status'];

		$input=edit_admin($id,$nama,$username,$password,$telepon,$email,$status);
		if ($input) {
			header('location:data_admin.php');
		}else{
			die('cek koneksi');

		}
	}


	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$data=data_admin_id($id);
		$row=mysqli_fetch_assoc($data);
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

					<input type="input" name="nama" value="<?= $row['nama']; ?>">
					<input type="input" name="username" value="<?= $row['username']; ?>" required>
					<input type="input" name="password" value="<?= $row['password']; ?>" required>
					<input type="input" name="telepon" value="<?= $row['telepon']; ?>" required>
					<input type="input" name="email" value="<?= $row['email']; ?>" required>
					<select name="status" required>
						<option value="<?= $row['status']; ?>"></option>
						<option>admin</option>
						<option>member</option>
					</select>
					<input type="hidden" name="id" value="<?= $row['id']; ?>" required>
					<input type="submit" name="submit" value="EDIT" class="btn btn-success">

					
				</form>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>
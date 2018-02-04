<?php 

require_once"core/init.php";

if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$login=login($username,$password);
	$data=mysqli_fetch_assoc($login);
	$hasil=mysqli_num_rows($login);
	if ($hasil) {
		$_SESSION['user']=$username;
		$_SESSION['status']=$data['status'];

        if ($_SESSION['status']=='member') {
           header('location:pilih_blok.php?msg=LOGIN BERHASIL');
        }
        else if($_SESSION['status']=='admin'){
            header('location:admin/index.php?msg=LOGIN BERHASIL');
        }

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
			<p>Selamat Datang Di Halaman Login<p>
				<div class="garis"></div>
		
				<p>Belum punya akun silahkan daftar <a href="register.php">disini</a></p>

				 <form action="" method="post">
                                <table>
                                    <tr>
                                        <td><input type="text" name="username" placeholder="username" class="form-control" required><br></td>
                                    </tr>
                                    <tr>
                                        <td><input type="password" name="password" placeholder="password" class="form-control" required><br></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="submit" value="LOGIN" class="btn btn-success"></td>
                                    </tr>
                                </table>
                  </form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>
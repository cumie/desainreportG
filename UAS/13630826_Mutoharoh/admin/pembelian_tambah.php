<?php require_once"core/init.php"; 


if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $result=data_order_id($id);
    while($row=mysqli_fetch_assoc($result)){
        $nama=$row['nama'];
        $alamat=$row['alamat'];
        $telepon=$row['telepon'];
        $tipe=$row['tipe'];
        $no_kav=$row['no_kav'];
        $ukuran=$row['ukuran'];
        $harga=$row['harga'];
        $blok=$row['blok'];
        $uang_muka=$row['uang_muka'];
    }
}

 if (isset($_POST['submit'])) {
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $telepon=$_POST['telepon'];
        $tipe=$_POST['tipe'];
        $no_kav=$_POST['no_kav'];
        $ukuran=$_POST['ukuran'];
        $harga=$_POST['harga'];
        $blok=$_POST['blok'];
        $uang_muka=$_POST['uang_muka'];
        $tgl_beli=$_POST['tgl_beli'];
        $ket=$_POST['ket'];
        $no_kw=$_POST['no_kw'];

        if (tambah_pembelian($nama,$alamat,$telepon,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka,$tgl_beli,$ket,$no_kw)) {
            header('location:data_order.php?id='.$id);
    }else{
        die('input pembelian gagal silahkan coba lagi');
    }
}


    $no_kw=no_kwitansi();
    while ($row=mysqli_fetch_assoc($no_kw)) {
     $n= (int) substr($row['no_kwitansi'], 1,4);

     $n++;

     $no_kwitansi=sprintf("%04s",$n);
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
			<p>INPUT DATA PEMBELIAN<p>
				<div class="garis"></div>
				
                            <form action="" method="post">
                                <input type="hidden" name="id" class="form-control" value="<?= $id; ?>">
                                <input type="hidden" name="nama" class="form-control" value="<?= $nama; ?>">
                                <input type="hidden" name="alamat" class="form-control" value="<?= $alamat; ?>">
                                <input type="hidden" name="telepon" class="form-control" value="<?= $telepon; ?>">
                                <input type="hidden" name="tipe" class="form-control" value="<?= $tipe; ?>">
                                <input type="hidden" name="no_kav" class="form-control" value="<?= $no_kav; ?>">
                                <input type="hidden" name="ukuran" class="form-control" value="<?= $ukuran; ?>">
                                <input type="hidden" name="harga" class="form-control" value="<?= $harga; ?>">
                                <input type="hidden" name="blok" class="form-control" value="<?= $blok; ?>">
                                <input type="hidden" name="uang_muka" class="form-control" value="<?= $uang_muka; ?>">
                                <label for="tgl_beli">tanggal pembelian:</label>
                                <input type="text" name="tgl_beli" class="form-control" style="width: 400px" id="tgl_beli" value="<?= date('d-m-Y'); ?>"><br>
                                <label for="ket">keterangan :</label>
                                <textarea name="ket" id="ket" rows="7" cols="50" style="width: 400px" class="form-control">
                                
                                </textarea>
                                <input type="hidden" name="no_kw" class="form-control" value="<?= $no_kwitansi ?>">
                                <br>
                                <input type="submit" name="submit" value="KIRIM" class="btn btn-success">
                            </form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>
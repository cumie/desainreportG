<?php include "head.php"; ?>
<h2>Data Barang &raquo; Edit Data</h2>
<hr />

<?php
$kode = $_GET['kode'];
$sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode='$kode'");
if(mysqli_num_rows($sql) == 0){
	header("Location: index.php");
} 

else{
	$row = mysqli_fetch_assoc($sql);
}


if(isset($_POST['save'])){
	$kode			     = $_POST['kode'];
	$nama			     = $_POST['nama'];
	$sumber_barang	 = $_POST['sumber_barang'];
	$tanggal_stok = $_POST['tanggal_stok'];
	$size			   = $_POST['size'];
	$stok		 = $_POST['stok'];
	$merk		   = $_POST['merk'];
	$status			   = $_POST['status'];

	$update = mysqli_query($koneksi, "UPDATE barang SET nama='$nama', sumber_barang='$sumber_barang', tanggal_stok='$tanggal_stok', size='$size', stok='$stok', merk='$merk', status='$status' WHERE kode='$kode'") or die (mysqli_error());

	if ($update){
		header("Location: barang_edit.php?kode=".$kode."&pesan=sukses");

	}
  else{
		echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
		data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
	}
}

if(isset($_GET['pesan']) == 'sukses'){
	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
		data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
}
	$now = strtotime(date("Y-m-d"));


?>

<form class="form-horizontal" action="" method="post">
	<div class="form-group">
    	<label class="col-sm-3 control-label">kode</label>
    	<div class="col-sm-2">
    		<input type="text" name="kode" value="<?php echo $row ['kode']; ?>" class="form-control" placeholder="kode" required>
    	</div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Sumber Barang</label>
    <div class="col-sm-4">
      <input type="text" name="sumber_barang" value="<?php echo $row ['sumber_barang']; ?>" class="form-control" placeholder="Sumber Barang" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Tanggal Stok Datanga</label>
    <div class="col-sm-4">
      <input type="date" name="tanggal_stok" value="<?php echo $row ['tanggal_stok']; ?>" class="input-group form-control"  required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Size</label>
    <div class="col-sm-2">
      <input type="text" name="size" value="<?php echo $row ['size']; ?>" class="form-control" placeholder="Size" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Stok</label>
    <div class="col-sm-2">
      <input type="text" name="stok" value="<?php echo $row ['stok']; ?>" class="form-control" placeholder="Stok" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">merk</label>
    <div class="col-sm-2">
      <select name="merk" class="form-control" required>
       <option value=""> - merk Terbaru - </option>
       <option value="Vans">Vans</option>
       <option value="Adidas">Adidas</option>
       <option value="Nike">Nike</option>
       <option value="Asics">Asics</option>
      </select>
    </div>

    <div class="col-sm-3">
    <b>merk Sekarang :</b> <span class="label label-success"><?php echo $row ['merk']; ?></span>
	</div>
</div>

	<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-2">
      <select name="status" class="form-control">
       <option value=""> - Status Terbaru - </option>
       <option value="Ready">Ready</option>
       <option value="Preorder">Preorder</option>
       <option value="Sold">Sold</option>
      </select>
    </div>

    <div class="col-sm-3">
    <b>Status Sekarang :</b> <span class="label label-info"><?php echo $row ['status']; ?></span>
	</div>
</div>

	<div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="save" class="btn btn-sm btn-primary" value="simpan">
     <a href="barang_data.php?kode=" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>


<?php include "foot.php"; ?>
<?php include "footer.php"; ?>
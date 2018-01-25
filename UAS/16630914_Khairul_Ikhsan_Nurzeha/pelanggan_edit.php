<?php include "head.php"; ?>
<h2>Data pelanggan &raquo; Edit Data</h2>
<hr />

<?php
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id='$id'");
if(mysqli_num_rows($sql) == 0){
	header("Location: index.php");
} 

else{
	$row = mysqli_fetch_assoc($sql);
}


if(isset($_POST['save'])){
	$id			     = $_POST['id'];
	$nama			     = $_POST['nama'];
	$alamat			   = $_POST['alamat'];
	$no_telepon		 = $_POST['no_telepon'];
	$tanggal_order = $_POST['tanggal_order'];
	$barang_order	 = $_POST['barang_order'];
	$size		   = $_POST['size'];
	$status			   = $_POST['status'];

	$update = mysqli_query($koneksi, "UPDATE pelanggan SET nama='$nama', alamat='$alamat', no_telepon='$no_telepon',  
	tanggal_order='$tanggal_order', barang_order='$barang_order', size='$size', status='$status' WHERE id='$id'") or die (mysqli_error());

	if ($update){
		header("Location: pelanggan_edit.php?id=".$id."&pesan=sukses");

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
    	<label class="col-sm-3 control-label">id</label>
    	<div class="col-sm-2">
    		<input type="text" name="id" value="<?php echo $row ['id']; ?>" class="form-control" placeholder="id" required>
    	</div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama" required>
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-3">
      <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $row ['alamat']; ?></textarea>
    </div>
  </div>
  
    <div class="form-group">
    <label class="col-sm-3 control-label">No Telepon</label>
    <div class="col-sm-3">
      <input type="text" name="no_telepon" value="<?php echo $row ['no_telepon']; ?>" class="form-control" placeholder="No Telepon" required>
    </div>
  </div>
  
    <div class="form-group">
    <label class="col-sm-3 control-label">Tanggal Order</label>
    <div class="col-sm-4">
      <input type="date" name="tanggal_order" value="<?php echo $row ['tanggal_order']; ?>" class="input-group form-control" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Barang Order</label>
    <div class="col-sm-4">
      <input type="text" name="barang_order" value="<?php echo $row ['barang_order']; ?>" class="form-control" placeholder="Barang Order" required>
    </div>
  </div>  
  
  <div class="form-group">
    <label class="col-sm-3 control-label">size</label>
    <div class="col-sm-2">
      <input type="text" name="size" value="<?php echo $row ['size']; ?>" class="form-control" placeholder="Size Barang" required>
    </div>
	
	 <div class="col-sm-3">
    <b>size Sekarang :</b> <span class="label label-success"><?php echo $row ['size']; ?></span>
	</div>
  </div>




	<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-2">
      <select name="status" class="form-control">
       <option value=""> - Status Terbaru - </option>
       <option value="Lunas">Lunas</option>
       <option value="BelumLunas">BelumLunas</option>
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
     <a href="pelanggan_data.php?id=" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>


<?php include "foot.php"; ?>
<?php include "footer.php"; ?>
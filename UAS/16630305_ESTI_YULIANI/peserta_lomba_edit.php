<?php include "head.php"; ?>
<link rel="stylesheet" type="text/css" href="style1.css">
<h2>Data Peserta Lomba Seni &raquo; Edit Data</h2>
<hr />

<?php
$no_urut = $_GET['no_urut'];
$sql = mysqli_query($koneksi, "SELECT * FROM peserta_lomba WHERE no_urut='$no_urut'");
if(mysqli_num_rows($sql) == 0){
	header("Location: index.php");
} else{
	$row = mysqli_fetch_assoc($sql);
}
if(isset($_POST['save'])){
	$no_urut			     = $_POST['no_urut'];
	$nama			     = $_POST['nama'];
	$tempat_lahir	 = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat			   = $_POST['alamat'];
	$no_telepon		 = $_POST['no_telepon'];
	$lomba_yang_diikuti		   = $_POST['lomba_yang_diikuti'];
	$status			   = $_POST['status'];

	$update = mysqli_query($koneksi, "UPDATE peserta_lomba SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir=
		'$tanggal_lahir', alamat='$alamat', no_telepon='$no_telepon', lomba_yang_diikuti='$lomba_yang_diikuti', status='$status' WHERE no_urut='$no_urut'") or die (mysqli_error());

	if ($update){
		header("Location: peserta_lomba_edit.php?no_urut=".$no_urut."&pesan=sukses");

	}else{
		echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
		data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
	}
}

if(isset($_GET['pesan']) == 'sukses'){
	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
		data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
}
	$now = strtotime(date("Y-m-d"));
	$maxage = date('Y-m-d', strtotime('- 16 year', $now));
	$minage = date('Y-m-d', strtotime('- 40 year', $now));

?>

<form class="form-horizontal" action="" method="post">
	<div class="form-group">
    	<label class="col-sm-3 control-label">no_urut</label>
    	<div class="col-sm-2">
    		<input type="text" name="no_urut" value="<?php echo $row ['no_urut']; ?>" class="form-control" placeholder="no_urut" required>
    	</div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Tempat Lahir</label>
    <div class="col-sm-4">
      <input type="text" name="tempat_lahir" value="<?php echo $row ['tempat_lahir']; ?>" class="form-control" placeholder="Tempat Lahir" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Tanggal Lahir</label>
    <div class="col-sm-4">
      <input type="date" name="tanggal_lahir" value="<?php echo $row ['tanggal_lahir']; ?>" class="input-group form-control" min="<?php echo $minage;?>" max="<?php echo $maxage;?>" required>
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
    <label class="col-sm-3 control-label">lomba_yang_diikuti</label>
    <div class="col-sm-2">
      <select name="lomba_yang_diikuti" class="form-control" required>
       <option value=""> - lomba_yang_diikuti Terbaru - </option>
       <option value="Tari">Tari</option>
       <option value="Musik">Musik</option>
       <option value="Lukis">Lukis</option>
       <option value="Drama">Drama</option>
      </select>
    </div>

    <div class="col-sm-3">
    <b>lomba_yang_diikuti Sekarang :</b> <span class="label label-success"><?php echo $row ['lomba_yang_diikuti']; ?></span>
	</div>
</div>

	<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-2">
      <select name="status" class="form-control">
       <option value=""> - Status Terbaru - </option>
       <option value="Umum">Umum</option>
       <option value="Mahasiswa">Mahasiswa</option>
       <option value="Pelajar">Pelajar</option>
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
     <a href="peserta_lomba_data.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>
</link>

<?php include "footer.php"; ?>

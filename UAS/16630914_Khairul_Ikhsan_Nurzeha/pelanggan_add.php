<?php include "head.php"; ?>
            <h2>Data pelanggan &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $id                = $_POST['id'];
              $nama               = $_POST['nama'];
			  $alamat             = $_POST['alamat'];
			  $no_telepon         = $_POST['no_telepon'];
			  $tanggal_order      = $_POST['tanggal_order'];
              $barang_order       = $_POST['barang_order'];
              $size            = $_POST['size'];
              $status             = $_POST['status'];

              $cek = mysqli_query ($koneksi, "SELECT * FROM pelanggan WHERE id='$id'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO pelanggan (id, nama, alamat, no_telepon, tanggal_order, 
                       barang_order, size, status)
                                                          VALUES('$id','$nama','$alamat','$no_telepon','$tanggal_order',
                                                          '$barang_order','$size','$status')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data pelanggan Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data pelanggan Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hidden="true">&times;</button>id Sudah Ada..!</div>';
              }
          }


          $now = strtotime(date("Y-m-d"));


?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-2">
      <input type="text" name="id" class="form-control" placeholder="id" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" name="nama" class="form-control" placeholder="Nama" required>
    </div>
  </div>
  
    <div class="form-group">
    <label class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-3">
      <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-3 control-label">No Telepon</label>
    <div class="col-sm-3">
      <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Tanggal Order</label>
    <div class="col-sm-4">
      <input type="date" name="tanggal_order" value="" 
      class="input-group form-control" required>
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-3 control-label">Barang Order</label>
    <div class="col-sm-4">
      <input type="text" name="barang_order" class="form-control" placeholder="barang Order" required>
    </div>
  </div>    
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Size</label>
    <div class="col-sm-4">
      <input type="text" name="size" class="form-control" placeholder="size" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-2">
      <select name="status" class="form-control">
       <option value=""> ----- </option>
       <option value="Lunas">Lunas</option>
       <option value="BelumLunas">BelumLunas</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="karyawan_add.php" class="btn btn-sm btn-danger">Batal</a>
     <a href="karyawan_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
    </div>
  </div>
</form>



<?php include "foot.php"; ?>
<?php include "footer.php"; ?>
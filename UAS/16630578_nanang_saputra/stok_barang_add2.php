<?php include "head.php"; ?>
            <h2>Stok_Barang &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $id               = $_POST['id'];
              $nama_barang      = $_POST['nama_barang'];
              $suplier_barang   = $_POST['suplier_barang'];
              $jumlah_barang    = $_POST['jumlah_barang'];
              $harga_barang    = $_POST['harga_barang];
            
              $cek = mysqli_query ($koneksi, "SELECT * FROM stok_barang_add2 WHERE id='$id'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO stok_barang (id, nama_barang, suplier_barang, jumlah_barang, harga_barang, )
                                                          VALUES('$id','$nama_barang','$suplier_barang','$jumlah_barang','$harga_barang')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Order Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hidden="true">&times;</button>Kode Sudah Ada..!</div>';
              }
          }

?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-4">
      <input type="text" name="id" class="form-control" placeholder="id" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">nama_barang</label>
    <div class="col-sm-4">
      <input type="text" name="nama_barang" class="form-control" placeholder="nama_barang" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">suplier_barang</label>
    <div class="col-sm-4">
      <input type="text" name="suplier_barang" class="form-control" placeholder="suplier_barang" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">jumlah_barang</label>
    <div class="col-sm-4">
      <input type="text" name="jumlah_barang" class="form-control" placeholder="jumlah_barang" required>
    </div>
  </div>

<div class="form-group">
    <label class="col-sm-3 control-label">harga_barang</label>
    <div class="col-sm-4">
      <input type="text" name="harga_barang" class="form-control" placeholder="harga_barang" required>
    </div>
  </div>

  
  <!--<div class="form-group">
    <label class="col-sm-3 control-label">tanggal</label>
    <div class="col-sm-2">
      <select name="tanggal" class="form-control" required>
       <option value=""> ----- </option>
       <option value="Operator">Operator</option>
       <option value="Leader">Leader</option>
       <option value="Supervisor">Supervisor</option>
       <option value="Manager">Manager</option>
      </select>
    </div>
  </div>-->

  <!--<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-2">
      <select name="status" class="form-control">
       <option value=""> ----- </option>
       <option value="Outsourcing">Outsourcing</option>
       <option value="Kontrak">Kontrak</option>
       <option value="Tetap">Tetap</option>
      </select>
    </div>
  </div>-->

  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="order_data.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

<?php include "head.php"; ?>
            <h2>Data Sepatu Order &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $nama               = $_POST['nama'];
              $nama_sepatu        = $_POST['nama_sepatu'];
              $harga              = $_POST['harga'];
              $dp                 = $_POST['dp'];

              $cek = mysqli_query ($koneksi, "SELECT * FROM penyicil WHERE nama='$nama'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO penyicil (nama, nama_sepatu, harga, dp)
                                                          VALUES('$nama','$nama_sepatu','$harga','$dp')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data Sepatu Order Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Sepatu Order Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hidden="true">&times;</button>Kode Sudah Ada..!</div>';
              }
          }


          $now = strtotime(date("Y-m-d"));
          $maxage = date ('Y-m-d', strtotime('- 16 year', $now));
          $minage = date ('Y-m-d', strtotime('- 40 year', $now));

?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" name="nama" class="form-control" placeholder="Nama" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama Sepatu</label>
    <div class="col-sm-4">
      <input type="text" name="nama_sepatu" class="form-control" placeholder="Nama Sepatu" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Harga</label>
    <div class="col-sm-4">
      <input type="text" name="harga" class="form-control" placeholder="Harga" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">dp</label>
    <div class="col-sm-4">
      <input type="text" name="dp" class="form-control" placeholder="dp" required>
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

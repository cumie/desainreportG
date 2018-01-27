<?php include "head.php"; ?>
            <h2>data_service &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $nama             = $_POST['nama'];
              $jenis_motor      = $_POST['jenis_motor'];
              $jenis_custom     = $_POST['jenis_custom'];
              $keterangan       = $_POST['keterangan'];


              $cek = mysqli_query ($koneksi, "SELECT * FROM data_service WHERE nama='$nama'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO data_service (nama, jenis_motor, jenis_custom, keterangan)
                                                          VALUES('$nama','$jenis_motor','$jenis_custom','$keterangan')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hnamaden="true">&times;</button>data motor Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hnamaden="true">&times;</button>Ups, data motor Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hnamaden="true">&times;</button>nama Sudah Ada..!</div>';
              }
          }

?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">nama</label>
    <div class="col-sm-2">
      <input type="text" name="nama" class="form-control" placeholder="nama" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">jenis_motor</label>
    <div class="col-sm-4">
      <input type="text" name="jenis_motor" class="form-control" placeholder="jenis_motor" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">jenis_custom</label>
    <div class="col-sm-3">
      <input type="text" name="jenis_custom" class="form-control" placeholder="jenis_custom" required>
    </div>

  </div>
   <div class="form-group">
    <label class="col-sm-3 control-label">keterangan</label>
    <div class="col-sm-4">
      <input type="text" name="keterangan" class="form-control" placeholder="keterangan" required>
    </div>
  </div>



  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="data_service.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

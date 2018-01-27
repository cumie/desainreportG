<?php include "head.php"; ?>
            <h2>Data_motor &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $id               = $_POST['id'];
              $jenis_motor      = $_POST['jenis_motor'];
              $nama_pemilik     = $_POST['nama_pemilik'];
              $type_custom      = $_POST['type_custom'];
              $alamat           = $_POST['alamat'];


              $cek = mysqli_query ($koneksi, "SELECT * FROM data_motor WHERE id='$id'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO data_motor (id, jenis_motor, nama_pemilik,
                      type_custom, alamat)
                                                          VALUES('$id','$jenis_motor','$nama_pemilik',
                                                          '$type_custom','$alamat')") or die (mysqli_error($koneksi))
                                                           ;
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>data motor Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, data motor Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hidden="true">&times;</button>id Sudah Ada..!</div>';
              }
          }

?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-2">
      <input type="text" name="id" class="form-control" placeholder="id" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">jenis_motor</label>
    <div class="col-sm-4">
      <input type="text" name="jenis_motor" class="form-control" placeholder="jenis_motor" required>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-3 control-label">nama_pemilik</label>
    <div class="col-sm-1">
     <input type="text" name="nama_pemilik" class="form-control" placeholder="nama_pemilik" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">type_custom</label>
    <div class="col-sm-3">
      <input type="text" name="type_custom" class="form-control" placeholder="type_custom" required>
    </div>

  </div>
   <div class="form-group">
    <label class="col-sm-3 control-label">alamat</label>
    <div class="col-sm-3">
      <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
    </div>
  </div>



  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="data_motor.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

<?php include "head.php"; ?>
            <h2>Data_bengkel &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $id                 = $_POST['id'];
              $nama_sparepart     = $_POST['nama_sparepart'];
              $jumlah             = $_POST['jumlah'];
              $keterangan         = $_POST['keterangan'];
              

              $cek = mysqli_query ($koneksi, "SELECT * FROM data_bengkel WHERE id='$id'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO data_bengkel (id, nama_sparepart, jumlah, keterangan)
                                                          VALUES('$id','$nama_sparepart','$jumlah','$keterangan')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data Bengkel Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Bengkel Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hidden="true">&times;</button>NIK Sudah Ada..!</div>';
              }
          }
?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">ID</label>
    <div class="col-sm-2">
      <input type="text" name="id" class="form-control" placeholder="NIK" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama Sparepart</label>
    <div class="col-sm-4">
      <input type="text" name="nama_sparepart" class="form-control" placeholder="Nama" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah</label>
    <div class="col-sm-4">
      <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Keterangan</label>
    <div class="col-sm-4">
      <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="data_bengkel.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

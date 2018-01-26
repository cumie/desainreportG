<?php include "head.php"; ?>
            <h2>data karyawan &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $id                = $_POST['id'];
              $nama_karyawan               = $_POST['nama_karyawan'];
              $umur_karyawan       = $_POST['umur_karyawan'];
              $no_telp      = $_POST['no_telp'];
              $status      = $_POST['status'];
              

              $cek = mysqli_query ($koneksi, "SELECT * FROM data_karyawan WHERE id='$id'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO data_karyawan (id, nama_karyawan, umur_karyawan, 
                      no_telp, status)
                                                          VALUES('$id','$nama_karyawan','$umur_karyawan',
                                                          '$no_telp','$status')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data data_karywan Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data data_karywan Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hidden="true">&times;</button>id Sudah Ada..!</div>';
              }
          }


          $now = strtotime(date("Y-m-d"));
          $maxage = date ('Y-m-d', strtotime('- 16 year', $now));
          $minage = date ('Y-m-d', strtotime('- 40 year', $now));

?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-2">
      <input type="text" name="id" class="form-control" placeholder="id" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama Karyawan</label>
    <div class="col-sm-4">
      <input type="text" name="nama_karyawan" class="form-control" placeholder="nama_karyawan" required>
    </div>
  </div>  
  
 <div class="form-group">
    <label class="col-sm-3 control-label">Umur Karyawan</label>
    <div class="col-sm-4">
      <input type="text" name="umur_karyawan" class="form-control" placeholder="umur_karyawan" required>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-3 control-label">No Telepon</label>
    <div class="col-sm-3">
      <input type="text" name="no_telp" class="form-control" placeholder="No Telepon" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-2">
      <select name="status" class="form-control">
       <option value=""> ----- </option>
       <option value="Outsourcing">Outsourcing</option>
       <option value="Kontrak">Kontrak</option>
       <option value="Tetap">Tetap</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="data_karywan_data.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

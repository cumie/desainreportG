<?php include "head.php"; ?>
            <h2>Data Karyawan &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $ID_Karyawan  = $_POST['ID_Karyawan'];
              $nama         = $_POST['nama'];
              $Alamat       = $_POST['Alamat'];
              $Jabatan      = $_POST['Jabatan'];

              $cek = mysqli_query ($koneksi, "SELECT * FROM data_karyawan WHERE ID_Karyawan='$ID_Karyawan'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO data_karyawan (ID_Karyawan, nama, Alamat,Jabatan)
                                                          VALUES('$ID_Karyawan','$nama','$Alamat','$Jabatan')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data data_karyawan Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data data_karyawan Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hidden="true">&times;</button>ID_Karyawan Sudah Ada..!</div>';
              }
          }


          $now = strtotime(date("Y-m-d"));
          $maxage = date ('Y-m-d', strtotime('- 16 year', $now));
          $minage = date ('Y-m-d', strtotime('- 40 year', $now));

?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">ID_Karyawan</label>
    <div class="col-sm-2">
      <input type="text" name="ID_Karyawan" class="form-control" placeholder="ID_Karyawan" required>
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
      <textarea name="Alamat" class="form-control" placeholder="Alamat"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Jabatan</label>
    <div class="col-sm-2">
      <select name="Jabatan" class="form-control" required>
       <option value=""> ----- </option>
       <option value="TukangService">TukangService</option>
       <option value="Kasir">Kasir</option>
       <option value="Satpam">Satpam</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="data_karyawan.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

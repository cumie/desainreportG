<?php include "head.php"; ?>
            <h2>Data Peminjaman Buku &raquo; Tambah Data</h2>
            <hr />
<?php include "koneksi.php"; ?>
            <?php
            if (isset($_POST['add'])){
              $kode_buku          = $_POST['kode_buku'];
              $npm                = $_POST['npm'];
              $nama_peminjam      = $_POST['nama_peminjam'];
              $nama_buku          = $_POST['nama_buku'];
              $jumlah             = $_POST['jumlah'];
              $tanggal            = $_POST['tanggal'];

              $cek = mysqli_query ($koneksi, "SELECT * FROM peminjaman_buku WHERE kode_buku='$kode_buku'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO peminjaman_buku (kod_buku, npm, nama_peminjan, nama_buku, jumlah
                      , tanggal)
                                                          VALUES('$kode_buku','$npm','$nama_peminjam','$jumlah',
                                                          '$tanggal')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data Peminjaman Buku Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Peminjaman Buku Gagal Di Simpan!</div>';
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
    <label class="col-sm-3 control-label">Kode Buku</label>
    <div class="col-sm-2">
      <input type="text" name="kode_buku" class="form-control" placeholder="Kode Buku" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Npm</label>
    <div class="col-sm-4">
      <input type="text" name="npm" class="form-control" placeholder="Npm" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama Peminjam</label>
    <div class="col-sm-4">
      <input type="text" name="nama_peminjam" class="form-control" placeholder="Nama Peminjam" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama Buku</label>
    <div class="col-sm-4">
      <input type="text" name="nama_buku" class="form-control" placeholder="Nama Buku" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah</label>
    <div class="col-sm-4">
      <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Tanggal</label>
    <div class="col-sm-4">
      <input type="date" name="tanggal" value="" 
      class="input-group form-control" required>
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
     <a href="peminjaman_buku_data.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

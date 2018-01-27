<?php include "head.php"; ?>
            <h2>Data Sepatu Order &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $kode               = $_POST['kode'];
              $nama               = $_POST['nama'];
              $namabarang        = $_POST['namabarang'];
              $harga              = $_POST['harga'];
              $jumlah             = $_POST['jumlah'];
              $no_telpon          = $_POST['no_telpon'];
              $tanggal            = $_POST['tanggal'];

              $cek = mysqli_query ($koneksi, "SELECT * FROM orderan WHERE kode='$kode'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO orderan (kode, nama, namabarang, harga, jumlah,
                      no_telpon, tanggal)
                                                          VALUES('$kode','$nama','$namabarang','$harga','$jumlah',
                                                          '$no_telpon','$tanggal')") or die (mysqli_error($koneksi));
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
    <label class="col-sm-3 control-label">Kode</label>
    <div class="col-sm-2">
      <input type="text" name="kode" class="form-control" placeholder="Kode" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" name="nama" class="form-control" placeholder="Nama" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama Barang</label>
    <div class="col-sm-4">
      <input type="text" name="namabarang" class="form-control" placeholder="Nama Barang" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Harga</label>
    <div class="col-sm-4">
      <input type="text" name="harga" class="form-control" placeholder="Harga" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah</label>
    <div class="col-sm-4">
      <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">No Telepon</label>
    <div class="col-sm-3">
      <input type="text" name="no_telpon" class="form-control" placeholder="No Telepon" required>
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
     <a href="order_data.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

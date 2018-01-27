<?php include "head.php"; ?>
            <h2>Data Barang ready &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $kode               = $_POST['kode'];
              $namabarang        = $_POST['namabarang'];
              $jumlah             = $_POST['jumlah'];
              $harga              = $_POST['harga'];


              $cek = mysqli_query ($koneksi, "SELECT * FROM ready WHERE kode='$kode'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO ready (kode, namabarang, jumlah,
                      harga)
                                                          VALUES('$kode','$namabarang','$jumlah',
                                                          '$harga')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data Barang Ready Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Barang Ready Gagal Di Simpan!</div>';
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
      <input type="text" name="kode" class="form-control" placeholder="kode" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama Barang</label>
    <div class="col-sm-4">
      <input type="text" name="namabarang" class="form-control" placeholder="namabarang" required>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah</label>
    <div class="col-sm-1">
     <input type="text" name="jumlah" class="form-control" placeholder="0" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Harga</label>
    <div class="col-sm-3">
      <input type="text" name="harga" class="form-control" placeholder="Rp" required>
    </div>
  </div>



  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="barangready_data.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

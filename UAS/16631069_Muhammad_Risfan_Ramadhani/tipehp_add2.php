<?php include "head.php"; ?>
            <h2>Data Tipe HP &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $TipeHP            = $_POST['TipeHP'];
              $NamaPemilik       = $_POST['NamaPemilik'];
              $IMEI              = $_POST['IMEI'];
              $KodeBarang        = $_POST['KodeBarang'];

              $cek = mysqli_query ($koneksi, "SELECT * FROM data_tipe_handphone WHERE TipeHP='$TipeHP'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO data_tipe_handphone (TipeHP, NamaPemilik, IMEI, KodeBarang)
                                                          VALUES('$TipeHP','$NamaPemilik','$IMEI','$KodeBarang')") or die (mysqli_error($koneksi));
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
    <label class="col-sm-3 control-label">Tipe HP</label>
    <div class="col-sm-4">
      <input type="text" name="TipeHP" class="form-control" placeholder="TipeHP" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama Pemilik</label>
    <div class="col-sm-4">
      <input type="text" name="NamaPemilik" class="form-control" placeholder="NamaPemilik" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">IMEI</label>
    <div class="col-sm-4">
      <input type="text" name="IMEI" class="form-control" placeholder="IMEI" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Kode Barang</label>
    <div class="col-sm-4">
      <input type="text" name="KodeBarang" class="form-control" placeholder="KodeBarang" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
     <a href="order_data.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

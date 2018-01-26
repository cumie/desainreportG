<?php include "head.php"; ?>
            <h2>Data Service &raquo;</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $Kode_Barang         = $_POST['Kode_Barang'];
              $TipeHP              = $_POST['TipeHP'];
              $NamaPemilik         = $_POST['NamaPemilik'];
			  $Status              = $_POST['Status'];

              $cek = mysqli_query ($koneksi, "SELECT * FROM data_service WHERE Kode_Barang='$Kode_Barang'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO data_service (Kode_Barang, TipeHP, NamaPemilik, Status)
                                                          VALUES('$Kode_Barang','$TipeHP','$NamaPemilik','$Status')") or die (mysqli_error($koneksi));
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
    <label class="col-sm-3 control-label">Kode Barang</label>
    <div class="col-sm-4">
      <input type="text" name="Kode_Barang" class="form-control" placeholder="Kode_Barang" required>
    </div>
  </div>

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
    <label class="col-sm-3 control-label">Status</label>
      <div class="col-sm-2">
      <select name="Status" class="form-control" required>
       <option value=""> ----- </option>
       <option value="Proses">Proses</option>
       <option value="Selesai">Selesai</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="order_data.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>


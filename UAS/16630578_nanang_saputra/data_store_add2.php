<?php include "head.php"; ?>
            <h2>Data Store &raquo; Tambah Data</h2>   
            <hr />

            <?php
            if (isset($_POST['add'])){
              $id               = $_POST['id'];
              $nama_barang      = $_POST['nama_barang'];
              $sold_barang     = $_POST['sold_barang'];
              $keterangan_barang      = $_POST['keterangan_barang'];
            


              $cek = mysqli_query ($koneksi, "SELECT * FROM data_store WHERE id='$id'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO data_store (id, nama_barang, sold_barang,
                      keterangan_barang, harga_barang)
                                                          VALUES('$id','$nama_barang','$sold_barang',
                                                          '$keterangan_barang')") or die (mysqli_error($koneksi))
                                                           ;
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>data store Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, data store Gagal Di Simpan!</div>';
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
    <label class="col-sm-3 control-label">Nama Barang</label>
    <div class="col-sm-4">
      <input type="text" name="nama_barang" class="form-control" placeholder="nama_barang" required>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-3 control-label">Suplier Barang</label>
    <div class="col-sm-1">
     <input type="text" name="sold_barang" class="form-control" placeholder="sold_barang" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah Barang</label>
    <div class="col-sm-3">
      <input type="text" name="keterangan_barang" class="form-control" placeholder="keterangan_barang" required>
    </div>



  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="data_store.php" class="btn btn-sm btn-danger">Batal</a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>

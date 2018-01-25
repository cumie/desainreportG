<?php include "head.php"; ?>
            <h2>Data barang &raquo; Tambah Data</h2>
            <hr />

            <?php
            if (isset($_POST['add'])){
              $kode                = $_POST['kode'];
              $nama               = $_POST['nama'];
              $sumber_barang       = $_POST['sumber_barang'];
              $tanggal_stok      = $_POST['tanggal_stok'];
              $size             = $_POST['size'];
              $stok         = $_POST['stok'];
              $merk            = $_POST['merk'];
              $status             = $_POST['status'];

              $cek = mysqli_query ($koneksi, "SELECT * FROM barang WHERE kode='$kode'");
              if(mysqli_num_rows($cek) ==0){

                      $insert = mysqli_query($koneksi, "INSERT INTO barang (kode, nama, sumber_barang, tanggal_stok, size,
                      stok, merk, status)
                                                          VALUES('$kode','$nama','$sumber_barang','$tanggal_stok','$size',
                                                          '$stok','$merk','$status')") or die (mysqli_error($koneksi));
                      if ($insert){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Data barang Berhasil Disimpan.</div>';
                    }else {
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                        data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data barang Gagal Di Simpan!</div>';
                      }
              }else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button class="close"
                data-dismiss="alert" aria-hidden="true">&times;</button>kode Sudah Ada..!</div>';
              }
          }


          $now = strtotime(date("Y-m-d"));


?>

<form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label class="col-sm-3 control-label">kode</label>
    <div class="col-sm-2">
      <input type="text" name="kode" class="form-control" placeholder="kode" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" name="nama" class="form-control" placeholder="Nama" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Sumber Barang</label>
    <div class="col-sm-4">
      <input type="text" name="sumber_barang" class="form-control" placeholder="Sumber Barang" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Tanggal Stok Datang</label>
    <div class="col-sm-4">
      <input type="date" name="tanggal_stok" value="" 
      class="input-group form-control" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Size</label>
    <div class="col-sm-2">
      <input type="text" name="size" class="form-control" placeholder="Size" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Stok</label>
    <div class="col-sm-2">
      <input type="text" name="stok" class="form-control" placeholder="Stok" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">merk</label>
    <div class="col-sm-2">
      <select name="merk" class="form-control" required>
       <option value=""> Merk </option>
       <option value="vans">Vans</option>
       <option value="adidas">Adidas</option>
       <option value="nike">Nike</option>
       <option value="asics">Asics</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-2">
      <select name="status" class="form-control">
       <option value=""> Status </option>
       <option value="Ready">Ready</option>
       <option value="Preorder">Pre-Order</option>
       <option value="Sold">Sold</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">&nbsp;</label>
    <div class="col-sm-6">
     <input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
     <a href="barang_add.php" class="btn btn-sm btn-danger">Batal</a>
     <a href="barang_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
    </div>
  </div>
</form>

<?php include "foot.php"; ?>
<?php include "footer.php"; ?>

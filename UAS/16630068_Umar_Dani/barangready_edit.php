<?php include "head.php"; ?>
          <h2>Data Barang Ready &raquo; Edit Data</h2>
          <hr/>

        <?php
          $kode = $_GET['kode'];
          $sql = mysqli_query($koneksi, "SELECT * FROM ready WHERE kode='$kode'");
          if(mysqli_num_rows($sql) == 0){
                header("Location: index.php");
              }else{
                    $row = mysqli_fetch_assoc($sql);
              }
              if(isset($_POST['save'])){
                    $kode               = $_POST['kode'];
                    $nama_sepatu        = $_POST['nama_sepatu'];
                    $jumlah             = $_POST['jumlah'];
                    $harga              = $_POST['harga'];

                    $update = mysqli_query($koneksi, "UPDATE ready SET nama_sepatu='$nama_sepatu', jumlah='$jumlah', harga='$harga' WHERE kode='$kode'") or die(mysqli_error());
                    if($update){
                        header("Location: barangready_edit.php?kode=".$kode."&pesan=sukses");
                      }else{
                          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Disimpan, silakan coba sekali lagi</div>';
                    }
                    }
                    if(isset($_GET['pesan']) == 'sukses'){
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Disimpan.</div>';
                    }
                    $now = strtotime(date("Y-m-d"));
                    $maxage = date('Y-m-d', strtotime('- 16 year', $now));
                    $minage = date('Y-m-d', strtotime('- 40 year', $now));
                    ?>
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Kode</label>
                        <div class="col-sm-1">
                          <input type="text" name="kode" value="<?php echo $row ['kode'];?>" class="form-control" placeholder="kode" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama_sepatu</label>
                        <div class="col-sm-3">
                          <input type="text" name="nama_sepatu" value="<?php echo $row ['nama_sepatu'];?>" class="form-control" placeholder="nama_sepatu" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-1">
                          <input type="text" name="jumlah" value="<?php echo $row ['jumlah'];?>" class="form-control" placeholder="0" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Harga</label>
                        <div class="col-sm-3">
                          <input type="text" name="harga" value="<?php echo $row ['harga'];?>" class="form-control" placeholder="Rp" required>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">&nbsp;</label>
                          <div class="col-sm-6">
                                <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
                                <a href="barangready_data.php" class="btn btn-sm btn-danger">Batal</a>
                          </div>
                      </div>
                    </form>
<?php include "foot.php"; ?>

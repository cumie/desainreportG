<?php include "head.php"; ?>
          <h2>Data penyicil &raquo; Edit Data</h2>
          <hr/>

        <?php
          $nama = $_GET['nama'];
          $sql = mysqli_query($koneksi, "SELECT * FROM penyicil WHERE nama='$nama'");
          if(mysqli_num_rows($sql) == 0){
                header("Location: index.php");
              }else{
                    $row = mysqli_fetch_assoc($sql);
              }
              if(isset($_POST['save'])){
                    $nama               = $_POST['nama'];
                    $nama_sepatu        = $_POST['nama_sepatu'];
                    $harga              = $_POST['harga'];
                    $dp                 = $_POST['dp'];
                    $status             = $_POST['status'];

                    $update = mysqli_query($koneksi, "UPDATE penyicil SET nama='$nama', nama_sepatu='$nama_sepatu', harga='$harga', dp='$dp' WHERE nama='$nama'") or die(mysqli_error());
                    if($update){
                        header("Location: penyicil_edit.php?nama=".$nama."&pesan=sukses");
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
                        <label class="col-sm-3 control-label">nama</label>
                        <div class="col-sm-2">
                          <input type="text" name="nama" value="<?php echo $row ['nama'];?>" class="form-control" placeholder="nama" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">nama_sepatu</label>
                        <div class="col-sm-3">
                          <textarea name="nama_sepatu" class="form-control" placeholder="nama_sepatu"><?php echo $row ['nama_sepatu'];?></textarea>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="col-sm-3 control-label">dp</label>
                        <div class="col-sm-3">
                          <textarea name="dp" class="form-control" placeholder="dp"><?php echo $row ['dp'];?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-3 control-label">&nbsp;</label>
                          <div class="col-sm-6">
                                <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
                                <a href="penyicil_data.php" class="btn btn-sm btn-danger">Batal</a>
                          </div>
                      </div>
                    </form>
<?php include "foot.php"; ?>

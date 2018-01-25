<?php include "head.php"; ?>
          <h2>Data barang &raquo; Edit Data</h2>
          <hr/>

        <?php
          $nama = $_GET['nama'];
          $sql = mysqli_query($koneksi, "SELECT * FROM brg_yg_bisa_diicicil WHERE nama='$nama'");
          if(mysqli_num_rows($sql) == 0){
                header("Location: index.php");
              }else{
                    $row = mysqli_fetch_assoc($sql);
              }
              if(isset($_POST['save'])){
                    $nama               = $_POST['nama'];
                    $jenis              = $_POST['jenis'];
                    $warna             = $_POST['warna'];
                    $size                 = $_POST['size'];
                    $harga             = $_POST['harga'];

                    $update = mysqli_query($koneksi, "UPDATE brg_yg_bisa_diicicil SET nama='$nama', jenis='$jenis', warna='$warna', size='$size', harga='$harga' WHERE nama='$nama'") or die(mysqli_error());
                    if($update){
                        header("Location: barang_edit.php?nama=".$nama."&pesan=sukses");
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
                        <label class="col-sm-3 control-label">jenis</label>
                        <div class="col-sm-3">
                          <textarea name="jenis" class="form-control" placeholder="jenis"><?php echo $row ['jenis'];?></textarea>
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="col-sm-3 control-label">warna</label>
                        <div class="col-sm-3">
                          <textarea name="warna" class="form-control" placeholder="warna"><?php echo $row ['warna'];?></textarea>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="col-sm-3 control-label">size</label>
                        <div class="col-sm-3">
                          <textarea name="size" class="form-control" placeholder="size"><?php echo $row ['size'];?></textarea>
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="col-sm-3 control-label">harga</label>
                        <div class="col-sm-3">
                          <textarea name="harga" class="form-control" placeholder="harga"><?php echo $row ['harga'];?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-3 control-label">&nbsp;</label>
                          <div class="col-sm-6">
                                <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
                                <a href="barang_data.php" class="btn btn-sm btn-danger">Batal</a>
                          </div>
                      </div>
                    </form>
<?php include "foot.php"; ?>

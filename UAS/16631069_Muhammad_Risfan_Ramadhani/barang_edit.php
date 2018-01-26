<?php include "head.php"; ?>
          <h2>Data barang &raquo; Edit Data</h2>
          <hr/>

        <?php
          $Kode_Barang = $_GET['Kode_Barang'];
          $sql = mysqli_query($koneksi, "SELECT * FROM data_service WHERE Kode_Barang='$Kode_Barang'");
          if(mysqli_num_rows($sql) == 0){
                header("Location: index.php");
              }else{
                    $row = mysqli_fetch_assoc($sql);
              }
              if(isset($_POST['save'])){
                    $Kode_Barang               = $_POST['Kode_Barang'];
                    $TipeHP              = $_POST['TipeHP'];
                    $NamaPemilik             = $_POST['NamaPemilik'];
                    $Status                 = $_POST['Status'];

                    $update = mysqli_query($koneksi, "UPDATE data_service SET Kode_Barang='$Kode_Barang', TipeHP='$TipeHP', NamaPemilik='$NamaPemilik', Status='$Status', WHERE Kode_Barang='$Kode_Barang'") or die(mysqli_error());
                    if($update){
                        header("Location: barang_edit.php?Kode_Barang=".$Kode_Barang."&pesan=sukses");
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
                        <label class="col-sm-3 control-label">Kode_Barang</label>
                        <div class="col-sm-2">
                          <input type="text" name="Kode_Barang" value="<?php echo $row ['Kode_Barang'];?>" class="form-control" placeholder="Kode_Barang" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">TipeHP</label>
                        <div class="col-sm-3">
                          <textarea name="TipeHP" class="form-control" placeholder="TipeHP"><?php echo $row ['TipeHP'];?></textarea>
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="col-sm-3 control-label">NamaPemilik</label>
                        <div class="col-sm-3">
                          <textarea name="NamaPemilik" class="form-control" placeholder="NamaPemilik"><?php echo $row ['NamaPemilik'];?></textarea>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-3">
                          <textarea name="Status" class="form-control" placeholder="Status"><?php echo $row ['Status'];?></textarea>
                        </div>
                      </div

                      <div class="form-group">
                          <label class="col-sm-3 control-label">&nbsp;</label>
                          <div class="col-sm-6">
                                <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
                                <a href="barang_data.php" class="btn btn-sm btn-danger">Batal</a>
                          </div>
                      </div>
                    </form>
<?php include "foot.php"; ?>

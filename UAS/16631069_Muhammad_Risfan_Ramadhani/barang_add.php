<?php include "head.php"; ?>
            <h2>Data barang &raquo; Tambah Data</h2>
            <hr/>

            <?php
            if (isset($_POST['add'])){
				  $kode				   = $_POST['KodeBarang'];
                  $KodeBarang              = $_POST['KodeBarang'];
                  $TipeHP         = $_POST['TipeHP'];
                  $status              = $_POST['Status'];

                  $cek = mysqli_query($koneksi, "SELECT * FROM data_service WHERE KodeBarang='$KodeBarang'");
                  if(mysqli_num_rows($cek) == 0){

                          $insert = mysqli_query($koneksi, "INSERT INTO barang(KodeBarang, TipeHP, NamaPemilik, status, harga)
                                                      VALUES('$KodeBarang','$TipeHP','$NamaPemilik','$status','$harga')") or die(mysqli_error($koneksi));
                    if($insert){
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data barang Berhasil Di Simpan.</div>';
                    }else {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data barang Gagal Di Simpan !</div>';
                    }
                    }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>KodeBarang Sudah Ada..!</div>';
                    }
                }
                    $now = strtotime(date("Y-m-d"));
                    $maxage = date('Y-m-d', strtotime('- 16 year', $now));
                    $minage = date('Y-m-d', strtotime('- 40 year', $now));

                ?>
				<form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label class="col-sm-3 control-label">KodeBarang</label>
                            <div class="col-sm-2">
                                <input type="text" name="KodeBarang" class="form-control" placeholder="KodeBarang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">TipeHP</label>
                            <div class="col-sm-4">
                                  <input type="text" name="TipeHP" class="form-control" placeholder="TipeHP" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">NamaPemilik</label>
                            <div class="col-sm-4">
                                  <input type="text" name="NamaPemilik" class="form-control" placeholder="NamaPemilik" required>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label">status</label>
                            <div class="col-sm-4">
                                  <input type="text" name="status" class="form-control" placeholder="status" required>
                            </div>
                        </div>
						 <?php
                          if($row['status'] == 'Proses'){
                    ?>
                        <span class="label label-success">Proses</span>
                    <?php }
                          else if ($row['status'] == 'Selesai'){
                    ?>
                        <span class="label label-info">Selesai</span>
                    <?php } ?>
                      
                        <div class="form-group">
                            <label class="col-sm-3 control-label">&nbsp;</label>
                            <div class="col-sm-6">
                                  <input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
                                  <a href="index.php" class="btn btn-sm btn-danger">Batal</a>
                            </div>
                        </div>
                  </form>

<?php include "foot.php"; ?>

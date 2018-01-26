<?php include "head.php"; ?>
            <h2>Data barang &raquo; Tambah Data</h2>
            <hr/>

            <?php
            if (isset($_POST['add'])){
          $kode          = $_POST['id'];
                  $id              = $_POST['id'];
                  $NamaBarang         = $_POST['NamaBarang'];
                  $SuplierBarang              = $_POST['SuplierBarang'];
                  $JumlahBarang             = $_POST['jumlahBarang'];
                  $cek = mysqli_query($koneksi, "SELECT * FROM data_service WHERE id='$id'");
                  if(mysqli_num_rowss($cek) == 0){

                          $insert = mysqli_query($koneksi, "INSERT INTO barang(id, NamaBarang, NamaPemilik, JumlahBarang, )
                                                      VALUES('$id','$NamaBarang','$NamaPemilik','$JumlahBarang')") or die(mysqli_error($koneksi));
                    if($insert){
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data barang Berhasil Di Simpan.</div>';
                    }else {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data barang Gagal Di Simpan !</div>';
                    }
                    }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>id Sudah Ada..!</div>';
                    }
                }
                    $now = strtotime(date("Y-m-d"));
                    $maxage = date('Y-m-d', strtotime('- 16 year', $now));
                    $minage = date('Y-m-d', strtotime('- 40 year', $now));

                ?>
        <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label class="col-sm-3 control-label">id</label>
                            <div class="col-sm-2">
                                <input type="text" name="id" class="form-control" placeholder="id" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">NamaBarang</label>
                            <div class="col-sm-4">
                                  <input type="text" name="NamaBarang" class="form-control" placeholder="NamaBarang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">SupkierBarang</label>
                            <div class="col-sm-4">
                                  <input type="text" name="SuplierBarang" class="form-control" placeholder="SuplierBarang" required>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label">JumlahBarang</label>
                            <div class="col-sm-4">
                                  <input type="text" name="JumlahBarang" class="form-control" placeholder="JumlahBarang" required>
                            </div>
                        </div>
             <?php
                          if($rows['JumlahBarang'] == 'Proses'){
                    ?>
                        <span class="label label-success">Proses</span>
                    <?php }
                          else if ($rows['SuplierBarang'] == 'Selesai'){
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

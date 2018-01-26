<?php include "head.php"; ?>
          <h2>Data Bengkel &raquo; Edit Data</h2>
          <hr/>

        <?php
          $id = $_GET['id'];
          $sql = mysqli_query($koneksi, "SELECT * FROM data_bengkel WHERE id='$id'");
          if(mysqli_num_rows($sql) == 0){
                header("Location: index.php");
              }else{
                    $row = mysqli_fetch_assoc($sql);
              }
              if(isset($_POST['save'])){
                    $id              = $_POST['id'];
                    $nama_sparepart  = $_POST['nama_sparepart_sparepart'];
                    $jumlah          = $_POST['jumlah'];
                    $keterangan      = $_POST['keterangan'];

                    $update = mysqli_query($koneksi, "UPDATE data_bengkel SET id='$id', nama_sparepart='$nama_sparepart',  jumlah='$jumlah', keterangan='$keterangan', keterangan='$keterangan' WHERE id='$id'") or die(mysqli_error());
                    if($update){
                        header("Location: data_bengkel_edit.php?id=".$id."&pesan=sukses");
                      }else{
                          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Disimpan, silakan coba sekali lagi</div>';
                    }
                    }
                    if(isset($_GET['pesan']) == 'sukses'){
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Disimpan.</div>';
                    }

                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">id</label>
                        <div class="col-sm-2">
                          <input type="text" name="id" value="<?php echo $row ['id'];?>" class="form-control" placeholder="id" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">nama_sparepart</label>
                        <div class="col-sm-4">
                          <input type="text" name="nama_sparepart" value="<?php echo $row ['nama_sparepart'];?>" class="form-control" placeholder="nama_sparepart" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">jumlah</label>
                        <div class="col-sm-3">
                          <textarea name="jumlah" class="form-control" placeholder="jumlah"><?php echo $row ['jumlah'];?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">No keterangan</label>
                        <div class="col-sm-4">
                          <input type="text" name="no_keterangan" value="<?php echo $row['no_keterangan'];?>" class="form-control" placeholder="No keterangan" required>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">keterangan</label>
                          <div class="col-sm-2">
                                <select name="keterangan" class="form-control" required>
                                    <option value="">keterangan Terbaru</option>
                                    <option value="perbaikan">perbaikan</option>
                                    <option value="clear">clear</option>
                                </select>
                          </div>
                          <div class="col-sm-3">
                            <b>keterangan Sekarang</b><span class="label label-success"><?php echo $row['keterangan']; ?></span>
                          </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">keterangan</label>
                              <div class="col-sm-2">
                                    <select name="keterangan" class="form-control" required>
                                        <option value="">keterangan Terbaru</option>
                                        <option value="perbaikan">perbaikan</option>
                                        <option value="clear">clear</option>
                                    </select>
                              </div>
                          <div class="col-sm-3">
                            <b>keterangan Sekarang :</b><span class="label label-info"><?php echo $row['keterangan'];?></span>
                          </div>
                        </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">&nbsp;</label>
                          <div class="col-sm-6">
                                <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
                                <a href="data_bengkel_data.php" class="btn btn-sm btn-danger">Batal</a>
                          </div>
                      </div>
                    </form>
<?php include "foot.php"; ?>

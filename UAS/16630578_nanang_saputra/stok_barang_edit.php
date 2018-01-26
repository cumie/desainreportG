<?php include "head.php"; ?>
          <h2>Data  &raquo; Edit Data</h2>
          <hr/>

        <?php
          $kode = $_GET['kode'];
          $sql = mysqli_query($koneksi, "SELECT * FROM orderan WHERE kode='$kode'");
          if(mysqli_num_rows($sql) == 0){
                header("Location: index.php");
              }else{
                    $row = mysqli_fetch_assoc($sql);
              }
              if(isset($_POST['save'])){
                    $kode               = $_POST['kode'];
                    $nama               = $_POST['nama'];
                    $nama_sepatu        = $_POST['nama_sepatu'];
                    $harga              = $_POST['harga'];
                    $jumlah             = $_POST['jumlah'];
                    $no_telpon          = $_POST['no_telpon'];
                    $tanggal            = $_POST['tanggal'];

                    $update = mysqli_query($koneksi, "UPDATE orderan SET nama='$nama', nama_sepatu='$nama_sepatu', harga='$harga', jumlah='$jumlah', no_telpon='$no_telpon' WHERE kode='$kode'") or die(mysqli_error());
                    if($update){
                        header("Location: order_edit.php?kode=".$kode."&pesan=sukses");
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
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-4">
                          <input type="text" name="nama" value="<?php echo $row ['nama'];?>" class="form-control" placeholder="Nama" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Sepatu</label>
                        <div class="col-sm-4">
                          <input type="text" name="nama_sepatu" value="<?php echo $row ['nama_sepatu'];?>" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Harga</label>
                        <div class="col-sm-4">
                          <input type="text" name="harga" value="<?php echo $row ['harga'];?>" class="form-control" placeholder="Tanggal Lahir" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-4">
                          <input type="text" name="jumlah" value="<?php echo $row ['jumlah'];?>" class="form-control" placeholder="0" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">No Telpon</label>
                        <div class="col-sm-4">
                          <input type="text" name="no_telpon" value="<?php echo $row ['no_telpon'];?>" class="form-control" placeholder="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-4">
                          <input type="date" name="tanggal" value="<?php echo $row ['Tanggal'];?>" class="form-control" placeholder="" required>
                        </div>
                      </div>
                      <!--<div class="form-group">
                          <label class="col-sm-3 control-label">Jabatan</label>
                          <div class="col-sm-2">
                                <select name="jabatan" class="form-control" required>
                                    <option value="">Jabatan Terbaru</option>
                                    <option value="Operator">Operator</option>
                                    <option value="Leader">Leader</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Manager">Manager</option>
                                </select>
                          </div>
                          <div class="col-sm-3">
                            <b>Jabatan Sekarang</b><span class="label label-success"><?php echo $row['jabatan']; ?></span>
                          </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Status</label>
                              <div class="col-sm-2">
                                    <select name="status" class="form-control" required>
                                        <option value="">Status Terbaru</option>
                                        <option value="Outsourcing">Outsourcing</option>
                                        <option value="Kontrak">Kontrak</option>
                                        <option value="Tetap">Tetap</option>
                                    </select>
                              </div>
                          <div class="col-sm-3">
                            <b>Status Sekarang :</b><span class="label label-info"><?php echo $row['status'];?></span>
                          </div>
                        </div>-->
                      <div class="form-group">
                          <label class="col-sm-3 control-label">&nbsp;</label>
                          <div class="col-sm-6">
                                <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
                                <a href="order_data.php" class="btn btn-sm btn-danger">Batal</a>
                          </div>
                      </div>
                    </form>
<?php include "foot.php"; ?>

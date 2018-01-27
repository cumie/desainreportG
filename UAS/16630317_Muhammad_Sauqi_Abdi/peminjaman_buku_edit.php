<?php include "head.php"; ?>
          <h2>Data Peminjam Buku &raquo; Edit Data</h2>
          <hr/>

        <?php
          $kode = $_GET['kode'];
          $sql = mysqli_query($koneksi, "SELECT * FROM peminjaman_buku WHERE kode='$kode'");
          if(mysqli_num_rows($sql) == 0){
                header("Location: index.php");
              }else{
                    $row = mysqli_fetch_assoc($sql);
              }
              if(isset($_POST['save'])){
                    $kode               = $_POST['kode'];
                    $npm                = $_POST['npm'];
                    $nama_peminjam      = $_POST['nama_peminjam'];
                    $nama_buku          = $_POST['nama_buku'];
                    $jumlah             = $_POST['jumlah'];
                    $tanggal            = $_POST['tanggal'];

                    $update = mysqli_query($koneksi, "UPDATE peminjaman_buku SET npm='$npm', nama_peminjam='$nama_peminjam', nama_buku='$nama_buku', jumlah='$jumlah', tanggal='$tanggal', WHERE kode='$kode'") or die(mysqli_error());
                    if($update){
                        header("Location: peminjaman_buku_edit.php?kode=".$kode."&pesan=sukses");
                      }else{
                          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Disimpan, silakan coba sekali lagi</div>';
                    }
                    }
                    if(isset($_GET['peminjaman']) == 'berhasil'){
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
                        <label class="col-sm-3 control-label">Npm</label>
                        <div class="col-sm-4">
                          <input type="text" name="npm" value="<?php echo $row ['npm'];?>" class="form-control" placeholder="Npm" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Peminjam</label>
                        <div class="col-sm-4">
                          <input type="text" name="nama_peminjam" value="<?php echo $row ['nama_peminjam'];?>" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Harga</label>
                        <div class="col-sm-4">
                          <input type="text" name="nama_buku" value="<?php echo $row ['nama_buku'];?>" class="form-control" placeholder="Tanggal Lahir" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-4">
                          <input type="text" name="jumlah" value="<?php echo $row ['jumlah'];?>" class="form-control" placeholder="0" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-4">
                          <input type="date" name="tanggal" value="<?php echo $row ['Tanggal'];?>" class="form-control" placeholder="" required>
                        </div>
                      </div>
                       
                      <div class="form-group">
                          <label class="col-sm-3 control-label">&nbsp;</label>
                          <div class="col-sm-6">
                                <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
                                <a href="peminjaman_buku_data.php" class="btn btn-sm btn-danger">Batal</a>
                          </div>
                      </div>
                    </form>
<?php include "foot.php"; ?>

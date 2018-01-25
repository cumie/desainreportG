<?php include "head.php"; ?>
            <h2>Data barang &raquo; Tambah Data</h2>
            <hr/>

            <?php
            if (isset($_POST['add'])){
                  $nama                = $_POST['nama'];
                  $jenis               = $_POST['jenis'];
                  $warna               = $_POST['warna'];
                  $size                = $_POST['size'];
                  $harga               = $_POST['harga'];

                  $cek = mysqli_query($koneksi, "SELECT * FROM brg_yg_bisa_diicicil WHERE nama='$nama'");
                  if(mysqli_num_rows($cek) == 0){

                          $insert = mysqli_query($koneksi, "INSERT INTO barang(nama, jenis, warna, size, harga)
                                                      VALUES('$nama','$jenis','$warna','$size','$harga')") or die(mysqli_error($koneksi));
                    if($insert){
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data barang Berhasil Di Simpan.</div>';
                    }else {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data barang Gagal Di Simpan !</div>';
                    }
                    }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>nama Sudah Ada..!</div>';
                    }
                }
                    $now = strtotime(date("Y-m-d"));
                    $maxage = date('Y-m-d', strtotime('- 16 year', $now));
                    $minage = date('Y-m-d', strtotime('- 40 year', $now));

                ?>
				<form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label class="col-sm-3 control-label">nama</label>
                            <div class="col-sm-2">
                                <input type="text" name="nama" class="form-control" placeholder="nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">jenis</label>
                            <div class="col-sm-4">
                                  <input type="text" name="jenis" class="form-control" placeholder="jenis" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">warna</label>
                            <div class="col-sm-4">
                                  <input type="text" name="warna" class="form-control" placeholder="warna" required>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label">size</label>
                            <div class="col-sm-4">
                                  <input type="text" name="size" class="form-control" placeholder="size" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">harga</label>
                            <div class="col-sm-3">
                                  <textarea type="text" name="harga" class="form-control" placeholder="harga"></textarea>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-sm-3 control-label">&nbsp;</label>
                            <div class="col-sm-6">
                                  <input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
                                  <a href="index.php" class="btn btn-sm btn-danger">Batal</a>
                            </div>
                        </div>
                  </form>

<?php include "foot.php"; ?>

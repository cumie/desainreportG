<?php include "head.php"; ?>
            <h2>Data Sepatu Order &raquo; Tambah Data</h2>
            <hr/>

            <?php
            if (isset($_POST['add'])){
                  $kode                = $_POST['kode'];
                  $nama               = $_POST['nama'];
                  $tempat_lahir       = $_POST['tempat_lahir'];
                  $tanggal_lahir      = $_POST['tanggal_lahir'];
                  $alamat             = $_POST['alamat'];
                  $no_telpon          = $_POST['no_telpon'];
                  $jabatan            = $_POST['jabatan'];
                  $status             = $_POST['status'];

                  $cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE kode='$kode'");
                  if(mysqli_num_rows($cek) == 0){

                          $insert = mysqli_query($koneksi, "INSERT INTO karyawan(kode, nama, tempat_lahir, tanggal_lahir,no_telpon, jabatan, status)
                                                      VALUES('$kode','$nama', '$tempat_lahir','$tanggal_lahir', '$no_telpon','$jabatan','$status')") or die(mysqli_error($koneksi));
                    if($insert){
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Karyawan Berhasil Di Simpan.</div>';
                    }else {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Sepatu Order Gagal Di Simpan !</div>';
                    }
                    }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Kode Sudah Ada..!</div>';
                    }
                }
                    $now = strtotime(date("Y-m-d"));
                    $maxage = date('Y-m-d', strtotime('- 16 year', $now));
                    $minage = date('Y-m-d', strtotime('- 40 year', $now));

                ?>
				<form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label class="col-sm-3 control-label">Kode</label>
                            <div class="col-sm-2">
                                <input type="text" name="kode" class="form-control" placeholder="Kode" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-4">
                                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Sepatu</label>
                            <div class="col-sm-4">
                                  <input type="text" name="nama_sepatu" class="form-control" placeholder="Nama_sepatu" required>
                            </div>
                        </div>
                        <div class="from-group">
                            <label class="col-sm-3 control-label">Harga</label>
                             <div class="col-sm-4">
                                  <input type="text" name="harga" class="form-control" placeholder="Harga" required>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-3">
                                  <textarea type="text" name="alamat" class="form-control" placeholder="Alamat"></textarea>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No Telpon</label>
                            <div class="col-sm-3">
                                  <input type="text" name="no_telpon" class="form-control" placeholder="No Telpon" required>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-2">
                                  <select name="jabatan" class="form-control" required>
                                      <option value="">------</option>
                                      <option value="Operator">Operator</option>
                                      <option value="Leader">Leader</option>
                                      <option value="Supervisor">Supervisor</option>
                                      <option value="Manager">Manager</option>
                                  </select>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2">
                                  <select name="status" class="form-control">
                                      <option value="">------</option>
                                      <option value="Outsourcing">Outsourcing</option>
                                      <option value="Kontrak">Kontrak</option>
                                      <option value="Tetap">Tetap</option>
                                   </select>
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

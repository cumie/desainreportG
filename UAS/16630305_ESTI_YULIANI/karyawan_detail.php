<?php include "head.php"; ?>
<link rel="stylesheet" type="text/css" href="style1.css">
              <h2>Data Karyawan &raquo; Biodata</h2>
              <hr/>

            <?php
              $nik = $_GET['nik'];
              $sql = mysqli_query($koneksi, "SELECT * FROM karyawan Where nik='$nik'");
                    if(mysqli_num_rows($sql) == 0){
                        header("location: index.php");
                        }else{
                              $row = mysqli_fetch_assoc($sql);
                        }
                    if(isset($_GET['aksi']) == 'delete'){
                        $nik = $_GET['nik'];
                        $cek = mysqli_query($koneksi, "DELETE * FROM karyawan WHERE nik='$nik'");
                            $delete = mysqli_query($koneksi, "DELETE FROM karyawan WHERE nik='$nik'");
                              if($delete){
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                                }else{
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                                }
                      }
              ?>
            <table class="table table-striped table-condensed">
              <tr>
                <th width="20%">NIK</th>
                <td><?php echo $row['nik']; ?></td>
              </tr>
              <tr>
                <th>Nama Karyawan</th>
                <td><?php echo $row['nama'] ?></td>
              </tr>
                <tr>
                  <th>Tempat & Tanggal Lahir</th>
                  <td><?php echo $row['tempat_lahir'].', '.$row['tanggal_lahir']; ?></td>
                </tr>
              <tr>
                <th>Alamat</th>
                <td><?php echo $row['alamat']; ?></td>
              </tr>
              <tr>
                <th>No Telpon</th>
                <td><?php echo $row['no_telepon']; ?></td>
              </tr>
              <tr>
                <th>Jabatan</th>
                <td><?php echo $row['jabatan']; ?></td>
              </tr>
              <tr>
                <th>Status</th>
                <td><?php echo $row['status']; ?></td>
              </tr>
            </table>
			</link>
        <a href="karyawan_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
        <a href="karyawan_edit.php?nik=<?php echo $row['nik']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Data </a>
        <a href="karyawan_data.php?aksi=delete&nik=<?php echo $row['nik']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin akan menghapus data <?php echo $row['nama'];?>')"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus Data </a>
<?php include "footer.php"; ?>

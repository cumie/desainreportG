<?php include "head.php"; ?>
<link rel="stylesheet" type="text/css" href="style1.css">
              <h2>Data Peserta Lomba Seni </h2>
              <hr/>

            <?php
              $no_urut = $_GET['no_urut'];
              $sql = mysqli_query($koneksi, "SELECT * FROM peserta_lomba Where no_urut='$no_urut'");
                    if(mysqli_num_rows($sql) == 0){
                        header("location: index.php");
                        }else{
                              $row = mysqli_fetch_assoc($sql);
                        }
                    if(isset($_GET['aksi']) == 'delete'){
                        $no_urut = $_GET['no_urut'];
                        $cek = mysqli_query($koneksi, "DELETE * FROM peserta_lomba WHERE no_urut='$no_urut'");
                            $delete = mysqli_query($koneksi, "DELETE FROM peserta_lomba WHERE no_urut='$no_urut'");
                              if($delete){
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                                }else{
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                                }
                      }
              ?>
            <table class="table table-striped table-condensed">
              <tr>
                <th width="20%">No urut</th>
                <td><?php echo $row['no_urut']; ?></td>
              </tr>
              <tr>
                <th>Nama Peserta</th>
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
                <th>Lomba yang diikuti</th>
                <td><?php echo $row['lomba_yang_diikuti']; ?></td>
              </tr>
              <tr>
                <th>Status</th>
                <td><?php echo $row['status']; ?></td>
              </tr>
            </table>
			</link>
        <a href="peserta_lomba_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
        <a href="peserta_lomba_edit.php?no_urut=<?php echo $row['no_urut']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Data </a>
        <a href="peserta_lomba_data.php?aksi=delete&no_urut=<?php echo $row['no_urut']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin akan menghapus data <?php echo $row['nama'];?>')"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus Data </a>
<?php include "footer.php"; ?>

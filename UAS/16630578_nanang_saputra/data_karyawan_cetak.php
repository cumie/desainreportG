<?php include "head.php"; ?>
              <h2>Laporan data Karyawan</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>id</th>
                      <th>nama karyawan</th>
                      <th>umur karyawann</th>
                      <th>no telp</th>
                      <th>status</th>
                      
                    
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_karyawan ORDER BY id ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$row['id'].'</td>
                                  <td>'.$row['nama_karyawan'].'</td>
                                  <td>'.$row['umur_karyawan'].'</td>
                                  <td>'.$row['no_telp'].'</td>
                                  <td>'.$row['status'].'</td>
                                  
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="ikonprinter.png" width="30px" onclick="window.print();">
                </p>
<?php include "foot.php"; ?>

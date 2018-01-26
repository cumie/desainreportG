<?php include "head.php"; ?>
              <h2>Laporan Karyawan</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>No</th>
                      <th>ID_Karyawan</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Jabatan</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_karyawan ORDER BY ID_Karyawan ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$no.'</td>
                                  <td>'.$row['ID_Karyawan'].'</td>
                                  <td>'.$row['Nama'].'</td>
                                  <td>'.$row['Alamat'].'</td>
                                  <td>'.$row['Jabatan'].'</td>
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="pop.jpg" width="100px" onclick="window.print();">
				  <p>Klik Minionnya</p>
<?php include "foot.php"; ?>

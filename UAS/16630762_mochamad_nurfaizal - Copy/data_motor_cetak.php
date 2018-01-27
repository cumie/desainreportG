<?php include "head.php"; ?>
              <h2>Laporan data Motor</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>id</th>
                      <th>Jenis Motor</th>
                      <th>Nama Pemilik</th>
                      <th>Type Custom</th>
                      <th>Alamat</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_motor ORDER BY id ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$row['id'].'</td>
                                  <td>'.$row['jenis_motor'].'</td>
                                  <td>'.$row['nama_pemilik'].'</td>
                                  <td>'.$row['type_custom'].'</td>
                                  <td>'.$row['alamat'].'</td>
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="ikonprinter.png" width="30px" onclick="window.print();">
                </p>
<?php include "foot.php"; ?>

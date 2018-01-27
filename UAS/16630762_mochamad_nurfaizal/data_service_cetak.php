<?php include "head.php"; ?>
              <h2>Laporan Data Service</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Nama</th>
                      <th>Jenis Motor</th>
                      <th>Jenis Custom</th>
                      <th>Keterangan</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_service ORDER BY nama ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$row['nama'].'</td>
                                  <td>'.$row['jenis_motor'].'</td>
                                  <td>'.$row['jenis_custom'].'</td>
                                  <td>'.$row['keterangan'].'</td>
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="ikonprinter.png" width="30px" onclick="window.print();">
                </p>
<?php include "foot.php"; ?>

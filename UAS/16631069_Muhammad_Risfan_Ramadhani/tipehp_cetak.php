<?php include "head.php"; ?>
              <h2>Laporan Tipe Data Handphone</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>TipeHP</th>
                      <th>NamaPemilik</th>
                      <th>IMEI</th>
                      <th>KodeBarang</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_tipe_handphone ORDER BY TipeHP ASC");
                        $TipeHP = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$row['TipeHP'].'</td>
                                  <td>'.$row['NamaPemilik'].'</td>
                                  <td>'.$row['IMEI'].'</td>
                                  <td>'.$row['KodeBarang'].'</td>
                                </tr>
                                ';
                                $TipeHP++;
                                }?>
                  </table>
              </div>
                  <img src="pop.jpg" width="100px" onclick="window.print();">
				  <p>Klik disini</p>
<?php include "foot.php"; ?>

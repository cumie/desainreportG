
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                             DATA ANGGOTA
                        </div>
                        <div class="panel-body">
                        <a href="?page=anggota&aksi=tambah" class="btn btn-md btn-primary"  style="margin-bottom:10px"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</a>
                        <a href="./laporan/laporan_anggota_excel.php" target="_blank" class="btn btn-md btn-success" style="margin-bottom:10px"><span class="glyphicon glyphicon-save"></span> ExportToExcel</a>
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Program Studi</th>
                                            <th>Operasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
										error_reporting(0);
											$no=1;
										
											$sql = $koneksi->query("SELECT*FROM tb_anggota");
											
											while ($data = $sql->fetch_assoc())
											{
												$jk = ($data['jk'] == l)?"Laki-Laki":"Perempuan";
												?>
                                    	<tr>
                                        	<td><?php echo $no++; ?></td>
                                        	<td><a href="?page=anggota&aksi=detail&nim=<?php echo $data['nim'];?>"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo $data['nama']; ?></a></td>
                                            <td><?php echo $data['tempat_lahir']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $jk; ?></td> 
                                            <td><?php echo strtoupper($data['prodi']); ?></td>
                                           
                                          <td>
												<a href="?page=anggota&aksi=ubah&nim=<?php echo $data['nim'];?>"><span class="btn btn-warning glyphicon glyphicon-edit"></span></a>
                                                <a onClick="return confirm('Apakah Anda Yakin akan menghapus anggota dengan nama <?php echo $data['nama']; ?> ??')" href="?page=anggota&aksi=hapus&nim=<?php echo $data['nim'];?>"><span class="btn btn-danger glyphicon glyphicon-trash"></span></a>
                                          </td>
                                        </tr>
                                        <?php } ?></tbody>
                                </table>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
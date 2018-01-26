
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             DATA BUKU
                        </div>
                        <div class="panel-body">
                        <a href="?page=buku&aksi=tambah" class="btn btn-md btn-primary" style="margin-bottom:8px"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
                                            <th>Jumlah</th>
                                            <th>Operasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											
											$no = 1;
										
											$sql = $koneksi->query("SELECT*FROM tb_buku");
											
											while ($data = $sql->fetch_assoc())
											{
												?>
                                    	<tr>
                                        	<td><?php echo $no++; ?></td>
                                        	<td><a href="?page=buku&aksi=detail&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;<?php echo $data['judul']; ?></a></td>
                                            <td><?php echo $data['pengarang']; ?></td>
                                            <td><?php echo $data['penerbit']; ?></td>
                                            <td><?php echo $data['isbn']; ?></td> 
                                            <td><?php echo $data['jumlah_buku']; ?></td>
                                           
                                          <td>
												<a href="?page=buku&aksi=ubah&id=<?php echo $data['id'];?>"><span class="btn btn-warning glyphicon glyphicon-edit"></span></a>
                                                <a onClick="return confirm('Apakah Anda Yakin akan menghapus data buku <?php echo $data['judul']; ?> ??')" href="?page=buku&aksi=hapus&id=<?php echo $data['id'];?>"><span class="btn btn-danger glyphicon glyphicon-trash"></span></a>
                                          </td>
                                        </tr>
                                        <?php } ?></tbody>
                                </table>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
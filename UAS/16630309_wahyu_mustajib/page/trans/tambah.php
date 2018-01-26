<?php 

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

?>
<?php

$tgl_pinjam = date("d-m-Y");
$tujuh_hari = mktime(0,0,0, date("m"),date("j")+7, date("Y"));
$kembali = date("d-m-Y", $tujuh_hari);
?>
<div class="panel panel-primary">
                        <div class="panel-heading">
                           .:: Peminjaman Buku ::.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                
                                    <form method="post">
                                    						              
                               
    <?php    
    // Koneksi  
	mysql_connect("localhost","root","");    
    mysql_select_db("db_perpustakaan");	
    $result = mysql_query("select * from tb_buku");  
    $jsArray = "var prdName = new Array();\n";  
    echo '<div class="form-group">';
	echo '<label class="col-sm-3 control-label">Id Buku</label>';
	echo '<div class="col-sm-9">';
	echo '<select style="margin-bottom:5px" class="form-control" name="id" onchange="document.getElementById(\'judul\').value = prdName[this.value]">';  
    echo '<option>- PILIH -</option>';  
    while ($row = mysql_fetch_array($result)) {  
        echo '<option value="' . $row['id'] . '">' . $row['id'] . '</option>';  
        $jsArray .= "prdName['" . $row['id'] . "'] = '" . addslashes($row['judul']) . "';\n";  
    }  
    echo '</select>';  
	echo '</div>';
	echo '</div>';
    ?>  
      
    <div class="form-group">  
    <label class="col-sm-3 control-label">Judul Buku</label>
    <div class="col-sm-9">
    <input class="form-control" type="text" name="judul" id="judul" style="margin-bottom:5px" readonly>  
    </div>
    </div>
    <script type="text/javascript">  
    <?php echo $jsArray; ?>  
    </script>
    
    <?php    
    // Koneksi  
    mysql_connect("localhost","root","");    
    mysql_select_db("db_perpustakaan");    
    $result = mysql_query("select * from tb_anggota");  
    $jsArray2 = "var prdagt = new Array();\n";  
    echo '<div class="form-group">';
	echo '<label class="col-sm-3 control-label">NIM</label>';
	echo '<div class="col-sm-9">';
	echo '<select style="margin-bottom:5px" class="form-control" name="nim" onchange="document.getElementById(\'nama\').value = prdagt[this.value]">';  
    echo '<option>- PILIH -</option>';  
    while ($row = mysql_fetch_array($result)) {  
        echo '<option value="' . $row['nim'] . '">' . $row['nim'] . '</option>';  
        $jsArray2 .= "prdagt['" . $row['nim'] . "'] = '" . addslashes($row['nama']) . "';\n";  
    }  
    echo '</select>';  
	echo '</div>';
	echo '</div>';
    ?>  
      
    <div class="form-group">  
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-9">
    <input class="form-control" type="text" name="nama" id="nama" style="margin-bottom:5px" readonly>  
    </div>
    </div>
    <script type="text/javascript">  
    <?php echo $jsArray2; ?>  
    </script>
    
        
                              
                                        <div class="form-group">
        									<label class="col-sm-3 control-label" id="tgl">Tanggal Pinjam</label>
								            <div class="col-sm-9">
            								<input type="text" name="tgl_pinjam" class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" required style="margin-bottom:5px;" readonly value="<?php echo $tgl_pinjam; ?>">
            								</div>
								        </div>
                                        
                                         <div class="form-group">
        									<label class="col-sm-3 control-label" id="tgl">Tanggal Kembali</label>
								            <div class="col-sm-9">
            								<input type="text" name="tgl_kembali" class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" required style="margin-bottom:5px;" readonly value="<?php echo $kembali; ?>">
            								</div>
                                            
								        </div>
                                    
                                        <div>
                                        <center>
                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                            <a href="?page=trans" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-remove"></span> Batal</a>
                                        </center>
                                        </div>
                                    </form>
                                  
                                </div>
                                
                             </div>
                         </div>
</div>

<?php
	if(isset($_POST['simpan'])){
		$tgl_pinjam = $_POST['tgl_pinjam'];
		$tgl_kembali= $_POST['tgl_kembali'];
	
		$id			= $_POST['id'];
		$judul		= $_POST['judul'];
		
		$nim		= $_POST['nim'];
		$nama		= $_POST['nama'];
		
		$pinjam		= 'Pinjam';
		$no_trans	= 1001;
		$sql	= $koneksi->query("SELECT * FROM tb_buku WHERE judul ='$judul'");

		while($data = $sql->fetch_assoc()){
			$sisa = $data['jumlah_buku'];
			if ($sisa == 0){
				?>
                <script>
					alert("Jumlah Buku Kosong !!!, Lakukan penginputan Buku Baru");
					window.location.href="?page=trans&aksi=tambah";
				</script>
                <?php
				}else{
					$sql = $koneksi->query("INSERT INTO tb_transaksi (id,judul,nim,nama,tgl_pinjam,tgl_kembali,status) VALUES ('$id','$judul','$nim','$nama','$tgl_pinjam','$tgl_kembali','$pinjam')");
					$sql = $koneksi->query("UPDATE tb_transaksi SET status='Pinjam' WHERE nim='$nim'");
					$sql = $koneksi->query("UPDATE tb_buku SET jumlah_buku=(jumlah_buku-1) WHERE judul='$judul'");
					if($sql){
						?>
                        <script type="text/x-javascript">
							alert("Data BERHASIL Disimpan !!!");
							window.location.href="?page=trans";
						</script>
                        <?php
						}
                        
					}			
			}
		}
?>
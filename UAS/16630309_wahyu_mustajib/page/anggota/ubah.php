<?php
	$nim	= $_GET['nim'];
	$sql 	= $koneksi -> query("SELECT*FROM tb_anggota WHERE nim='$nim'");
	$tampil = $sql -> fetch_assoc();
	$jk1		= $tampil['jk'];
?>
<div class="panel panel-primary">
                        <div class="panel-heading">
                            Ubah Data Anggota</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form method="post">
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">NIM</label>
								            <div class="col-sm-9">
            								<input type="text" name="nim" class="form-control" value="<?php echo $tampil['nim']; ?>" readonly autocomplete="off" required style="margin-bottom:5px;" >
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Nama</label>
								            <div class="col-sm-9">
            								<input type="text" name="nama" class="form-control" value="<?php echo $tampil['nama']; ?>" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
            							<div class="form-group">
        									<label class="col-sm-3 control-label">Tempat Lahir</label>
								            <div class="col-sm-9">
            								<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tampil['tempat_lahir']; ?>" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Tanggal Lahir</label>
								            <div class="col-sm-9">
            								<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $tampil['tanggal_lahir']; ?>" autocomplete="off" required style="margin-bottom:5px;">	
            								</div>
								        </div>
                                       <div class="form-group">
        									<label class="col-sm-3 control-label">Alamat</label>
								            <div class="col-sm-9">
            								<textarea name="alamat"  class="form-control" placeholder="Alamat" style="margin-bottom:5px;"><?php echo $tampil['alamat']; ?></textarea>
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Jenis Kelamin</label>
								            <div class="col-sm-9">
            								<label>
            <input type="radio" name="jk" id="optionsRadios1" value="l" style="margin-bottom:5px;" <?php if ($jk1 == 'l') echo "checked";?> />Laki-Laki
                                                </label>
                                                <label>
            <input type="radio" name="jk" id="optionsRadios1" value="p" style="margin-bottom:5px;" <?php if ($jk1 == 'p') echo "checked";?> />Perempuan
                                                </label>
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Prodi</label>
								            <div class="col-sm-9">
            								<input type="text" name="prodi" class="form-control" value="<?php echo $tampil['prodi']; ?>" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        
                                        <div>
                                        <center>
                                        	<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                                            <a href="?page=anggota" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-remove"></span> Batal</a>
                                        </center>
                                        </div>
                                       
                                    </form>
                                </div>
                                
                             </div>
                         </div>
</div>
<?php 

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

?>
<?php

	$nama	 		= $_POST['nama'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$alamat			= $_POST['alamat'];
	$jk				= $_POST['jk'];
	$prodi			= $_POST['prodi'];
	
	$simpan		= $_POST['simpan'];
	
	if ($simpan){
		$sql = $koneksi->query("UPDATE tb_anggota SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', jk='$jk', prodi='$prodi' WHERE nim='$nim'");
		if($sql){
			?>
            	<script type="text/javascript">
					alert("Data Berhasil Diubah");
					window.location.href="?page=anggota";
				</script>
			<?php
			}
		}
?>
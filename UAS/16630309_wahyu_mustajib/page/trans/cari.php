ini halaman cari data
<?php
	mysqli_connect("localhost","root","");
	mysqli_select_db("db_perpustakaan");
	
	$q = strtolower($_GET["q"]);
	if(!$q) return;
	
	$sql = mysqli_query("SELECT*FROM tb_buku where judul LIKE '%$q%'");
	while($r = mysqli_fetch_array($sql)){
		$judul = $r['judul'];
		echo "$judul";
		}
?>
<div class="panel panel-primary">
	<div class="panel-heading">
    Pencarian Data
    </div>
    <div class="panel-body">
    <div class="row">
	<div class="form-group">  
    	<label class="col-sm-3 control-label">Judul Buku</label>
 		<div class="col-sm-9">
    		<input class="form-control" type="text" name="judul" id="judul" style="margin-bottom:5px">  
 		</div>
	</div>
    </div>
    </div>
 </div>


<?php
include ('head.php');
?>
              <h2>Data Barang &raquo; Keterangan Kode </h2>
              <hr/>
<b>Misal : A1VN01<br /></b>

<div class="col-sm-3">
<b>A  = kode asal barang <br /></b>
<table class="table table-striped table-hover">
<?php $no=1; ?>

      <tr>
        <th>no</th>
        <th>Kode</th>
        <th>Asal Barang</th>
      </tr>     
	  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>A</td>
        <td>Indonesia</td>
      </tr>	 
 <?php $no++; ?>	  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>B</td>
        <td>Vietnam</td>
      </tr>	  
	  <tr>
 <?php $no++; ?>
        <td><?php echo $no; ?></td>
        <td>D</td>
        <td>Japan</td>
      </tr>
 <?php $no++; ?>		  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>E</td>
        <td>China</td>
      </tr>
	  	  <tr>
	  <td>etc..</td>
	  <td></td>
	  <td></td>
	  </tr>
<?php $no++; ?>
    
      </table>
	  </div>
	  
<div class="col-sm-3">
<b>1  = kode/no urut barang sesuai asal <br /></b>
<table class="table table-striped table-hover">
<?php $no=1; ?>

      <tr>
        <th>no</th>
        <th>Kode</th>
        <th>Size</th>
      </tr>     
	  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>1</td>
        <td>barang ke-1</td>
      </tr>	 
 <?php $no++; ?>	  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>2</td>
        <td>barang ke-2</td>
      </tr>
 <?php $no++; ?>		  
	  <tr>
        <td><?php echo $no; ?></td>
		<td>3</td>
        <td>barang ke-3</td>
      </tr> 
<?php $no++; ?>		  
	  <tr>
        <td><?php echo $no; ?></td>
		<td>4</td>
        <td>barang ke-4</td>
      </tr>
	  <tr>
	  <td>etc..</td>
	  <td></td>
	  <td></td>
	  </tr>
<?php $no++; ?>
    
      </table>
	  </div>
	  	  
<div class="col-sm-3">
<b>VN = kode merk barang <br /></b>
<table class="table table-striped table-hover">
<?php $no=1; ?>

      <tr>
        <th>no</th>
        <th>Kode</th>
        <th>Merk</th>
      </tr>     
	  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>VN</td>
        <td>Vans</td>
      </tr>	 
 <?php $no++; ?>	  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>AD</td>
        <td>Adidas</td>
      </tr>
 <?php $no++; ?>		  
	  <tr>
        <td><?php echo $no; ?></td>
		<td>NK</td>
        <td>Nike</td>
      </tr>
 <?php $no++; ?>	  
	  <tr>
	  <td><?php echo $no; ?></td>
	  <td>AS</td>
	  <td>Asics</td>
	  </tr>
	  	  <tr>
	  <td>etc..</td>
	  <td></td>
	  <td></td>
	  </tr>
<?php $no++; ?>
    
      </table>
	  </div>
	  
<div class="col-sm-3">
<b>01 = kode size  <br /></b>
<table class="table table-striped table-hover">
<?php $no=1; ?>

      <tr>
        <th>no</th>
        <th>Kode</th>
        <th>Size</th>
      </tr>     
	  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>01</td>
        <td>36</td>
      </tr>	 
 <?php $no++; ?>	  
	  <tr>
        <td><?php echo $no; ?></td>
        <td>02</td>
        <td>37</td>
      </tr>
 <?php $no++; ?>		  
	  <tr>
        <td><?php echo $no; ?></td>
		<td>03</td>
        <td>38</td>
      </tr>
	  <tr> 
<?php $no++; ?>		  
	  <tr>
        <td><?php echo $no; ?></td>
		<td>04</td>
        <td>39</td>
      </tr>
	  <tr>
	  <td>etc..</td>
	  <td></td>
	  <td></td>
	  </tr>
<?php $no++; ?>
    
      </table>
	  </div>
	  
<a href="barang_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
<?php
include ('foot.php');
?>
<?php include "footer.php"; ?>

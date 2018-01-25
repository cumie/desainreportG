<?php

include("../masterpages/header_admin.php");
include("../config/koneksi.php");

$sql = "select * from kontak ";

$exe = mysql_query($sql);
;?>
<div class="container">
<div id="content">
<br>
<div class="col-sm-12"  >
    <div class="col-sm-11"  ></div>
    <div class="col-sm-1"  >
      <right>
    <a href="kontak_ubah.php"><button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span> Ubah</button></a>
    </right>  
    </div>
    
    </div>
</div>
    
        <?php
        while($list = mysql_fetch_array($exe)) {
        ?>
        <tbody>
        <h2 style="color: black;"><td>Kontak Kami</td></h2>
        
        <div align="justify"><td><?php echo $list['isi']; ?></td></div>
        <br>
            
        <br>    
        </tbody>
        <?php
        }
        ?>
</div>
</div>
<?php
include("../masterpages/footer.php");
?>
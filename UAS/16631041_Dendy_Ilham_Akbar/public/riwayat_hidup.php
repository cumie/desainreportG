<?php

include("../masterpages/header.php");
include("../config/koneksi.php");

$sql = "select isi from riwayat";

$exe = mysql_query($sql);
;?>
<div class="container">
<div id="content">
        <?php
        while($list = mysql_fetch_array($exe)) {
        ?>
        <tbody>
        <center><h2 style="color: black;"><td>Daftar Riwayat Hidup Admin</td></h2></center>
        
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
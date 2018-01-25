<?php

include("../masterpages/header.php");
include("../config/koneksi.php");

$sql = "select isi from tentang_kami";

$exe = mysql_query($sql);
;?>
<div class="container">
<div id="content">
        <?php
        while($list = mysql_fetch_array($exe)) {
        ?>
        <tbody>
        <h2 style="color: black;"><td>Profil</td></h2>    
        
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
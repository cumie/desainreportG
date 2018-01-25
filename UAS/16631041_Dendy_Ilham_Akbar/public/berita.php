<?php

include("../masterpages/header.php");
include("../config/koneksi.php");
$sql = "select * from berita order by id_berita desc";
$exe = mysql_query($sql);
;?>
<div class="container">
<div id="content">

<?php
while($list = mysql_fetch_array($exe)) {
?>
<hr>
<h2 style="color: black;"><td><?php echo $list['judul_berita']; ?></td></h2>    
<div align="justify"><td><?php echo substr( $list['isi'],0,450); ?><a href="berita_utama.php?id=<?php echo $list[0]; ?>">... Baca Selengkapnya</a></td></div>

<?php
}
?>
<hr>
</div>
</div>

<?php
include("../masterpages/footer.php");
?>
<!-- isi -->
<?php
include("../masterpages/header.php");
include("../config/koneksi.php");

?>
<style>
    div{width: auto;
        height: auto;
        padding-right:  20px;
        text-align: justify;
    }
    .satu {border-right: 2px solid green;}
</style>
<div class="container">
        <div class="col-sm-12">
    
            <div class="col-sm-9 text-left">
            <div class="satu">
               <?php
                $sql = "select * from berita where kategori='software' limit 1";
                $exe = mysql_query($sql);
                while($list = mysql_fetch_array($exe)) {
                ?>
                <h2 style="color: black;"><td><?php echo $list['judul_berita']?></td></h2>
                <div align="justify"><td><?php echo substr( $list['isi'],0,250); ?>
                <a href="software_read.php?id=<?php echo $list[0]; ?>">... Baca Selengkapnya</a></td></div>
                <hr>
             <?php }?>
            </div>
            </div>
            <div class="col-sm-3 ">
            <h3>Artikel Utama</h3><br>
            
                <br>    
                 <?php
                $sql = "select * from berita where kategori='software' order by rand() limit 10";
                $exe = mysql_query($sql);
                while($list = mysql_fetch_array($exe)) {
                ?>
                <tbody>
                    <ul><font color="red" align="left">
                    <li><a href="software_read.php?id=<?php echo $list[0]; ?>">
                    <?php echo $list['judul_berita']?></a></li></font>
                    </ul>
                </tbody>
                   <?php };?> 
            </div>
        </div>
    </div>

</div>
<?php
include("../masterpages/footer.php");
?>
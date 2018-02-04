<?php 

require_once"core/init.php";



if (!$_SESSION['user']) {
    header('location:../login.php');
}


$data=data_blok();
$jumlah=mysqli_num_rows($data);

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<center>
<body>
<script type="text/javascript">
    window.print();
</script>


                <h2 align="center"> LAPORAN DATA BLOK PERUMAHAN </h2>
                
                    
                        <table align="center" border="">
                        <tr>
                            <th colspan="2"><?= "jumlah data blok = ".$jumlah; ?></th>
                        </tr>
                            <tr>
                                <th>NO</th>
                                <th>BLOK</th>
                            </tr>
                        <?php $no=1; ?>
                        <?php while ($row=mysqli_fetch_assoc($data)) {
                            
                         ?>
                            <tr>
                                <td width="50px"><?= $no; ?></td>
                                <td width="100px"><?= $row['blok']; ?>&nbsp;</td>
                            </tr>
                        <?php $no++; } ?>
                        </table>


</body>
</center>
</html>






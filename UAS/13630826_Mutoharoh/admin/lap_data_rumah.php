<?php 

require_once"core/init.php";



if (!$_SESSION['user']) {
    header('location:../login.php');
}

 

if (isset($_GET['blok'])) {
    $blok=$_GET['blok'];
    $data=lap_data_rumah($blok);

        if (!$blok) {
            $data=data_rumah();
        }
}

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


                <h2 align="center"> LAPORAN DATA PERUMAHAN </h2>
                
                    
                        <table class="table" align="center" border="1">
                        <tr>
                            <th colspan="7" align="left">
                                TOTAL DATA :  <?= $jumlah; ?>
                                    
                            </th>
                        </tr>
                            <tr>
                                <th>NO</th>
                                <th>TIPE</th>
                                <th>NO KAVLING</th>
                                <th>UKURAN</th>
                                <th>HARGA</th>
                                <th>BLOK</th>
                                <th>UANG MUKA</th>
                            </tr>
                        <?php $no=1; ?>
                        <?php while ($row=mysqli_fetch_assoc($data)) {
                            
                         ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['tipe']; ?></td>
                                <td><?= $row['no_kav']; ?></td>
                                <td><?= $row['ukuran']; ?></td>
                                <td><?= "Rp.".number_format($row['harga'],0,".",".") ?></td>
                                <td><?= $row['blok']; ?></td>
                                <td><?= "Rp.".number_format($row['uang_muka'],0,".","."); ?></td>
                            </tr>
                        <?php $no++; } ?>
                        </table>


</body>
</center>
</html>






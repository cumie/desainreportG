<?php 

    require_once"core/init.php";

    if (isset($_GET['submit'])) {
            $tgl_awal=$_GET['tgl_awal'];
            $tgl_akhir=$_GET['tgl_akhir'];

            $laporan=lap_data_order($tgl_awal,$tgl_akhir);
            $data=mysqli_num_rows($laporan);
            if ($data==false) {
                die('tidak ada laporan ditanggal tersebut...');
            }
        }    


?>
<!DOCTYPE html>
<html>
<head>
    <title>laporan data order</title>
</head>
<center>
<body>
<script type="text/javascript">
    window.print();
</script>


                <h2 align="center"> LAPORAN DATA ORDER </h2>
                <h4>dari tanggal <?= $tgl_awal ?> sampai tanggal <?= $tgl_akhir ?></h4>
                    
        <table class="table" align="center" border="1">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>TELEPON</th>
                                <th>TIPE</th>
                                <th>NO KAVLING</th>
                                <th>UKURAN</th>
                                <th>HARGA</th>
                                <th>BLOK</th>
                                <th>UANG_MUKA</th>
                                <th>TANGGAL ORDER</th>
                            </tr>
                        <?php $no=1; ?>
                        <?php while ($row=mysqli_fetch_assoc($laporan)) {
                            
                         ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['telepon']; ?></td>
                                <td><?= $row['tipe']; ?></td>
                                <td><?= $row['no_kav']; ?></td>
                                <td><?= $row['ukuran']; ?></td>
                                <td><?php $harga=$row['harga'];
                                    echo "Rp.".number_format($harga,0,".",".");
                                 ?></td>
                                <td><?= $row['blok']; ?></td>
                                <td><?= "Rp.".number_format($row['uang_muka'],0,".","."); ?></td>
                                <td><?= $row['tgl_order']; ?></td>
                            </tr>
                        <?php $no++; } ?>
                        </table>


</body>
</center>
</html>

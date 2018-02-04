<?php 

require_once"core/init.php";



if (!$_SESSION['user']) {
    header('location:../login.php');
}

 

$data=data_admin();
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


                <h2 align="center"> LAPORAN DATA ADMIN </h2>
                
                    
                        <table align="center" border="1">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>USERNAME</th>
                                <th>TELEPON</th>
                                <th>EMAIL</th>
                            </tr>
                        <?php $no=1; ?>
                        <?php while ($row=mysqli_fetch_assoc($data)) {
                            
                         ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['telepon']; ?></td>
                                <td><?= $row['email']; ?></td>
                            </tr>
                        <?php $no++; } ?>
                        </table>


</body>
</center>
</html>






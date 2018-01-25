	<!DOCTYPE html>
<html lang="en">
<head>
  <title>inkom.co.id</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/gen_validatorv4.js" type="text/javascript"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
  <script>
function Konfirmasikeluar()
{
if(confirm("Apakah Anda yakin akan keluar?"))
return true;
else
return false;
}
</script>
</head>
<body>
<div class="container">
<div class="col-sm-12"  style="background-color:blue; padding:15px;">
    <div class="col-sm-10"  style="background-color:blue;"></div>
    <div class="col-sm-2"  style="background-color:blue;">
        
    </div>
    
    </div>
</div>
<div class="container">
    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <center><img src="../image/uniska.jpg" alt="Chania" width="900" height="200"></center>
    </div>

    <div class="item">
      <center><img src="../image/22.jpg" alt="Chania" width="900" height="200"></center>
    </div>

    <div class="item">
      <center><img src="../image/32.jpg" alt="Flower" width="900" height="200"></center>
    </div>

    <div class="item">
      <center><img src="../image/42.jpg" alt="Flower" width="900" height="200"></center>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<nav class="navbar navbar-inverse">
    <style type="text/css">
    .navbar-inverse {
    background-color: blue;
    font-size:18px;
    }
    
    </style>
    
    
  <div class="container-fluid">
    
    
    <ul class="nav navbar-nav">
     <style type="text/css">
    .navbar-nav>li:hover {
    background-color: red;
    }
    </style> 
      
      <li><a href="../admin/beranda_admin.php"><font color="white"><span class="glyphicon glyphicon-home"></span> Beranda</font></a></li> 
      <li><a href="../admin/tentang_kami.php"><font color="white">Profil </font></a></li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <font color="white">Komputer</font>
        <span class="caret"></span></a>
        <ul class="dropdown-menu navbar-nav navbar-inverse " >
          <li><a href="../admin/hardware_admin.php"><font color="white">hardware</font></a></li>
          <li><a href="../admin/software_admin.php"><font color="white">Software</font></a></li>
           
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <font color="white">Sistem Operasi</font>
        <span class="caret"></span></a>
        <ul class="dropdown-menu navbar-nav navbar-inverse " >
          <li><a href="../admin/windows_admin.php"><font color="white">Windows </font></a></li>
          <li><a href="../admin/linux_admin.php"><font color="white">Linux </font></a></li>
           
        </ul>
      </li>
      <li><a href="../admin/riwayat_admin.php"><font color="white">Riwayat Hidup</font></a></li>
      <li><a href="../admin/kontak_admin.php"><font color="white">Kontak Kami </font></a></li>
      <li><a href="../admin/user.php"><font color="white">Manajemen User </font></a></li>
     
      <li><a href="../admin/logout_admin.php" onclick="return Konfirmasikeluar()"><font color="white">Logout </font></a></li>
    </ul>
    
  </div>
</nav>
</div>



</div>
</div>
</body>
</html>
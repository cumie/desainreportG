<?php include "head.php"; ?>

      <h2>Praktikum Pemrograman Web</h2>
    <hr />

    <div class="container">
    <p>Selamat Datang Praktikum Pemrograman Web dengan PHP </p>
  </div>
  <div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
       <div class="item active">
          <img src="img2.png" alt="img2">
          <div class="carousel-caption">
            <h3>Japstyle</h3>
            <p>Scorpio</p>
          </div>      
        </div>
        <div class="item">
          <img src="Caferacer.jpg" alt="img3">
          <div class="carousel-caption">
            <h3>Cafe Racer</h3>
            <p>Honda CB400</p>
          </div>      
        </div>
       <div class="item">
            <img src="img4.jpg" alt="img4">
            <div class="carousel-caption">
              <h3>Bratstyle</h3>
              <p>Scorpio</p>
            </div>      
          </div>
      </div> 
       <!--error
       <div class="item">
          <img src="minion2.jpg" alt="minion2">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
      </div>-->  


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
<?php include "foot.php"; ?>

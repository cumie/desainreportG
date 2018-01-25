<?php include "head.php"; ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:140px">
  <h5 class="w3-bar-item" onclick="openCity(event, 'My Profil')">My Profil</h5>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Biodata')">Biodata</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Skill')">Skill</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Aktifitas')">Aktifitas</button>
  <img src="ikan.jpg" height="130px">
</div>

<div style="margin-left:140px">
  <div class="w3-padding"><h3>Selamat Datang Di Web Saya</h3></div>


  <div id="Biodata" class="w3-container city" style="display:none">
    <table class="table table-striped ">
              <tr>
                <th>Nama</th>
                <td>muhammad abdan syakirin</td>
              </tr>
                <tr>
                  <th>Tempat & Tanggal Lahir</th>
                  <td>Tanjung, 26 Agustus 1997</td>
                </tr>
              <tr>
                <th>Alamat</th>
                <td>Jl.gemini no 5</td>
              </tr>
              <tr>
                <th>No Telpon</th>
                <td>08562923218</td>
              </tr>
              <tr>
                <th>Semester</th>
                <td>3</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>Lajang</td>
              </tr>
            </table>
  </div>

  <div id="Skill" class="w3-container city" style="display:none">
    <h2>Skill</h2>
    <p>guring</p> 
    <p>bisa tidur 20jam sehari.</p>
  </div>

  <div id="Aktifitas" class="w3-container city" style="display:none">
    <h2>Aktifitas</h2>
    <p>Aktifitasnya main game</p>
    <p>main game makan</p>
  </div>

</div>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-blue";
}
</script>

<?php include "foot.php"; ?>
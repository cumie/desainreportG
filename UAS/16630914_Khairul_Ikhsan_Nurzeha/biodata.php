<?php
include ('head.php');
?>

<h2>Biodata Saya </h2>
<p><img alt="foto profil" src="img/foto.jpg" height="192" width"100" border="5" /> </p>
<button class="accordion">Profil</button>

<div class="panel">
  <div class="table-responsive">
  <div class="content1">
<table class="table table-striped table-hover">
              <tr>
                <th width="40%">Nama</th>
                <td>&nbsp;:&nbsp;Khairul Ikhsan Nurzeha</td>
              </tr>
              <tr>
                <th>NPM</th>
                <td>&nbsp;:&nbsp;16.63.0914</td>
              </tr>
                <tr>
                  <th>Tempat & Tanggal Lahir</th>
                  <td>&nbsp;:&nbsp;Muara Teweh, 1997-12-31</td>
                </tr>
              <tr>
                <th>Alamat</th>
                <td>&nbsp;:&nbsp;Jl. Hercules No 24 Landasan Ulin Timur Banjarbaru</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>&nbsp;:&nbsp;khairulikhsannurzeha49@gmail.com</td>
              </tr>
              <tr>
                <th>No Telepon / Whatsapp</th>
                <td>&nbsp;:&nbsp;081347609486</td>
              </tr>
              <tr>
                <th>Line</th>
                <td>&nbsp;:&nbsp;ikhsan_nz</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>&nbsp;:&nbsp;Belum Menikah</td>
              </tr>
            </table>
          </div>
        </div>
</div>


<button class="accordion">Riwayat Pendidikan</button>
<div class="panel">
  <div class="table-responsive">
  <div class="content1">
<table class="table table-striped table-hover">
              <tr>
                <th width="40%">Sekolah Dasar</th>
                <td>SDN 8 Lanjas Muara Teweh</td>
                <td>(2004 - 2009)</td>
              </tr><tr>
                <th width="40%">Sekolah Dasar</th>
                <td>SDN Landasan Ulin Timur 4 Banjarbaru</td>
                <td>(2009 - 2010)</td>
              </tr>
              <tr>
                <th>SMP</th>
                <td>SMPN 4 Banjarbaru</td>
                <td>(2010 - 2013)</td>
              </tr>
                <tr>
                  <th>SMA</th>
                  <td>SMKS Komputer Mandiri Banjarbaru (Teknik Komputer dan Jaringan)</td>
                  <td>(2013 - 2016)</td>
                </tr>
              <tr>
                <th>S1</th>
                <td>Universitas Islam Kalimantan Muhammad Arsyad Al-Banjari Banjarmasin(Teknik Informatika)</td>
                <td>(2016 - sekarang)</td>
              </tr>
              
            </table>
          </div>
        </div>
</div>

<button class="accordion">Pekerjaan</button>
<div class="panel">
  <p>Masih Nyari hehehe...</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
   
 <!--   <div class="right">
     <center>
     <h2>Khairul Ikhsan Nurzeha</h2>
   <img alt="foto profil" src="img/foto.jpg" height="192" width"100" border="5" /></th> 
 </center>
  </div>
  <div class="left">
    <center><h2>Biodata</h2></center>
<table >
              <tr>
                <th width="40%">Nama</th>
                <td>&nbsp;:&nbsp;Khairul Ikhsan Nurzeha</td>
              </tr>
              <tr>
                <th>NPM</th>
                <td>&nbsp;:&nbsp;16.63.0914</td>
              </tr>
                <tr>
                  <th>Tempat & Tanggal Lahir</th>
                  <td>&nbsp;:&nbsp;Muara Teweh, 1997-12-31</td>
                </tr>
              <tr>
                <th>Alamat</th>
                <td>&nbsp;:&nbsp;Jl. Hercules No 24 Landasan Ulin Timur Banjarbaru</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>&nbsp;:&nbsp;khairulikhsannurzeha49@gmail.com</td>
              </tr>
              <tr>
                <th>No Telepon / Whatsapp</th>
                <td>&nbsp;:&nbsp;081347609486</td>
              </tr>
              <tr>
                <th>Line</th>
                <td>&nbsp;:&nbsp;ikhsan_nz</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>&nbsp;:&nbsp;Belum Menikah</td>
              </tr>
            </table>
</div>
-->
 
  </div>
  
</div>

  </div>
<?php include "foot.php"; ?>
<?php include "footer.php"; ?>
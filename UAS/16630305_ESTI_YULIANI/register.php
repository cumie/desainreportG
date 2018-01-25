<head>
<title>Pemrograman Web</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="container">
 <?php include('head.php'); ?>
 <?php include('index.php'); ?>  
  <div class="content">
    <h1>Register Teman Baru</h1>
    <p>Silahkan mengisi form data dibawah ini dengan benar....!</p>
    <form id="form1" name="form1" method="post" action="">
      <table width="95%" border="0" align="center" cellpadding="4" cellspacing="4">
        <tr>
          <td width="21%"><label for="nama">Nama</label></td>
          <td width="2%">:</td>
          <td width="77%"><input type="text" name="nama" id="nama" /></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>
            <label>
              <input type="radio" name="jk" value="Laki - laki" id="jk_0" />
              Laki - laki</label>
            <label>
              <input type="radio" name="jk" value="Perempuan" id="jk_1" />
              Perempuan</label>
            <br />
          </p></td>
        </tr>
        <tr>
          <td><label for="kelas">Kelas</label></td>
          <td>:</td>
          <td><select name="kelas" id="kelas">
            <option> --&gt; Pilih Kelas &lt;--</option>
            <option value="3A">3A</option>
            <option value="3B">3B</option>
            <option value="3C">3C</option>
            <option value="3D">3D</option>
            <option value="3E">3E</option>
            <option value="3F">3F</option>
            <option value="3G">3G</option>
            <option value="3H">3H</option>
            <option value="3I">3I</option>
            <option value="3J">3J</option>
            <option value="3K">3K</option>
          </select></td>
        </tr>
        <tr>
          <td valign="top"><label for="alamat">Alamat</label></td>
          <td valign="top">:</td>
          <td><textarea name="alamat" id="alamat" cols="40" rows="3"></textarea></td>
        </tr>
        <tr>
          <td>Hobi</td>
          <td>:</td>
          <td>
            <label>
              <input type="checkbox" name="hobi" value="Memasak" id="hobi_0" />
              Memasak</label>
            <label>
              <input type="checkbox" name="hobi" value="Memanah" id="hobi_1" />
              Memanah</label>
            <label>
              <input type="checkbox" name="hobi" value="Nonton" id="hobi_2" />
              Nonton</label>
            <label>
              <input type="checkbox" name="hobi" value="Memancing" id="hobi_3" />
              Memancing</label>
            <label>
              <input type="checkbox" name="hobi" value="Melunta" id="hobi_4" />
              Melunta</label>
            <label>
              <input type="checkbox" name="hobi" value="Membaca" id="hobi_5" />
              Membaca</label>
            <label>
              <input type="checkbox" name="hobi" value="Menulis" id="hobi_6" />
              Menulis</label>
            <label>
              <input type="checkbox" name="hobi" value="Balapan" id="hobi_7" />
              Balapan</label>
            <label>
              <input type="checkbox" name="hobi" value="Coding" id="hobi_8" />
              Coding</label>
            <label>
              <input type="checkbox" name="hobi" value="Sepak Bola" id="hobi_9" />
              Sepak Bola</label>
            <label>
              <input type="checkbox" name="hobi" value="Musik" id="hobi_10" />
              Musik</label>
            <label>
              <input type="checkbox" name="hobi" value="Belanja" id="hobi_11" />
              Belanja</label>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="simpan" id="simpan" value="SIMPAN" />
          <input type="reset" name="reset" id="reset" value="RESET" /></td>
        </tr>
      </table>
    </form>
    <p>&nbsp;</p>
    <!-- end .content --></div>
<?php include('footer.php'); ?>
  <!-- end .container --></div>
  </link>
  </link>
</body>
</html>
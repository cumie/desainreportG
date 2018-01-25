
 <?php include('head.php'); ?>
 <link rel="stylesheet" type="text/css" href="style1.css">
 
  <div  class="col-sm-12">
			
			<div class="well">
    <h1><strong>Mengenal dan Belajar Memulai Pemrograman Java</strong>    </h1>
    <p><strong><img src="img/Java-1-Introduction.png" width="740" height="205" /></strong></p>
    <p><strong>Java</strong> adalah <a href="https://id.wikipedia.org/wiki/Bahasa_pemrograman" title="Bahasa pemrograman">bahasa pemrograman</a> yang dapat dijalankan di berbagai <a href="https://id.wikipedia.org/wiki/Komputer" title="Komputer">komputer</a> termasuk <a href="https://id.wikipedia.org/wiki/Telepon_genggam" title="Telepon genggam">telepon genggam</a>. Bahasa ini awalnya dibuat oleh <a href="https://id.wikipedia.org/wiki/James_Gosling" title="James Gosling">James Gosling</a> saat masih bergabung di <a href="https://id.wikipedia.org/wiki/Sun_Microsystems" title="Sun Microsystems">Sun Microsystems</a> saat ini merupakan bagian dari <a href="https://id.wikipedia.org/wiki/Oracle" title="Oracle">Oracle</a> dan dirilis tahun <a href="https://id.wikipedia.org/wiki/1995" title="1995">1995</a>. Bahasa ini banyak mengadopsi sintaksis yang terdapat pada <a href="https://id.wikipedia.org/wiki/C_(bahasa_pemrograman)" title="C (bahasa pemrograman)">C</a> dan <a href="https://id.wikipedia.org/wiki/C%2B%2B" title="C++">C++</a> namun dengan sintaksis model objek yang lebih sederhana serta dukungan   rutin-rutin aras bawah yang minimal. Aplikasi-aplikasi berbasis java   umumnya dikompilasi ke dalam <a href="https://id.wikipedia.org/wiki/P-code" title="P-code">p-code</a> (<em>bytecode</em>) dan dapat dijalankan pada berbagai <a href="https://id.wikipedia.org/wiki/Mesin_virtual_java" title="Mesin virtual java">Mesin Virtual Java (JVM)</a>. Java merupakan bahasa pemrograman yang bersifat umum/non-spesifik (<em>general purpose</em>),   dan secara khusus didisain untuk memanfaatkan dependensi implementasi   seminimal mungkin. Karena fungsionalitasnya yang memungkinkan aplikasi   java mampu berjalan di beberapa platform <a href="https://id.wikipedia.org/wiki/Sistem_operasi" title="Sistem operasi">sistem operasi</a> yang berbeda, java dikenal pula dengan slogannya, &quot;<em>Tulis sekali, jalankan di mana pun</em>&quot;.   Saat ini java merupakan bahasa pemrograman yang paling populer   digunakan, dan secara luas dimanfaatkan dalam pengembangan berbagai   jenis perangkat lunak aplikasi ataupun aplikasi.</p>
<h2>Hello World</h2>
<p>Karena Java merupakan salah satu bahasa pemrograman yang berparadigma   berorientasi objek, Anda memang harus mulai membiasakan diri dengan   istilah - istilah seperti <em>inheritance</em>, <em>attribute</em>, <em>instantiation</em>, dan lainnya. Sekarang kita akan memulainya dengan membuat sebuah <em>file</em> yang bernama <strong>HelloWorld.java</strong>. Kemudian buat kode berikut di dalam <em>file</em> tersebut:</p>
<p><img src="img/3.png" width="708" height="126" /></p>
<p>Ada yang perlu Anda perhatikan dari kode diatas:</p>
<ul>
  <li><strong>public</strong> adalah sebuah <em>keyword</em> di Java yang menandakan bahwa objek, <em>method</em>, atau atribut dapat diakses dari <em>class</em> lain.</li>
  <li><strong>class</strong> adalah sebuah <em>keyword</em> di Java yang digunakan untuk membuat sebuah <em>class</em></li>
  <li><strong>static</strong> adalah sebuah <em>keyword</em> untuk membuat sebuah <em>method</em> tidak perlu diinstansiasi terlebih dahulu</li>
  <li><strong>void</strong> adalah sebuah <em>keyword</em>untuk membuat sebuah <em>method</em> tidak me-<em>return</em> nilai apapun alias kosong</li>
  <li><strong>System.out.println()</strong> adalah sebuah <em>method</em> yang telah di-<em>import</em> otomatis untuk digunakan mencetak <em>output</em> di konsol.</li>
  <li>Nama <em>class</em> dan nama <em>file</em> harus sama</li>
</ul>
<p>Sekarang mari kita jalankan program kecil tersebut dengan menggunakan perintah seperti berikut:</p>
<p><img src="img/1.png" width="709" height="67" /></p>
<h2>Mengenal tipe data dasar di Java</h2>
<p>Berurusan dengan tipe data untuk variabel, Java memiliki sangat   banyak tipe data yang dasar dan kompleks. Tipe data yang kompleks dapat   Anda temukan seperti ArrayList, HashMap, HashTable, Vector, Array, dan   lainnya. Untuk tipe data dasar, Anda dapat menggunakan <em>int</em>, <em>float</em>, <em>double</em>, <em>String</em>, <em>Boolean</em>, dan lainya. Untuk membuat sebuah <em>array</em> dari tipe data dasar, Anda dapat menggunakan tanda &quot;[]&quot; setelah mengetik tipe data yang Akan Anda gunakan.</p>
<p>Sekarang mari kita buat sebuah <em>file</em> dengan nama <strong>HelloVariabel.java</strong> dan buat kode berikut di dalam <em>file</em> tersebut:</p>
<p><img src="img/2.png" width="713" height="521" /></p>
<p>Ada beberapa hal yang perlu Anda telisik terlebih dahulu. Jangan sampai bagian ini terlewat yah:</p>
<ul>
  <li>Untuk mendeklarasikan sebuah variabel, Anda harus menulis terlebih   dahulu tipe data variabelnya, kemudian nama variabel, dan wajib   menginisialisasi variabel agar tidak <em>error</em></li>
  <li>Untuk membuat sebuah <em>array</em> Anda dapat menggunakan tanda &quot;[]&quot; setelah mengetik tipe data, kemudian nama variabel dan Anda harus memanggil <em>keyword</em> <strong>new</strong> untuk membuat sebuah <em>array</em></li>
  <li>Untuk menyambung <em>string</em> Anda dapat menggunakan tanda &quot;+&quot; untuk menyambung <em>string</em> dengan isi variabel</li>
  <li>Anda dapat menggunakan <em>keyword</em> <strong>instanceof</strong> untuk menyelidiki tipe data dari variabel</li>
  <li>Untuk mengakses <em>array</em> Anda dapat langsung mengakses indeksnya dengan angka yang dimulai dari 0</li>
</ul>
<p>Sekarang mari kita jalankan program kecil tersebut dengan menggunakan perintah seperti berikut:</p>
<p><img src="img/4.png" width="711" height="251" /></p>
<h2>Kondisional di Java</h2>
<p>Untuk membuat sebuah kondisional di Java, cukup mudah. Sintaksnya tidak jauh berbeda dengan PHP dan C. Silahkan buat <em>file</em> dengan nama <strong>HelloIf.java</strong> kemudian buat kode berikut:</p>
<p><img src="img/5.png" width="710" height="255" /></p>
<p>Sekarang mari kita jalankan program kecil tersebut:</p>
<p><img src="img/6.png" width="711" height="68" /></p>
<h2>Pengulangan di Java</h2>
<p>Sama halnya dengan kondisional, untuk membuat sebuah pengulangan   &quot;for&quot; di Java, cukup mudah. Sintaksnya tidak jauh berbeda dengan PHP dan   C. Silahkan buat <em>file</em> dengan nama <strong>HelloFor.java</strong> kemudian buat kode berikut:</p>
<p><img src="img/7.png" width="708" height="162" /></p>
<p>Sekarang mari kita jalankan program kecil tersebut:</p>
<p><img src="img/8.png" width="709" height="251" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
</link>
    
<?php include('footer.php'); ?>
  
</body>
</html>
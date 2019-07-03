<!DOCTYPE html>
<html>
<head>
	<title>Proyek Pemrograman Web</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<!-- Style Css -->
	<link rel="stylesheet" type="text/css" href="css/stylelihat.css">
	<!-- Style Javascript -->
	<script language="javascript" src="js/validasi.js"></script>
</head>
<body>
<!-- Div untuk membuat header dalam web -->
<div class="header">

</div>
<!-- Div untuk membuat menubar di dalam web -->
	<div class="menubar">
		<ul>
			<li><a href="index.html"><b>Biodata</b></a></li>
      <li><a href="materi.html"><b>Materi Kuliah</a></b></li>
      <li><a href="cari.html"><b>Pencarian</b></a></li>
      <li><a href="validasi.php"><b>Validasi Data</b></a></li>
      <li><a href="form_data.php"><b>Form Data Beli</b></a></li>
		</ul>
</div>	

<!-- Div untuk menampung isi website -->
<div class="menu2">
	<br><br>
	<h2><font color="black">HALAMAN UNTUK</font> <font color="#6495ED"><b>FORM DATA PEMBELIAN</b></font></h2>
	<div class="alu"></div>
	<div class="alu1"></div>
	<p>Pada halaman form data ini user bisa melakukan pemesanan barang sesuai dengan form yang telah disediakan</p>
	<hr width="90%">
            <center>
              <!-- Tabel yang digunakan untuk menampilkan data -->
            <table border="1" width="80%">
                <thead>
                <tr>
                  <th><center>No.</center></th>
                  <th><center>Nama Lengkap</center></th>
                  <th><center>No.Hp</center></th>
                  <th><center>Alamat</center></th>
                  <th><center>Agama</center></th>
                  <th><center>Profil</center></th>
                </tr>
              </thead>

                <tbody>
                  <?php
                  //dalam variabel $no kita memberikan nilai awal nya 1. $no ini digunakan untuk numbering data.
                  $no=1;
                  //Membuat variabel $fp untuk membuat file txt. dalam variavel $fp terdapat fopen yang berfungsi untuk membuka file txtnya, adapun untuk parameter pertamanya, yaitu 'dataform.txt' yang dimana file ini lah yang akan kita buka. dan untuk paramter kedua adalah metodenya. disini kita menggunakan metode r yang berarti Read only(hanya membaca). Dimulai dari awal sebuah file.
                  $fp = fopen("dataform.txt","r");

                  //disini akan dibuat perulangan untuk menampilkan datanya. jadi jika data didalam notepad bertambah maka proses perulangan akan otomatis berulang dan akan menampilkan data barunya.
                  while ($isi = fgets($fp,80))
                  {

                  //variabel $pisah berisi fungsi explode yang berfungsi sebagai pemisah string. dimana pada bagian ini kita melakukan pemisahan data satu dengan yang lain dengan menggunakan "|" oleh sebab itu paramater pertamanya adalah "|". dan paratemer keduanya adalah variavel $isi
                  $pisah = explode("|",$isi);
                  echo "<tr><td><center>".$no++."</center></td>"; //variabel $no akan bertambah 1 terus jika data berulang
                  echo "<td><center>$pisah[0]</center></td>";     //menampilkan data dalam index 0 di variabel $pisah
                  echo "<td><center>$pisah[1]</center></td>";     //menampilkan data dalam index 1 di variabel $pisah
                  echo "<td><center>$pisah[2]</center></td>";     //menampilkan data dalam index 2 di variabel $pisah
                  echo "<td><center>$pisah[3]</center></td>";     //menampilkan data dalam index 3 di variabel $pisah

                  //menampilkan data dalam index 4 di variabel $pisah dalam bentuk gambar
                  echo "<td><center><img src=img/$pisah[4] width=200 height=100 ></center></td></tr>"; 
                  }

                  ?>


                </tbody>
              </table>
            </center>


	
	<br><br><br><br>




	
	
</div>


<!-- Div untuk membuat footer dalam web -->
<div class="footer">
	<br>
		<font color="#6495ED"><b>&copy</b></font>&nbsp Mohammad Aldi Saputra - Universitas Ahmad Dahlan - Yogyakarta - <font color="#6495ED"><b>2019</b></font>
</div>

</body>
</html>
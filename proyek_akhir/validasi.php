<!DOCTYPE html>
<html>
<head>
	<title>Proyek Pemrograman Web</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<!-- Style Css -->
	<link rel="stylesheet" type="text/css" href="css/stylevalidasi.css">
	<!-- Style Javascript -->
	<script language="javascript" src="js/valid.js"></script>
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
			<li><a href="validasi.php"><b>Validasi Data</b></a></li>
			<li><a href="form_data.php"><b>Form</b></a></li>
			<li><a href="komen.html"><b>Komentar User</b></a></li>
		</ul>
</div>	

<!-- Div untuk menampung isi website -->
<div class="menu2">
	<br><br>
	<h2><font color="black">HALAMAN UNTUK</font> <font color="#6495ED"><b>VALIDASI DATA</b></font></h2>
	<div class="alu"></div>
	<div class="alu1"></div>
	<p>Pada halaman pencarian ini kita akan menampilkan validasi data dengan form input nama dan nim yang dimana data nim dan nama tidak boleh kosong dan nim harus berupa angka dan tidak<br> boleh lebih dari 10 karakter.</p>
	<hr width="90%">

	<br>
	<!-- Membuat form validasi dengan menggunakan metode post dan data nya akan langsung di proses pada file ini -->
	<form method="POST">
  	<input type="text" class="search" name="nama" required="required" placeholder="Masukkan Nama ...">
  	<br><br>
  	<!-- dalam form input nim kita akan memanggil function javascript hanyaAngka(event) -->
  	<input type="text" class="nim" name="NIM" required="required" placeholder="Masukkan NIM ..." maxlength="10" onkeypress="return hanyaAngka(event)"/>
  	<br><br>
  	<input class="button" type="submit" value="Submit Data">

	</form>
	<?php
	//kita membuat $nama dan $nim dengan nilai kosong terlebih dahulu
	$nama = $NIM = "";
	//terdapat kondisi jika server request nya sama dengan POST dan isset datanya setelah dicek adalah $_POST nama dan $_POST nim maka variabel $nama dan $nim yang tadi awalnya kosong jadi bernilai yang dimana nilainya sama dengan form input nama dan nim yang diinputkan user
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
	$nama = $_POST["nama"];
	$NIM = $_POST["NIM"];
	}  

	//disini terdapat kondisi lagi jika data dalam variabel $nama tidak kosong dan data dalam variabel $nim juga tidak kosong maka akan ditampilkan data dalam variabel $nama dan $nim tersebut.
	if(!empty($nama) && !empty($NIM) ){
	echo "<h2>Selamat Datang</h2>";
	echo "<p>".$nama . "<br>" . $NIM."</p>";
	}
	?>
	<br><br><br><br>


	
	
</div>


<!-- Div untuk membuat footer dalam web -->
<div class="footer">
	<br>
		<font color="#6495ED"><b>&copy</b></font>&nbsp Mohammad Aldi Saputra - Universitas Ahmad Dahlan - Yogyakarta - <font color="#6495ED"><b>2019</b></font>
</div>

</body>
</html>
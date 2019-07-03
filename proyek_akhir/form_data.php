<!DOCTYPE html>
<html>
<head>
	<title>Proyek Pemrograman Web</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<!-- Style Css -->
	<link rel="stylesheet" type="text/css" href="css/styleform.css">
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
	<!-- form yang digunakan sebagai inputan untuk nantinya akan di proses dalam php. pada bagian name di masing-masing input form usahakan untuk diingat. karena nantinya akan digunakan sebagai POST data untuk di PHP  -->

	<!-- Dalam form ini digunakan metode POST dan setelah disubmit data akan masuk dan diproses kedalam proses.php dan kita juga menggunakan fungsi enyctpe untuk proses upload file -->
	<form method="POST" action="proses.php" enctype="multipart/form-data">
  	<input type="text" class="search" name="nama" required="required" placeholder="Masukkan Nama ...">
  	<br><br>
  	<input type="text" class="search" name="no_hp" required="required" placeholder="Masukkan No.Telp ...">
  	<br><br>
  	<textarea placeholder="Masukkan Alamat Anda" name="alamat" class="search"></textarea>
  	<br><br>
  				<label>Pilih Agama Anda :</label>
  				<br><br>
                <select name="agama" class="select">
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Katolik">Katolik</option>
                </select>
    <br><br>
    <input type="text" class="search" name="email" required="required" placeholder="Masukkan Email ...">
    <br><br>
    <label>Upload Foto Profil Anda <b><i>(kurang dari 2MB) :</i></b></label>
  	<br><br>
    <input type="file" class="search" name="file" required="required">
    <br><br>
    <input class="button" type="submit" value="Submit Data">
    <input class="button2" type="reset" value="Reset Data">

	</form>



	
	<br><br><br><br>




	
	
</div>


<!-- Div untuk membuat footer dalam web -->
<div class="footer">
	<br>
		<font color="#6495ED"><b>&copy</b></font>&nbsp Mohammad Aldi Saputra - Universitas Ahmad Dahlan - Yogyakarta - <font color="#6495ED"><b>2019</b></font>
</div>

</body>
</html>
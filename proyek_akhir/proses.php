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
	<h2><font color="black">HALAMAN UNTUK</font> <font color="#6495ED"><b>FORM DATA PEMBELIAN</b></font></h2>
	<div class="alu"></div>
	<div class="alu1"></div>
	<p>Pada halaman form data ini user bisa melakukan pemesanan barang sesuai dengan form yang telah disediakan</p>
	<hr width="90%">

	<?php
			//Membuat variabel $fp untuk membuat file txt. dalam variavel $fp terdapat fopen yang berfungsi untuk membuka file txtnya, adapun untuk parameter pertamanya, yaitu 'dataform.txt' yang dimana file ini lah yang akan kita buka. dan untuk paramter kedua adalah metodenya. disini kita menggunakan metode a+ yang berarti Read/Append(membaca/melampirkan). Isi dari file akan ditulis pada bagian akhir dari file.
			$fp = fopen("dataform.txt","a+");
			// dari variabel $nama sampai dengan $agama kita mengambil data POST yang ada didalam form_data sebelumnya. dimana paramater untuk pengambilan datanya yaitu dari 'name' dalam input ditiap formnya (usahakan di name dalam input harus sama dengan dalam $_POST nya) . dan kita menggunakan metode POST oleh sebab itu kita menggunakan fungsi $_POST.
            $nama = $_POST['nama'];
            $nohp = $_POST['no_hp'];
            $alamat = $_POST['alamat'];
            $agama = $_POST['agama'];

            //Proses dibawah ini kita akan melakukan proses upload foto. Oleh sebab kita kita menggunakan $_FILES.
            $file = $_FILES['file']['name']; //ini berfungsi untuk mengetahui nama file yang akan diupload
            $tmp_name = $_FILES['file']['tmp_name']; // ini berfungsi untuk mengetahui sumber file dari komputer kita

            //pada bagian move_uploaded_file ini digunakan untuk mengirimkan file dari komputer kita ke web server. adapun paramater pertamanya yaitu sumber file dari komputer kita dan paramater keduanya adalah tujuan upload fileya mau kemana. disini saya nantinya akan menyimpan file upload kedalam folder img.
            move_uploaded_file($tmp_name, "img/".$file);


            //fputs berfungsi untuk menulis ke file yang sedang dibuka. disini kita akan menulis isi file tersebut dengan data nama yang ditampung dalam variabel $nama. dan begitu juga dengan data nohp,alamat,agama dan file foto yang ditampung oleh variabel masing-masing.
            fputs($fp,"$nama|$nohp|$alamat|$agama|$file|\n");
            // fclose digunakan disini untuk menutup file txtnya
            fclose($fp);

            ?>
            <br>
            <center><b>Terima Kasih Sudah Mengisi Form !!</b>
            <br><br><br>
            <a href="lihat.php" class="button">Lihat Data</a> <!-- hyperlink untuk melihat data form yang telah diproses -->
            <a href="form_data.php" class="button2">Kembali Isi Data</a> <!-- hyperlink untuk kembali isi data form -->
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
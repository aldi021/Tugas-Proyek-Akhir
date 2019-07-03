//didalam function cari(), kita pertama mendeklarasikan variabel kata yang isinya adalah data yang ada didalam form sebelumnya.
//kemudian mendelarasikan variabel hasil yang isinya adalah link http google yang dimana nantinya isi carinya diambil dari variabel kata.
//sedangkan window.open berfungsi untuk menampilkan jendela baru yang nantinya akn langsung terhubung ke pencarian google dimana pencariannya sudah menggunakan kunci kata dari variabel hasil 
// fungsi config itu berfungsi sebagai pengaturan untuk window.open nya, disini kita maunya tinggi jendala barunya adalah 500 dan lebar 700 dan ada scrollbars nya.
function cari() {
	var kata = document.formcari.keyword.value;
	var hasil = "http://www.google.com/search?q=" + kata ;
	window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')
}

//didalam function tanggal(), kita pertama mendeklarasikan variabel d yang isinya adalah format tanggal
// sedangkan fungsi document.getElementById mengambil sebuah value pada inputan yang ada di html yang ber ID 'demo' sebelumnya dan datanay diisi dengan variabel d
function tanggal() {
	var d = new Date();
	document.getElementById("demo").innerHTML = d;
}

//didalam function cari(), kita pertama mendeklarasikan variabel hasil yang isinya adalah link ke instagram pemilik web
// kemudian setelah itu akan muncul jendela baru (window.open) yang menuju kehalaman instagram pemilik
function button2(){
	var hasil = "https://www.facebook.com/aldygabrieltsebastian";
	window.open(hasil, 'facebook', config='height=500, width=750, scrollbars=yes location=yes')
}

//didalam function cari(), kita pertama mendeklarasikan variabel hasil yang isinya adalah link ke facebook pemilik web
// kemudian setelah itu akan muncul jendela baru (window.open) yang menuju kehalaman facebook pemilik
function button1(){
	var hasil = "https://www.instagram.com/m_aldhysaputra/?hl=id";
	window.open(hasil, 'instagram', config='height=500, width=750, scrollbars=yes location=yes')
}

function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode //Berfungsi untuk mendapatkan nilai key code.
		   if (charCode > 31 && (charCode < 48 || charCode > 57)) //Kode tombol numerik/angka pada Javascript adalah 48-57. Selain itu, tombol lain tidak akan diterima.
 
		    return false;
		  return true;
		}
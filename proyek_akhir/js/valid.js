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

function kirim() {
     var a=document.getElementById("abc").innerHTML; //membuat variabel a yang berisi data dalam id abc di html sebelumnya
     var b=document.getElementById("teks").value; //membuat variabel b yang berisi data dalam id teks (data nama orang yang komen) di html sebelumnya
     var c=document.getElementById("kepala").value; //membuat variabel c yang berisi data dalam id kepala (data komentar user) di html sebelumnya
     document.write(a + "<br />" + "<br />"); //menampilkan data dalam variabel a
     document.write(b + "<br />");//menampilkan data dalam variabel b
     document.write(c);//menampilkan data dalam variabel c
  }
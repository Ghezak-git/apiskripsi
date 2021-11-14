<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$a = $_POST['kd_gejala'];
$b = $_POST['solusi'];
$c = $_POST['bilab'];
$d = $_POST['bilas'];
$e = $_POST['mulai'];
$f = $_POST['selesai'];
$gambar = $_FILES['gambar']['name'];

if ($gambar != "") {
	$extensi_boleh = array('mp3','mp4');
	$x = explode('.', $gambar);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['gambar']['tmp_name'];
	$angka_acak = rand(1,999);
	$nama_baru = $angka_acak.'-'.$gambar;
	if (in_array($ekstensi, $extensi_boleh) == true) {
		move_uploaded_file($file_tmp, '../json/suara/'.$nama_baru);
		// menginput data ke database
		mysqli_query($koneksi,"insert into tbl_pengetahuan (ID,kd_gejala,solusi_dan_pertanyaan,bila_benar,bila_salah,mulai,selesai,suara) values('','$a','$b','$c','$d','$e','$f','$nama_baru')");
		 
		// mengalihkan halaman kembali ke index.php
		header("location:../admin/rule.php");
	}else{
		echo "<script>alert('Maaf Hanya mp3 atau mp4 yang bisa');location='javascript:history.go(-1)';</script>";
	}
}else{
	echo "<script>alert('Maaf Gambar tidak boleh kosong');location='javascript:history.go(-1)';</script>";
}

 

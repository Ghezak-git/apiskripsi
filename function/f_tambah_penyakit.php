<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$a = $_POST['nama_penyakit'];
$gambar = $_FILES['gambar']['name'];
$c = $_POST['gejala'];
$d = $_POST['artikel'];

if ($gambar != "") {
	$extensi_boleh = array('png','jpg');
	$x = explode('.', $gambar);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['gambar']['tmp_name'];
	$angka_acak = rand(1,999);
	$nama_baru = $angka_acak.'-'.$gambar;
	if (in_array($ekstensi, $extensi_boleh) == true) {
		move_uploaded_file($file_tmp, '../json/foto_penyakit/'.$nama_baru);
		// menginput data ke database
		mysqli_query($koneksi,"insert into tbl_penyakit (id_penyakit,nama_penyakit,gambar,gejala,artikel) values('','$a','$nama_baru','$c','$d')");
		 
		// mengalihkan halaman kembali ke index.php
		header("location:../admin/penyakit.php");
	}else{
		echo "<script>alert('Maaf Hanya JPG atau PNG yang bisa');location='javascript:history.go(-1)';</script>";
	}
}else{
	echo "<script>alert('Maaf Gambar tidak boleh kosong');location='javascript:history.go(-1)';</script>";
}

 

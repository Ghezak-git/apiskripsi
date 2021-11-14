<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$a = $_POST['kd_gejala'];
$b = $_POST['nama_gejala'];


// menginput data ke database
mysqli_query($koneksi,"insert into tbl_gejala (id_gejala,kd_gejala,nama_gejala) values('','$a','$b')");
		 
// mengalihkan halaman kembali ke index.php
header("location:../admin/gejala.php");


 

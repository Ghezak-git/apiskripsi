<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_gejala'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_gejala where id_gejala='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/gejala.php");
 
?>
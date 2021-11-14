<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_penyakit'];
$file = $_GET['file'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_penyakit where id_penyakit='$id'");
unlink('../json/foto_penyakit/'.$file); 
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/penyakit.php");
 
?>
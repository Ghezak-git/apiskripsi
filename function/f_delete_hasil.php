<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_hasil'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_hasil where id_hasil='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/hasil.php");
 
?>
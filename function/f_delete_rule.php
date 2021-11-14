<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['ID'];
$file = $_GET['file'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_pengetahuan where ID='$id'");
unlink('../json/suara/'.$file); 
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/rule.php");
 
?>
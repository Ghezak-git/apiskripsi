<?php 
	session_start();

	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
 
	$cek = mysqli_num_rows($sql);

	$data = mysqli_fetch_array($sql);

	if($cek > 0){
		$_SESSION['status1'] = "login";
		header("location:../admin/admin.php");
	}else{
		echo "<script>alert('Maaf Username atau Password salah');location='javascript:history.go(-1)';</script>";
	}
 ?>
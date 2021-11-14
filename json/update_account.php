<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_telp = $_POST['no_telp'];
	$umur = $_POST['umur'];
	$tahun_lahir = $_POST['tahun_lahir'];
	$id_user = $_POST['id_user'];
	

	require_once 'koneksi.php';

	$sql = "UPDATE tbl_user SET nama_lengkap = '$nama_lengkap', username='$username', password='$password', no_telp='$no_telp', umur='$umur', tahun_lahir='$tahun_lahir', jenis_kelamin='$jenis_kelamin' WHERE id_user='$id_user' ";

	if (mysqli_query($koneksi, $sql)) {
		$result["success"] = "1";
		$result["message"] = "success";
	}

}

else{

	$result["success"] = "0";
	$result["message"] = "error1!";
}

	echo json_encode($result);
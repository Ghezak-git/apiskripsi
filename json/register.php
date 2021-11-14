<?php 

require_once 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_telp = $_POST['no_telp'];
	$umur = $_POST['umur'];
	$tahun_lahir = $_POST['tahun_lahir'];
        
        if($username != null || $password != null || $nama_lengkap != null || $jenis_kelamin != null || $no_telp != null ){
    	    $query = "INSERT INTO tbl_user (username, password, nama_lengkap, jenis_kelamin, no_telp, umur, tahun_lahir) VALUES ('$username' , '$password' , '$nama_lengkap' , '$jenis_kelamin' , '$no_telp' , '$umur', '$tahun_lahir')";
        	$result = array();
        	if(mysqli_query($koneksi, $query)){
        	    $result["success"] = "1";
        	    $result["message"] = "Berhasil Menambahkan Akun";
        	}else{
        	    $result["success"] = "0";
        	    $result["message"] = "error";
            }
        }else{
            $result["success"] = "0";
    	    $result["message"] = "Data Ada Yang Kosong";
        }
echo json_encode($result);
	


 ?>
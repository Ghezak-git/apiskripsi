<?php 
	
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		require_once 'koneksi.php';

		$sql = "SELECT * FROM tbl_user WHERE username = '$username'";

		$response = mysqli_query($koneksi, $sql);

		$result = array();
		$result['login'] = array();

		if (mysqli_num_rows($response) == 1) {
			$row = mysqli_fetch_assoc($response);

			if ($password == $row['password']) {
				$index['id_user'] = $row['id_user'];
				$index['username'] = $row['username'];
				$index['password'] = $row['password'];
				$index['nama_lengkap'] = $row['nama_lengkap'];
				$index['jenis_kelamin'] = $row['jenis_kelamin'];
				$index['no_telp'] = $row['no_telp'];
				$index['umur'] = $row['umur'];
				$index['tahun_lahir'] = $row['tahun_lahir'];

				array_push($result['login'], $index);

				$result['success'] = "1";
				$result['message'] = "success";
			} else {
				$result['success'] = "0";
				$result['message'] = "error";	
				
			}
		}
    echo json_encode($result);
	}

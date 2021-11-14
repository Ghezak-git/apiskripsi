<?php 

require_once 'koneksi.php';
    
    $id_user = $_POST['id_user'];

	$query = "SELECT * FROM tbl_hasil where id_user = '$id_user' ";
	$result = mysqli_query($koneksi,$query);

	$arraydata = array();

	while ($baris = mysqli_fetch_assoc($result)) {
		$arraydata[] = $baris;
	}

	echo json_encode(array('hasil' => $arraydata));
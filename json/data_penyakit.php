<?php 

require_once 'koneksi.php';


	$query = "SELECT * FROM tbl_penyakit";
	$result = mysqli_query($koneksi,$query);

	$arraydata = array();

	while ($baris = mysqli_fetch_assoc($result)) {
		$arraydata[] = $baris;
	}

	echo json_encode(array('penyakit' => $arraydata));
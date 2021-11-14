<?php 
require_once 'koneksi.php';
    
        $id_penyakit = $_POST['id_penyakit'];
        $sql=mysqli_query($koneksi,"SELECT * FROM tbl_penyakit where id_penyakit='$id_penyakit'");
        $arraydata = array();

    	while ($baris = mysqli_fetch_assoc($sql)) {
    		$arraydata[] = $baris;
    	}
    echo json_encode(array('penyakit' => $arraydata));
 ?>
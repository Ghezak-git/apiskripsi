<?php 
require_once 'koneksi.php';
    
        $idsolusi = $_POST['idpertanyaan'];
        $sql=mysqli_query($koneksi,"SELECT * FROM tbl_pengetahuan where kd_gejala='$idsolusi'");
        $arraydata = array();

    	while ($baris = mysqli_fetch_assoc($sql)) {
    		$arraydata[] = $baris;
    	}
    echo json_encode(array('konsul' => $arraydata));
 ?>
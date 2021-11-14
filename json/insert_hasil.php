<?php 
require_once 'koneksi.php';
    
        $id_penyakit = $_POST['id_penyakit'];
        $penyakit = $_POST['penyakit'];
        $id_user = $_POST['id_user'];
        $sql=mysqli_query($koneksi,"INSERT INTO tbl_hasil VALUES (null,'$id_penyakit','$penyakit','$id_user',NOW())");
        $arraydata = array();
        
        if($sql){
            $arraydata['code'] = 1;
            $arraydata['message'] = "Berhasil Menambah Data";
        }else{
            $arraydata['code'] = 0;
            $arraydata['message'] = "Gagal Menambah Data";
        }
        echo json_encode ($arraydata);
        
 ?>
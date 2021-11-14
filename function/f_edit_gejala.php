<?php
include('koneksi.php');
$id = $_POST['id_gejala'];
$a = $_POST['ekd_gejala'];
$b = $_POST['enama_gejala'];


//query update
$query = "UPDATE tbl_gejala SET kd_gejala='$a' , nama_gejala='$b' WHERE id_gejala='$id' ";
if (mysqli_query($koneksi,$query)) {
    # credirect ke page index
    header("location:../admin/gejala.php");    
}
else{
    echo "ERROR, data gagal diupdate". mysql_error();
}


?>
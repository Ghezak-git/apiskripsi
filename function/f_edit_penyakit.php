<?php
include('koneksi.php');
$id = $_POST['id_penyakit'];
$a = $_POST['enama_penyakit'];
$b = $_POST['egejala'];
$c = $_POST['eartikel'];
$g_gambar = $_POST['g_gambar'];
$gambar = $_FILES['e_gambar']['name'];

if ($gambar != "") {
	$extensi_boleh = array('png','jpg');
	$x = explode('.', $gambar);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['e_gambar']['tmp_name'];
	$angka_acak = rand(1,999);
	$nama_baru = $angka_acak.'-'.$gambar;
	if (in_array($ekstensi, $extensi_boleh) == true) {
		unlink('../admin/img/'.$g_gambar); 

		move_uploaded_file($file_tmp, '../json/foto_penyakit/'.$nama_baru);
		//query update
		//query update
		$query = "UPDATE tbl_penyakit SET nama_penyakit='$a' , gambar='$nama_baru', gejala='$b', artikel='$c' WHERE id_penyakit='$id' ";
		if (mysqli_query($koneksi,$query)) {
		    # credirect ke page index
		    header("location:../admin/penyakit.php");    
		}
		else{
		    echo "ERROR, data gagal diupdate". mysql_error();
		}
		//mysql_close($host);
	}else{
		echo "<script>alert('Maaf Hanya JPG atau PNG yang bisa');location='javascript:history.go(-1)';</script>";
	}
}else{
	//query update
	$query = "UPDATE tbl_penyakit SET nama_penyakit='$a' , gejala='$b', artikel='$c' WHERE id_penyakit='$id' ";
	if (mysqli_query($koneksi,$query)) {
		# credirect ke page index
		header("location:../admin/penyakit.php");    
	}
	else{
		echo "ERROR, data gagal diupdate". mysql_error();
	}
}


?>
<?php
include('koneksi.php');
$id = $_POST['ID'];
$a = $_POST['ekd_gejala'];
$b = $_POST['esolusi'];
$c = $_POST['ebilab'];
$d = $_POST['ebilas'];
$e = $_POST['emulai'];
$f = $_POST['eselesai'];
$g_gambar = $_POST['g_gambar'];
$gambar = $_FILES['e_gambar']['name'];

if ($gambar != "") {
	$extensi_boleh = array('mp3','mp4');
	$x = explode('.', $gambar);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['e_gambar']['tmp_name'];
	$angka_acak = rand(1,999);
	$nama_baru = $angka_acak.'-'.$gambar;
	if (in_array($ekstensi, $extensi_boleh) == true) {
		unlink('../admin/img/'.$g_gambar); 

		move_uploaded_file($file_tmp, '../json/suara/'.$nama_baru);
		//query update
		//query update
		$query = "UPDATE tbl_pengetahuan SET kd_gejala='$a' , solusi_dan_pertanyaan='$b', bila_benar='$c', bila_salah='$d' , mulai='$e', selesai='$f', suara='$nama_baru' WHERE ID='$id' ";
		if (mysqli_query($koneksi,$query)) {
		    # credirect ke page index
		    header("location:../admin/rule.php");    
		}
		else{
		    echo "ERROR, data gagal diupdate". mysql_error();
		}
		//mysql_close($host);
	}else{
		echo "<script>alert('Maaf Hanya Mp3 atau Mp4 yang bisa');location='javascript:history.go(-1)';</script>";
	}
}else{
	//query update
	$query = "UPDATE tbl_pengetahuan SET kd_gejala='$a' , solusi_dan_pertanyaan='$b', bila_benar='$c', bila_salah='$d' , mulai='$e', selesai='$f'WHERE ID='$id' ";
	if (mysqli_query($koneksi,$query)) {
		# credirect ke page index
		header("location:../admin/rule.php");    
	}
	else{
		echo "ERROR, data gagal diupdate". mysql_error();
	}
}


?>
<?php
include ('../config/koneksi.php');

$id_fasilitas = $_GET['id'];

$query = "DELETE FROM tbl_fasilitas where id_fasilitas = '$id_fasilitas'";
$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Data Fasilitas Berhasil di Hapus');
		window.location='kelola_fasilitas.php'</script>";

	}else {
		echo "<script> alert('Data Fasilitas Gagal di Hapus');
		window.location='kelola_fasilitas.php'</script>";
	}
?>
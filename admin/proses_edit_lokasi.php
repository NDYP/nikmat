<?php
include('../config/koneksi.php');
session_start();

$id_lokasi= $_POST['id_lokasi'];
$nama_lokasi= $_POST['nama_lokasi'];
$link_lokasi= $_POST['link_lokasi'];


	$query = "UPDATE lokasi set nama_lokasi='$nama_lokasi', link_lokasi='$link_lokasi' where id_lokasi='$id_lokasi'";
	$hasil =  mysql_query($query);

	if($hasil){
		echo "<script> alert('Data Lokasi Berhasil di Edit');
		window.location='kelola_pangkat.php'</script>";

	}else {
		echo "<script> alert('Data Lokasi Gagal di Edit');
		window.location='kelola_pangkat.php'</script>";
	}

?>

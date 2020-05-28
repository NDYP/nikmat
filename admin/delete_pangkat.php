<?php
include ('../config/koneksi.php');

$id_pangkat = $_GET['id'];

$query = "DELETE FROM tbl_pangkat where id_pangkat = '$id_pangkat'";
$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Data Pangkat Berhasil di Hapus');
		window.location='kelola_pangkat.php'</script>";

	}else {
		echo "<script> alert('Data Pangkat Gagal di Hapus');
		window.location='kelola_pangkat.php'</script>";
	}
?>
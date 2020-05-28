<?php
include ('../config/koneksi.php');

$guru_id = $_GET['id'];

$query = "DELETE FROM tbl_guru where guru_id = '$guru_id'";
$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Data Guru Berhasil di Hapus');
		window.location='kelola_guru.php'</script>";

	}else {
		echo "<script> alert('Data Guru Gagal di Hapus');
		window.location='kelola_guru.php'</script>";
	}
?>
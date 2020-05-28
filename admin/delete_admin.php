<?php
include ('../config/koneksi.php');

$id_admin = $_GET['id'];

$query = "DELETE FROM tbl_admin where id_admin = '$id_admin'";
$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Data Admin Berhasil di Hapus');
		window.location='kelola_admin.php'</script>";

	}else {
		echo "<script> alert('Data Admin Gagal di Hapus');
		window.location='kelola_admin.php'</script>";
	}
?>
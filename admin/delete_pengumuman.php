<?php
include ('../config/koneksi.php');

$pengumuman_id = $_GET['id'];

$query = "DELETE FROM tbl_pengumuman where pengumuman_id = '$pengumuman_id'";
$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Data Pengumuman Berhasil di Hapus');
		window.location='kelola_pengumuman.php'</script>";

	}else {
		echo "<script> alert('Data Pengumuman Gagal di Hapus');
		window.location='kelola_pengumuman.php'</script>";
	}
?>
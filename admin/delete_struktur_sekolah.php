<?php
include ('../config/koneksi.php');

$gambar_struktur = $_GET['id'];

$query = "DELETE FROM tbl_struktur_sekolah where gambar_struktur = '$gambar_struktur'";
$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Data Struktur Sekolah Berhasil di Hapus');
		window.location='kelola_struktur_sekolah.php'</script>";

	}else {
		echo "<script> alert('Data Struktur Sekolah Gagal di Hapus');
		window.location='kelola_struktur_sekolah.php'</script>";
	}
?>
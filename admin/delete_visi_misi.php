<?php
include ('../config/koneksi.php');

$visi = $_GET['id'];

$query = "DELETE FROM tbl_visi_misi where visi = '$visi'";
$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Data Visi Misi Berhasil di Hapus');
		window.location='kelola_visi_misi.php'</script>";

	}else {
		echo "<script> alert('Data Visi Misi Gagal di Hapus');
		window.location='kelola_visi_misi.php'</script>";
	}
?>
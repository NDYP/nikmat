<?php
include('../config/koneksi.php');
session_start();

$id_kontak= $_POST['id_kontak'];
$isi_kontak= $_POST['isi_kontak'];



	$query = "UPDATE kontak set isi_kontak='$isi_kontak' where id_kontak='$id_kontak'";
	$hasil =  mysql_query($query);

	if($hasil){
		echo "<script> alert('Data Kontak Berhasil di Edit');
		window.location='kelola_kontak.php'</script>";

	}else {
		echo "<script> alert('Data Kontak Gagal di Edit');
		window.location='kelola_kontak.php'</script>";
	}

?>

<?php
include('../config/koneksi.php');
session_start();

$isi_profil= $_POST ['isi_profil'];
$lokasi_file = $_FILES ['foto']['tmp_name'];
$nama_file = $_FILES ['foto']['name'];


if (empty($lokasi_file)) {
	$query = "UPDATE tbl_profil  set isi_profil = '$isi_profil'";
} else {
	move_uploaded_file($lokasi_file, 'image/profil/'.$nama_file);
	$query= "UPDATE tbl_profil  set isi_profil = '$isi_profil', foto='$nama_file'";
}

$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Profil Berhasil Diedit');
		window.location='edit_profil.php'</script>";

	}else {
		echo "<script> alert('Data Salah');
		window.location='edit_profil.php'</script>";
	}
?>
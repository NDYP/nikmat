<?php
include('../config/koneksi.php');
session_start();

$id_fasilitas= $_POST['id_fasilitas'];
$judul_fasilitas = $_POST['judul_fasilitas'];
$lokasi_file = $_FILES ['foto_fasilitas']['tmp_name'];
$nama_file = $_FILES ['foto_fasilitas']['name'];


if (empty($lokasi_file)) {
	$query ="UPDATE tbl_fasilitas  set judul_fasilitas = '$judul_fasilitas', where id_fasilitas='$id_fasilitas'";
} else {
	move_uploaded_file($lokasi_file, 'image/fasilitas/'.$nama_file);
	$query ="UPDATE tbl_fasilitas  set judul_fasilitas = '$judul_fasilitas', foto_fasilitas='$nama_file' where id_fasilitas='$id_fasilitas'";
}

$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert ('Data Fasilitas Telah di Simpan');
	window.location = 'kelola_fasilitas.php'</script>";
} else {
	echo "<script> alert ('Data Fasilitas Gagal di Simpan');
	window.location = 'kelola_fasilitas.php'</script>";
}
?>
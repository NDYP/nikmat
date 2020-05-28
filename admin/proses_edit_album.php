<?php
include('../config/koneksi.php');
session_start();

$id_album = $_POST['id_album'];
$nama_album = $_POST['nama_album'];
$lokasi_file = $_FILES['cover']['tmp_name'];
$nama_file = $_FILES['cover']['name'];


if (empty($lokasi_file)) {
	$query = "UPDATE tbl_album set nama_album ='$nama_album' where id_album = '$id_album'";
} else {
	move_uploaded_file($lokasi_file, 'image/album/'.$nama_file);
	$query = "UPDATE tbl_album SET nama_album='$nama_album', cover='$nama_file' WHERE id_album='$id_album'";
}

$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert ('Data Album Telah di Simpan');
	window.location = 'kelola_album.php'</script>";
} else {
	echo "<script> alert ('Data Gagal di Simpan');
	window.location = 'kelola_album.php'</script>";
}
?>
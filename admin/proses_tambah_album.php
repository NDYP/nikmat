<?php
include('../config/koneksi.php');
session_start();

$nama_album = $_POST['nama_album'];
$lokasi_file = $_FILES['cover']['tmp_name'];
$nama_file = $_FILES['cover']['name'];

if (empty($lokasi_file)) {
	$query = "INSERT INTO tbl_album(nama_album) VALUES ('$nama_album')";
} else {
	move_uploaded_file($lokasi_file, 'image/album/'.$nama_file);
	$query = "INSERT INTO tbl_album(nama_album, cover) VALUES ('$nama_album', '$nama_file')";
}
$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert('Album telah disimpan'); window.location = 'kelola_album.php'</script>";
} else {
	echo "<script> alert('Tambah Data Album Gagal'); window.location = 'kelola_album.php'</script>";
}
?>
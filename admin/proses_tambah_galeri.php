<?php
include('../config/koneksi.php');
session_start();

$nama_menu = $_POST['nama_menu'];

$tanggal= $_POST['tanggal'];
$lokasi_file = $_FILES['foto_menu']['tmp_name'];
$nama_file = $_FILES['foto_menu']['name'];

if (empty($lokasi_file)) {
	$query = "INSERT INTO tbl_galeri(nama_menu, tanggal) VALUES ('$nama_menu',  '$tanggal')";
} else {
	move_uploaded_file($lokasi_file, 'image/galeri/'.$nama_file);
	$query = "INSERT INTO tbl_galeri(nama_menu, tanggal, foto_menu) VALUES ('$nama_menu',  '$tanggal','$nama_file')";
}
$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert('Menu telah disimpan'); window.location = 'kelola_galeri.php'</script>";
} else {
	echo "<script> alert('Tambah Data Menu Gagal'); window.location = 'kelola_galeri.php'</script>";
}
?>
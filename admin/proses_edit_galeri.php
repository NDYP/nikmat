<?php
include('../config/koneksi.php');
session_start();

$nama_menu = $_POST['nama_menu'];
$id_menu = $_POST['id_menu'];
$tanggal= $_POST['tanggal'];
$lokasi_file = $_FILES['foto_menu']['tmp_name'];
$nama_file = $_FILES['foto_menu']['name'];



if (empty($lokasi_file)) {
	$query = "UPDATE tbl_galeri SET nama_menu ='$nama_menu',  tanggal='$tanggal' WHERE id_menu = '$id_menu'";
} else {
	move_uploaded_file($lokasi_file, 'image/galeri/'.$nama_file);
	$query = "UPDATE tbl_galeri SET  nama_menu ='$nama_menu', tanggal='$tanggal', foto_menu='$nama_file' WHERE id_menu='$id_menu'";
}


$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert('Menu telah disimpan'); window.location = 'kelola_galeri.php'</script>";
} else {
	echo "<script> alert('Tambah Data Menu Gagal'); window.location = 'kelola_galeri.php'</script>";
}
?>
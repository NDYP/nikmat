<?php
include('../config/koneksi.php');
session_start();

$judul_fasilitas = $_POST['judul_fasilitas'];
$lokasi_file = $_FILES ['foto_fasilitas']['tmp_name'];
$nama_file = $_FILES ['foto_fasilitas']['name'];

if (empty($lokasi_file)){
	$query = "INSERT into tbl_fasilitas (judul_fasilitas) values ('$judul_fasilitas')";
} else { 
	move_uploaded_file($lokasi_file, 'image/fasilitas/'.$nama_file);
	$query = "INSERT into tbl_fasilitas (judul_fasilitas, foto_fasilitas) values ('$judul_fasilitas', '$nama_file')";
}
$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert ('Fasilitas Berhasil di Simpan');
	window.location = 'kelola_fasilitas.php'</script>";
} else {
	echo "<script> alert ('Fasilitas Gagal di Simpan');
	window.location = 'kelola_fasilitas.php'</script>";
}
?>

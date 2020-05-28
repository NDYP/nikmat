<?php
include('../config/koneksi.php');
session_start();

$lokasi_file = $_FILES ['gambar_struktur']['tmp_name'];
$nama_file = $_FILES ['gambar_struktur']['name'];

move_uploaded_file($lokasi_file, 'image/struktur_sekolah/'.$nama_file);
$query = "INSERT into tbl_struktur_sekolah (gambar_struktur) values ('$nama_file')";

$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert ('Struktur Sekolah Berhasil di Simpan');
	window.location = 'kelola_struktur_sekolah.php'</script>";
} else {
	echo "<script> alert ('Struktur Sekolah Gagal di Simpan');
	window.location = 'kelola_struktur_sekolah.php'</script>";
}
?>

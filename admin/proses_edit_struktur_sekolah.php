<?php
include('../config/koneksi.php');
session_start();

$lokasi_file = $_FILES ['gambar_struktur']['tmp_name'];
$nama_file = $_FILES ['gambar_struktur']['name'];

if (empty($lokasi_file)) {
	$query = "UPDATE tbl_profil  set gambar_struktur = '$lokasi_file";
} else {
	move_uploaded_file($lokasi_file, 'image/struktur_sekolah/'.$nama_file);
$query ="UPDATE tbl_struktur_sekolah  set gambar_struktur = '$nama_file'";
}

$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Sturktur Sekolah Berhasil di Edit');
		window.location='kelola_struktur_sekolah.php'</script>";

	}else {
		echo "<script> alert('Sturktur Sekolah Gagal di Edit');
		window.location='kelola_struktur_sekolah.php'</script>";
	}
?>
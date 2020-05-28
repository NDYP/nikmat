<?php
include('../config/koneksi.php');
session_start();

$pengumuman_judul = $_POST['pengumuman_judul'];
$pengumuman_deskripsi = $_POST['pengumuman_deskripsi'];
$pengumuman_tanggal = $_POST['pengumuman_tanggal'];
$lokasi_file = $_FILES ['pengumuman_foto']['tmp_name'];
$nama_file = $_FILES ['pengumuman_foto']['name'];

if (empty($lokasi_file)){
	$query = "INSERT into tbl_pengumuman (pengumuman_judul, pengumuman_deskripsi, pengumuman_tanggal  ) values ('$pengumuman_judul','$pengumuman_deskripsi','$pengumuman_tanggal')";
} else { 
	move_uploaded_file($lokasi_file, 'image/pengumuman/'.$nama_file);
	$query = "INSERT into tbl_pengumuman (pengumuman_judul, pengumuman_deskripsi, pengumuman_foto, pengumuman_tanggal  ) values ('$pengumuman_judul','$pengumuman_deskripsi','$nama_file', '$pengumuman_tanggal')";
}
$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert ('Pengumuman Berhasil di Simpan');
	window.location = 'kelola_pengumuman.php'</script>";
} else {
	echo "<script> alert ('Pengumuman Gagal di Simpan');
	window.location = 'kelola_pengumuman.php'</script>";
}
?>

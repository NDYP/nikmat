<?php
include('../config/koneksi.php');
session_start();

$pengumuman_id= $_POST['pengumuman_id'];
$pengumuman_judul = $_POST['pengumuman_judul'];
$pengumuman_deskripsi = $_POST['pengumuman_deskripsi'];
$pengumuman_tanggal = $_POST['pengumuman_tanggal'];
$lokasi_file = $_FILES ['pengumuman_foto']['tmp_name'];
$nama_file = $_FILES ['pengumuman_foto']['name'];


if (empty($lokasi_file)) {
	$query = "UPDATE tbl_pengumuman  set pengumuman_judul = '$pengumuman_judul', pengumuman_deskripsi='$pengumuman_deskripsi', pengumuman_tanggal='$pengumuman_tanggal' where pengumuman_id='$pengumuman_id'";
} else {
	move_uploaded_file($lokasi_file, 'image/pengumuman/'.$nama_file);
	$query= "UPDATE tbl_pengumuman  set pengumuman_judul = '$pengumuman_judul', pengumuman_deskripsi='$pengumuman_deskripsi', pengumuman_foto='$nama_file', pengumuman_tanggal='$pengumuman_tanggal' where pengumuman_id='$pengumuman_id'";
}

$hasil = mysql_query($query);

if($hasil){
		echo "<script> alert('Pengumuman Berhasil di Edit');
		window.location='kelola_pengumuman.php'</script>";

	}else {
		echo "<script> alert('Pengumuman Gagal di Edit');
		window.location='kelola_pengumuman.php'</script>";
	}
?>
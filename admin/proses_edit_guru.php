<?php
include('../config/koneksi.php');
session_start();

$guru_id= $_POST['guru_id'];
$guru_nip= $_POST['guru_nip'];
$guru_nama= $_POST['guru_nama'];
$guru_jenkel= $_POST['guru_jenkel'];
$guru_tmp_lahir= $_POST['guru_tmp_lahir'];
$guru_tgl_lahir= $_POST['guru_tgl_lahir'];
$guru_mapel= $_POST['guru_mapel'];
$guru_pangkat=$_POST['guru_pangkat'];
$lokasi_file = $_FILES['guru_photo']['tmp_name'];
$nama_file = $_FILES['guru_photo']['name'];

if (empty($lokasi_file)) {
	$query = "UPDATE tbl_guru SET guru_nip='$guru_nip', guru_nama='$guru_nama', guru_jenkel='$guru_jenkel', guru_tmp_lahir='$guru_tmp_lahir', guru_tgl_lahir='$guru_tgl_lahir', guru_mapel='$guru_mapel', guru_pangkat='$guru_pangkat' WHERE guru_id='$guru_id'";
} else {
	move_uploaded_file($lokasi_file, 'image/guru/'.$nama_file);
	$query = "UPDATE tbl_guru SET guru_nip='$guru_nip', guru_nama='$guru_nama', guru_jenkel='$guru_jenkel', guru_tmp_lahir='$guru_tmp_lahir', guru_tgl_lahir='$guru_tgl_lahir', guru_mapel='$guru_mapel', guru_pangkat='$guru_pangkat', guru_photo='$nama_file' WHERE guru_id='$guru_id'";
}
$hasil = mysql_query($query);
	
	if($hasil){
		echo "<script> alert('Data Guru Berhasil di Edit');
		window.location='kelola_guru.php'</script>";

	}else {
		echo "<script> alert('Data Guru Gagal di Edit');
		window.location='kelola_guru.php'</script>";
	}

?>

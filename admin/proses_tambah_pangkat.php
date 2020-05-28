<?php
include('../config/koneksi.php');
session_start();

$pangkat= $_POST['pangkat'];
$golongan= $_POST['golongan'];
$jabatan= $_POST['jabatan'];
$cek = mysql_query("SELECT * FROM tbl_pangkat where pangkat='$pangkat'");

if(mysql_num_rows($cek)>0){
	echo "<script> alert('Pangkat $pangkat Sudah Ada, Tidak Bisa Tambah Data'); window.location='kelola_pangkat.php'</script>";

} else{
	$query ="INSERT INTO tbl_pangkat (pangkat, golongan, jabatan) VALUES ('$pangkat', '$golongan', '$jabatan')";
	$hasil =  mysql_query($query);

	if($hasil){
		echo "<script> alert('Data Pangkat Berhasil di Simpan');
		window.location='kelola_pangkat.php'</script>";

	}else {
		echo "<script> alert('Data Pangkat Gagal di Simpan');
		window.location='kelola_pangkat.php'</script>";
	}
}
?>

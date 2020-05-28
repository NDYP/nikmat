<?php
include('../config/koneksi.php');
session_start();

$guru_nip= $_POST['guru_nip'];
$guru_nama= $_POST['guru_nama'];
$guru_jenkel= $_POST['guru_jenkel'];
$guru_tmp_lahir= $_POST['guru_tmp_lahir'];
$guru_tgl_lahir= $_POST['guru_tgl_lahir'];
$guru_mapel= $_POST['guru_mapel'];
$guru_pangkat=$_POST['guru_pangkat'];
$lokasi_file = $_FILES['guru_photo']['tmp_name'];
$nama_file = $_FILES['guru_photo']['name'];
$cek = mysql_query("SELECT * FROM tbl_guru where guru_nip='$guru_nip'");

if(mysql_num_rows($cek)>0){
	echo "<script> alert('NIP $guru_nip Sudah Ada, Tidak Bisa Tambah Data'); window.location='kelola_guru.php'</script>";
}
elseif(empty($lokasi_file)){
	$query ="INSERT INTO tbl_guru (guru_nip, guru_nama, guru_jenkel, guru_tmp_lahir, guru_tgl_lahir, guru_mapel, guru_pangkat) VALUES ('$guru_nip', '$guru_nama', '$guru_jenkel', '$guru_tmp_lahir', '$guru_tgl_lahir', '$guru_mapel', '$guru_pangkat')";

} else{
	move_uploaded_file($lokasi_file, 'image/guru/'.$nama_file);
	$query = "INSERT INTO tbl_guru (guru_nip, guru_nama, guru_jenkel, guru_tmp_lahir, guru_tgl_lahir, guru_mapel, guru_pangkat, guru_photo) VALUES ('$guru_nip', '$guru_nama', '$guru_jenkel', '$guru_tmp_lahir', '$guru_tgl_lahir', '$guru_mapel', '$guru_pangkat', '$nama_file')";

}
	$hasil = mysql_query($query);
	if($hasil){
		echo "<script> alert('Data Guru Berhasil di Simpan');
		window.location='kelola_guru.php'</script>";

	}else {
		echo "<script> alert('Data Guru Gagal di Simpan');
		window.location='kelola_guru.php'</script>";
	}

?>



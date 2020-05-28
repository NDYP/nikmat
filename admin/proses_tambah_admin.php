<?php
include('../config/koneksi.php');
session_start();

$username= $_POST['username'];
$password= $_POST['password'];

$cek = mysql_query("SELECT * FROM tbl_admin where username='$username'");
if(mysql_num_rows($cek)>0){
	echo "<script> alert('Username $username Sudah Ada, Tidak Bisa Tambah Data'); window.location='kelola_admin.php'</script>";

} else{
	$query ="INSERT INTO tbl_admin (username, password) VALUES ('$username', '$password')";
	$hasil =  mysql_query($query);

	if($hasil){
		echo "<script> alert('Data Admin Berhasil di Simpan');
		window.location='kelola_admin.php'</script>";

	}else {
		echo "<script> alert('Data Admin Gagal di Simpan');
		window.location='kelola_admin.php'</script>";
	}
}
?>

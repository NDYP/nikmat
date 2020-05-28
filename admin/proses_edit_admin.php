<?php
include('../config/koneksi.php');
session_start();

$id_admin= $_POST['id_admin'];
$username= $_POST['username'];
$password= $_POST['password'];

	$query ="UPDATE tbl_admin  set username = '$username', password='$password' where id_admin='$id_admin'";
	$hasil =  mysql_query($query);

	if($hasil){
		echo "<script> alert('Data Admin Berhasil di Edit');
		window.location='kelola_admin.php'</script>";

	}else {
		echo "<script> alert('Data Admin Gagal di Edit');
		window.location='kelola_admin.php'</script>";
	}

?>

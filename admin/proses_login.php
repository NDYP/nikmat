<?php
include ("../config/koneksi.php");
error_reporting(0);
session_start();

$username= $_POST['username'];
$password= $_POST['password'];

$cek = mysql_query("SELECT * FROM tbl_admin where username='$username' and password='$password'");

if (mysql_num_rows($cek)>0) {
	session_start();
	$_SESSION['username']='$username';
	$_SESSION['password']='$password';

	echo "<script> alert('Selamat Datang $username');
	window.location='index.php'</script>";
}
    
else {
		echo "<script> alert('Username atau Password Salah');
		window.location='login.php'</script>";
	}
?>


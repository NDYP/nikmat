<?php
include('../config/koneksi.php');
session_start();

$visi= $_POST['visi'];
$misi= $_POST['misi'];

$cek = mysql_query("SELECT * FROM tbl_visi_misi where visi='$visi'");
if(mysql_num_rows($cek)>0){
	echo "<script> alert('Visi $visi Sudah Ada, Tidak Bisa Tambah Data'); window.location='kelola_visi_misi.php'</script>";

} else{
	$query ="INSERT INTO tbl_visi_misi (visi, misi) VALUES ('$visi', '$misi')";
	$hasil =  mysql_query($query);

	if($hasil){
		echo "<script> alert('Data Visi Misi Berhasil di Simpan');
		window.location='kelola_visi_misi.php'</script>";

	}else {
		echo "<script> alert('Data Visi Misi Gagal di Simpan');
		window.location='kelola_visi_misi.php'</script>";
	}
}
?>

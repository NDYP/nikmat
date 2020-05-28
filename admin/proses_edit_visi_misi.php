<?php
include('../config/koneksi.php');
session_start();

$deskripsi = $_POST['deskripsi'];
$id_tentang = $_POST['id_tentang'];
$lokasi_file = $_FILES['foto_tentang']['tmp_name'];
$nama_file = $_FILES['foto_tentang']['name'];



if (empty($lokasi_file)) {
	$query = "UPDATE tentang SET deskripsi ='$deskripsi'  WHERE id_tentang = '$id_tentang'";
} else {
	move_uploaded_file($lokasi_file, 'image/tentang/'.$nama_file);
	$query = "UPDATE tentang SET  deskripsi ='$deskripsi', foto_tentang='$nama_file' WHERE id_tentang='$id_tentang'";
}


$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert('Profil telah disimpan'); window.location = 'kelola_visi_misi.php'</script>";
} else {
	echo "<script> alert('Edit Profil Gagal'); window.location = 'kelola_visi_misi.php'</script>";
}
?>
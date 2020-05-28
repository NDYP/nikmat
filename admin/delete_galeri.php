<?php
include ('../config/koneksi.php');

$id_menu = $_GET['id'];

$query = "DELETE FROM tbl_galeri WHERE id_menu = '$id_menu'";

$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert('Menu Berhasil di Hapus'); window.location = 'kelola_galeri.php'</script>";
} else {
	echo "<script> alert('Menu Gagal di Hapus'); window.location = 'kelola_galeri.php'</script>";
}
?>
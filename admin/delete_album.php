<?php
include ('../config/koneksi.php');

$id_album = $_GET['id'];

$query = "DELETE FROM tbl_album WHERE id_album = '$id_album'";

$hasil = mysql_query($query);

if ($hasil) {
	echo "<script> alert('Album Berhasil di Hapus'); window.location = 'kelola_album.php'</script>";
} else {
	echo "<script> alert('Album Gagal di Hapus'); window.location = 'kelola_album.php'</script>";
}
?>
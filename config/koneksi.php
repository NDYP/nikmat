<?php

$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$dbname="nikmat";

mysql_connect($dbserver, $dbusername, $dbpassword) or die (mysql_error());
mysql_select_db($dbname) or die (mysql_error());

date_default_timezone_set('Asia/Jakarta'); 

$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari     = date("w");
$hari_ini = $seminggu[$hari]; // konversi menjadi hari bahasa indonesia

$tgl_sekarang = date("Ymd");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i:s");

// format penanggalan di database MySQL
$tanggal=date("Y-m-d"); 
$tgl_pengajuan=date("Y-m-d"); 
$tgl_mulai=date("Y-m-d"); 
$tgl_akhir=date("Y-m-d"); 

// fungsi untuk mengubah tanggal menjadi format bahasa indonesia, contoh: 14 Maret 2014 
function tgl_indo($tgl){
  $tanggal = substr($tgl,8,2);
  $bulan   = ambilbulan(substr($tgl,5,2)); // konversi menjadi nama bulan bahasa indonesia
  $tahun   = substr($tgl,0,4);
  return $tanggal.' '.$bulan.' '.$tahun;     
} 

// fungsi untuk mengubah angka bulan menjadi nama bulan
function ambilbulan($bln){
  if ($bln=="01") return "Januari";
  elseif ($bln=="02") return "Februari";
  elseif ($bln=="03") return "Maret";
  elseif ($bln=="04") return "April";
  elseif ($bln=="05") return "Mei";
  elseif ($bln=="06") return "Juni";
  elseif ($bln=="07") return "Juli";
  elseif ($bln=="08") return "Agustus";
  elseif ($bln=="09") return "September";
  elseif ($bln=="10") return "Oktober";
  elseif ($bln=="11") return "November";
  elseif ($bln=="12") return "Desember";
} 
?>
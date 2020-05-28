<?php
error_reporting(0);
session_start();
include ('../config/koneksi.php');

if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
  echo "<script> alert ('Silakan login terlebih dahulu'); 
        window.location = 'login.php'</script>"; 
    } else{   

  $sql=mysql_query('SELECT * from tbl_admin where username="'.$_SESSION['username'].'" LIMIT 1');
  while($rows=mysql_fetch_array($sql)){
  $username = $rows['username'];
}}

$admin=mysql_query("SELECT * FROM tbl_admin");
$data_admin= mysql_num_rows($admin);

$visi_misi=mysql_query("SELECT * FROM tbl_visi_misi");
$data_visi_misi= mysql_num_rows($visi_misi);

$struktur_sekolah=mysql_query("SELECT * FROM tbl_struktur_sekolah");
$data_struktur_sekolah= mysql_num_rows($struktur_sekolah);

$pangkat=mysql_query("SELECT * FROM tbl_pangkat");
$data_pangkat= mysql_num_rows($pangkat);

$guru=mysql_query("SELECT * FROM tbl_guru");
$data_guru= mysql_num_rows($guru);

$fasilitas=mysql_query("SELECT * FROM tbl_fasilitas");
$data_fasilitas= mysql_num_rows($fasilitas);

$galeri=mysql_query("SELECT * FROM tbl_galeri");
$data_galeri= mysql_num_rows($galeri);

$album=mysql_query("SELECT * FROM tbl_album");
$data_album= mysql_num_rows($album);

$pengumuman=mysql_query("SELECT * FROM tbl_pengumuman");
$data_pengumuman= mysql_num_rows($pengumuman);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Admin</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="tutwuri.png">
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
           
           <?php include "header.php" ?>

            <?php include "sidebar.php" ?>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Data Admin</div>
                                    <div><?php echo $data_admin; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-building-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Tentang</div>
                                    <div><?php echo $data_visi_misi; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sitemap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Data Struktur Sekolah</div>
                                    <div><?php echo $data_struktur_sekolah; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Data Guru</div>
                                    <div><?php echo $data_guru; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-clipboard fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Data Fasilitas</div>
                                    <div><?php echo $data_fasilitas; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-picture-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Data Galeri</div>
                                    <div><?php echo $data_galeri; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-picture-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Data Album</div>
                                    <div><?php echo $data_album; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-bullhorn fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Data Pengumuman</div>
                                    <div><?php echo $data_pengumuman; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="js/demo/dashboard-demo.js"></script>

</body>

</html>

<?php
include ("../config/koneksi.php");
error_reporting(0);
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
  echo "<script> alert ('Silakan login terlebih dahulu'); 
        window.location = 'login.php'</script>"; 
    } else{   

  $sql=mysql_query('SELECT * from tbl_admin where username="'.$_SESSION['username'].'" LIMIT 1');
  while($rows=mysql_fetch_array($sql)){
  $username = $rows['username'];
}}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMP Negeri 1 Arut Utara</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

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
                    <h1 class="page-header">Kelola Pengumuman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Pengumuman
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">

                                    <form enctype = 'multipart/form-data' role="form" action="proses_tambah_pengumuman.php" method="POST">
                                        
                                        <div class="form-group">
                                            <label>Judul Pengumuman</label>
                                            <input type="text" name="pengumuman_judul" class="form-control" placeholder="Isi Judul Pengumuman" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi Pengumuman</label>
                                            <textarea name ="pengumuman_deskripsi" class="ckeditor" required="required"></textarea>
                                        </div>

                                        <div class = "form-group">
                                            <label>Foto</label>
                                            <input type="file" name="pengumuman_foto" accept="image/*">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="pengumuman_tanggal" class="form-control" placeholder="Isi Tanggal" required="required">
                                        </div>                             

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pengumuman
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Pengumuman</th>
                                            <th>Deskripsi Pengumuman</th>
                                            <th>Foto</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i=1;
                                    $query = mysql_query("SELECT * FROM tbl_pengumuman");
                                    while ($isi = mysql_fetch_array($query)) {
                                    ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $isi['pengumuman_judul']; ?></td>
                                        <td><?php echo $isi['pengumuman_deskripsi']; ?></td>
                                        <td><image src="image/pengumuman/<?php echo $isi['pengumuman_foto']; ?>" style="width: 100px;height: 100px;"></td>
                                        <td><?php echo tgl_indo ($isi ['pengumuman_tanggal']); ?></td>

                                    <td>
                                    <a class="btn btn-primary btn-sm show-tooltip" title="Edit" href="edit_pengumuman.php?id=<?php echo $isi['pengumuman_id'];?>"> <i class="fa fa-edit"></i></a>

                                    <a class="btn btn-danger btn-sm show-tooltip" title="Hapus" href="delete_pengumuman.php?id=<?php echo $isi['pengumuman_id'];?>" onclick="return confirm('Yakin akan dihapus ?');"><i class="fa fa-trash-o"></i></a>    
                                    </td>
                                        
                                    </tr>
                                    
                                    <?php $i++; }; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

    <script src="ckeditor/ckeditor.js"></script>
</body>

</html>

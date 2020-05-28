<?php
include "../config/koneksi.php"
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Profil</title>

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
<?php
$query = mysql_query("SELECT * from tbl_profil");
$isi = mysql_fetch_array ($query);
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Profil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Profil
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">

                                    <form enctype = 'multipart/form-data' role="form" action="proses_edit_profil.php" method="POST">
                                        
                                        <div class="form-group">
                                            <?php 
                                            $query=mysql_query("SELECT * FROM tbl_profil");
                                            $isi=mysql_fetch_array($query);
                                            ?>
                                            <label>Isi Berita</label>
                                            <textarea name="isi_profil" class="ckeditor" required="required"><?php echo $isi['isi_profil']; ?></textarea>
                                        </div>

                                        
                                        <div class = "form-group">
                                            <label>Foto</label>
                                            <input type="file" name="foto" value="<?php echo $isi['foto']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <?php 
                                            $query=mysql_query("SELECT * FROM tbl_profil");
                                            $isi=mysql_fetch_array($query) 
                                            ?>
                                        
                                        <tr>
                                            <td><img src="image/profil/<?php echo $isi['foto']; ?>" style="width: 30%; height: 25%;"></td>
                                        </tr> 
                                        </div>                              

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-danger" onclick = "var x = window.location ='index.php'">Batal</button>
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

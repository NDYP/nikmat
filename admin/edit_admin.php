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

        <?php
        $query = mysql_query("SELECT * FROM tbl_admin where id_admin='$_GET[id]'");
        $isi = mysql_fetch_array($query);
        ?>
         
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Admin
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

                                    <form role="form" action="proses_edit_admin.php" method="POST">
                                        <input type="hidden" name="id_admin" value="<?php echo $isi['id_admin']; ?>"/>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control"  placeholder="username" required="required" value="<?php echo $isi['username'] ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control"  placeholder="password" required="required" value="<?php echo $isi['password'] ?>">
                                        </div>

    
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-danger" onclick="var x = window.location ='kelola_admin.php'">Batal</button>
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

</body>

</html>

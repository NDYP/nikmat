<?php
include("../config/koneksi.php");
error_reporting(0);
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<script> alert ('Silakan login terlebih dahulu'); 
        window.location = 'login.php'</script>";
} else {

    $sql = mysql_query('SELECT * from tbl_admin where username="' . $_SESSION['username'] . '" LIMIT 1');
    while ($rows = mysql_fetch_array($sql)) {
        $username = $rows['username'];
    }
}
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
        $query = mysql_query("SELECT tbl_pangkat.*, tbl_guru.* FROM tbl_pangkat LEFT JOIN tbl_guru ON tbl_pangkat.`id_pangkat` = tbl_guru.`guru_pangkat` WHERE guru_id='$_GET[id]'");
        $isi = mysql_fetch_array($query);
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Guru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

                                    <form enctype='multipart/form-data' role="form" action="proses_edit_guru.php" method="POST">
                                        <input type="hidden" name="guru_id" value="<?php echo $isi['guru_id']; ?>" />

                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" name="guru_nip" class="form-control" placeholder="NIP" value="<?php echo $isi['guru_nip']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="guru_nama" class="form-control" placeholder="Nama" required="required" value="<?php echo $isi['guru_nama']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <input type="radio" name="guru_jenkel" value="<?php echo $isi['guru_jenkel']; ?>">L
                                            <input type="radio" name="guru_jenkel" value="<?php echo $isi['guru_jenkel']; ?>">P
                                        </div>


                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="guru_tmp_lahir" class="form-control" placeholder="Tempat Lahir" required="required" value="<?php echo $isi['guru_tmp_lahir']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="guru_tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required="required" value="<?php echo $isi['guru_tgl_lahir']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Mata Pelajaran</label>
                                            <input type="text" name="guru_mapel" class="form-control" placeholder="Mata Pelajaran" required="required" value="<?php echo $isi['guru_mapel']; ?>">
                                        </div>

                                        <div class='form-group'>
                                            <label>Pilih Pangkat</label>
                                            <select type="text" name="guru_pangkat" data-rule-required="true" class='form-control'>
                                                <option value="<?php echo $isi['id_pangkat'] ?>"><?php echo $isi['pangkat'] ?></option>
                                                <?php
                                                $tampil = mysql_query("SELECT * FROM tbl_pangkat");
                                                while ($r = mysql_fetch_array($tampil)) {
                                                    echo "<option value=$r[id_pangkat]>$r[pangkat]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="guru_photo" value="<?php echo $isi['guru_photo']; ?>">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-danger" onclick="var x = window.location =' kelola_galeri.php'">Batal</button>
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
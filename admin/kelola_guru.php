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

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Guru</h1>
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

                                    <form enctype='multipart/form-data' role="form" action="proses_tambah_guru.php" method="POST">

                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" name="guru_nip" class="form-control" placeholder="NIP">
                                            <div class="alert alert-danger" role="alert">
                                                A simple danger alert—check it out!
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="guru_nama" class="form-control" placeholder="Nama" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <input type="radio" name="guru_jenkel" value="L">L
                                            <input type="radio" name="guru_jenkel" value="P">P
                                        </div>


                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="guru_tmp_lahir" class="form-control" placeholder="Tempat Lahir" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="guru_tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label>Mata Pelajaran</label>
                                            <input type="text" name="guru_mapel" class="form-control" placeholder="Mata Pelajaran" required="required">
                                        </div>

                                        <div class='form-group'>
                                            <label>Pilih Pangkat</label>
                                            <select type="text" name="guru_pangkat" class='form-control'>
                                                <option value="">-- Pilih Pangkat --</option>
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
                                            <input type="file" name="guru_photo" accept="image/*">
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
                            Data Kelola Guru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>JK</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Pangkat</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        $query = mysql_query("SELECT tbl_guru.*, tbl_pangkat.* FROM tbl_guru LEFT JOIN tbl_pangkat ON tbl_guru.`guru_pangkat` = tbl_pangkat.`id_pangkat`");
                                        while ($isi = mysql_fetch_array($query)) {
                                            ?>

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $isi['guru_nip']; ?></td>
                                                <td><?php echo $isi['guru_nama']; ?></td>
                                                <td><?php echo $isi['guru_jenkel']; ?></td>
                                                <td><?php echo $isi['guru_tmp_lahir']; ?></td>
                                                <td><?php echo $isi['guru_tgl_lahir']; ?></td>
                                                <td><?php echo $isi['guru_mapel']; ?></td>
                                                <td><?php echo $isi['pangkat']; ?></td>
                                                <td>
                                                    <image src="image/guru/<?php echo $isi['guru_photo']; ?>" style="width: 100px;height: 100px;">
                                                </td>

                                                <td>
                                                    <a class="btn btn-primary btn-sm show-tooltip" title="Edit" href="edit_guru.php?id=<?php echo $isi['guru_id']; ?>"><i class="fa fa-edit"></i></a>

                                                    <a class="btn btn-danger btn-sm show-tooltip" title="Hapus" href="delete_guru.php?id=<?php echo $isi['guru_id']; ?>" onclick="return confirm('Yakin akan dihapus ?');"><i class="fa fa-trash-o"></i></a>
                                                </td>

                                            </tr>

                                        <?php $i++;
                                        }; ?>
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
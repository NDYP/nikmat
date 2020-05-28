<?php include ('config/koneksi.php'); 
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>SMP NEGERI 1 ARUT UTARA</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">                          
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/owl.carousel.css">         
            <link rel="stylesheet" href="css/jquery-ui.css">            
            <link rel="stylesheet" href="css/main.css">
</head><!--/head-->
<body>

 
 <?php include "header.php" ?>

 <section class="banner-area relative about-banner" id="home">  
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Data Guru             
                            </h1>   
                            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="profil.php"> Data Guru</a></p>
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    

  <!-- Start feature Area -->
            <section class="info-area pb-120">
                <div class="container-fluid">
                    <div class="title text-center">  
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
                            </tr>
                    </thead>
                    <tbody>

                    <?php
                    $i=1;
                                    $query = mysql_query("SELECT * FROM tbl_guru");
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
                                        <td><image src="image/guru/<?php echo $isi['guru_photo']; ?>" style="width: 100px;height: 100px;"></td>
                                    </tr>
                                    
                                    <?php $i++; }; ?>
                                    </tbody>
                                </table>
                </div>
                </div>
            </section>
            <!-- End info Area -->   
    
    <?php include "footer.php" ?>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>          
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="js/easing.min.js"></script>            
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script> 
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script> 
        <script src="js/jquery.tabs.min.js"></script>                       
        <script src="js/jquery.nice-select.min.js"></script>    
        <script src="js/owl.carousel.min.js"></script>                                  
        <script src="js/mail-script.js"></script>   
        <script src="js/main.js"></script>  
</body>
</html>
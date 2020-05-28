<?php include ('config/koneksi.php'); 
error_reporting(0);
$dataperpage =  mysql_query("SELECT tbl_guru.*, tbl_pangkat.* FROM tbl_guru LEFT JOIN tbl_pangkat ON tbl_guru.`guru_pangkat` = tbl_pangkat.`id_pangkat`");
$numpage = mysql_num_rows($dataperpage);
$start = $_GET['start'];
$eu = $start - 0;
$limit = 3;
$thisp = $eu + $limit;
$back = $eu - $limit;
$next = $eu + $limit;
if (strlen($start) > 0 && !is_numeric($start)) {
        echo 'Data Error';
        exit();
    }

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
            <link rel="shortcut icon" href="tutwuri.png">
</head><!--/head-->
        <body background="img/BG.jpg">  

 
 <?php include "header.php" ?>

            <section class="banner-area relative about-banner" id="home">  
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Data Guru             
                            </h1>   
                            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="guru.php"> Data Guru</a></p>
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    

  <!-- Start feature Area -->
            
            <section class="event-details-area section-gap">
                <div class="container">
                    <div class="row align-items-center">
        <?php 
        $sql = mysql_query("SELECT tbl_guru.*, tbl_pangkat.* FROM tbl_guru LEFT JOIN tbl_pangkat ON tbl_guru.`guru_pangkat` = tbl_pangkat.`id_pangkat` limit $eu, $limit");
        while ($data = mysql_fetch_array($sql)) { 
        ?>
            <div class="col-md-4">
                       
            <?php 
            $guru_photo = $data['guru_photo'];
            if (empty($guru_photo)){
             echo "<center><img src='admin/image/guru/default.jpg' style='width:250px; height:250px;'></center>";    
            } else {
             echo "<image><img src='admin/image/guru/$guru_photo' style='width:250px; height:250px;'></center>"; 
            }
            
            ?>
            
            </div> 
            
            <div class="col-md-6">  
                <br></br>
            <div class="form-group">
                <div class="col-md-12 ">
                        <h5 for="guru_nama">Nama</h5>
                        <div class="mt-10">
                           
                                <input type="text" value="<?php echo $data['guru_nama']; ?>" disabled name="guru_nama" required="required" class="form-group col-md-12  col-xs-12">           
                                       
                        </div>                                               
                </div>
                </div>

            
               <div class="form-group">
                <div class="col-md-12 ">
                        <h5 for="guru_nip">NIP</h5>
                        <div class="mt-10">
                            
                                <input type="text" value="<?php echo $data['guru_nip']; ?>" disabled name="guru_nip" required="required" class="form-group col-md-12  col-xs-12">   
                           
                            </div>                                                      
                </div>
                </div>

            
                <div class="form-group">
                 <div class="col-md-12 ">
                        <h5 for="pangkat">Pangkat</h5>
                        <div class="mt-10">
                          
                                <input type="text" value="<?php echo $data['pangkat']; ?>" disabled name="pangkat" required="required" class="form-group col-md-12  col-xs-12">                   
                        </div>                                        
                </div>
                </div>

                <div class="form-group">
                 <div class="col-md-12 ">
                        <h5 for="guru_tmp_lahir, guru_tgl_lahir">Tempat Tanggal Lahir</h5>
                        <div class="mt-10">
                          
                                <input type="text" value="<?php echo $data['guru_tmp_lahir']; ?> , <?php echo $data['guru_tgl_lahir']; ?>" disabled name="guru_tmp_lahir, guru_tgl_lahir" required="required" class="form-group col-md-12  col-xs-12">                   
                        </div>                                        
                </div>
                </div>

                <div class="form-group">
                 <div class="col-md-12 ">
                        <h5 for="guru_mapel">Mata Pelajaran</h5>
                        <div class="mt-10">
                          
                                <input type="text" value="<?php echo $data['guru_mapel'];?>" disabled name="guru_mapel" required="required" class="form-group col-md-12  col-xs-12">                   
                        </div>                                        
                </div>
                </div>
                </div>        
       
       <div></div>            
    <?php } ?>
    </section>

    <div class="col-md-12">
             <?php if ($numpage > $limit) { ?>
       
                           <ul class="blog-pagination justify-content-center d-flex">
                            <?php
                            if ($back >= 0) {
                                echo "<li><h2><a href=$page?start=$back>&nbsp;PREV&nbsp;</a></h2></li>";
                            }
                            $l = 1;
                            for ($i = 0; $i < $numpage; $i = $i + $limit) {
                                if ($i <> $eu) {
                                    echo "<li><h2><a href=$page?start=$i>&nbsp;$l&nbsp;</a></h2></li>";
                                } else {
                                    echo "<li class='page-link'><a>&nbsp;$l&nbsp;</a></li>";
                                }
                                $l = $l + 1;
                            }
                            if ($thisp < $numpage) {
                                echo "<li><h2><a href=$page?start=$next> NEXT </a></h2></li>";
                            }
                            echo "</ul>";
                        }
                        ?>
                        </div>
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
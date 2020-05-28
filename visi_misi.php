<?php include ('config/koneksi.php'); 
error_reporting(0);
$dataperpage =  mysql_query("SELECT * FROM tbl_visi_misi");
$numpage = mysql_num_rows($dataperpage);
$start = $_GET['start'];
$eu = $start - 0;
$limit = 50;
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
<body>

 
 <?php include "header.php" ?>

 <section class="banner-area relative about-banner" id="home">  
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Visi dan Misi              
                            </h1>   
                            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="visi_misi.php"> Visi dan Misi</a></p>
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    
                   
            <br></br>
            <section class="info-area col-md-12">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                      <?php 
                    $sql=mysql_query("SELECT * FROM tbl_visi_misi");
                    while ($data = mysql_fetch_array($sql)) {
                    ?>

                        <h1 class="text-black"> Visi </h1>
                        <p><?php echo $data["visi"]?></p>

                        <h1 class="text-black"> Misi</h1>
                        <p><?php echo $data["misi"]?></p>
                       
                      

                <?php } ?>
                </div>
                </div>
                </div>
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                      <?php 
                    $sql=mysql_query("SELECT * FROM tbl_visi_misi");
                    while ($data = mysql_fetch_array($sql)) {
                    ?>

                        <h1 class="text-black"> Visi </h1>
                        <p><?php echo $data["visi"]?></p>

                        <h1 class="text-black"> Misi</h1>
                        <p><?php echo $data["misi"]?></p>
                       
                      

                <?php } ?>
                </div>
                </div>
                </div>
                </div>  
            </section>
            <!-- End popular-courses Area -->       
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
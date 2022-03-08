


<?php
require "./database/dataconn.php";
require "./user_info.php";
$myinfo=mysqli_fetch_array($result); 
    $myname = $myinfo['Full_names'];
 if (!isset($_SESSION['email'])) {
     header ("Location:Login.php");
 }
 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Africlad Major Store </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/preloader.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/backToTop.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="assets/css/ui-range-slider.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
      
        <!-- preloader area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header area start -->
        <?php require "header.php"?>
        <!-- header area end -->

       
        <main>
            
            <!-- breadcrumb area start -->
            <section class="breadcrumb__area box-plr-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">My Account</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

           
            <section class="blog__area box-plr-75 pb-70">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-3 col-lg-4">
                            <div class="sidebar__widget">
                                <div class="sidebar__widget-item mb-35">
                                    <h3 class="sidebar__widget-title mb-10">Hi_<?php echo $myname?></h3>
                                    <div class="sidebar__categories">
                                        <ul>

                                            <li><a href="Account.php">Home </a></li>
                                            <li><a href="recentuploads.php">Recent uploads </a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xxl-10 col-xl-9 col-lg-8 order-first order-lg-last">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="postbox__wrapper">
                                        <article class="postbox__item format-image mb-50 transition-3">
                                            <div class="postbox__content">
                                            <strong>Full names: </strong><?php echo $myinfo['Full_names']; ?><br>
                                            <strong>Your Email: </strong><?php echo $myinfo['Email']; ?><br>
                                            <strong>Phone number: </strong><?php echo $myinfo['Phone_Number']; ?><br>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog area end -->
 
        </main>

        <!-- footer area start -->
       <?php require "footer.php"?>
        <!-- footer area end -->

		<!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendor/waypoints.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/meanmenu.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/backToTop.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/countdown.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/jquery-ui-slider-range.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>

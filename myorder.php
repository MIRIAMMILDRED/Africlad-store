
<?php
require "./database/dataconn.php";
require "./cart_info.php";

?><!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Africlad Majore store </title>
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

       
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

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
                                      <li class="breadcrumb-item active" aria-current="page">Your Orders</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- Cart Area Strat-->
            <section class="cart-area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="product-price">Unit Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                              $sql="SELECT * FROM orders WHERE user_idx='$user_id'";
                                             $result=mysqli_query($conn,$sql);
                                                while ($myord=mysqli_fetch_array($result)) {
                                                    $st = $myord['statusx'];
                                                    $ord_id = $myord['order_id'];
                                                    $sql3="SELECT * FROM ordered_products WHERE order_id='$ord_id'";
                                                    $result3=mysqli_query($conn,$sql3);
                                                      while ($myprod=mysqli_fetch_array($result3)) {


                                                    $id_product = $myprod['product_id'];
                                        
                                                    $sqlstmt="SELECT * FROM products WHERE id='$id_product'";
                                                    $result2=mysqli_query($conn,$sqlstmt);
                                                    $product_info=mysqli_fetch_array($result2);
                                                    $quantity = $myprod['quantity'];
                                                    
                                                    $total_price=$product_info['Price']*$quantity ?>
                                            <tr>
                                                <td class="product-thumbnail"><a href="product-details.php"> <img src="./product_pictures/<?php echo $product_info['image']; ?>" alt=""></td>
                                                <td class="product-name"><a href="product-details.php"><?php echo $product_info['product_name'];?>  </a></td>
                                                <td class="product-price"><span class="amount">Ksh <a href="product-details.php"><?php echo $product_info['Price'];?>  </a></span></td>
                                                <td class="product-quantity">
                                                    <button class="t-y-btn t-y-btn-grey" type="submit"><?php echo $quantity?></button>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">Ksh <?php echo $total_price?></span></td>
                                                <td class="product-remove"><?php echo $st; ?></td><?php } }?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Cart Area End-->
 
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

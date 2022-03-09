


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Africlad Major Store</title>
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
                                      <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Update category</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- login Area Strat-->
            <section class="login-area pb-100">
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                            <div class="basic-login">
                            <h3 class="text-center mb-60">Update Product Categories</h3>
                            <?php
                           if (isset($_GET['warn'])) {
                            $alert = $_GET['warn'];
                            ?><script>alert('<?php echo $alert; ?>')</script><?php }
                        ?>
                            <form action="updatecategory.php" method="post">
                                <label for="name">Select Product</label>
                                <input id="name" type="text" name="product" list="lists" required />
                                <datalist id="lists">
                                    <?php
                                    $ss = mysqli_query($conn, "SELECT * FROM products WHERE verification='verfied'"); 
                                    while($product = mysqli_fetch_array($ss)){
                                        ?><option value="<?php echo $product['id']; ?>"><?php echo $product['product_name']." ".$product['Price']; ?></option><?php
                                    }
                                    ?>
                                </datalist>
                                <label for="pass">Select Category</label>
                                <select name="category" id="">
                                    <option value="">Select a category for the product</option>
                                    <option value="Featured">Featured</option>
                                    <option value="Hot">Hot</option>
                                    <option value="none">None</option>
                                </select>
                                <br><br><br>
                                <button type="submit" name="submit" class="t-y-btn w-100">Update Category</button>
                            </form>
                            </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- login Area End-->
 
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

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
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

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
      <!-- <?php //require "header.php"?>  -->
        <!-- header area end -->

        <!-- offcanvas area start -->
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.php">
                    <img src="assets/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-2 fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
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
                                      <li class="breadcrumb-item active" aria-current="page">Register</li>
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
                                <h3 class="text-center mb-60">Add New product Here</h3>
                                <?php 
                                if (isset($_GET['info'])) {
                                    $alert = $_GET['info'];
                                    ?><script>alert('<?php echo $alert; ?>')</script><?php }
                                if (isset($_GET['warn'])) {
                                    $alert = $_GET['warn'];
                                    ?><script>alert('<?php echo $alert; ?>')</script><?php }
                                ?>
                                <form action="pserver.php" method="POST" enctype="multipart/form-data">
                                     <label for="p-name">Product Name<span>**</span></label>
                                    <input id="p-name"name="product_name"required  type="text" placeholder="Product Name" />
                                    <label for="p-price">Product Price <span>**</span></label>
                                    <input id="p-price" type="number" required  name="Price"placeholder="2500" />
                                    <label for="Description">Product Description <span>**</span></label>
                                    <textarea name="Description" id="Description" cols="30" style="width: 100%;"></textarea>
                                    <label for="stock"> Inventory <span>**</span></label>
                                    <input id="stock" type="number"required name="stock" placeholder="100" />
                                    <label for="upload">Upload image or file one <span>**</span></label>
                                    <input id="upload" type="file" required name="image"placeholder="Upload file..." />
                                    <label for="upload">Upload image or file of the same <span>**</span></label>
                                    <input id="upload" type="file" required name="image2"placeholder="Upload file..." />
                                    <div class="mt-10"></div>
                                    <label for="p-category">Product category <span>**</span></label>
                                    <select name="category" id="" required>
                                        <option value="111">Accesories and jewelry</option>
                                        <option value="222">Deco products</option>
                                        <option value="333">Men Fashion</option>
                                        <option value="444">Female fashion</option>
                                        <option value="555">Kids fashion</option>
                                        <option value="666">Health & Beauty</option>
                                        <option value="777">Bags</option>
                                        <option value="888">Groceries</option>
                                        <option value="999">Shoes</option>
                                        <option value="1111">Art &Craft</option>
                                        <option value="2222">Music & Movies</option>
                                    </select><br><br>
                                    <label for="p-color">Product color <span>**</span></label>
                                    <select name="color" id="rt"style="width:1000px !important;"required>
                                        <option value="blue">Blue</option>
                                        <option value="black">Black</option>
                                        <option value="red">Red</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="Green">Green</option>
                                        <option value="pink">Pink</option>
                                        <option value="maroon">Maroon</option>
                                        <option value="Mixed">Mixed</option>
                                    </select><br><br>
                                    <button class="t-y-btn w-100">Add product</button>
                                    
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

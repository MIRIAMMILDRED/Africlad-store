<?php
require "./database/dataconn.php";
$id = $_GET['id'];
$sql="SELECT * FROM products WHERE id='$id'";
$rsult=mysqli_query($conn,$sql);
if ($rsult) {
    $product=mysqli_fetch_array($rsult);
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
                                      <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- product area start -->
            <section class="product__area box-plr-75 pb-70">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5">
                            <div class="product__details-nav d-sm-flex align-items-start">
                                <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="thumbOne-tab" data-bs-toggle="tab" data-bs-target="#thumbOne" type="button" role="tab" aria-controls="thumbOne" aria-selected="true">
                                          <img src="./product_pictures/<?php echo $product['image'];?>" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbTwo-tab" data-bs-toggle="tab" data-bs-target="#thumbTwo" type="button" role="tab" aria-controls="thumbTwo" aria-selected="false">
                                        <img src="./product_pictures/<?php echo $product['image2'];?>" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbThree-tab" data-bs-toggle="tab" data-bs-target="#thumbThree" type="button" role="tab" aria-controls="thumbThree" aria-selected="false">
                                        <img src="./product_pictures/<?php echo $product['image'];?>" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbFour-tab" data-bs-toggle="tab" data-bs-target="#thumbFour" type="button" role="tab" aria-controls="thumbFour" aria-selected="false">
                                        <img src="./product_pictures/<?php echo $product['image2'];?>" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbFive-tab" data-bs-toggle="tab" data-bs-target="#thumbFive" type="button" role="tab" aria-controls="thumbFive" aria-selected="false">
                                        <img src="./product_pictures/<?php echo $product['image'];?>" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbSix-tab" data-bs-toggle="tab" data-bs-target="#thumbSix" type="button" role="tab" aria-controls="thumbSix" aria-selected="false">
                                        <img src="./product_pictures/<?php echo $product['image2'];?>" alt="">
                                      </button>
                                    </li>
                                </ul>
                                <div class="product__details-thumb">
                                    <div class="tab-content" id="productThumbContent">
                                        <div class="tab-pane fade show active" id="thumbOne" role="tabpanel" aria-labelledby="thumbOne-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="./product_pictures/<?php echo $product['image'];?>" alt="" width="100%">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbTwo" role="tabpanel" aria-labelledby="thumbTwo-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="./product_pictures/<?php echo $product['image2'];?>" alt="" width="100%">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbThree" role="tabpanel" aria-labelledby="thumbThree-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="./product_pictures/<?php echo $product['image'];?>" alt="" width="100%">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbFour" role="tabpanel" aria-labelledby="thumbFour-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="./product_pictures/<?php echo $product['image2'];?>" alt="" width="100%">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbFive" role="tabpanel" aria-labelledby="thumbFive-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="./product_pictures/<?php echo $product['image'];?>" alt="" width="100%">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbSix" role="tabpanel" aria-labelledby="thumbSix-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="./product_pictures/<?php echo $product['image'];?>" alt="" width="100%">
                                            </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7">
                            <div class="product__details-wrapper">
                                <div class="product__details">
                                    <h3 class="product__details-title">
                                        <a href="product-details.php"><?php echo $product['product_name']?></a>
                                    </h3>
                                    <div class="product__review d-sm-flex">
                                        <div class="rating rating__shop mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__add-review mb-15">
                                        <span><a href="#">1 Review</a></span>
                                        <span><a href="#">Add Review</a></span>
                                        </div>
                                    </div>
                                    <div class="product__price">
                                        <span class="new">ksh <?php echo $product['Price']; ?></span>
                                        <span class="old">ksh <?php echo $product['Price']+(mt_rand(1,9)*50); ?></span>
                                    </div>
                                    <div class="product__stock">
                                        <span>Availability :</span>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="product__stock sku mb-30">
                                        <span>SKU:</span>
                                        <span><?php echo $product['product_name'];?></span>
                                    </div>
                                    <div class="product__details-des mb-30">
                                        <p><?php echo $product['Description'];?></p>
                                    </div>
                                    <div class="product__details-stock">
                                        <h3><span>Hurry Up!</span> Only <?php echo $product['stock'];?> products left in stock.</h3>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-width="100%"></div>
                                          </div>
                                    </div>
                                    <div class="product__details-quantity mb-20">
                                        <!-- <form action="cart.php"> -->
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                <a href="addcart.php?id=<?php echo $product['id']; ?>&page=product-details.php?id=<?php echo $product['id']; ?>"><button class="t-y-btn">Add to cart</button></a>
                                                </div>
                                            </div>
                                        <!-- </form> -->
                                    </div>
                                    <div class="product__details-action">
                                        <ul>
                                            <li><a href="wishlist.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                            
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </section>
            <!-- product area end -->
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

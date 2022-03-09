<?php
require "./database/dataconn.php";
require "./cart_info.php";
$all=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM products"));
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Africlad major store </title>
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
        <?php require "header.php"; ?>
        <!-- header area end -->

      
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

        <main>
            <!-- slider area satrt -->
            <?php require "menu.php"; ?>
            <!-- slider area end -->

            <!-- features area start -->
            <section class="features__area grey-bg-2 pt-40 pb-20 pl-10 pr-10">
                <div class="container">
                    <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-rocket-launch"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Free Shipping</h6>
                                    <p>Free Shipping On All Order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-sync"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Money Guarantee</h6>
                                    <p>30 Day Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-user-headset"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Online Support 24/7</h6>
                                    <p>Technical Support Stand By</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-thumbs-up"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Secure Payment</h6>
                                    <p>All Payment Method are accepted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item features__item-last d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-badge-dollar"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Member Discount</h6>
                                    <p>Upto 40% Discount All Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features area end -->

            <!-- banner area start -->
            <section class="banner__area pt-20 pb-10 grey-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item w-img mb-30">
                                <a href="product-details.php"><img src="./assets/img/banner/banner-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="product-details.html"><img src="assets/img/banner/banner-2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="product-details.html"><img src="assets/img/banner/banner-3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

            <!-- best selling area start -->
            <section class="best__sell pt-15 pb-40 grey-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-md-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>Best Selling<span>Products</span></h3>
                                </div>
                                <div class="product__nav-tab mr-75">
                                    <ul class="nav nav-tabs" id="best-sell-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="new" aria-selected="true">New Arrival</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="false">Featured</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="hot-tab" data-bs-toggle="tab" data-bs-target="#hot" type="button" role="tab" aria-controls="hot" aria-selected="false">Hot Sale</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="random-tab" data-bs-toggle="tab" data-bs-target="#random" type="button" role="tab" aria-controls="random" aria-selected="false">Random</button>
                                        </li>
                                      </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tab-content" id="best-sell">
                                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                    <div class="product__slider owl-carousel">
                                        <?php
                                        $hour_ago_24 = $time - (24*3600);
                                        $prod = mysqli_query($conn, "SELECT * FROM products WHERE time_added>'$hour_ago_24' AND verification='verfied' ORDER BY time_added DESC");
                                        while ($product = mysqli_fetch_array($prod)) {
                                            ?><div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.php?id=<?php echo $product['id']; ?>" class="w-img">
                                                    <img src="./product_pictures/<?php echo $product['image']; ?>" alt="product" style="height: 200px;">
                                                    <img class="second-img" src="./product_pictures/<?php echo $product['image2']; ?>" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.php?id=<?php echo $product['id']?>">
                                                        <?php echo $product['product_name']; ?>
                                                    </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">KSH <?php echo $product['Price']; ?></span>
                                            </div>
                                            <div class="product__add-btn">
                                            <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                            </div>
                                        </div><?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                    <div class="product__slider owl-carousel">
                                    <?php
                                        $prod = mysqli_query($conn, "SELECT * FROM products WHERE special_categ='featured' AND verification='verfied'");
                                        while ($product = mysqli_fetch_array($prod)) {
                                            ?><div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.php?id=<?php echo $product['id']?>" class="w-img">
                                                    <img src="./product_pictures/<?php echo $product['image']; ?>" alt="product" style="height: 200px;">
                                                    <img class="second-img" src="./product_pictures/<?php echo $product['image2']; ?>" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=product.php?id=<?php echo $id; ?>" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.php?id=<?php echo $product['id']?>">
                                                        <?php echo $product['product_name']; ?>
                                                    </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">KSH <?php echo $product['Price']; ?></span>
                                            </div>
                                            <div class="product__add-btn">
                                                <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                            </div>
                                        </div><?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="hot" role="tabpanel" aria-labelledby="hot-tab">
                                    <div class="product__slider owl-carousel">
                                    <?php
                                        $prod = mysqli_query($conn, "SELECT * FROM products WHERE special_categ='hot' AND verification='verfied'");
                                        while ($product = mysqli_fetch_array($prod)) {
                                            ?><div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.php?id=<?php echo $product['id']?>" class="w-img">
                                                    <img src="./product_pictures/<?php echo $product['image']; ?>" alt="product" style="height: 200px;">
                                                    <img class="second-img" src="./product_pictures/<?php echo $product['image2']; ?>" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.php?id=<?php echo $product['id']?>">
                                                        <?php echo $product['product_name']; ?>
                                                    </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">KSH <?php echo $product['Price']; ?></span>
                                            </div>
                                            <div class="product__add-btn">
                                            <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                            </div>
                                        </div><?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="random" role="tabpanel" aria-labelledby="random-tab">
                                    <div class="product__slider owl-carousel">
                                    <?php
                                        $prod = mysqli_query($conn, "SELECT * FROM products WHERE verification='verfied'");
                                        while ($product = mysqli_fetch_array($prod)) {
                                            ?><div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.php?id=<?php echo $product['id']?>" class="w-img">
                                                    <img src="./product_pictures/<?php echo $product['image']; ?>" alt="product" style="height: 200px;">
                                                    <img class="second-img" src="./product_pictures/<?php echo $product['image2']; ?>" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.php?id=<?php echo $product['id']?>">
                                                        <?php echo $product['product_name']; ?>
                                                    </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">KSH <?php echo $product['Price']; ?></span>
                                            </div>
                                            <div class="product__add-btn">
                                            <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                            </div>
                                        </div><?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best selling area end -->

            <!-- Flash sell area start -->
            <section class="flash__sell pt-25 pb-40 grey-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-md-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>Top Flash<span>Deals</span></h3>
                                </div>
                                <div class="product__nav-tab"> 
                                    <ul class="nav nav-tabs" id="flast-sell-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="computer-tab" data-bs-toggle="tab" data-bs-target="#computer" type="button" role="tab" aria-controls="computer" aria-selected="true">Mens Fashion</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="samsung-tab" data-bs-toggle="tab" data-bs-target="#samsung" type="button" role="tab" aria-selected="false">Female Fashion</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="htc-tab" data-bs-toggle="tab" data-bs-target="#htc" type="button" role="tab" aria-selected="false">Kids Fashion</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="nokia-tab" data-bs-toggle="tab" data-bs-target="#nokia" type="button" role="tab" aria-selected="false">Bags</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="cell-tab" data-bs-toggle="tab" data-bs-target="#cell" type="button" role="tab"  aria-selected="false">Art &Craft</button>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tab-content" id="flast-sell-tabContent">
                                <div class="tab-pane fade show active" id="computer" role="tabpanel"                  aria-labelledby="computer-tab">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                                <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND category='333' ORDER BY id DESC LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                        <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                            
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND category='333' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result' AND category='333'LIMIT 1");
                                                while ($product=mysqli_fetch_array($prod)) { ?>
                                            <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                        <p><?php echo $product['Description']?></p>
                                                        <div class="add-cart">
                                                            <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-8);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND  id >'$result' AND category='333'LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                              <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-8);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='333' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                             <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                                ?>
                                                </div>
                                    </div>
                                      
                                </div>
                                <div class="tab-pane fade" id="samsung" role="tabpanel" aria-labelledby="samsung-tab">
                                <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                                <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND category='444'ORDER BY id DESC LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                        <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                            
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND category='444' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result' AND category='444'LIMIT 1");
                                                while ($product=mysqli_fetch_array($prod)) { ?>
                                            <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                        <p><?php echo $product['Description']?></p>
                                                        <div class="add-cart">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button class="t-y-btn t-y-btn-2">add to cart</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='444' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                              <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='444' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                             <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                                ?>
                                                </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="htc" role="tabpanel" aria-labelledby="htc-tab">
                                <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                                <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND category='555' ORDER BY id DESC LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                        <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                            
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND category='555' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result' AND category='555' LIMIT 1");
                                                while ($product=mysqli_fetch_array($prod)) { ?>
                                            <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                        <p><?php echo $product['Description']?></p>
                                                        <div class="add-cart">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button class="t-y-btn t-y-btn-2">add to cart</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result' AND category='555' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                              <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result' AND category='555'LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                             <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                                ?>
                                                </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nokia" role="tabpanel" aria-labelledby="nokia-tab">
                                <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                                <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='777'  LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                        <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                            
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result' AND category='777'LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='777' LIMIT 1");
                                                while ($product=mysqli_fetch_array($prod)) { ?>
                                            <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                        <p><?php echo $product['Description']?></p>
                                                        <div class="add-cart">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button class="t-y-btn t-y-btn-2">add to cart</button></a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'  AND category='777'LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                              <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result' AND category='777' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                             <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                                ?>
                                                </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cell" role="tabpanel" aria-labelledby="cell-tab">
                                <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                                <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='1111' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                        <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                            
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='1111'  LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                                    <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='1111'  LIMIT 1");
                                                while ($product=mysqli_fetch_array($prod)) { ?>
                                            <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                        <p><?php echo $product['Description']?></p>
                                                        <div class="add-cart">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button class="t-y-btn t-y-btn-2">add to cart</button></a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='1111' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                              <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <?php
                                                $result=mt_rand(1,$all-4);
                                                $prod=mysqli_query($conn, "SELECT * FROM  products WHERE verification='verfied' AND id >'$result'AND category='1111' LIMIT 2");
                                                while ($product=mysqli_fetch_array($prod)) {
                                                    ?>
                                             <div class="product__item-wrapper mb-20">
                                                <div class="product__item white-bg">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                            <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                            <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="addwish.php?id=<?php echo $product['id']; ?>&page=index.php" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.php?id=<?php echo $product['id'];?>"> <?php echo $product['product_name'] ;?> </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="new">KSH <?php echo $product['Price']; ?></span>
                                                        <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50); ?></del> </span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                    <a href="addcart.php?id=<?php echo $product['id']; ?>&page=index.php"><button type="button">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                                ?>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Flash sell area end -->

            <!-- onsale product area start -->
            <section class="onsell__area pt-15 pb-35 grey-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>On Sale<span>Products</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                        <div class="sale__slider owl-carousel">
                                <?php
                                $result=mt_rand(1,$all-2);
                                $prod=mysqli_query($conn,"SELECT * FROM products WHERE verification='verfied' ORDER BY id DESC");
                                
                                while ($product=mysqli_fetch_array($prod)) {
                                   
                            
                                ?>
                                <div class="product__item-wrapper">
                                    <div class="product__item white-bg d-flex mb-20">
                                        <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                        <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                        <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                        </div>
                                        <div class="product__content">
                                            <h6 class="product-name">
                                                <a class="product-item-link" href="product-details.php"><?php echo $product['product_name'];?> </a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="new new-2">KSH<?php echo $product['Price'];?></span>
                                            <span class="price-old"> <del>Ksh<?php echo $product['Price']+(mt_rand(1,9)*50);?></del> </span>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="sale__slider owl-carousel">
                                <?php
                                $result=mt_rand(1,$all-4);
                                $prod=mysqli_query($conn,"SELECT * FROM products WHERE verification='verfied' ORDER BY id ASC");
                                
                                while ($product=mysqli_fetch_array($prod)) {
                                   
                            
                                ?>
                                <div class="product__item-wrapper">
                                    <div class="product__item white-bg d-flex mb-20">
                                        <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="product-details.php?id=<?php echo $product['id'];?>" class="w-img">
                                                        <img src="./product_pictures/<?php echo $product['image'];?>" alt="product">
                                                        <img class="second-img" src="./product_pictures/<?php echo $product['image2'];?>" alt="product">
                                        </div>
                                        <div class="product__content">
                                            <h6 class="product-name">
                                                <a class="product-item-link" href="product-details.php"><?php echo $product['product_name'];?></a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="new new-2">KSH <?php echo $product['Price'];?></span>
                                            <span class="price-old"> <del>KSH <?php echo $product['Price']+(mt_rand(1,9)*50) ;?></del> </span>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- onsale product area end -->

            <!-- subscribe area start -->
            <section class="subscribe__area pt-35 pb-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="subscribe__content d-sm-flex align-items-center">
                                <div class="subscribe__icon mr-25">
                                    <img src="assets/img/icon/icon_email.png" alt="">
                                </div>
                                <div class="subscribe__text">
                                    <h4>Sign up to Newsletter</h4>
                                    <p>Get email updates about our latest shop...and receive <span>$30 Coupon For First Shopping</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="subscribe__form f-right">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email here...">
                                    <button class="t-y-btn t-y-btn-sub">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subscribe area end -->

            <!-- back to top btn area start -->
            <section class="back-btn-top">
                <div class="container-fluid p-0">
                    <div class="row gx-0">
                        <div class="col-xl-12">
                            <div id="scroll" class="back-to-top-btn text-center">
                                <a href="javascript:void(0);">back to top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- back to top btn area end -->

    		

            
 
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

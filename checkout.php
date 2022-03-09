<?php
 session_start();
 if (!isset($_SESSION['email'])) {
     header ("Location:Login.php");
 }
 ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Africlad Majore Store </title>
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
                                      <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- checkout-area start -->
            <section class="checkout-area pb-70">
                <div class="container">
                    <form action="order.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name<span class="required" required>*</span></label>
                                                <input type="text" placeholder=""  name= "firstname"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required" required>*</span></label>
                                                <input type="text" placeholder="" name="lastname"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder=""name="company" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text"  required placeholder="Street address"name="address" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)"name="apartment" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required" required>*</span></label>
                                                <input type="text" placeholder="Town / City"name="city" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required" required>*</span></label>
                                                <input type="text" placeholder="" name="county"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required" required>*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" name="code"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email"  required placeholder="" name="email"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone <span class="required"required>*</span></label>
                                                <input type="text" placeholder="12365489"name="phone"/>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="different-address">
                                        
                                        <div class="order-notes">
                                            <div class="checkout-form-list">
                                                <label>Order Notes</label>
                                                <textarea id="checkout-mess" cols="30" rows="10"
                                                    placeholder="Notes about your order, e.g. special notes for delivery." name="notes"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                              <div class="col-lg-6">
                                <div class="your-order mb-30 ">
                                    <h3>Your order</h3>
                                    <div class="your-order-table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
    
                                        <?php
                                              $sql="SELECT * FROM cart WHERE user_idx='$user_id'";
                                             $result=mysqli_query($conn,$sql);
                                             $total_price = 0;
                                                while ($myprod=mysqli_fetch_array($result)) {
                                                    $id_product = $myprod['product_id'];
                                                    $sqlstmt="SELECT * FROM products WHERE id='$id_product'";
                                                    $result2=mysqli_query($conn,$sqlstmt);
                                                    $product_info=mysqli_fetch_array($result2);
                                                    $quantity = $myprod['quantity'];
                                                    $total_price=($product_info['Price']*$quantity)+$total_price; ?>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <?php echo $product_info['product_name']; ?> <strong class="product-quantity"> × <?php echo $myprod['quantity']; ?></strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">KSH <?php echo $product_info['Price']*$quantity;?></span>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Cart Subtotal</th>
                                                    <td><span class="amount">KSH <?php echo $total_price; ?></span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <input type="radio"  name="shipping" />
                                                                <label>
                                                                    Flat Rate: <span class="amount">KSH 700.00</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td><strong><span class="amount">KSH <?php echo $total_price+700; ?></span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <div class="payment-method">
                                        <div class="accordion" id="checkoutAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="checkoutOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                                Direct Bank Transfer
                                                </button>
                                            </h2>
                                            <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                                <div class="accordion-body">
                                                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="paymentTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                                Cheque Payment
                                                </button>
                                            </h2>
                                            <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                                <div class="accordion-body">
                                                Please send your cheque to Store Name, Store Street, Store Town, Store
                                                State / County, Store
                                                Postcode.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="paypalThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                                MPESA
                                                </button>
                                            </h2>
                                            <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                                <div class="accordion-body">
                                                Pay via Mpesa; Go to Mpesa Lipa na mpesa ,Till <span>698562.</span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="order-button-payment mt-20">
                                        <button type="submit" class="t-y-btn t-y-btn-grey">Place order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- checkout-area end -->
 
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

<?php require "cookies.php";
require "./database/dataconn.php";
require "./cart_info.php"; 
?>
<header>
            <div class="header__area">
                <div class="header__top d-none d-sm-block">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-5 d-none d-md-block">
                                <div class="header__welcome">
                                    <span>Welcome to Worldwide African designs  Store</span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-7">
                                <div class="header__action d-flex justify-content-center justify-content-md-end">
                                    <ul>
                                        <li><a href="account.php">My Account</a></li>
                                        <li><a href="wishlist.php">My Wishlist</a></li>
                                        <?php
                                        if (!isset($_SESSION['email'])) {?>
                                            <li><a href="register.php">Sign In</a></li>
                                            <li><?php
                                            }else{?>
                                                 <a href="logout.php">Log Out</a></li><?php
                                                     }?>
                                        
                                        <!-- <li><a href="compare.php">Compare</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__info">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-3">
                                <div class="header__info-left d-flex justify-content-center justify-content-sm-between align-items-center">
                                    <div class="logo">
                                        <a href="index.php"><img src="./assets/img/logo/logo-black.jpg" alt="logo"style="width:105px"></a>
                                    </div>
                                    <div class="header__hotline align-items-center d-none d-sm-flex  d-lg-none d-xl-flex">
                                        <div class="header__hotline-icon">
                                            <i class="fal fa-headset"></i>
                                        </div>
                                        <div class="header__hotline-info">
                                            <span>Hotline Free:</span>
                                            <h6><a href="tel:06-900-6789-00">+254743722708</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-9">
                                <div class="header__info-right">
                                    <div class="header__search f-left d-none d-sm-block">
                                        <form action="product.php" method="POST">
                                            <div class="header__search-box">
                                                <input type="search" name="search" list="all_products" placeholder="Search For Products...">
                                                <button type="submit">Search</button>
                                            </div>
                                            <div class="header__search-cat">
                                                <select>
                                                    <option>All Categories</option>
                                                    <option>Best Seller Products</option>
                                                    <option>Top 10 Offers</option>
                                                    <option>New Arrivals</option>
                                                    <option>Accessories and  Jewelry</option>
                                                    <option>Deco products</option>
                                                    <option>Men fashion</option>
                                                    <option>Female fashion</option>
                                                    <option>Kids fashion</option>
                                                    <option>Health & Beauty</option>
                                                    <option>Bags</option>
                                                    <option>Groceries</option>
                                                    <option>Shoes</option>
                                                    <option>Art and Craft</option>
                                                    <option>Music and Movies</option>

                                                </select>
                                            </div>
                                        </form>
                                        <datalist id="all_products">
                                            <?php
                                            $sql_sp = "SELECT * FROM products";
                                            $sql_sp2 = mysqli_query($conn, $sql_sp);
                                            while ($prods = mysqli_fetch_array($sql_sp2)) {
                                                ?><option value="<?php echo $prods['product_name']; ?>"><?php echo $prods['product_name']." ".$prods['Description']; ?></option><?php
                                            } ?>
                                        </datalist>
                                    </div>
                                    <div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
                                        <a href="javascript:void(0);" class="cart__toggle">
                                            <span class="cart__total-item"><?php echo $number_of_cart_items; ?></span>
                                        </a>
                                        <span class="cart__content">
                                            <span class="cart__my">My Cart:</span>
                                            <span class="cart__total-price"> KSH <?php echo number_format($total_price); ?></span>
                                        </span>
                                        <div class="cart__mini">
                                          <div class="cart__close"><button type="button" class="cart__close-btn"><i class="fal fa-times"></i></button></div>
                                          <ul>
                                              <li>
                                                <div class="cart__title">
                                                  <h4>My Cart</h4>
                                                  <span>(<?php echo $number_of_cart_items; ?> Item in Cart)</span>
                                                </div>
                                              </li>
                                              <?php
                                              $sql="SELECT * FROM cart WHERE user_idx='$user_id'";
                                             $result=mysqli_query($conn,$sql);
                                                while ($myprod=mysqli_fetch_array($result)) {
                                                    $id_product = $myprod['product_id'];
                                                    $sqlstmt="SELECT * FROM products WHERE id='$id_product'";
                                                    $result2=mysqli_query($conn,$sqlstmt); 
                                                    $product_info=mysqli_fetch_array($result2);
                                              ?>
                                              <li>
                                                <div class="cart__item d-flex justify-content-between align-items-center">
                                                  <div class="cart__inner d-flex">
                                                    <div class="cart__thumb">
                                                      <a href="product-details.php">
                                                        <img src="./product_pictures/<?php echo $product_info['image']; ?>" alt="">
                                                      </a>
                                                    </div>
                                                    <div class="cart__details">
                                                      <h6><a href="product-details.php"><?php echo $product_info['product_name'];?>  </a></h6>
                                                      <div class="cart__price">
                                                        <span>kSH <?php echo $product_info['Price'];?></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="cart__del">
                                                      <a href="deletecart.php?id=<?php echo $product_info['id']; ?>&page=index.php"><i class="fal fa-trash-alt"></i></a>
                                                  </div>
                                                </div>
                                              </li>
                                              <?php
                                                }?>
                                              
                                              <li>
                                                <div class="cart__sub d-flex justify-content-between align-items-center">
                                                  <h6>Subtotal</h6>
                                                  <span class="cart__sub-total">KSH <?php echo $total_price;?>.00</span>
                                                </div>
                                              </li>
                                              <li>
                                                <a href="checkout.php" class="t-y-btn w-100 mb-10">Proceed to checkout</a>
                                                <a href="cart.php" class="t-y-btn t-y-btn-border w-100 mb-10">view add edit cart</a>
                                              </li>
                                          </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-6 col-6">
                              <div class="header__bottom-left d-flex d-xl-block align-items-center">
                                <div class="side-menu d-xl-none mr-20">
                                  <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                                </div>
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="index.php">Home</i></a>
                                            </li>
                                            <li><a href="about.php">about us</a></li>
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3  col-sm-6  col-6 d-md-none d-lg-block">
                                <div class="header__bottom-right d-flex justify-content-end">
                                    <div class="header__currency">
                                        <select>
                                            <option>KSH</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                    <div class="header__lang d-md-none d-lg-block">
                                        <select>
                                            <option>English</option>
                                            <option>French</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
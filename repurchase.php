<?php
session_start();
include "headeruser.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>



    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row"><?php
                                $getOrderByOrderID = $order->getOrderByOrderID($_GET['order_id']);
                                foreach ($getOrderByOrderID as $value) : ?>
                    <form action="addrepurchase.php?order_id=<?php echo $value['order_id'] ?>" method="post">
                        <div class="col-md-7">
                            <!-- Billing Details -->
                            <div class="billing-details">
                                <div class="section-title">
                                    <h3 class="title">Thông tin người nhận</h3>
                                </div>
                                <?php if (isset($_SESSION['user'])) :
                                        $getInfoByUsername = $user->getInfoByUsername($_SESSION['user']);
                                        foreach ($getInfoByUsername as $value1) :
                                ?>
                                      
                                        <div class="form-group">
                                            <input class="input" type="text" name="address" placeholder="Địa chỉ" value="<?php echo $value['address'] ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <input class="input" type="tel" name="phone" placeholder="Điện thoại" value="<?php echo $value['phone'] ?>" required>
                                        </div>


                            </div>
                            <!-- /Billing Details -->



                            <!-- Order notes -->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="order-notes">
                                        <h4>Ghi chú</h4>
                                        <textarea style="height: 115px;" class="input" placeholder="Ghi chú" name="note"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-3"><?php $getProductById = $product->getProductById($value['pro_id']) ?>
                                    <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/<?php foreach ($getProductById as $value2) {
                                                                                                                        echo $value2['pro_image'];
                                                                                                                    } ?>">
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>

                    <!-- /Order notes -->
                        </div>

                        <!-- Order Details -->
                        <div class="col-md-5 order-details">

                            <div class="section-title text-center">
                                <h3 class="title">đơn hàng của bạn</h3>
                            </div>
                            <div class="order-summary">
                                <div class="order-col">
                                    <div><strong>SẢN PHẨM</strong></div>
                                    <div><strong>ĐƠN GIÁ</strong></div>
                                </div>
                                <div class="order-products">
                                    <?php
                                    $getOrderByOrderID =  $order->getOrderByOrderID($_GET['order_id']);
                                    foreach ($getOrderByOrderID as $value) :
                                        $getAllProducts =  $product->getAllProducts();
                                        foreach ($getAllProducts as $value1) :
                                            if ($value['pro_id'] == $value1['id']) :
                                    ?>
                                                <div class="order-col">
                                                    <div><?php echo $value['quantity'] ?>x <?php echo $value1['name'] ?></div>
                                                    <div style="max-width:440px;"><?php echo number_format($value1['price']) ?>VND</div>
                                                </div>

                                </div>
                                <div class="order-col">
                                    
                                    <div><strong>PHÍ VẬN CHUYỂN</strong></div>
                                    <div><strong>MIỄN PHÍ</strong></div>
                                </div>
                                <div class="order-col">
                                    <div><strong>TỔNG</strong></div>
                                    <div><strong class="order-total"><?php echo number_format($value['total']) ?>VND</strong></div>
                                </div>
                            </div>
                <?php

                                            endif;
                                        endforeach;
                                    endforeach;


                ?>

                <button class="primary-btn order-submit col-lg-offset-4" type="submit" name="submit">ĐẶT HÀNG</button>

                        </div>
                        <!-- /Order Details -->
                    </form>
                <?php endforeach ?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the NEWSLETTER </p>
                    <form>
                        <input class="input" type="email" placeholder="Email của bạn">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i>  Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->

<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">ABOUT US</h3>
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</strong></p>
                        <ul class="footer-links">
                            <li><i class="fa fa-map-marker"></i>1734 Stonecoal Road</li>
                            <li><i class="fa fa-phone"></i>119001900</li>
                            <li><i class="fa fa-envelope-o"></i>fit@tdc.edu.vn</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">CATEGORIES</h3>
                        <ul class="footer-links">
                            <li><a href="products.php?type_id=1">Smartphones</a></li>
                            <li><a href="products.php?type_id=2">Laptop</a></li>
                            <li><a href="products.php?type_id=3">Apple</a></li>
                            <li><a href="products.php?type_id=4">SamSung</a></li>
                            <li><a href="products.php?type_id=5">Xiaomi</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">INFORMATION</h3>
                        <ul class="footer-links">
                            <li>About Us</li>
                            <li>Contact Us</li>
                            <li>Privacy Policy</li>
                            <li>Orders and Returns</li>
                            <li>Terms & Conditions</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">SERVICE</h3>
                        <ul class="footer-links">
                            <li><a href="login/index.php">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                    <span class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
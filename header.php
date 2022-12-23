<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/user.php";
$product = new Product;
$protype = new Protype;
$user = new User;
$getAllProducts = $product->getAllProducts();
$getAllNewProducts = $product->getAllNewProducts();
$getTopSellingProducts = $product->getTopSellingProducts();
?>
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
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="tel:0562563743"><i class="fa fa-phone"></i> +84-652-563-743</a></li>
                    <li><a href="mailto:ngocphongdnp@gmail.com"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="https://www.google.com/maps/place/53+%C4%90.+V%C3%B5+V%C4%83n+Ng%C3%A2n,+Linh+Chi%E1%BB%83u,+Th%E1%BB%A7+%C4%90%E1%BB%A9c,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8511574,106.7557547,17z/data=!3m1!4b1!4m5!3m4!1s0x317527bd532d45d9:0x6b46595d312dcffe!8m2!3d10.8511574!4d106.7579434"><i class="fa fa-map-marker"></i>  1734 Stonecoal Road</a></li>
                </ul>
                <ul class="header-links pull-right">
                   
                    <li><a href="login/index.php"><i class="fa fa-user-o"></i> Đăng nhập</a></li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="index.php" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form method="get" action="result.php">
                                <select class="input-select" name="searchCol">
                                    <option value="0">All Categories</option>
                                    <option value="1">Smartphone</option>
                                    <option value="2">LapTop</option>
                                    <option value="3">Apple</option>
                                    <option value="4">SamSung</option>
                                    <option value="5">Xiaomi</option>
                                </select>
                                <input name="keyword" class="input" placeholder="tìm kiếm">
                                <button type="submit" class="search-btn">search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Yêu thích</span>
                                    <div class="qty">0</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Giỏ hàng</span>
                                    <?php
                                    $temp = 0;
                                   if(isset($_SESSION['cart'])){
                                    foreach ($_SESSION['cart'] as $value) {
                                        $temp+=1;
                                    }
                                   }
                                    ?>
                                    <div class="qty"><?php echo $temp; ?></div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list"><?php $totalPrice = 0;
                                                            $totalProduct = 0; ?>
                                        <?php if (isset($_SESSION['cart'])) :

                                            foreach ($_SESSION['cart'] as $key => $qty) :
                                                $getAllProducts =  $product->getAllProducts();
                                                foreach ($getAllProducts as $value) :
                                                    if ($value['id'] == $key) : ?>
                                                        <?php $totalPrice += $value['price'] * $qty;
                                                        $totalProduct += 1;
                                                        ?>
                                                        <div class="product-widget">
                                                            <div class="product-img">
                                                                <img src="./img/<?php echo $value['pro_image'] ?>" alt="">
                                                            </div>
                                                            <div class="product-body">
                                                                <h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
                                                                <h4 class="product-price"><span class="qty"><?php echo $qty ?>x</span><?php echo number_format($value['price']) ?>VND</h4>
                                                            </div>
                                                            <a href="delcart1.php?id=<?php echo $value['id'] ?>"><button class="delete"><i class="fa fa-close"></i></button></a>
                                                        </div>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="cart-summary">
                                        <small><?php echo $totalProduct ?> Sản phẩm</small>
                                        <h5>SUBTOTAL: <?php echo number_format($totalPrice) ?></h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="cart.php?type_id=1">Xem giỏ hàng</a>
                                        <a href="./login/index.php">Xem đơn hàng <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">

                    <?php
					$getAllProtype = $protype->getAllProtype();
					if (isset($_GET['type_id'])) : ?>
                    <li><a href="index.php">Home</a></li>
                    <?php
						$type_id = $_GET['type_id'];
						foreach ($getAllProtype as $value) :
						?>
                    <li <?php if($type_id==$value['type_id']) echo 'class="active"' ?>><a
                            href="products.php?type_id=<?php echo $value['type_id'] ?>">
                            <?php echo $value['type_name'] ?></a></li>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <li class="active"><a href="index.php">Home</a></li>
                    <?php
						$getAllProtype = $protype->getAllProtype();

						foreach ($getAllProtype as $value) :
						?>
                    <li><a href="products.php?type_id=<?php echo $value['type_id'] ?>">
                            <?php echo $value['type_name'] ?></a></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
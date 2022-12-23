<?php
session_start();
if(isset($_SESSION['user'])){
	include "headeruser.php";
}else{
	include "header.php";
}
?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop03.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Accessories<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop02.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Cameras<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">NEW PRODUCTS</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab"></a></li>
							<li><a data-toggle="tab" href="#tab1">Smartphone</a></li>
							<li><a data-toggle="tab" href="#tab2">Laptop</a></li>
							<li><a data-toggle="tab" href="#tab3">Apple</a></li>
							<li><a data-toggle="tab" href="#tab4">SamSung</a></li>
							<li><a data-toggle="tab" href="#tab5">Xiaomi</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<?php foreach ($getAllProducts as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								<?php endforeach ?>
								<!-- /product -->


							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="#">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">TOP SELLING</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#pap1">Smartphone</a></li>
							<li><a data-toggle="tab" href="#pap2">Laptop</a></li>
							<li><a data-toggle="tab" href="#pap3">Apple</a></li>
							<li><a data-toggle="tab" href="#pap4">SamSung</a></li>
							<li><a data-toggle="tab" href="#pap5">Xiaomi</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="pap1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<?php
								$type_id = 1;
								$getProductsTopSellingByType1 = $product->getProductsTopSellingByType1($type_id); ?>
								<?php foreach ($getProductsTopSellingByType1 as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img style="width=100px" src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="new">BÁN CHẠY</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> thêm vào giỏ</button>
										</div></a>
									</div>
									<!-- /product -->
								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="pap2" class="tab-pane ">
							<div class="products-slick">
								<?php
								$type_id = 2;
								$getProductsTopSellingByType1 = $product->getProductsTopSellingByType1($type_id); ?>
								<?php foreach ($getProductsTopSellingByType1 as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="new">BÁN CHẠY</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> thêm vào giỏ</button>
										</div></a>
									</div>
									<!-- /product -->
								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="pap3" class="tab-pane ">
							<div class="products-slick">
								<?php
								$type_id = 3;
								$getProductsTopSellingByType1 = $product->getProductsTopSellingByType1($type_id); ?>
								<?php foreach ($getProductsTopSellingByType1 as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="new">BÁN CHẠY</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ</button>
										</div></a>
									</div>
									<!-- /product -->
								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="pap4" class="tab-pane ">
							<div class="products-slick">
								<?php
								$type_id = 4;
								$getProductsTopSellingByType1 = $product->getProductsTopSellingByType1($type_id); ?>
								<?php foreach ($getProductsTopSellingByType1 as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="new">BÁN CHẠY</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ</button>
										</div></a>
									</div>
									<!-- /product -->

								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="pap5" class="tab-pane ">
							<div class="products-slick">
								<?php
								$type_id = 5;
								$getProductsTopSellingByType1 = $product->getProductsTopSellingByType1($type_id); ?>
								<?php foreach ($getProductsTopSellingByType1 as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="new">BÁN CHẠY</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ</button>
										</div></a>
									</div>
									<!-- /product -->
								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">TOP SELLING</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div>
						<?php $getFeaturedPhone = $product->getFeaturedPhone();
						foreach ($getFeaturedPhone as $value) :
						?>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"></p>
									<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
									<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
								</div>
							</div>
							<!-- /product widget -->
						<?php endforeach ?>
					</div>

					<div>
						<?php $getFeaturedPhonePlus = $product->getFeaturedPhonePlus();
						foreach ($getFeaturedPhonePlus as $value) :
						?>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"></p>
									<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
									<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
								</div>
							</div>
							<!-- /product widget -->
						<?php endforeach ?>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">TOP SELLING</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						<?php $getAllFeaturedLaptop = $product->getAllFeaturedLaptop();
						foreach ($getAllFeaturedLaptop as $value) :
						?>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"></p>
									<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
									<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
								</div>
							</div>
							<!-- /product widget -->
						<?php endforeach ?>
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">TOP SELLING</h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">
					<div>
						<?php $getAllFeaturedKeyBoard = $product->getAllFeaturedKeyBoard();
						foreach ($getAllFeaturedKeyBoard as $value) :
						?>
							<!-- product widget -->
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"></p>
									<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
									<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
								</div>
							</div>
							<!-- /product widget -->
						<?php endforeach ?>
					</div>

					<div>
					<?php $getAllFeaturedKeyBoardPlus = $product->getAllFeaturedKeyBoardPlus();
						foreach ($getAllFeaturedKeyBoardPlus as $value) :
						?>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
							</div>
							<div class="product-body">
								<p class="product-category"></p>
								<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
								<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
							</div>
						</div>
						<!-- /product widget -->
						<?php endforeach; ?>
					</div>
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.php"; ?>
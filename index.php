<?php
	include ("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Home | E-Shop</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font-Awesome -->
		<link href="css/font-awesome.min.css" rel="stylesheet">

		<link href="css/price-range.css" rel="stylesheet">
		<!-- Animate -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- Pretty Photo -->
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Main CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!-- Responsive CSS -->
		<link href="css/responsive.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Preloader Start-->
		<div id="preloader">
			<div class="loader"></div>
		</div>
		<!--Preloader End-->
		<!-- Start Header Section -->
		<header id="header">
			<div class="header_top"><!--header_top-->
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="contactinfo">
								<ul class="nav nav-pills">
									<li><a href="#"><i class="fa fa-phone"></i> +880 19 1194 6813</a></li>
									<li><a href="#"><i class="fa fa-envelope"></i> info@eshop.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="social-icons pull-right">
								<ul class="nav navbar-nav">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--/header_top-->

			<div class="header-middle"><!--header-middle-->
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo pull-left">
								<a href="index.php"><img src="images/logo.png" alt="E-shop"></a>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="shop-menu pull-left">
								<ul class="nav navbar-nav">
									<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
									<li><a href="all_products.php?"><i class="fa fa-product-hunt"></i> All Products</a></li>
									<!--<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
									<li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
									<li><a href="add_to_cart.php?"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<!--<li><a href="#"><i class="fa fa-lock"></i> Login</a></li>-->
									<!--<li><a href="#"><i class="fa fa-info-circle"></i> Contact</a></li>-->
									<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
									<li><a href="#" data-toggle="modal" data-target="#signup-modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
									<li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="search pull-right">
								<form method="get" action="search_result.php" enctype="multipart/form-data">
									<input type="text" name="user_query" class="form-control input-sm" maxlength="64" placeholder="Search">
									<button type="submit" name="search" value="Search" class="btn btn-primary btn-sm">Search</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div><!--/header-middle-->
		</header>

		<!-- For Login Toggle -->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="log-section">
					<h1>Login to Your Account</h1><br>
					<form>
						<input type="text" name="user" placeholder="Username">
						<input type="password" name="pass" placeholder="Password">
						<input type="submit" name="login" class="login loginmodal-submit" value="Login">
					</form>

					<div class="login-help">
						<a href="#">Register</a> - <a href="#">Forgot Password</a>
					</div>
				</div>
			</div>
		</div>
		<!-- For Login Toggle -->

		<!-- For Sign Up Toggle -->
		<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="log-section">
					<h1>sign up for new Account</h1><br>
					<form>
						<input type="text" name="name" placeholder="First Name">
						<input type="text" name="name" placeholder="Last Name">
						<input type="password" name="pass" placeholder="Create Password">
						<input type="password" name="pass" placeholder="confiram Password">
						<input type="submit" name="signin" class="login loginmodal-submit" value="Sign Up">
					</form>

					<div class="login-help">
						<a href="#">Allready Have an Account</a>
					</div>
				</div>
			</div>
		</div>
		<!-- For Sign Up Toggle -->

		<section id="slider"><!--slider-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="slider-carousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#slider-carousel" data-slide-to="0" class=""></li>
								<li data-target="#slider-carousel" data-slide-to="1" class=""></li>
								<li data-target="#slider-carousel" data-slide-to="2" class="active"></li>
							</ol>

							<div class="carousel-inner">
								<div class="item">
									<div class="col-sm-6">
										<h1><span>E</span>-SHOP</h1>
										<h2>Now Only $99.00</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="images/girl1.jpg" class="girl img-responsive" alt="">
										<img src="images/pricing.png" class="pricing" alt="">
									</div>
								</div>
								<div class="item">
									<div class="col-sm-6">
										<h1><span>E</span>-SHOP</h1>
										<h2>100% Quality Perfection</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="images/girl2.jpg" class="girl img-responsive" alt="">
										<img src="images/pricing.png" class="pricing" alt="">
									</div>
								</div>

								<div class="item active">
									<div class="col-sm-6">
										<h1><span>E</span>-SHOP</h1>
										<h2>Stocks Are Available</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="images/girl3.jpg" class="girl img-responsive" alt="">
										<img src="images/pricing.png" class="pricing" alt="">
									</div>
								</div>

							</div>

							<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>

					</div>
				</div>
			</div>
		</section><!--/slider-->

        <!-- Start Category & Features Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
							<div class="panel-group category-products" id="accordian"><!--category-productsr-->
								<?php getCategories(); ?>
							</div><!--/category-products-->

							<div class="brands_products"><!--brands_products-->
								<h2>Brands</h2>
								<div class="brands-name">
									<ul class="nav nav-pills nav-stacked">
										<?php getBrands(); ?>
									</ul>
								</div>
							</div><!--/brands_products-->

							<div class="price-range"><!--price-range-->
								<h2>Price Range</h2>
								<div class="well text-center">
									<div class="slider slider-horizontal" style="width: 150px;"><div class="slider-track"><div class="slider-selection" style="left: 41.6667%; width: 33.3333%;"></div><div class="slider-handle round left-round" style="left: 41.6667%;"></div><div class="slider-handle round" style="left: 75%;"></div></div><div class="tooltip top" style="top: -30px; left: 54px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">250 : 450</div></div><input class="span2" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" style="" type="text"></div><br>
									<b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
								</div>
							</div><!--/price-range-->

							<div class="shipping text-center"><!--shipping-->
								<img src="images/shipping.jpg" alt="Price">
							</div><!--/shipping-->

                        </div><!--/ .left-sidebar -->
                    </div>

					<!-- Fetures Area -->
					<div class="col-sm-9 padding-right">
						<div class="features_items"><!--features_items-->
							<h2 class="title text-center">Features Items</h2>
                            <div id="showingProduct">
							<?php getAllProducts(); ?>
							<?php getCategoriesProduct(); ?>
							<?php getBrandWiseProducts(); ?>
                            </div>
                            <!-- Pagination -->
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                            <!-- Pagination -->
						</div><!--features_items-->
					</div>
					<!-- Fetures Area -->
                </div>
            </div>
        </section>
        <!-- End Category & Features Section -->

		<footer id="footer"><!--Footer-->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="companyinfo">
								<h2><span>e</span>-shop</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="col-sm-3">
								<div class="video-gallery text-center">
									<a href="#">
										<div class="iframe-img">
											<img src="images/iframe1.png" alt="">
										</div>
										<div class="overlay-icon">
											<i class="fa fa-play-circle-o"></i>
										</div>
									</a>
									<p>Circle of Hands</p>
									<h2>24 DEC 2014</h2>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="video-gallery text-center">
									<a href="#">
										<div class="iframe-img">
											<img src="images/iframe2.png" alt="">
										</div>
										<div class="overlay-icon">
											<i class="fa fa-play-circle-o"></i>
										</div>
									</a>
									<p>Circle of Hands</p>
									<h2>24 DEC 2014</h2>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="video-gallery text-center">
									<a href="#">
										<div class="iframe-img">
											<img src="images/iframe3.png" alt="">
										</div>
										<div class="overlay-icon">
											<i class="fa fa-play-circle-o"></i>
										</div>
									</a>
									<p>Circle of Hands</p>
									<h2>24 DEC 2014</h2>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="video-gallery text-center">
									<a href="#">
										<div class="iframe-img">
											<img src="images/iframe4.png" alt="">
										</div>
										<div class="overlay-icon">
											<i class="fa fa-play-circle-o"></i>
										</div>
									</a>
									<p>Circle of Hands</p>
									<h2>24 DEC 2014</h2>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="address">
								<img src="images/map.png" alt="">
								<p><span style="color: #FE980F;">Cox'sbazar</span> <span style="color: #27ae60;">Bangladesh</span> - The Longest Natural Sea Beach of the world</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-widget">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="single-widget">
								<h2>Service</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#">Online Help</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Order Status</a></li>
									<li><a href="#">Change Location</a></li>
									<li><a href="#">FAQ’s</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h2>Quock Shop</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#">T-Shirt</a></li>
									<li><a href="#">Mens</a></li>
									<li><a href="#">Womens</a></li>
									<li><a href="#">Gift Cards</a></li>
									<li><a href="#">Shoes</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h2>Policies</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#">Terms of Use</a></li>
									<li><a href="#">Privecy Policy</a></li>
									<li><a href="#">Refund Policy</a></li>
									<li><a href="#">Billing System</a></li>
									<li><a href="#">Ticket System</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h2>About E-Shop</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#">Company Information</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Store Location</a></li>
									<li><a href="#">Affillate Program</a></li>
									<li><a href="#">Copyright</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3 col-sm-offset-1">
							<div class="single-widget">
								<h2>Update E-Shop</h2>
								<form action="#" class="searchform">
									<input placeholder="Your email address" type="text">
									<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
									<p>Get the most recent updates from <br>our site and be updated your self...</p>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<p class="pull-left">Copyright &copy; 2016 E-SHOP. All rights reserved.</p>
						<p class="pull-right">Developed By <span><a target="_blank" href="https://github.com/khanadakerakash">Kh Akash</a></span></p>
					</div>
				</div>
			</div>

		</footer><!--/Footer-->

		<!-- Scroll Up -->
		<a href="#0" class="cd-top">Top</a>
		<!-- Scroll Up -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/price-range.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/scorl-up-script.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.4/jquery.lazy.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.4/jquery.lazy.plugins.min.js"></script>

        <script src="js/myScript.js"></script>
	</body>
</html>
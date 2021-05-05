<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- set the encoding of your site -->
		<meta charset="utf-8">
		<!-- set the viewport width and initial-scale on mobile devices -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- set the apple mobile web app capable -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- set the HandheldFriendly -->
		<meta name="HandheldFriendly" content="True">
		<!-- set the apple mobile web app status bar style -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<!-- set the description -->
		<meta name="description" content="Vine Yard HTML Template">
		<!-- set the Keyword -->
		<meta name="keywords" content="blog, clean, clear, creative, design web, ecommerce, flat, Indoor Furniture, marketing, portfolio, vineyard, wines, wines WordPress theme, winewinery">
		<meta name="author" content="Vine Yard HTML Template">
		<title>@yield('title')</title>
		<!-- include the site stylesheet -->
		<link href="https://fonts.googleapis.com/css?family=Philosopher:400,700%7CPinyon+Script" rel="stylesheet">
		<!-- include the site stylesheet -->
		<link rel="stylesheet" href="{{url('css/font-awesome.css')}}">
		<!-- include the site stylesheet -->
		<link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
		<!-- include the site stylesheet -->
		<link rel="stylesheet" href="{{url('css/plugins.css')}}">
		<!-- include the site stylesheet -->
		<link rel="stylesheet" href="{{url('css/icofont.css')}}">
		<!-- include the site stylesheet -->
		<link rel="stylesheet" href="{{url('style1.css')}}">
		<!-- include the site stylesheet -->
		<link rel="stylesheet" href="{{url('css/responsive.css')}}">
		<!-- include the site stylesheet -->
		<link rel="stylesheet" href="{{url('css/colors.css')}}">
	</head>
	<body>
		<!-- main container of all the page elements -->
		<div id="wrapper">
			<!-- Header of the page -->
			<header id="header" class="v1">
				<!-- header holder of the page -->
				<div class="header-holder bg-light">
					<div class="container-fluid">
						<!-- setting wrap of the page -->
						<ul class="list-unstyled setting-wrap pull-left">
							<li>
								<a href="javascript:void(0);" class="setting-drop-opener"><i class="icon-setting"></i></a>
								<!-- cart dropdown of the page -->
								<div class="cart-dropdown">
									<!-- setting-drop of the page -->
									<div class="setting-drop">
										<ul class="list-unstyled account-list">
											<li><a href="javascript:void(0);">My Account</a></li>
											<li><a href="wishlist.html">My Wishlist</a></li>
											<li><a href="compare.html">Compare</a></li>
											<li><a href="shopping-cart.html">My Cart</a></li>
											<li><a href="checkout.html">Check out</a></li>
										</ul>
										<hr>
										<h3 class="heading3 text-uppercase">CURRENCY</h3>
										<form action="javascript:void(0);" class="currency-form">
											<feildset>
											<label for="radio-2">
												<input id="radio-2" name="group1" type="radio">
												<span class="fake-input"></span>
												<span class="fake-label">USD</span>
											</label>
											<label for="radio-3">
												<input id="radio-3" name="group1" type="radio">
												<span class="fake-input"></span>
												<span class="fake-label">EUR</span>
											</label>
											<label for="radio-4">
												<input id="radio-4" name="group1" type="radio">
												<span class="fake-input"></span>
												<span class="fake-label">GBP</span>
											</label>
											<label for="radio-5">
												<input id="radio-5" name="group1" type="radio">
												<span class="fake-input"></span>
												<span class="fake-label">CNY</span>
											</label>
											</feildset>
										</form>
										<hr>
										<h3 class="heading3 text-uppercase">LANGUAGE</h3>
										<ul class="list-unstyled lang-list">
											<li><a href="javascript:void(0);"><img src="images/flag-1.jpg" alt="flag" class="img-responsive"></a></li>
											<li><a href="javascript:void(0);"><img src="images/flag-2.jpg" alt="flag" class="img-responsive"></a></li>
											<li><a href="javascript:void(0);"><img src="images/flag-3.jpg" alt="flag" class="img-responsive"></a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="javascript:void(0);" class="nav-opener visible-xs hidden"><i class="fa fa-bars"></i></a></li>
						</ul>
						<!-- widget cart wrap of the page -->
						<ul class="list-unstyled widget-cart-wrap pull-right">
							<li><a href="#popup1" class="lightbox"><i class="icon-user"></i></a></li>
							<li><a href="javascript:void(0);" class="search-opener"><i class="icon-search"></i></a></li>
							<li>
								<a href="javascript:void(0);" class="cart-drop-opener"><i class="icon-cart"></i> <span class="num round fontjosefin text-center">4</span></a>
								<!-- Cart Dropdown of the page -->
								<div class="cart-dropdown right">
									<!-- Cart Menu of the page -->
									<ul class="list-unstyled cart-menu">
										<li>
											<div class="img-holder bdr pull-left">
												<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x90" alt="image description" class="img-responsive"></a>
											</div>
											<div class="align-left pull-left">
												<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
												<span class="price clr">1 x $146.00</span>
												<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
											</div>
										</li>
										<li>
											<div class="img-holder bdr pull-left">
												<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x90" alt="image description" class="img-responsive"></a>
											</div>
											<div class="align-left pull-left">
												<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
												<span class="price clr">1 x $146.00</span>
												<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
											</div>
										</li>
										<li>
											<div class="img-holder bdr pull-left">
												<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x90" alt="image description" class="img-responsive"></a>
											</div>
											<div class="align-left pull-left">
												<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
												<span class="price clr">1 x $146.00</span>
												<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
											</div>
										</li>
										<li class="total-price text-uppercase">
											total:
											<em class="price clr fwBold pull-right">$168.00</em>
										</li>
										<li>
											<a href="shopping-cart.html" class="btn-primary active text-center text-uppercase lg-round">View Card</a>
											<a href="checkout.html" class="btn-primary lg-round text-center text-uppercase">Check Out</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
						<div class="logo">
							<a href="index.html"><img src="images/book.png" alt="Vine Yard" class="img-responsive" width="80px"></a>
						</div>
					</div>
				</div>
				<!-- nav holder of the page -->
				<div class="nav-holder container">
					<div class="row">
						<div class="col-xs-12">
							<!-- nav of the page -->
							<nav id="nav">
								<ul class="list-unstyled text-center">
									<li class="n-logo"><a href="index.html"><img src="images/book.png" alt="Vine Yard" class="img-responsive" width="80px"></a></li>
									<li class="active"><a href="index.html">Home</a></li>
									<!-- dropdownfull of the page -->
									<li class="dropdownfull">
										<a href="javascript:void(0);" class="drop-open">Shop</a>
										<div class="dropdownmenu text-left">
											<div class="dropdowncol">
												<h3 class="heading3 text-uppercase">Shop List</h3>
												<ul class="list-unstyled dropdowncollist">
													<li><a href="shop.html">Shop</a></li>
													<li><a href="shop-fullwidth.html">Shop FullWidth</a></li>
													<li><a href="shop-detail.html">Shop Detail</a></li>
												</ul>
											</div>
											<div class="dropdowncol hidden-xs">
												<div class="img-holder">
													<a href="javascript:void(0);"><img src="https://via.placeholder.com/225x280" class="img-responsive" alt="image description"></a>
												</div>
											</div>
											<div class="dropdowncol">
												<h3 class="heading3 text-uppercase">Cart List</h3>
												<ul class="list-unstyled dropdowncollist">
													<li><a href="shopping-cart.html">Shopping Cart</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
												</ul>
											</div>
											<div class="dropdowncol hidden-xs">
												<div class="img-holder">
													<a href="javascript:void(0);"><img src="https://via.placeholder.com/225x280" class="img-responsive" alt="image description"></a>
												</div>
											</div>
										</div>
									</li>
									<!-- dropdown of the page -->
									<li class="dropdown">
										<a href="javascript:void(0);">Pages</a>
										<!-- dropdown menu of the page -->
										<ul class="dropdown-menu text-left">
											<li><a href="aboutus.html">About Us</a></li>
											<li><a href="compare.html">Compare</a></li>
											<li><a href="portfolio3.html">Portfolio Colume 3</a></li>
											<li><a href="portfolio-detail.html">Portfolio Detail</a></li>
											<li><a href="404page.html">404 Page</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="javascript:void(0);">Blog</a>
										<!-- dropdown menu of the page -->
										<ul class="dropdown-menu text-left">
											<li><a href="blog-list.html">Blog List</a></li>
											<li><a href="blog-colume2.html">Blog Colume2</a></li>
											<li><a href="blog-list-leftsidebar.html">Blog List Leftside</a></li>
											<li><a href="blog-detail-fullwidth.html">Blog Detail Fullwidth</a></li>
										</ul>
									</li>
									<li><a href="contactus.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- main of the page -->
			<main id="main">
			
				
				@yield('content')
			</main>
			

			<!-- footer of the page -->
			<footer id="footer" class="bg-black">
				<!-- footer aside of the page -->
				<aside class="footer-aside bg-grey">
					<!-- socail network of the page -->
					<ul class="social-network list-unstyled">
						<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);"><i class="fa fa-twitter active"></i></a></li>
						<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
					</ul>
					<div class="payment-img">
						<a href="javascript:void(0);"><img src="images/img35.png" class="img-responsive" alt="Payment Card"></a>
					</div>
					<a id="back-top" class="round"><i class="fa fa-chevron-up"></i></a>
				</aside>
				<!-- footer folder of the page -->
				<div class="footer-holder">
					<div class="container">
						<div class="row mar-bt">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="logo">
									<a href="index.html"><img class="img-responsive" src="images/logo.png" alt="vineyard" ></a>
								</div>
								<!-- contact list of the page -->
								<ul class="list-unstyled contact-list">
									<li>Address : No 40 Baria Sreet 133/2 NewYork City,<br class="hidden-xs"> NY,  United States</li>
									<li>Email: <a href="mailto:info.contact@gmail.com">info.contact@gmail.com</a></li>
									<li>Phone: <a href="tell:(+1)234456789">(+1) 234 456 789</a></li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-2">
								<h3 class="heading3">My Accounts</h3>
								<!-- f nav of the page -->
								<ul class="list-unstyled f-nav">
									<li><a href="javascript:void(0);">My account</a></li>
									<li><a href="javascript:void(0);">My orders</a></li>
									<li><a href="javascript:void(0);">Register</a></li>
									<li><a href="javascript:void(0);">Login</a></li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-2">
								<h3 class="heading3">Quick link</h3>
								<!-- f nav of the page -->
								<ul class="list-unstyled f-nav">
									<li><a href="javascript:void(0);">New User</a></li>
									<li><a href="javascript:void(0);">Help Center</a></li>
									<li><a href="javascript:void(0);">Report Spam</a></li>
									<li><a href="javascript:void(0);">FAQs</a></li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<h4 class="heading3">Tag Clound</h4>
								<!-- tags list of the page -->
								<ul class="list-unstyled tags-list">
									<li><a href="javascript:void(0);">Music</a></li>
									<li><a href="javascript:void(0);">Travel</a></li>
									<li><a href="javascript:void(0);">video</a></li>
									<li><a href="javascript:void(0);">Ecommerce</a></li>
									<li><a href="javascript:void(0);">feature</a></li>
									<li><a href="javascript:void(0);">text</a></li>
									<li><a href="javascript:void(0);">sports</a></li>
									<li><a href="javascript:void(0);">fashion</a></li>
									<li><a href="javascript:void(0);">store</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- footer nav of the page -->
								<ul class="list-unstyled footer-nav text-center">
									<li><a href="javascript:void(0);">About</a></li>
									<li><a href="javascript:void(0);">Customer Service</a></li>
									<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
									<li><a href="javascript:void(0);">Privacy Policy</a></li>
									<li><a href="javascript:void(0);">Site Map</a></li>
									<li><a href="javascript:void(0);">Contact</a></li>
								</ul>
							</div>
							<div class="col-xs-12">
								<div class="copyright text-center">
									<p>Copyright<a href="javascript:void(0);"> VineYard</a> © 2019. All rights reserved.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<a id="newsletter-hiddenlink" href="#popup2" class="lightbox" style="display: none;">Newsletter</a>
			<!-- loader of the page -->
			
			
			
		</div>
		<!-- include jQuery -->
		<script src="{{url('js/jquery.js')}}"></script>
		<!-- include jQuery -->
		<script src="{{url('js/plugins.js')}}"></script>
		<!-- include jQuery -->
		<script src="{{url('js/jquery.main.js')}}"></script>
	</body>
</html>
@extends('front.master')
@section('content')
<!-- main container of all the page elements -->
<div id="wrapper">
	<!-- header of the page -->
	<header id="header" class="wh-clr">
		<!-- header holder of the page -->
		<div class="header-holder">
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
					<a href="index.html"><img src="images/logo.png" alt="Vine Yard" class="img-responsive"></a>
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
							<li class="n-logo"><a href="index.html"><img src="images/logo.png" alt="Vine Yard" class="img-responsive"></a></li>
							<li><a href="index.html">Home</a></li>
							<!-- dropdownfull of the page -->
							<li class="dropdownfull active">
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
		<div class="space bg-black"></div>
		<!-- banner of the page -->
		<section class="banner bg-parallax overlay" style="background-image:url(https://via.placeholder.com/1920x460);">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h2 class="heading text-uppercase fwLight">Right Sidebar</h2>
						<ul class="list-unstyled breadcrumbs">
							<li><a href="index.html">Home</a></li>
							<li>/</li>
							<li>Shop Grid</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- shop sec of the page -->
		<section class="shop-sec">
			<div class="container">
				<div class="row">
					<!-- content of the page -->
					<article id="content" class="col-xs-12 col-md-9">
						<div class="col-xs-12">
							<select>
								<option value="0">12 item/pages</option>
								<option value="1">13 item/pages</option>
								<option value="2">14 item/pages</option>
							</select>
							<select>
								<option value="0">Name: A to Z</option>
								<option value="1">Vine Yard</option>
								<option value="2">Vodca</option>
							</select>
							<ul class="list-unstyled viewFilterLinks">
								<li class="active"><a href="javascript:void(0);" class="fa fa-th-large"></a></li>
								<li><a href="javascript:void(0);" class="fa fa-list"></a></li>
							</ul>
						</div>  @foreach ($d1 as $x)
						<div class="col-xs-12 col-sm-4">
							<!-- feature col of the page -->
							<div class="feature-col">
								<div class="img-holder text-center">
									<a href="shop-detail.html"><img src="/upload/{{$x->dish_img}}" alt="image description" class="img-responsive"></a>
								</div>
								<div class="txt-wrap">
									<h2 class="heading3"><a href="shop-detail.html">
										{{$x->dish_name}}
									</a></h2>
									<footer class="footer">
										<ul class="list-unstyled rating-list pull-left">
											<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fa fa-star-o"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fa fa-star-o"></i></a></li>
										</ul>
										<strong class="price pull-right">rs {{$x->dish_price}}</strong>
									</footer>
								</div>
								<ul class="list-unstyled text-center social-network">
									<li><a href="javascript:void(0);"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
									<li><a href="compare.html"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
									<li><a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li><a href="shopping-cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						@endforeach
						
						
						<div class="col-xs-12">
							<!-- pagination of the page -->
							<ul class="list-unstyled pagination text-center">
								<li><a href="javascript:void(0);"><i class="fa fa-long-arrow-left"></i></a></li>
								<li><a href="javascript:void(0);">1</a></li>
								<li><a href="javascript:void(0);">2</a></li>
								<li class="active"><a href="javascript:void(0);">3</a></li>
								<li><a href="javascript:void(0);">4</a></li>
								<li><a href="javascript:void(0);">5</a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-long-arrow-right"></i></a></li>
							</ul>
						</div>
					</article>
					<!-- sidebar of the page -->
					<aside id="sidebar" class="col-xs-12 col-md-3">
						<!-- widget of the page -->
						<section class="widget category-widget">
							<h2 class="heading2 text-uppercase">CATEGORIES</h2>
							<ul class="list-unstyled text-uppercase category-list">
								<li><a href="javascript:void(0);">WOMen</a></li>
								<li><a href="javascript:void(0);">men</a></li>
								<li><a href="javascript:void(0);">Accesories</a></li>
								<li><a href="javascript:void(0);">blog</a></li>
								<li><a href="javascript:void(0);">new</a></li>
								<li><a href="javascript:void(0);">sales</a></li>
							</ul>
						</section>
						<!-- widget of the page -->
						<section class="widget">
							<h2 class="heading2 text-uppercase">shop by</h2>
							<div class="price-range">
								<span class="progress"><img src="images/range-img.png" alt="range img" class="img-responsive"></span>
								<span class="text text-uppercase">price<span class="price fwBold">$20 - $100</span></span>
								<a href="javascript:void(0);" class="btn-primary lg-round text-uppercase">filter</a>
							</div>
						</section>
						<!-- widget of the page -->
						<section class="widget">
							<h2 class="heading2 text-uppercase">colors</h2>
							<ul class="list-unstyled color-list">
								<li>
									<a href="javascript:void(0);">
										<h3 class="heading3 text-uppercase pull-left">red</h3>
										<span class="view pull-right">(42)</span>
									</a>
								</li>
								<li class="black">
									<a href="javascript:void(0);">
										<h3 class="heading3 text-uppercase pull-left">black</h3>
										<span class="view pull-right">(28)</span>
									</a>
								</li>
								<li class="blue">
									<a href="javascript:void(0);">
										<h3 class="heading3 text-uppercase pull-left">blue</h3>
										<span class="view pull-right">(27)</span>
									</a>
								</li>
								<li class="green">
									<a href="javascript:void(0);">
										<h3 class="heading3 text-uppercase pull-left">green</h3>
										<span class="view pull-right">(43)</span>
									</a>
								</li>
								<li class="yellow">
									<a href="javascript:void(0);">
										<h3 class="heading3 text-uppercase pull-left">yellow</h3>
										<span class="view pull-right">(15)</span>
									</a>
								</li>
							</ul>
						</section>
						<!-- widget of the page -->
						<section class="widget size-widget">
							<h2 class="heading2 text-uppercase">sizes</h2>
							<ul class="list-unstyled size-list text-center">
								<li><a href="javascript:void(0);">S</a></li>
								<li><a href="javascript:void(0);">M</a></li>
								<li><a href="javascript:void(0);">L</a></li>
								<li><a href="javascript:void(0);">XL</a></li>
								<li><a href="javascript:void(0);">XXL</a></li>
							</ul>
						</section>
						<!-- widget of the page -->
						<section class="widget">
							<div class="img-holder">
								<img src="https://via.placeholder.com/270x360" alt="image-description" class="img-responsive">
							</div>
						</section>
						<!-- widget of the page -->
						<section class="widget">
							<h2 class="heading2 text-uppercase">FEATURED</h2>
							<ul class="list-unstyled feature-list">
								<li>
									<div class="img-holder text-center pull-left">
										<a href="shop-detail.html"><img src="https://via.placeholder.com/20x70" class="img-responsive" alt="img-description"></a>
									</div>
									<div class="txt-holder pull-left">
										<h3 class="heading3"><a href="shop-detail.html">Rose Wines</a></h3>
										<ul class="list-unstyled rating-list">
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
										</ul>
										<strong class="heading2 fontcinzel fwBold">$125.00</strong>
									</div>
								</li>
								<li>
									<div class="img-holder text-center pull-left">
										<a href="shop-detail.html"><img src="https://via.placeholder.com/20x70" class="img-responsive" alt="img-description"></a>
									</div>
									<div class="txt-holder pull-left">
										<h3 class="heading3"><a href="shop-detail.html">Rose Wines</a></h3>
										<ul class="list-unstyled rating-list">
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
										</ul>
										<strong class="heading2 fontcinzel fwBold">$125.00</strong>
									</div>
								</li>
								<li>
									<div class="img-holder text-center pull-left">
										<a href="shop-detail.html"><img src="https://via.placeholder.com/20x70" class="img-responsive" alt="img-description"></a>
									</div>
									<div class="txt-holder pull-left">
										<h3 class="heading3"><a href="shop-detail.html">Rose Wines</a></h3>
										<ul class="list-unstyled rating-list">
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
										</ul>
										<strong class="heading2 fontcinzel fwBold">$125.00</strong>
									</div>
								</li>
								<li>
									<div class="img-holder text-center pull-left">
										<a href="shop-detail.html"><img src="https://via.placeholder.com/20x70" class="img-responsive" alt="img-description"></a>
									</div>
									<div class="txt-holder pull-left">
										<h3 class="heading3"><a href="shop-detail.html">Rose Wines</a></h3>
										<ul class="list-unstyled rating-list">
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
										</ul>
										<strong class="heading2 fontcinzel fwBold">$125.00</strong>
									</div>
								</li>
								<li>
									<div class="img-holder text-center pull-left">
										<a href="shop-detail.html"><img src="https://via.placeholder.com/20x70" class="img-responsive" alt="img-description"></a>
									</div>
									<div class="txt-holder pull-left">
										<h3 class="heading3"><a href="shop-detail.html">Rose Wines</a></h3>
										<ul class="list-unstyled rating-list">
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
											<li><a href="javascript:void(0);" class="fa fa-star"></a></li>
										</ul>
										<strong class="heading2 fontcinzel fwBold">$125.00</strong>
									</div>
								</li>
							</ul>
						</section>
					</aside>
				</div>
			</div>
		</section>
	</main>
	
	<a id="newsletter-hiddenlink" href="#popup2" class="lightbox" style="display: none;">Newsletter</a>
	
</div>
<!-- main container of all the page elements end -->

@endsection
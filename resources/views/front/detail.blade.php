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
							<h2 class="heading text-uppercase fwLight">Full Width</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a href="index.html">Home</a></li>
								<li>/</li>
								<li><a href="shop.html">Shop</a></li>
								<li>/</li>
								<li>Details</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- shop detail of the page -->
			<section class="shop-detail container">
				<div class="row">
					<div class="col-xs-12">
						
						<div class="slider">
							<!-- product slider of the page -->
							
							<div class="product-slider">
								@foreach ($d1 as $x)
								<div class="slide">
									<img src="/upload/{{$x->img}}" class="img-responsive" alt="image description">
								</div>
								@endforeach
                              
							
							</div>
							<!-- pagg slider of the page -->
							<ul class="list-unstyled slick-slider pagg-slider">@foreach ($d1 as $x)
								<li><img src="/upload/{{$x->img}}" alt="image description" class="img-responsive"></li>
							@endforeach
							</ul> 
									
						</div>

						<h2 class="heading5">{{$d->dish_name}}</h2>
						<!-- rating list of the page -->
						<ul class="list-unstyled rating-list">
							<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
						</ul>
						<strong class="price fontbase">{{$d->dish_price}}</strong>
						<p>{{$d->dish_des}}</p>
						<!-- footer of the page -->
						<footer class="footer">
							<div class="f-holder">
								<ul class="list-unstyled color-list">
									<li class="heading3">Select Color:</li>
									<li><a href="javascript:void(0);" class="red lg-round"></a></li>
									<li><a href="javascript:void(0);" class="black lg-round"></a></li>
									<li><a href="javascript:void(0);" class="blue lg-round"></a></li>
									<li><a href="javascript:void(0);" class="green lg-round"></a></li>
									<li><a href="javascript:void(0);" class="yellow lg-round"></a></li>
								</ul>
								<ul class="list-unstyled size-list">
									<li class="heading3">Select Size:</li>
									<li><a href="javascript:void(0);" class="lg-round fontcinzel">S</a></li>
									<li><a href="javascript:void(0);" class="lg-round fontcinzel">M</a></li>
									<li><a href="javascript:void(0);" class="lg-round fontcinzel">L</a></li>
									<li><a href="javascript:void(0);" class="lg-round fontcinzel">XL</a></li>
									<li><a href="javascript:void(0);" class="lg-round fontcinzel">XXL</a></li>
								</ul>
							</div>
							<div class="f-holder">
								<ul class="list-unstyled tag-list text-uppercase">
									<li class="title"><i class="fa fa-tag"></i></li>
									<li><a href="javascript:void(0);">blackberry ,</a></li>
									<li><a href="javascript:void(0);">cassis ,</a></li>
									<li><a href="javascript:void(0);">plum ,</a></li>
									<li><a href="javascript:void(0);">vanilla ,</a></li>
									<li><a href="javascript:void(0);">cocoa</a></li>
								</ul>
								<ul class="list-unstyled social-network">
									<li class="heading3">Share link:</li>
									<li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
								</ul>
							</div>
						</footer>
						<!-- holder of the page -->
						<div class="holder">
							<input type="number" placeholder="1">
							<ul class="list-unstyled text-center social-networks">
								<li><a href="javascript:void(0);"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<!-- accordion of the page -->
						<ul class="accordion list-unstyled">
							<li class="active">
								<a href="javascript:void(0);" class="opener heading3 text-uppercase">Product DESCRIPTION</a>
								<div class="slide">
									<p><strong>Adult Signature Required :</strong>You must be at least 21 years of age to purchase wine. Adult signature is required on delivery.</p>
									<p><strong>Weather Related Delays : </strong> The seller may delay shipment if the temperature at the shipping or delivery address is not between 45°F and 80°F.</p>
								</div>
							</li>
							<li>
								<a href="javascript:void(0);" class="opener heading3 text-uppercase">additional imformation</a>
								<div class="slide">
									<p><strong>Adult Signature Required :</strong>You must be at least 21 years of age to purchase wine. Adult signature is required on delivery.</p>
									<p><strong>Weather Related Delays : </strong> The seller may delay shipment if the temperature at the shipping or delivery address is not between 45°F and 80°F.</p>
								</div>
							</li>
							<li>
								<a href="javascript:void(0);" class="opener heading3 text-uppercase">Customer Reviews (15)</a>
								<div class="slide">
									<p><strong>Adult Signature Required :</strong>You must be at least 21 years of age to purchase wine. Adult signature is required on delivery.</p>
									<p><strong>Weather Related Delays : </strong> The seller may delay shipment if the temperature at the shipping or delivery address is not between 45°F and 80°F.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			
		</main>
		
		<a id="newsletter-hiddenlink" href="#popup2" class="lightbox" style="display: none;">Newsletter</a>
		
	
	</div>

@endsection
	
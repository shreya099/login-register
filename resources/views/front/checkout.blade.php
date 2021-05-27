@extends('front.master')
@section('content')
<!-- main of the page -->
		<main id="main">
			<div class="space bg-black"></div>
			<!-- banner of the page -->
			<section class="banner bg-parallax overlay" style="background-image:url(https://via.placeholder.com/1920x460);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="heading text-uppercase fwLight">Check Out</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a href="index.html">Home</a></li>
								<li>/</li>
								<li>Check Out</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Checkout Sec of the page -->
			<div class="checout-sec left-sidebar container">
				<div class="row">
					<div class="col-xs-12">
						<p>Returning customer? <a href="#">Click here to login</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8 form-holder">
						<h2 class="heading3 text-center">BILLING ADDRESS</h2>
						<!-- Checkout Form of the page -->
						<form class="checkout-form" action="placeorder" method="post">
							@csrf
							<fieldset>
								<input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
								<div class="form-group">
									<label class="text-uppercase"> NAME *</label>
									<input class="form-control" name="name" type="text" value="{{Auth()->user()->name}}">
								</div>
								
								
								<div class="form-group">
									<label class="text-uppercase">address *</label>
									<input class="form-control" type="text" placeholder="Street Address" name="address" >
								</div>
								
								<div class="form-group">
									<label class="text-uppercase">TOWN / CITY *</label>
									<input class="form-control" type="text" name="city" >
								</div>
								<div class="form-group">
									<label class="text-uppercase">COUNTRY / STATES</label>
									<input class="form-control" type="text" name="country" >
								</div>
								<div class="form-group">
									<label class="text-uppercase">POSTCODE / ZIP *</label>
									<input class="form-control" type="text" name="pin" >
								</div>
								<div class="form-group">
									<label class="text-uppercase">EMAIL ADDRESS *</label>
									<input class="form-control" type="text"  value="{{Auth()->user()->email}}" name="email" >
								</div>
								<div class="form-group">
									<label class="text-uppercase">PHONE *</label>
									<input class="form-control" type="tel" name="phone" >
								</div>
								<div class="form-group wrap">
									<input type="checkbox"><span>Create an account?</span>
									<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page</p>
								</div>
								<div class="form-group">
									<label class="text-uppercase">ACCOUNT PASSWORD *</label>
									<input class="form-control" type="password">
								</div>
								<div class="form-group mar wrap">
									<input type="checkbox"><span>Create an account?</span>
								</div>
								<div class="form-group wrap2">
									<label class="text-uppercase">ORDER NOTES</label>
									<textarea class="form-control"></textarea>
								</div>
							</fieldset>
					
					</div>
					<aside class="col-xs-12 col-md-4">
						<!-- Cart Widget of the page -->
						<div class="cart-widget text-center">
							<h3 class="heading3 text-uppercase">PROMOTIONAL CODE</h3>
							<p class="text-left">Enter your coupon code if you have one</p>
							<!-- <form class="subscribe-form">
								<fieldset>
									<input class="form-control" type="email" placeholder="Coupon code">
									<button type="submit" class="btn-primary text-uppercase lg-round">Subscribe</button>
								</fieldset>
							</form> -->
						</div>
						<?php   $y=0;
                             foreach($d1 as $x)
								$y=$y+$x->dish_quantity*$x->dish_price

                                  
                                 ?>
						<!-- Cart Widget of the page -->
						<div class="cart-widget text-center">
							<h3 class="heading3 text-uppercase">your order</h3>
							<ul class="list-unstyled cart-totel">
								<li class="text-uppercase">product<span class="titles pull-right">totel</strong></li>
									@foreach($d1 as $x)
								<li>{{$x->dish_name}} x {{$x->dish_quantity}}<strong class="heading2 pull-right">{{$x->dish_quantity*$x->dish_price}}</strong></li>
								@endforeach
								
								<li>Cart Subtotal<span class="heading2 pull-right">{{$y}}</strong></li>
								<li>Shipping and Handling<span class="pull-right">Free Shipping</span></li>
								<li class="bdr-b text-uppercase">Order Total<strong class="heading2 pull-right">{{$y}}</strong></li>
								<input type="hidden" name="grand_total" value="{{$y}}">
							</ul>
						</div>

						<!-- Cart Widget of the page -->
						<div class="cart-widget">
							
								<feildset>
									<label for="radio-6">
										<input id="radio-6" name="payment_method" type="radio" class="cod" value="cod">
										<span class="fake-input"></span>
										<span class="fake-label">Cash on delivery</span>
									</label>
									<label for="radio-7">
										<input id="radio-7" name="payment_method" type="radio" class="paytm" value="paytm">
										<span class="fake-input"></span>
										<span class="fake-label">Paytm</span>
									</label>
									<label for="radio-8">
										<input id="radio-8" name="payment_method" type="radio" class="razorpay" value="razorpay">
										<span class="fake-input"></span>
										<span class="fake-label">Razorpay</span>
									</label>
									<button class="btn-primary active text-center text-uppercase lg-round" type="submit" onclick="return SelectPaymentMethod();">Place Order</button>
								</feildset>
							</form>
						</div>
					</aside>
				</div>
			</div>
		</main>

	@endsection
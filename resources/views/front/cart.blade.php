@extends('front.master')
@section('content')


<div class="shopping-cart container">
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive">
							<!-- cart table of the page -->
							<table class="cart-table">
								<thead>
									<tr class="text-uppercase">
										<th>image</th>
										<th>product name</th>
										<th>price</th>
										<th>quantity</th>
										<th class="wrap">
											<span class="pull-left">totel</span>
											<a href="#" class="fa fa-close text-center"></a>
										</th>
									</tr>
								</thead>
								<tbody>
									@foreach($d1 as $x)
									<tr>
										<td>
											<div class="product-img">
												<img src="/upload/{{$x->dish_img}}" class="img-responsive">
											</div>
										</td>
										<td>
											<div class="content-holder">
												<h3><a href="shop-detail.html">{{$x->dish_name}}</a></h3>
												<div class="holder">
													<span class="color-code pull-left">Color:</span>
													<span class="size-code pull-left">Size: <a href="#" class="lg-round text-center">M</a></span>
												</div>
											</div>
										</td>
										<td class="price fwBold">{{$x->dish_price}}</td>
										<td>	
											<!-- <input type="number" placeholder="1" value="{{$x->dish_quantity}}" min="1" max="10">
 -->                                  <a href="{{url('cart/update_q/'.$x->id.'/1')}}">+</a>
 <input type="tet" name="" value="{{$x->dish_quantity}}">
  <a href="{{url('cart/update_q/'.$x->id.'/-1')}}">+</a>
										</td>
										<td class="wrap">
											<span class="price pull-left fwBold">{{$x->dish_price*$x->dish_quantity}}</span>
											<a href="#" class="fa fa-close pull-right text-center"></span>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<a href="{{url('front')}}" class="btn-primary pull-left lg-round text-uppercase text-center">continue shopping</a>
							<a href="#" class="btn-primary active pull-right lg-round text-uppercase text-center">update cart</a>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Cart Widget of the page -->
					<div class="col-xs-12 col-sm-4 cart-widget text-center">
						<h3 class="heading3 text-uppercase">estimate shipping and tax</h3>
						<p>Enter your destination to get shipping &amp; tax</p>
						<!-- Shipping form of the page -->
						<form class="shipping-form text-left">
							<fieldset>
								<div class="form-group">
									<label class="text-uppercase pull-left">COUNTRY *:</label>
									<select>
										<option value="0">Select options</option>
										<option value="1">Select options</option>
										<option value="2">Select options</option>
									</select>
								</div>
								<div class="form-group">
									<label class="text-uppercase pull-left">STATE / PROVINCE *:</label>
									<select>
										<option value="0">Select options</option>
										<option value="1">Select options</option>
										<option value="2">Select options</option>
									</select>
								</div>
								<div class="form-group">
									<label class="text-uppercase pull-left">ZIP / POSTAL CODE *:</label>
									<select>
										<option value="0">Select options</option>
										<option value="1">Select options</option>
										<option value="2">Select options</option>
									</select>
								</div>
								<button type="submit" class="btn-primary text-uppercase text-center lg-round">get a quocte</button>
							</fieldset>
						</form>
					</div>
					<!-- Cart Widget of the page -->
					<div class="col-xs-12 col-sm-4 cart-widget text-center form-group">
						<h3 class="heading3 text-uppercase">DIscount codes</h3>
						<p>Enter your coupin if you have one</p>
						<select>
							@foreach($d3 as $z)
							@if($z->coupon_status=='inactive')
							@continue
							@endif

							<option value='{{$z->coupon_value}}'>{{$z->coupon_code}} <br> for order upto rs {{$z->cart_min_value}}</option>
							@endforeach
						</select>
						<!-- Subscribe Form of the page -->
						<form class="subscribe-form">
							<fieldset>
								
								<button type="submit" class="btn-primary text-uppercase lg-round">Apply</button>
							</fieldset>
						</form>
					</div>
					<!-- Cart Widget of the page -->
					<div class="col-xs-12 col-sm-4 cart-widget text-center">
						<h3 class="heading3 text-uppercase">CART TOTAL</h3>
						<ul class="list-unstyled cart-totel text-uppercase">
                             <?php   $y=0;
                             foreach($d1 as $x)
								$y=$y+$x->dish_quantity*$x->dish_price

                                  
                                 ?>
							<li>grand total: {{$y}}<strong class="heading2">

							</strong></li>
						</ul>
						<span class="txt fontjosefin"></span>
						@if (!Auth::guest())
                            <button type="button" class="btn btn-primary" data-toggle="modal"><a href="{{url('checkout')}}">proceed to checkout</a></button>
						@else
						<button type="button" class="btn btn-primary" data-toggle="modal"><a href="{{url('user_login')}}">proceed to checkout</a></button>
						@endif
					</div>
				</div>
			</div>


			@endsection

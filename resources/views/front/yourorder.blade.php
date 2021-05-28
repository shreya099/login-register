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
											
 
 <input type="tet" name="" value="{{$x->dish_quantity}}">

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
							
						</div>
					</div>
				</div>
				
			</div>


			@endsection

@extends('front.master')
@section('content')
<!-- main container of all the page elements -->
<div id="wrapper">
	<!-- header of the page -->
	
	
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

		
	</main>
	<section><div class="feature-sec container">
	<div class="row">
					@foreach($d2 as $x)
						<div class="col-xs-12 col-sm-4">
							<!-- team sec of the page -->
							<div class="team-col">
								<div class="img-holder">
									<a href="{{url('dish/'.$x->id)}}">
									<img src="/upload/{{$x->img}}" alt="team member" height="400px"></a>
									
								</div>
								<div class="txt-wrap">
									<h3 class="heading4 text-capitalize">{{$x->title}}</h3>
									<span class="desination text-uppercase">sales executive</span>
								</div>
							</div>
						</div>
						@endforeach
						
					</div></div>
					</section>
	
	
	
</div>
<!-- main container of all the page elements end -->

@endsection
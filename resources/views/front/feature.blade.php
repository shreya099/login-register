<!-- feature sec of the page -->
			<div class="feature-sec container">
				<div class="row">
					<!-- header of the page -->
					<header class="col-xs-12 text-center header wow fadeInUp" data-wow-delay="0.4s">
						<span class="title fontpinyon">FOOD-ZONE</span>
						<h1 class="heading text-uppercase">CATEGORY</h1>
						<div class="header-img">
							<img src="images/bdr-img.png" alt="image description" class="img-responsive">
						</div>
					</header>
				</div>
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
						
					</div>
			</div>
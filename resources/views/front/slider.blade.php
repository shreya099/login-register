<!-- main slider of the page -->
			<div class="main-slider">
				<!-- slide of the page -->
				  @foreach ($d as $x)
				<div class="slide bg-full" style="background-image:url(/upload/{{$x->img}});">
					<div class="holder">
						<div class="b-logo">
							
						<h1>	{{$x->title}}</h1>
							
						</div>
						<a href="javascript:void(0);" class="btn-primary active lg-round text-uppercase">show now</a>
					</div>
				</div>
				      @endforeach
			</div>
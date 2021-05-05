<!-- aboutus sec of the page -->
			<section class="aboutus-sec bg-light">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-5 col-lg-6">
								  @foreach ($d1 as $x)
							<div class="image-block img-col" data-tilt>
								<img src="/upload/{{$x->img}}" alt="img-description">
							</div>
							@endforeach
						</div>
						<div class="col-xs-12 col-md-7 col-lg-6">
							<!-- header of the page -->
							<header class="header text-center wow fadeInUp" data-wow-delay="0.4s">
								<span class="title fontpinyon">Welcome</span>
								<h1 class="heading text-uppercase">Foodzone</h1>
								<div class="header-img">
									<img src="images/bdr-img.png" alt="image description" class="img-respnsive">
								</div>
								<p>We deliver food in less then 20 min order now & enjoy your meal !!</p>
							</header>
							
						</div>
					</div>
					<div class="row contact-holder">
						<div class="col-xs-12 col-sm-4 text-center">
							<h2 class="heading2">Hotline</h2>
							<a class="sub-title" href="tell:(00)123456789">(00) 123 456 789</a>
						</div>
						<div class="col-xs-12 col-sm-4 text-center l-bdr">
							<h2 class="heading2">Mail us</h2>
							<time class="sub-title">shreyajain9609@gmail.com</time>
						</div>
						<div class="col-xs-12 col-sm-4 text-center l-bdr">
							<h2 class="heading2">Follow Us</h2>
							<ul class="list-unstyled social-network text-center">
								<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
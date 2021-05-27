@extends('front.master')
@section('content')
<div  class="container" style="height:300px;background:yellow">

<h4 class="col-md-12" style="background:green;margin-top:243px">Register</h4>
		
			<!-- login form of the page -->
			<form class="login-form text-center">
				<fieldset>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Username*:">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" placeholder="Password*:">
					</div>
					<button class="btn-primary active lg-round text-center fwBold text-uppercase" type="submit">login</button>
				</fieldset>
			</form>
			<div class="wrap">
				<a href="javascript:void(0);" class="pull-left">Register</a>
				<a href="javascript:void(0);" class="pull-right">Forget Password</a>
			</div>
</div>

	@endsection
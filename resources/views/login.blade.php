<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
<style>
	body{
		overflow-x: hidden;
		overflow-y:hidden;
	}
	.bg-image {
background-image: url('https://image.freepik.com/free-vector/online-registration-sign-up-with-man-sitting-near-smartphone_268404-95.jpg');
background-size: 100%;
background-position: center;
background-repeat:no-repeat;
}
@media (max-width:1300px) and (min-width:600px){
	.no-gutter{box-shadow: 5px 10px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
      	border:none;

	 height:700px;
	 margin-top:133px;
	}
	.d-none{
		position:relative;
		top:-230px;
		left:88px;
	}
	.d-flex{

		position:relative;
		top:-230px;
		left:-37px;
	}
}
@media (max-width:2000px) and (min-width:1300px){
	.no-gutter{box-shadow: 5px 10px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
      	border:none;

	 height:500px;
	 margin-top:90px;
	}
	.d-none{
		position:relative;
		top:-50px;
		left:88px;
	}
	.d-flex{

		position:relative;
		top:-50px;
		left:-37px;
	}
}
</style>
</head>
<body>
<div class="container">
@if (\Session::has('ok'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('ok') !!}</li>
        </ul>
    </div>
@endif

<div class="row no-gutter">

<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
<div class="col-md-8 col-lg-6">
<div class="login d-flex align-items-center py-5">
<div class="container">
<div class="row">
<div class="col-md-9 col-lg-8 mx-auto">
<h3 class="login-heading mb-4">Welcome back!</h3>
<form action="{{url('submit-login')}}" method="POST" id="logForm">
{{ csrf_field() }}

@if(session('success'))
    <h1></h1><script>swal( '{{session('success')}}' ,'Try Again!','error' ).then(function() { window. location = '{{url("/")}}'; });;</script>
@endif
<div class="form-label-group">
<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
<label for="inputEmail">Email address</label>
@if ($errors->has('email'))
<span class="error">{{ $errors->first('email') }}</span>
@endif    
</div> 
<div class="form-label-group">
<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
<label for="inputPassword">Password</label>
@if ($errors->has('password'))
<span class="error">{{ $errors->first('password') }}</span>
@endif  
</div>
<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
<div class="text-center">Dont't have an account?
<a class="small" href="{{url('registration')}}">Sign Up</a></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
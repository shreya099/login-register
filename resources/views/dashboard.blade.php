<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
<style>
	.bg-image {
background-image: url('https://image.freepik.com/free-vector/welcome-modern-lettering_136321-864.jpg');
background-size: 100% 100%;
background-position: center;
background-repeat:no-repeat;
}
	</style>
</head>
<body>
<div class="container-fluid">
<div class="row no-gutter">
<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
<div class="col-md-8 col-lg-6">
<div class="login d-flex align-items-center py-5">
<div class="container">
<div class="row">
<div class="col-md-9 col-lg-8 mx-auto">
<h3 class="login-heading mb-4">Welcome Dashboard!</h3>
<div>
@if(session('success'))
    <h1>{{session('success')}}</h1>
@endif
<div>
Welcome {{ ucfirst(Auth()->user()->name) }}
</div>
<div>
<a class="small" href="{{url('logout')}}">Logout</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
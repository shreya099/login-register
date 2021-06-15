<form method="post" action="{{url('user-login')}}">
	@csrf
	<input type="hidden" name="role" value="1">
	
	<input type="email" name="email" placeholder="enter email">
	<input type="password" name="password" placeholder="enter password">
	<input type="submit" name="submit" value="login">
	<input type="submit" name="reg" value="register">
	<a href="{{url('/forget-password')}}">forget</a>
	<a class="btn btn-lg btn-primary btn-block" href="{{ url('auth/google') }}">
 <strong>Login With Google</strong>
</form>
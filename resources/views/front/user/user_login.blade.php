<form method="post" action="{{url('user-login')}}">
	@csrf
	
	<input type="email" name="email" placeholder="enter email">
	<input type="password" name="pass" placeholder="enter password">
	<input type="submit" name="submit" value="login">
	<input type="submit" name="reg" value="register">
</form>
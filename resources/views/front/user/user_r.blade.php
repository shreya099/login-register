<form method="post" action="{{url('savereg')}}">
	@csrf
	<input type="text" name="name" placeholder="enter  name">
	<input type="email" name="email" placeholder="enter email">
	<input type="password" name="pass" placeholder="enter password">
	<input type="submit" name="submit" value="register">
</form>
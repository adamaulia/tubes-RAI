<form method="POST" action="/auth/login">
	{!! csrf_field()!!}
	<div>
		<label>email</label>
		<input type="email" name="email" value="{{old('email')}}">
	</div>	
	<div>
		<label>password</label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<input type="checkbox" name="remember">Remember Me
	</div> 
	<div>
		<button type="submit">Login</button>
	</div>
</form>
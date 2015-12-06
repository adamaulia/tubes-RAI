<form method="post" action="/auth/register">
	{!!csrf_field()!!}

	<div>
		<label>Name</label>
		<input type="text" name="name" value="{{old('name')}}">
	</div>
	<div>
		<label>email</label>
		<input type="email" name="email" value="{{old('email')}}">
	</div>	
	<div>
		<label>password</label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<label>confirm password</label>
		<input type="password" name="password_confirmation" id="password">
	</div>
	<div>
		<button type="submit">Register</button>
	</div>
</form>
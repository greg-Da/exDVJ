
@extends('layout')

@section('content')
<br><br><br><br><br><br>
<div class="container">
	<div class="col-6 formsignup my-5">
		<form action="signup" method="POST">
			<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>

			<div class="form-group">
				<label for="Email">Email address</label>
				<input type="email" class="form-control" name="email" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>

			<div class="form-group">
				<label for="Password">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<br><br>
			<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
			@csrf
		</form>
		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<div></div>
	</div>
</div>
<br><br><br><br><br><br><br>

@endsection
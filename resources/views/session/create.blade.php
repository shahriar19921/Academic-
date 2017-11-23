@extends ('layouts.master')



@section('content')

	<div class="col-md-8">
		<h1>Sign in</h1>


		<form method="POST" action="/login">
			{{csrf_field()}}

			<div class="form-group">

			<lebel for="email">Email Address:</lebel>
			<input type="email" class="form-control" id="email" name="email">

			</div>





			<div class="form-group">

			<lebel for="password">Password:</lebel>
			<input type="password" class="form-control" id="password" name="password">

			</div>



			<div class="form-group">

			<button type="submit" class="btn btn-primary">Sign In</button>

			</div>

			@include ('layouts.errors')


		</form>


	</div>

@endsection
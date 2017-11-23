 @extends ('layouts.master')



 @section ('content')

 <div class="col-sm-8">

 		<h1>Register</h1>
 		
 	<form method="POST" action="/register">
 			
 			{{csrf_field()}}


 			<div class="form-group">
 		
 			<lebel for="name">Name:</lebel>
 			<input type="text" class="form-control" id="name" name="name">

 		</div>




 		<div class="form-group" allign="center">
 		
 			<lebel for="email">Email:</lebel>
 			<input type="email" class="form-control" id="email" name="email" required>

 		</div>



 		<div class="form-group" allign="center">
 		
 			<lebel for="password">Password:</lebel>
 			<input type="password" class="form-control" id="password" name="password" required>

 		</div>


 		<div class="form-group" allign="center">
 		
 			<lebel for="password_confirmation">Password Confirmation:</lebel>
 			<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

 		</div>




 		<div>
 			
 			<button type="submit" class="btn btn-primary">Register</button>
 		</div>



 		@include('layouts.errors')



 	</form>

</div>

 @endsection
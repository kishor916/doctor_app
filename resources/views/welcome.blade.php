@extends('components.layout')
@section('content') 
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div style="margin:200px 50px 0 0">
					<h1 class="display-4">Welcome to Doctor Appointment Website</h1>
					<p class="lead">Find the best doctors and book appointments online.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Sign Up</h5>
						<form action="/register" method="POST">
							@csrf
							<div class="form-group">
								<label for="signupFirstName">First Name</label>
								<input value="{{old('first_name')}}" name="first_name" type="text" class="form-control" id="signupFirstName" placeholder="Enter first name">
								 @error('first_name')
									<p class="m-0  small alert alert-danger shadow-sm">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="signupLastName">Last Name</label>
								<input value="{{old('last_name')}}" name="last_name" type="text" class="form-control" id="signupLastName" placeholder="Enter last name">
								 @error('last_name')
									<p class="m-0  small alert alert-danger shadow-sm">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="signupEmail">Email address</label>
								<input value="{{old('email')}}" name="email" type="email" class="form-control" id="signupEmail" placeholder="Enter email">
								 @error('email')
									<p class="m-0  small alert alert-danger shadow-sm">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="signupPassword">Password</label>
								<input name="password" class="form-control" id="signupPassword" placeholder="Password">
								 @error('password')
									<p class="m-0  small alert alert-danger shadow-sm">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="signupGender">Gender</label>
								<select class="form-control" id="signupGender" name="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
							</div>
							<div class="form-group">
								<label for="signupPhone">Phone Number</label>
								<input value="{{old('phone')}}"name="phone" type="tel" class="form-control" id="signupPhone" placeholder="Enter phone number">
								 @error('phone')
									<p class="m-0  small alert alert-danger shadow-sm">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="signupPhone">Address</label>
								<input value="{{old('address')}}"name= "address" type="address" class="form-control" id="signupPhone" placeholder="Enter address">
								 @error('address')
									<p class="m-0  small alert alert-danger shadow-sm">{{$message}}</p>
								@enderror
							</div>
							<button type="submit" class="btn btn-primary">Sign Up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
			
@endsection
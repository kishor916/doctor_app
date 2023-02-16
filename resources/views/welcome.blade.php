 <x-layout>
 <!DOCTYPE html>
<html>
<head>
	<title>Doctor Appointment Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">Doctor Appointment Website</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
{{-- body begains --}}
 <!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Welcome to Doctor Appointment Website</h1>
		<p class="lead">Find the best doctors and book appointments online.</p>
	</div>
</div>

<!-- Login and Signup Forms -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Login</h5>
					<form action="/login" method="POST">
					@csrf
						<div class="form-group">
							<label for="loginEmail">Email address</label>
							<input name="user_email" type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="loginPassword">Password</label>
							<input name="user_password" type="password" class="form-control" id="loginPassword" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
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
							 @error('adderss')
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

</x-layout>
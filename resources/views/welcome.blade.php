 <x-layout>
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
					<form>
						<div class="form-group">
							<label for="loginEmail">Email address</label>
							<input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="loginPassword">Password</label>
							<input type="password" class="form-control" id="loginPassword" placeholder="Password">
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
					<form>
						<div class="form-group">
							<label for="signupFirstName">First Name</label>
							<input type="text" class="form-control" id="signupFirstName" placeholder="Enter first name">
						</div>
						<div class="form-group">
							<label for="signupLastName">Last Name</label>
							<input type="text" class="form-control" id="signupLastName" placeholder="Enter last name">
						</div>
								<div class="form-group">
							<label for="signupEmail">Email address</label>
							<input type="email" class="form-control" id="signupEmail" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="signupPassword">Password</label>
							<input type="password" class="form-control" id="signupPassword" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="signupConfirmPassword">Confirm Password</label>
							<input type="password" class="form-control" id="signupConfirmPassword" placeholder="Confirm Password">
						</div>
						<div class="form-group">
							<label for="signupGender">Gender</label>
							<select class="form-control" id="signupGender">
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div class="form-group">
							<label for="signupPhone">Phone Number</label>
							<input type="tel" class="form-control" id="signupPhone" placeholder="Enter phone number">
						</div>
						<button type="submit" class="btn btn-primary">Sign Up</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</x-layout>
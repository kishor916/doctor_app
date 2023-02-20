<html>
<head>
	<title>Doctor Appointment Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
{{-- nav bar --}}
<header>
@auth
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Your Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="mx-auto">
        <ul class="navbar-nav">
        
          <li class="nav-item">
            <form class="form-inline" action="/search" method="GET">
				@csrf
              <select class="form-control mr-sm-2" name="specialist">
                <option value="">All Categories</option>

				@foreach ($specialists as $specialist)
				<option value="{{$specialist['id']}}">{{$specialist['name']}}</option>
				@endforeach

              </select>
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
			<a class="nav-link" href="#">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHCZuslFbn42wwA9qw6ywBERhtpr_yOFy3Cw&usqp=CAU" alt="Your Profile" class="rounded-circle" style="width: 30px; height: 30px;">
			  </a>
        </li>
        <form action="/logout" method="POST" class="d-inline">
			@csrf
          <button class="btn btn-sm btn-secondary">Sign Out</button>
        </form>
      </ul>
    </div>
  </nav>
@else
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	  <a class="navbar-brand" href="#">Doctor Appointment Website</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		
		<form action="/login" method="POST" class="form-inline my-2 my-lg-0">
		  @csrf
		  <div class="form-group">
			<label for="loginEmail" class="sr-only">Email address</label>
			<input name="user_email" type="email" class="form-control mr-sm-2" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
		  </div>
		  <div class="form-group">
			<label for="loginPassword" class="sr-only">Password</label>
			<input name="user_password" type="password" class="form-control mr-sm-2" id="loginPassword" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-primary my-2 my-sm-0">Submit</button>
		</form>
		
	  </div>
	</div>
  </nav>
</header>
@endauth
@if (session()->has('success'))
<div class="container container--narrow">
<div class="alert alert-success text-center">
	{{session('success')}}
</div>
</div>
@endif

	@yield('content')
	


<!-- Footer -->
<footer class="border-top text-center small text-muted py-3">
	<div class="container text-center">
		<p>Doctor Appointment Website &copy; 2023</p>
	</div>
</footer>


<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

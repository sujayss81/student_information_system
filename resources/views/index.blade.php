<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
	

</head>
<body>
	<!-- Raw -->
	<!-- 	<div class="jumbotron jumbotron-fluid cont1">
  		<div class="container cont1">
    	<h1 class="display-4">Student Login</h1>
  		</div>
</div>
	<form method="post" action="/auth">
		<div class="container cont2">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
    	<label for="username">Username</label>
    	<input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="Enter your username">
    	</div>
		<div class="form-group">
    	<label for="password">Password</label>
    	<input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="********">
  		</div>
		<input type="submit" class="btn btn-primary" name="login" value="Login">
		</div>
	</form>
	<a href='/admin'>Login as admin</a> -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic " data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form method="post" action="/auth" class="login100-form validate-form">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<span class="login100-form-title">
						Student Login
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="user" placeholder="Enter your username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="submit" name="login" class="login100-form-btn" value="Login">
						</input>
						<small>*Use your USN as password if logging in for the first time</small>
						
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/admin">
							Login as administrator
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>


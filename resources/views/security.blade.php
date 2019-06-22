<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">
</head>
<body>
		<div class="mycontainer">
		<div class="sidenav">
			<div class="sis"><img src="{{asset('frontend/images/sis.png')}}" width="100%" height="50"></div>
			<div class="container img"><img class="img" src="{{asset('frontend/css/profile.png')}}" width="170" height="170"></div>
		@foreach($res as $item)
		<div class="container welcome"><h4>Welcome {{$item->username}}</h4></div>
		<!-- <a href="/logout"><h6>Logout</h6></a> -->
		<!-- <button type="button" class="btn btn-primary" onclick= "window.location.href = '/logout'">Logout</button> -->
		<div class="container">
		<a type="button" class="btn btn-danger" href = '/logout' onclick = "return confirm('Are you sure you want to Logout?')">Logout</a>
		</div>
		@endforeach
		</div>
		<div class="main">
				<div class="up container">
					<ul class="nav nav-pills">
 					 <li class="nav-item">
    					<a class="nav-link" href="/home">My Profile</a>
  					</li>
  						<li class="nav-item">
    			<a class="nav-link" href="/student_marks">Marks</a>
  				</li>
				<li class="nav-item">
    			<a class="nav-link" href="/attendance">Attendance Details</a>
  				</li>
				<li class="nav-item">
  					<a class="nav-link active" href="/security">Security</a>
  				</li>
			</ul>
		<div class="down">
			<button class="btn btn-secondary" onclick="window.location.href = '/change_password'">Change password</button>
		</div>	
</body>
</html>

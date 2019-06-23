<!DOCTYPE html>
<html>
	<head>
		<title>Admin Home</title>
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
				@endforeach
				<div class="container">
					<a type="button" class="btn btn-danger" href = '/logout_admin' onclick = "return confirm('Are you sure you want to Logout?')">Logout</a>
				</div>
			</div>
			<div class="main">
				<div class="container up">	
					<ul class="nav nav-pills">
	 					<li class="nav-item">
	    					<a class="nav-link active" href="/admin_home">Manage student records</a>
	  					</li>
	  					<li class="nav-item">
	    					<a class="nav-link" href="/security_admin">Security</a>
	  					</li>
	  				</ul>	
				</div>
				<div class="down">
					<div class="button">
					<div><a href="/insert_records" class="btn btn-secondary add">Add a new student</a></div>
					<div><a href="/choose_student" class="btn btn-secondary view">Enter student marks</a></div>
					<div><a href="/view_records" class="btn btn-secondary view">View all records</a></div>
				</div>	
			</div>
		</div>
	</body>
</html>
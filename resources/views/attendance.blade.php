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
					<div class="container">
						<a type="button" class="btn btn-danger" href = '/logout' onclick = "return confirm('Are you sure you want to Logout?')">Logout</a>
					</div>
					@endforeach
				</div>
				<div class="main ">
					<div class="up container">
						<ul class="nav nav-pills">
		 					<li class="nav-item">
		    					<a class="nav-link" href="/home">My Profile</a>
		  					</li>
		  					<li class="nav-item">
		    					<a class="nav-link" href="/student_marks">Marks</a>
		  					</li>
							<li class="nav-item">
		    					<a class="nav-link active" href="/attendance">Attendance Details</a>
		  					</li>
							<li class="nav-item">
			  					<a class="nav-link" href="/security">Security</a>
			  				</li>
						</ul>
					</div>	
					<div class="down">
						<div class="attendance text-center">
							@foreach($res as $item)
							<div><h2>Classes Attended : {{$item->ca}}</h2></div>
							<div><h2>Total Classes Held : {{$item->tch}}</h2></div>
							<div><h2>Percentage : {{$item->perc}}%</h2></div>
							<div class="container container1">
								<div class="progress">
					  				<div class="progress-bar" role="progressbar" style="width: {{$item->perc}}%;" aria-valuenow="{{$item->perc}}" aria-valuemin="0"     aria-valuemax="100">{{$item->perc}}</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>	
				</div>
			</div>		
	</body>
</html>

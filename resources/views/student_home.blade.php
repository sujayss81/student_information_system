<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">

</head>
<body>
		<!-- <header>Student information system</header> -->
		<div class="mycontainer">
		<div class="sidenav">
			<div class="sis"><img src="{{asset('frontend/images/sis.png')}}" width="100%" height="50"></div>
			<div class="container img"><img class="img" src="{{asset('frontend/css/profile.png')}}" width="170" height="170"></div>
		@foreach($res as $item)
		<div class="container welcome"><h4>Welcome {{$item->username}}</h4></div>
		<!-- <a href="/logout"><h6>Logout</h6></a> -->
		<div class="container">
		<a type="button" class="btn btn-danger" href = '/logout' onclick = "return confirm('Are you sure you want to Logout?')">Logout</a>
		</div>
		@endforeach
		</div>
		<div class="main ">
				<div class="up container">
					<ul class="nav nav-pills">
 					 <li class="nav-item">
    					<a class="nav-link active" href="/home">My Profile</a>
  					</li>
				<li class="nav-item">
    			<a class="nav-link" href="/student_marks">Marks</a>
  				</li>
				<li class="nav-item">
    			<a class="nav-link" href="/attendance">Attendance Details</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="/security">Security</a>
  				</li>
				
			</ul>
				</div>
			<div class="down">
				<div class="details">
			@foreach($res as $item)
			<div>
				<h2><div class="d-inline-flex p-2 name"><pre>Name    : </div><div class="d-inline-flex p-2">{{$item->username}}</div></h2><br>
			</div>
			<div>
				<h2><div class="d-inline-flex p-2 usn"><pre>USN     : </div><div class="d-inline-flex p-2">{{$item->usn}}</div></h2><br>
			</div>	
			<div>
				<h2><div class="d-inline-flex p-2 branch"><pre>Branch  : </div><div class="d-inline-flex p-2">{{$item->branch}}</div></h2><br>
			</div>
			<div>
				<h2><div class="d-inline-flex p-2 addressa"><pre>Address : </div><div class="d-inline-flex p-2 address">{{$item->address}}</div></h2><br>
			</div>
			<div>
				<h2><div class="d-inline-flex p-2 email"><pre>email   : </div><div class="d-inline-flex p-2">{{$item->email}}</div></h2><br>
			</div>
			@endforeach
			</div>
			</div>
	    </div>
	</div>
	
</body>
</html>

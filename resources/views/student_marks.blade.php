<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
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
	    					<a class="nav-link " href="/home">My Profile</a>
	  					</li>
						<li class="nav-item">
	    					<a class="nav-link active" href="/student_marks">Marks</a>
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
					<table border="1" class="table table-boredered mytable text-center container">
						<thead>
							<tr>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
								<th>Total</th>
								<th>Percentage</th>
							</tr>	
						</thead>
						<tbody>
					
							<tr>
								<td>{{$item->mark1}}</td>
								<td>{{$item->mark2}}</td>
								<td>{{$item->mark3}}</td>
								<td>{{$item->mark4}}</td>
								<td>{{$item->mark5}}</td>
								<td>{{$item->mark6}}</td>
								<td>{{$item->mtotal}}</td>
								<td>{{$item->mperc}}%</td>
							</tr>	
					
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>

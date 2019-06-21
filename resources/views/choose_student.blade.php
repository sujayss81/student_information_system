<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/records_style.css') }}">
</head>
<body>
	<div class="container">
		<div class="text-center">All records</div>
	<div class="container">
	<table border="1" class="table table-boredered table-hover">
		<thead>
			<tr>
				<th>USN</th>
				<th>Name</th>
				<th>Branch</th>
				<th>Address</th>
				<th>email</th>
				<th>Classes Attended</th>
				<th>Total Classes held</th>
				<th>Percentage</th>
				<th>Action</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($res as $item)
			<tr>
				<td>{{$item->usn}}</td>
				<td>{{$item->username}}</td>
				<td>{{$item->branch}}</td>
				<td>{{$item->address}}</td>
				<td>{{$item->email}}</td>
				<td>{{$item->ca}}</td>
				<td>{{$item->tch}}</td>
				<td>{{$item->perc}}%</td>
				<td><a href="/insert_marks/{{$item->usn}}">Select</a></td>
			</tr>	
			@endforeach	
		</tbody>
	</table>
	<div class="text-center">
	<button class="btn btn-primary" onclick="window.location.href='/admin_home'">Back</button>
	</div>
	</div>
	</div>
</body>
</html>
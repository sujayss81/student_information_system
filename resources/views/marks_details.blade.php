<!DOCTYPE html>
<html>
	<head>
		<title>Records</title>
			<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/records_style.css') }}">
	</head>
	<body>
		<div class="container">
			<div class="text-center myheader">Detailed Mark Sheet</div>
			<div class="container">
				<table border="1" class="table table-boredered mytable text-center">
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
							<th>Action</th>
						</tr>	
					</thead>
					<tbody>
						@foreach($res as $item)
						<tr>
							<td>{{$item->mark1}}</td>
							<td>{{$item->mark2}}</td>
							<td>{{$item->mark3}}</td>
							<td>{{$item->mark4}}</td>
							<td>{{$item->mark5}}</td>
							<td>{{$item->mark6}}</td>
							<td>{{$item->mtotal}}</td>
							<td>{{$item->mperc}}%</td>
							<td><a href="/update_marks/{{$item->id}}">Update</a>
						</tr>	
						@endforeach	
					</tbody>
				</table>
				<div class="text-center">
				<button class="btn btn-primary mybutton" onclick="window.location.href='/view_records'">Back</button>
				</div>
			</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>Insert Records</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/insert_style.css') }}">
	</head>
	<body>
		<div class="container">
			<div class="text-center header">Add Student Details</div>
			<hr>
			<form method="post" action="/edit">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				@foreach($res as $item)
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control col-6" value="{{$item->username}}"><br>
				<label for="usn">USN</label>
				<input type="number" name="usn" readonly="true" class="form-control col-6" value="{{$item->usn}}"><br>
				<label for="branch" >Branch</label>
				<select name="branch" class="custom-select custom-select-sm">
					<option selected="true">{{$item->branch}}</option>
					<option>--</option>
					<option>Computer Science Engineering</option>
					<option>Information Science Engineering</option>
					<option>Mechanical Engineering</option>
					<option>Civil Engineering</option>
				</select><br><br>
				<label for="address">Address</label>
				<input class="form-control" name="address" value="{{$item->address}}" id="exampleFormControlTextarea1"></textarea><br>
				<label for="email">E-mail</label>
				<input type="email" name="email" class="form-control" value="{{$item->email}}"><br>
				<div class="row">
					<div class="col">
						<label for="ca">Classes Attended</label>
					<input type="number" name="ca" value="{{$item->ca}}" class="form-control"><br>
					</div>
					<div class="col">
						<label for="tch">Total Classes Held</label>
						<input type="number" name="tch" value="{{$item->tch}}" class="form-control"><br>
					</div>
				</div>	
				@endforeach	
				<input type="submit" name="submit" value="Update" class="btn btn-primary">
			</form>
			<button class="btn btn-primary" onclick="window.location.href='/view_records'">Cancel</button>
	 	</div>
	</body>
</html>
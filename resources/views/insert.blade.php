<!DOCTYPE html>
<html>
	<head>
		<title>Insert Records</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/insert_style.css') }}">
	</head>
	<body>
		<div class="background">
			<div class="container">
				<div class="text-center header">Add Student Details</div>
				<hr>
				<form method="post" action="/insert">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control col-6" placeholder="Enter Student name"><br>
					<label for="usn">USN</label>
					<input type="text" name="usn" class="form-control col-6" placeholder="Enter USN"><br><br>
					<label for="branch" >Branch</label>
					<select name="branch" class="custom-select custom-select-sm">
						<option>--</option>
						<option>Computer Science Engineering</option>
						<option>Information Science Engineering</option>
						<option>Mechanical Engineering</option>
						<option>Civil Engineering</option>
					</select><br><br>
					<label for="address">Address</label>
					<textarea class="form-control" name="address" placeholder="Enter the address" id="exampleFormControlTextarea1" rows="4"></textarea><br>
					<label for="email">E-mail</label>
					<input type="email" name="email" class="form-control" placeholder="Enter email"><br>
					<div class="row">
						<div class="col">
							<label for="ca">Classes Attended</label>
							<input type="number" name="ca" class="form-control"><br>
						</div>
						<div class="col">
							<label for="tch">Total Classes Held</label>
							<input type="number" name="tch" class="form-control"><br>
						</div>
					</div>		
					<input type="submit" name="submit" value="Add Record" class="btn btn-primary">
				</form>
				<button class="btn btn-primary" onclick="window.location.href='/admin_home'">Cancel</button>
		 	</div>
		</div>
	</body>
</html>
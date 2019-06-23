<!DOCTYPE html>
<html>
	<head>
		<title>Insert Marks</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/marks_style.css')}}">
	</head>
	<body>
		<div class="container">
			<form method="post" action="/mupdate">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				@foreach($res as $item)
				<div class="mycontainer">
					<div class="form-group">
						<div class="form-row">
							<label>Subject 1</label>
							<input type="text" name="mark1" value="{{$item->mark1}}">
						</div>	
						<div class="form-row">
							<label>Subject 2</label>
							<input type="text" name="mark2" value="{{$item->mark2}}">
						</div>	
						<div class="form-row">
							<label>Subject 3</label>
							<input type="text" name="mark3" value="{{$item->mark3}}">
						</div>	
						<div class="form-row">
							<label>Subject 4</label>
							<input type="text" name="mark4" value="{{$item->mark4}}">
						</div>	
						<div class="form-row">
							<label>Subject 5</label>
							<input type="text" name="mark5" value="{{$item->mark5}}">
						</div>	
						<div class="form-row">
							<label>Subject 6</label>
							<input type="text" name="mark6" value="{{$item->mark6}}">
						</div>
					</div>	
					<div>
						<input type="submit" class="btn btn-primary" name="submit" value="submit">
					</div>
					<a class="btn btn-primary" id="a" onclick="window.location.href = '/marks_details/{{$item->usn}}'">Cancel</a>		
				</div>
			</form>	
			@endforeach	
		</div>					
	</body>
</html>
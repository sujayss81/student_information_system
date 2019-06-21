<!DOCTYPE html>
<html>
<head>
	<title>Insert Marks</title>
</head>
<body>
		<form method="post" action="/mupdate">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			@foreach($res as $item)
			<label>Subject 1</label>
			<input type="text" name="mark1" value="{{$item->mark1}}">
			<label>Subject 2</label>
			<input type="text" name="mark2" value="{{$item->mark2}}">
			<label>Subject 3</label>
			<input type="text" name="mark3" value="{{$item->mark3}}">
			<label>Subject 4</label>
			<input type="text" name="mark4" value="{{$item->mark4}}">
			<label>Subject 5</label>
			<input type="text" name="mark5" value="{{$item->mark5}}">
			<label>Subject 6</label>
			<input type="text" name="mark6" value="{{$item->mark6}}">
			@endforeach
			<input type="submit" name="submit" value="submit">
		</form>	
</body>
</html>
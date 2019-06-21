<!DOCTYPE html>
<html>
<head>
	<title>Insert Marks</title>
</head>
<body>
		<form method="post" action="/marks">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<label>Subject 1</label>
			<input type="text" name="mark1">
			<label>Subject 2</label>
			<input type="text" name="mark2">
			<label>Subject 3</label>
			<input type="text" name="mark3">
			<label>Subject 4</label>
			<input type="text" name="mark4">
			<label>Subject 5</label>
			<input type="text" name="mark5">
			<label>Subject 6</label>
			<input type="text" name="mark6">
			<input type="submit" name="submit" value="submit">
		</form>	
</body>
</html>
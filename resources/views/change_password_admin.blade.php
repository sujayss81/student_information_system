<!DOCTYPE html>
<html>
  <head>
  	<title>Change password</title>
  	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style1.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">
  </head>
  <body class="body">
  	<div class="container">
    	<form method="post" action="/c_pass_admin">
    		<input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="cp">Current password</label>
          <input type="password" name="cp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new password">
        </div>
        <hr>
        <div class="form-group">
          <label for="exampleInputEmail1">New password</label>
          <input type="password" name="newpass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Re-enter Password</label>
          <input type="password" class="form-control" name="newpassa" id="exampleInputPassword1" placeholder="Re-enter same password">
        </div>
        <button type="submit" class="btn btn-primary">Change Password</button>
      </form>
    	<button class="btn btn-primary cancel" onclick="window.location.href = '/admin_home'">Cancel</button>
    </div>
  </body>
</html>
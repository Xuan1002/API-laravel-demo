<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	
<form action="{{route('auth/login')}}" method="post">
	
	<input type="email" name="email" placeholder="Email" class="form-control"/>
	<input type="password" name="password" placeholder="Password" class="form-control"/>
	<input type="submit" name="submit" value="Login" class="btn btn-primary">
	
</form>
</body>
</html>

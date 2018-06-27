<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8" />
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('auth/getUser')}}">Home</a></li>
      <li><a href="{{route('auth/login')}}">Login</a></li>
      <li><a href="{{route('auth/resgiter')}}">Home</a></li>
    </ul>
  </div>
</nav>
</body>
</html>
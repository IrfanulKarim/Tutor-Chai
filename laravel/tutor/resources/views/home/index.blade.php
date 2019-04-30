<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	@csrf

	<h1>Welcome Home ! </h1>

	<a href="{{route('logout.index')}}">Logout</a>

	<a href="{{route('tution.index')}}">Tution List</a>

	<a href="{{route('user.profile')}}"> Profile</a>

	<a href="{{route('search.index')}}"> Search</a>

</body>
</html>
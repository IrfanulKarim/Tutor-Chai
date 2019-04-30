<!DOCTYPE html>
<html>
<head>
	<title>Tutor Details</title>
</head>
<body>
	<h1>Profile</h1>

	<a href="{{route('logout.index')}}">Logout</a> 

<form>
	<table>
		<tr>
			<td>Tutor Name:</td>
			<td><input type="text" name="uname" value="{{$profile['username']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="{{$profile['password']}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{$profile['type']}}"></td>
		</tr>
	</table>
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Tutor Details</title>
</head>
<body>
	<h1>Edit Profile</h1>

	<a href="{{route('logout.index')}}">Logout</a> 

<form method="post">
	<table>
		<tr>
			<td>Tutor Name:</td>
			<td><input type="text" name="uname" value="{{$users['username']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="{{$users['password']}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{$users['type']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
</form>
</body>
</html>
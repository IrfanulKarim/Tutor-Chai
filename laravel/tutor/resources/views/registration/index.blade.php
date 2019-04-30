<!DOCTYPE html>
<html>
<head>
	<title>Registration Tutor</title>
</head>
<body>
	<h1>Registration Here</h1>
	

	<form method="post">
	@csrf
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Create"></td>
		</tr>
	</table>
</form>

</body>
</html>
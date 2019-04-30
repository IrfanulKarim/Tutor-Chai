<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h1>Profileeeeeeeeeee</h1>

	@csrf

	<table class="table table-striped">
							<tr>
								<th>ID</th>
								<th>User Name</th>
								<th>Password</th>
								<th>Type</th>
							</tr>
							@foreach($users as $user)
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->password}}</td>
								<td>{{$user->type}}</td>
								
							</tr>
							@endforeach
				
						</table>


</body>
</html>
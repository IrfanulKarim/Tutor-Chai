<!DOCTYPE html>
<html>
<head>
	<title>List of Tution</title>
</head>
<body>
	<h1>List of Tution</h1>

	<a href="{{route('logout.index')}}">Logout</a>
	<a href="{{route('home.index')}}">Back</a> 

	
	@foreach($tutions as $tution)
	<table>	
		<tr>
			<td>Student Name:	</td>
			<td>{{$tution['studentname']}}</td>
		</tr>
		<tr>
			<td>Class:	</td>
			<td>{{$tution['class']}}</td>
		</tr>
		<tr>
			<td>Type:	</td>
			<td>{{$tution['type']}}</td>
		</tr>
		</table>
	</br>
	@endforeach

</body>
</html>
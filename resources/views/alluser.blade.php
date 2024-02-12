<html>
<body>

<h3>alluser</h3>

<table>
@foreach($user as $users)
<div>
{{$users->first_name}}
{{$users->last_name}}
{{$users->dob}}
{{$users->email}}
{{$users->subscription}}
<form method="get" action="{{route('/edituser')}}" >
	@csrf
<input type="hidden" name="id" value="{{$users->id}}"></input>
<input type="submit" value="edituser">
</form>
<form method="post" action="{{route('/deleteuser')}}" >
	@csrf
	<input type="hidden" name="id" value="{{$users->id}}"></input>
<input type="submit" value="deleteuser">
</form>
</div>

@endforeach	
</table>
</body>
</html>
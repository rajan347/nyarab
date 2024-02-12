<html>
<body>
	<div class="container">
		<center>
<h3>User Form</h3>
<form method="post" action="{{route('/storeuser')}}">
	@csrf
First name: <input type="text" name="fname" required></br></br>
Last name: <input type="text" name="lname" required></br></br>
 phone: <input type="number" name="phone" required></br></br>
email: <input type="email" name="email" required></br></br>
password: <input type="password" name="password" required></br></br>
date fo birth: <input type="date" name="dob" required></br></br>
country: <input type="text" name="country" required></br></br>
subcription: 
<input type="radio" name="subcription" value="story">story</br>
<input type="radio" name="subcription" value="comment">comment</br>
<input type="radio" name="subcription" value="poll">poll</br></br>

<input type="submit">
</form>

<h4>{{$message}}</h4>
</center>
</div>
</body>
</html>
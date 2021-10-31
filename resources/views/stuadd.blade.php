<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Add</title>
</head>
<body>
	<h1>Student Add</h1>
	<form action="{{ URL::to('store') }}" method="post">
		{{ csrf_field() }}
		<label>Name</label><br>
		<input type="text" name="name" placeholder="First Name"><br>
		<label>Email</label><br>
		<input type="text" name="email" placeholder="Enter your email"><br>
		<label>Address</label><br>
		<input type="text" name="address" placeholder="Enter Address"><br>
		<label>Date of Birth</label><br>
		<input type="date" name="birth_date"><br>
		<label>Semester Fee</label><br>
		<input type="number" name="semester_fee"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
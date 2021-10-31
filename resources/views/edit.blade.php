<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<style type="text/css">
		body *{
			box-sizing: border-box;
		}
		div {
			width: 500px;
			margin: auto;
		}
		div input{
			width: 100%;
			padding: 15px;
			border-radius: 5px;
			outline: 0;
			border: 1px solid indigo;
			margin: 0 10px 10px 0;
		}
		input[type='submit']{
			background: black;
			color: white;
			font-weight: bold;
			font-size: 1.3em;
		}
		input[type='submit']:hover{
			box-shadow: 5px 5px 10px black;
		}
	</style>
</head>
<body>
	<h2>Edit Employee</h2>
	<div>
		<form role="form" method="post" action="{{ URL::to('update/'.$employee->id) }}">
			{{ csrf_field() }}
			Name: <input type="text" name="name" value="{{ $employee->name }}"><br>
			Email: <input type="text" name="email" value="{{ $employee->email }}"><br>
			Birth Date: <input type="date" name="birth_date" value="{{ $employee->birth_date }}"><br>
			Salary: <input type="number" name="salary" value="{{ $employee->salary }}"><br>
			<input type="submit" name="register" value="Update">
		</form>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TableAdd</title>
	<style>
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
			box-shadow: 1px 3px 5px black;
		}
	</style>
</head>
<body>
	<h2>Add Table Data</h2>
	<div>
		<form action="{{ URL::to('/tablestore') }}" method="post" role="form">
			{{ csrf_field() }}
			Name <input type="text" name="name"><br>
			Email <input type="text" name="email"><br>
			Address <input type="text" name="address"><br>
			Birth Date <input type="date" name="birth_date"><br>
			Salary <input type="number" name="salary"><br>
			<input type="submit" name="register" value="Register">
		</form>
	</div>
</body>
</html>
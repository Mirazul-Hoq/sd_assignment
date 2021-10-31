<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Export</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="{{ route('excel.store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Birth Date</label>
				<input type="date" name="birth_date" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Country</label>
				<input type="text" name="country" class="form-control">
			</div>
			<div class="form-group">
				<label for="">City</label>
				<input type="text" name="city" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
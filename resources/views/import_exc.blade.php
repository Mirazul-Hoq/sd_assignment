<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Import</title>
	<style>
		a {
			padding: 10px;
			margin-bottom: 20px;
		}
		a:hover{
			text-decoration: none;
		}
	</style>
</head>
<body>
	@if(Session::has('success'))
		<span style="color: green;">{{ Session::get('success') }}</span>
	@endif
	<form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" name="file"><br>
		<button>Import User Data</button>
	</form>
	<div class="container">
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Birth Date</th>
				<th>Country</th>
				<th>City</th>
			</thead>
			<tbody>
				@foreach($data as $d)
					<tr>
						<td>{{ $d->id }}</td>
						<td>{{ $d->name }}</td>
						<td>{{ $d->email }}</td>
						<td>{{ $d->birth_date }}</td>
						<td>{{ $d->country }}</td>
						<td>{{ $d->city }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	<a href="{{ action('ExcelController@export') }}" type="button">Export Excel</a>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>List Employee</title>
	<style type="text/css">
		body *{
			box-sizing: border-box;
		}
		table {
			width: 80%;
			border-collapse: collapse;
			border-radius: 5px;
			margin: auto;
		}
		table th{
			text-align: left;
			padding: 15px;
			border: 1px solid grey;
		}
		table td{
			border: 1px solid grey;
			padding: 15px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<h2>List of Employee</h2>
	<table>
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>BIRTH DATE</th>
			<th>SALARY</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</thead>
		<tbody>
			@foreach($employees as $e)
				<tr>
					<td>{{ $e->id }}</td>
					<td>{{ $e->name }}</td>
					<td>{{ $e->email }}</td>
					<td>{{ $e->birth_date }}</td>
					<td>{{ $e->salary }}</td>
					<td><a href="{{ URL::to('edit/'.$e->id) }}">Edit</a></td>
					<td>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{ $e->id }}">Delete</button>
						<div id="{{ $e->id }}" class="modal fade" role="dialog">
							<div class="modal-dialog">
							    <div class="modal-content">
							      	<div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        	<h4 class="modal-title w3-dark">Delete Confirmation</h4>
							      	</div>
							      	<div class="modal-body w3-dark">
							        	<p>Are you sure you want to delete {{ $e->name }}?</p>
							      	</div>
								    <div class="modal-footer">
								    	<a class="btn btn-default" href="{{ URL::to('delete/'.$e->id) }}">Delete</a>
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								    </div>
							    </div>
							</div>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
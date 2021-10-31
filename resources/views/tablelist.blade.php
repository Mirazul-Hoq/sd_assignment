<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table list</title>
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
	<h2>Table Data List</h2>
	<table>
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>ADDRESS</th>
			<th>BIRTH DATE</th>
			<th>SALARY</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</thead>
		<tbody>
			@foreach($tables as $t)
				<tr>
					<td>{{ $t->id}}</td>
					<td>{{ $t->name }}</td>
					<td>{{ $t->email }}</td>
					<td>{{ $t->address }}</td>
					<td>{{ $t->birth_date }}</td>
					<td>{{ $t->salary }}</td>
					<td><a>Edit</a></td>
					<td>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#">Delete</button>
						<div id="" class="modal fade" role="dialog">
							<div class="modal-dialog">
							    <div class="modal-content">
							      	<div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        	<h4 class="modal-title">Delete Confirmation</h4>
							      	</div>
							      	<div class="modal-body">
							        	<p>Are you sure you want to delete ?</p>
							      	</div>
								    <div class="modal-footer">
								    	<a class="btn btn-default" href="">Delete</a>
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
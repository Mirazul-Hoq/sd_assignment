<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student List</title>
	<style>
		
		td, th{
			border: 2px solid black;
		}
		th{
			text-align: left;
		}
		table{
			border: 2px solid black;
			border-collapse: collapse;
		}

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<table>
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Birth Date</th>
			<th>Semester Fee</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($stulist as $s)
			<tr>
				<td>{{ $s->id }}</td>
				<td>{{ $s->name }}</td>
				<td>{{ $s->email }}</td>
				<td>{{ $s->address }}</td>
				<td>{{ $s->birth_date }}</td>
				<td>{{ $s->semester_fee }}</td>
				<td><a href="{{ URL::to('stuedit/'.$s->id) }}">Edit</a></td>
				<td>
					<div class="container">
						<!-- Trigger the modal with a button -->
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{$s->id}}">Delete</button>
						  <!-- Modal -->
						<div class="modal fade" id="{{$s->id}}" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
							    <div class="modal-content">
							        <div class="modal-header">
							          	<button type="button" class="close" data-dismiss="modal">&times;</button>
							          	<h4 class="modal-title">Delete Confirmation</h4>
							        </div>
							        <div class="modal-body">
							          	<p>Are you sure you want to delete {{$s->name}}?</p>
							        </div>
							        <div class="modal-footer">
							          	<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							        	<a href="{{URL::to('studelete/'.$s->id)}}" class="btn btn-default" data-dismiss="{{$s->id}}">Delete</a>
							        </div>
							    </div>
						      
						    </div>
					    </div>
					  
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>


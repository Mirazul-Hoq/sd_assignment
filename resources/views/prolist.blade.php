<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
</head>
<body>
	<table>
		<thead>
			<th>ID</th>
			<th>Product Name</th>
			<th>Category Name</th>
		</thead>
		<tbody>
			@foreach($product as $p)
				<tr>
					<td>{{ $p->id }}</td>
					<td>{{ $p->title }}</td>
					<td>{{ $p->catname }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
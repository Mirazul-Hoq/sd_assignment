<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Pdf</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Details of {{ $list_pdf->name }}</h2>
		<p><img src="{{ public_path('raw_image/'.$list_pdf->image) }}" width="300"></p>
		<p>Id: {{ $list_pdf->id }}</p>
		<p>Name: {{ $list_pdf->name }}</p>
		<p>Email: {{ $list_pdf->email }}</p>
		<p>Role: {{ $list_pdf->role }}</p>
		<p>Address: {{ $list_pdf->address }}</p>
		<p>Country: {{ $list_pdf->country }}</p>
		<p>City: {{ $list_pdf->city }}</p>
		<p>Semester-Fee: {{ $list_pdf->semester_fee }}</p>
		<p>Birth-Date: {{ $list_pdf->birth_date }}</p>
		<p>Credit-Card-No: {{ $list_pdf->credit_card_no }}</p>
	</div>
</body>
</html>
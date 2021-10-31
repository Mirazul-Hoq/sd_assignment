<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Pdf</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    	a{
    		padding: 10px;
    		margin-bottom: 20px;
    	}
    </style>
</head>
<body>
	<div class="container">
		<h2>Details of {{ $pdf->name }}</h2>
		<p><img src="{{ asset('raw_image/'.$pdf->image) }}" width="300" alt="img1"></p>
		<!-- <p><img src="{{ public_path('image/'.$pdf->image) }}" width="300"></p> -->
		<!-- <p><img src="{{ base_path() }}/image/.$pdf->image" /></p> -->
		<p><b>Id:</b>{{ $pdf->id }}</p>
		<p><b>Name:</b>{{ $pdf->name }}</p>
		<p><b>Email:</b>{{ $pdf->email }}</p>
		<p><b>Role:</b>{{ $pdf->role }}</p>
		<p><b>Address:</b>{{ $pdf->address }}</p>
		<p><b>Country:</b>{{ $pdf->country }}</p>
		<p><b>City:</b>{{ $pdf->city }}</p>
		<p><b>Semester-Fee:</b>{{ $pdf->semester_fee }}</p>
		<p><b>Birth-Date:</b>{{ $pdf->birth_date }}</p>
		<p><b>Credit-Card-No:</b>{{ $pdf->credit_card_no }}</p>
		<a href="{{ action('StuaddController@pdf_list_download', $pdf->id) }}" type="button">Download Pdf</a>
	</div>
</body>
</html>
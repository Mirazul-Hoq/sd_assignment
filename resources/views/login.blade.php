<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
</head>
<body>
	<div class="container">
	    <div class="row">
	    	<div class="col-md-4 col-md-offset-4">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Login via site</h3>
				 	</div>
				  	<div class="panel-body">
				    	<form accept-charset="UTF-8" role="form" method="post" action="{{ URL::to('loginstore') }}">
				    		{{ csrf_field() }}
	                    <fieldset>
				    	  	<div class="form-group">
				    		    <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
				    		</div>
				    		<div class="form-group">
				    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
				    		</div>
				    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
				    	</fieldset>
				      	</form>
				    </div>
				</div>
			</div>
		</div>
	</div>









	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</body>
</html>
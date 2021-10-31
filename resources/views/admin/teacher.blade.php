@extends('student.layouts.default')

@section('content')
	
	<div id="wrapper">
		<ul class="sidebar navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.html">
	          <i class="fas fa-fw fa-tachometer-alt"></i>
	          <span>Dashboard</span>
	        </a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <i class="fas fa-fw fa-folder"></i>
	          <span>Pages</span>
	        </a>
	        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
	          <h6 class="dropdown-header">Login Screens:</h6>
	          <a class="dropdown-item" href="login.html">Login</a>
	          <a class="dropdown-item" href="register.html">Register</a>
	          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
	          <div class="dropdown-divider"></div>
	          <h6 class="dropdown-header">Other Pages:</h6>
	          <a class="dropdown-item" href="404.html">404 Page</a>
	          <a class="dropdown-item" href="blank.html">Blank Page</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="charts.html">
	          <i class="fas fa-fw fa-chart-area"></i>
	          <span>Charts</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="tables.html">
	          <i class="fas fa-fw fa-table"></i>
	          <span>Tables</span></a>
	      </li>
	  	</ul>

	  	<div style="width: 60%; margin: auto;">
	  		<form action="{{ URL::to('teacher-store') }}" method="post">
	  			{{ csrf_field() }}
	  			
	  			<span style="margin-left: 10px;"></span>
	  			<input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Name" style="width: 100%; padding:10px; margin:10px; box-sizing: border-box;">
	  			
	  			<span class="error" style="color: red; margin-left: 10px;">{{ $errors->first('name') }}</span>
	  			<input type="text" name="email" value="{{ old('email') }}" placeholder="Enter Email" style="width: 100%; padding:10px; margin:10px; box-sizing: border-box;">
	  			
	  			<span class="error" style="color: red; margin-left: 10px;">{{ $errors->first('email') }}</span>
	  			<input type="text" name="password" value="{{ old('password') }}" placeholder="Enter Password" style="width: 100%; padding:10px; margin:10px; box-sizing: border-box;">
	  			
	  			<span class="error" style="color: red; margin-left: 10px;">{{ $errors->first('password') }}</span>
	  			<p id="passwordHelpBlock" class="form-text text-muted">
				    Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
				</p>
	  			<input type="text" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Re-Enter Password" style="width: 100%; padding:10px; margin:10px; box-sizing: border-box;">
	  			
	  			<span class="error" style="color: red; margin-left: 10px;">{{ $errors->first('confirm_password') }}</span>
	  			<input type="date" name="birth_date" value="{{ old('birth_date') }}" style="width: 100%; padding:10px; margin:10px; box-sizing: border-box;">
	  			
	  			<span class="error" style="color: red; margin-left: 10px;">{{ $errors->first('birth_date') }}</span>
	  			<input type="number" name="salary" value="{{ old('salary') }}" placeholder="Enter Salary Amount" style="width: 100%; padding:10px; margin:10px; box-sizing: border-box;">
	  			
	  			<span class="error" style="color: red; margin-left: 10px;">{{ $errors->first('salary') }}</span>
	  			<input type="submit" value="Submit" style="width: 100%; padding:10px; margin:10px; box-sizing: border-box;">
	  		</form>
	  	</div>
	</div>

@stop
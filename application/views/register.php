<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyBaby.com</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap/css/style.css">
	<script src="<?= base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
</head>
<body>
	<div class="main_container">
	<h4>Register</h4>
	<?php 
		if(isset($register_errors))
		{
			echo $register_errors;
			unset($register_errors);
		}
	?>
	
	<div class="container-fluid">
  	<hr class="clearfix header">
	<form id='register' action='<?= base_url();?>main/process_register' method='post'>
			<label>First Name:</label>
			<input type='text' name='first_name'></input></br>
			<label>Last Name:</label>
			<input type='text' name='last_name'></input></br>
			<label>Email Address:</label>
			<input type='text' name='email'></input></br>
			<label>Password:</label>
			<input type='password' name='password'></input></br>
			<label>Confirm Password:</label>
			<input type='password' name='confirm_password'></input></br>
			<input class="btn btn-primary" type="submit" value="Sign up today" ></input></br>
	</form>
		<div style="display: inline-block; width: 900px; text-align: center;">
			<img class="picture1" src="<?= base_url();?>assets/img_proj1/examples/DSC_0001.jpg" width="250" height="540" alt="User Pciture" style="">
	        <img class="picture1" src="<?= base_url();?>assets/img_proj1/examples/DSC_0002.jpg" width="250" height="540" alt="User Pciture" style="">
	        <img class="picture1" src="<?= base_url();?>assets/img_proj1/examples/DSC_0001.jpg" width="250" height="540" alt="User Pciture" style="">  
	      	<!-- <img class="picture1" src="<?= base_url();?>assets/img_proj1/examples/DSC_0002.jpg" width="250" height="540" alt="User Pciture" style=""> -->
		</div>
  	<hr class="clearfix header">
  <h1 class='register_welcome'>Welcome to myBaby.com Register</h1>
		<li id="menu-item" class="menu-item">
		<a id='register_hover' href="http://mybaby.com">myBaby.com</a>

	</div>
	</div>
</body>
</html>
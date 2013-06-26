<?php
	// var_dump($user_info);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset= "UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap/css/style.css">
	<title>Mybaby.com</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="jquery.zrssfeed.min.js" type="text/javascript"></script>

	<!-- Zazar Presentation Framework -->
	<script src="http://admin.zazar.net/__system/_js/zframework/jquery.zframework.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function ()
			$('#zrotate').rssfeed('http://feeds.reuters.com/reuters/oddlyEnoughNews',{
			header: false,
			titletag: 'div',
			date: false,
			content: false,
			limit: 5
		}, function(e) {
			$.zazar.rotate({selector: '#zrotate ul'});
		});
	});
	</script>

</head>
<body>
	<div id="text"></div>
</head>
<!-- When new user registers how does it display its name and other info?-->
<body>	
	<h4>Welcome to myBAby.com!</h4>
	<p class='text-success'>User Information</p>
	<form id='user' action="<?= base_url();?>main/logout" method="post">
		<div id="wrapper">
			<h2>myBaby.com</h2>

<?php
	//var_dump($session_data);
	// var_dump($message);
?>
		</div>
		<label>First Name: <?php echo $user_info->first_name; ?> </label></br>
		<label>Last Name: <?php echo $user_info->last_name; ?></label></br>
		<label>Email Address:<?php echo $user_info->email; ?></label></br>
		<button a class='btn btn-primary'>Log Off</button>
		<h3></h3>
<?php
// var_dump($session_data);
?>
	</form>

</body>
</html>
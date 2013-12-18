<?php
	// var_dump($user_info);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset= "UTF-8">
	<title>Boris Parov mybaby php project</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap/css/style.css">
	<link href="../assets/css/example_ticker.css" rel="stylesheet" type="text/css" />
	<title>Mybaby.com</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/jquery.zrssfeed.min.js" type="text/javascript"></script>

	<!-- Zazar Presentation Framework -->
	<script src="http://admin.zazar.net/__system/_js/zframework/jquery.zframework.js" type="text/javascript"></script>
	<script src="../assets/js/jquery.vticker.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function (){

		function rotate_feed(selector, feed)
		{
				$(selector).rssfeed(feed,{
				header: false,
				titletag: 'div',
				date: false,
				content: false,
				limit: 5
			}, function(e) {
				console.log(e)
				$.zazar.rotate({selector: selector+' ul'});
			});
		}

		feed = 'http://feeds.reuters.com/reuters/oddlyEnoughNews'
		selector = '#zrotate'
		rotate_feed(selector, feed)

		feed2 = 'http://www.hopkinsmedicine.org/RSS/HopkinsRSS.xml'
		selector2 = '#zrotate2'
		rotate_feed(selector2, feed2)
		
		// new rssfeed type!
		http://feeds.bbc.co.uk/iplayer/highlights/tv/list
		
		$('#ticker1').rssfeed('http://feeds.feedburner.com/Nownejm',{
			snippet: false
		}, function(e) {
			$(e).find('div.rssBody').vTicker({
				showItems: 1
			});
		});
	});
	</script>
</head>
	<body>
		<div id="text"></div>
	<!-- When new user registers how does it display its name and other info?-->
		<div id="header">
		<h4 class="welcome_message">Welcome <?php echo $user_info->first_name; ?> to myBAby.com</h4>
				<form id='user' action="<?= base_url();?>main/logout" method="post">
			<div class="wrapper">
				<!-- span acts as a small inline div -->		
			<!-- <h2>my<span class='logo_color'>B</span>a<span class='logo_color'>b</span>y.com</h2> -->
				
				<nav>
					<ul id="primary-nav" class="nav">
						<li id="menu-item" class="menu-item">
							<a id='link_hover' href="http://mybaby.com">myBaby.com</a>
				<button class='logoff' a class='btn btn-primary'>Log Off</button>
  			<hr class="clearfix header">

			</div>
			<div class="rss">
				<a href="news.rss" title="Subscribe RSS Feed">
				<img src="../assets/img_proj1/examples/rss.png" width="42" height="42" alt="RSS Feeds">
				</a>
			</div>	
		</div>
		<div class="main_body">
			<div class="rssfeed">
				<h3><span class="rss_header">Baby Medical Research</h3></span>
				<div id="zrotate"></div>
			</div>

			<div class="rssfeed">
				<h3>University Publications</h3>
				<div id="zrotate2"></div>
			</div>

			<div class="center_rssfeed">
				<h3>More Insights for your baby</h3>
				<div id="ticker1"></div>
			</div>

			<div class='clear'></div>
			</div>
		</div>
	<?php
		//var_dump($session_data);
		// var_dump($message);
	?> 
		<!-- 	</div>
			<label>First Name: <?php echo $user_info->first_name; ?> </label></br>
			<label>Last Name: <?php echo $user_info->last_name; ?></label></br>
			<label>Email Address:<?php echo $user_info->email; ?></label></br>
			<h3></h3> -->
		
	<?php
	// var_dump($session_data);
	?>
		</form>
		<!-- RSSfeed! -->
	<!-- <div id="test" class="rssFeed">
	  <div class="rssHeader">
	    <a>... (heading) ...</a>
	  </div>
	  <div class="rssBody"></div>
	    <ul>
	      <li class="rssRow odd">
	        <h4><a>... (title) ...</a></h4>
	        <div>... (date) ...</div>
	        <p>... (description) ...</p>
	        <div class="rssMedia">
	          <div>Media files</div>
	          <ul>
	            <li><a>... (media link) ...</a></li>
	          </ul>
	        </div>
	      </li>
	      <li class="rssRow even">...</li>
	      ...
	    </ul>
	  </div> -->
	  <!-- Failed return -->
	 <div id="test" class="rssFeed_error">
	  <div class="rssError">
	    <!-- <p>... (error message) ...</p> -->
	  </div>
	</div>
	</div>
	  <!-- FOOTER -->
	    <div class="footer">
	      <footer>
	        <p class="pull-right"><a href="#">Back to top</a></p>
	        <p>&copy; Copyright 2013 <a href="#">myBaby.com, Inc.</a> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	      </footer>
	    </div>
	</body>
</html>

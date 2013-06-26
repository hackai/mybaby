<?php
	if(isset($message))
	{
	echo $message;
	}
//start from where our initial base_url we set in our innitial class
  // echo base_url();

?>
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
	<script type="text/javascript">
		$(document).ready(function(){
		$('.carousel').carousel({
		interval: 4000
});
	});
	</script>

</head>

<body>
	<h1>MBC</h1>
	<h2>myBAby.com</h2>
	<!--Log In -->
  <?php
      if(isset($login_errors))
      {
          echo $login_errors;
          unset($login_errors);
      }
 ?>
	<div id="login">
	<form id='login' action="<?= base_url();?>main/process_login" method="post">
		<label>Email:</label>
		<input type="text" name="email" ></input></br>
		<label>Password:</label>
		<input type="password" name="password" ></input></br>
		<input class="btn btn-primary" type="submit" value="Login" ></input></br>
	</form>
	<!--End of Form-->
	</div>
	<h1>learn millon of things about your baby</h1>
 <!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide">
	 <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?= base_url();?>assets/img_proj1/examples/DSC_0001.jpg" alt="">
          <!-- <div class="container"> -->
        <div class="carousel-caption">
          <h1>Nutrician.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="<?= base_url(); ?>main/register">Sign up today</a>
        </div>
          <!-- </div> -->
        </div><!-- Carousel items -->
        <div class="item">
          <img src="<?= base_url();?>assets/img_proj1/examples/DSC_0002.jpg" alt="">
       <!--    <div class="container"> -->
            <div class="carousel-caption">
              <h1>Shared samples from actual parents.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
         <!--  </div> -->
        </div>
        <div class="item">
          <img src="<?= base_url();?>assets/img_proj1/examples/DSC_0003.jpg" alt="">
         <!--  <div class="container"> -->
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          <!-- </div> -->
        </div>
      </div>	
        <!-- Carousel nav -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
  </div><!-- /.carousel -->
    <!-- FOOTER -->
    <div class="footer">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </div><!-- /.container -->
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-transition.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-alert.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-modal.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-tab.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-popover.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-button.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap-typeahead.js"></script>
</body>
</html>
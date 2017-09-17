<!DOCTYPE html>
<html>
<head>
	<title>Institute of Information Technology & Management | Online Bulletin Board</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Stylesheets Start-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<!--Stylesheets End-->
	<!--Javascript Starts-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<style type="text/css">
		a
		{
			text-decoration: none;
			color: black;
		}
	</style>
	<!--Javascript Ends-->
</head>
<body>
<!--Navigation bar Starts from here-->
<?php include "navbar.php" ?>
<!--Navigation Bar end here-->

<!--Photo Slider Starts from here-->
<?php include "slider.php" ?>
<!--Photo slider ends from here-->

<!--Panel Starting From here-->
<!--Php Code End Here-->

<br><br>
<section class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-primary ">
				<div class="panel-heading text-center">
				<h4>Notices</h4>
				</div>
				<div class="panel-body " >
				<marquee direction="up">
					<?php include "show_notice.php" ?>
					
					</marquee>
				</div>
			</div>
	    </div>
	    <div class="col-md-4">
			<div class="panel panel-primary ">
				<div class="panel-heading text-center color-blue">
				<h4>Events</h4>
				</div>
				<div class="panel-body ">
				<marquee direction="up">
					<?php include "show_event.php" ?>
					</marquee>
				</div>
			</div>
	    </div>
	    <div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
				<h4>Circular</h4>
				</div>
				<div class="panel-body">
				<marquee direction="up">
				<?php include "show_circular.php" ?>
					
				</marquee>
				</div>
			</div>
	    </div>
	</div>
</section>
<!--Panel End here-->

<br>
<br>
<br>
<!--Footer Starts from here-->
<?php include "footer.php" ?>
<!--Footer End Here-->
</body>
</html>
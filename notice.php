<!DOCTYPE html>
<html>
<head>
	<title>Institute of Information Technology & Management | Online Bulletin Board|Notice</title>
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
	<!--Javascript Ends-->
	<style type="text/css">
		a
		{
			color: white;
		}
	</style>
</head>
<body>
<!--Navigation bar Starts from here-->
<?php include "navbar.php" ?>
<!--Navigation Bar end here-->

<div class="jumbotron text-center">
	<h3>Notice</h3>
</div>

<!--Php Code Starts From Here-->
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("project",$conn);
$query=mysql_query("select * from notice");
while ($row=mysql_fetch_array($query)) {

  ?>
  <div class="panel-group">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#<?php echo $row['notice_id'] ?>"><?php echo $row['notice_title'] ?></a>
      </h4>
    </div>
    <div id="<?php echo $row['notice_id'] ?>" class="panel-collapse collapse">
      <div class="panel-body"> <?php echo $row['notice_desc'] ?>
      	<br><br><button class="btn btn-info"><a href="<?php echo $row['path']; ?>">View More</a></button>
      </div>
      
    </div>
  </div>
</div>
<?php
}
?>
<!--Php Code End Here-->







<!--Footer Starts from here-->
<?php include "footer.php" ?>
<!--Footer End Here-->
	
</body>
</html>

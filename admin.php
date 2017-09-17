<?php 
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("project",$conn);
		$result = mysql_query("SELECT * FROM notice",$conn);
		$c_notice = mysql_num_rows($result);
		//adding the values of circular
		$result  = mysql_query("SELECT * FROM circular",$conn);
		$c_cir = mysql_num_rows($result);
		//adding the values of document
		$result  = mysql_query("SELECT * FROM document",$conn);
		$c_doc = mysql_num_rows($result);
		//adding the values of event
		$result  = mysql_query("SELECT * FROM event",$conn);
		$c_event = mysql_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel </title>
	<meta name="viewport" content="width=device-width, initial-scale=0">
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
	

</head>
<body>
<div class="jumbotron color-blue">
	<h1 class="text-center">Admin Panel</h1>
</div>

<!--Greeting Area-->
<!--
<div class="jumbotron">
	<h1>Namaste<img src="images/namaste.png" height="50" width="50" alt="Nasmte Icon"></h1>
	<i>Welcome to the dashboard</i>
</div>
-->
<!--end of greeting area-->

<!--navbar starts from here-->
<nav class="nav navbar navbar-top">
	<ul class="nav navbar-nav color-white led">
		<li><a href="admin.php">DashBoard</a></li>
		<!--<li><a href="edit.php">Edit&nbsp<span class="glyphicon glyphicon-edit" aria-hidden="true"></a></li>-->
		<li><a href="remove.php">Remove&nbsp<span class="glyphicon glyphicon-remove" aria-hidden="true"></a></li>
		<li><a href="upload.php">Upload&nbsp<span class="glyphicon glyphicon-upload" aria-hidden="true"></a></li>
		<li><a href="report.php">Generate Report&nbsp<span class="glyphicon glyphicon-file" aria-hidden="true"></a></li>
		<li><a href="index.php">Logout&nbsp<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
	</ul>
	
</nav>
<!--navbar ends here-->

<!--Panel Start From Here-->
<hr>
        
<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-md-3">
        <div class="well">
        <a href="notice.php">
          <h4 class="text-primary"><span class="label label-primary pull-right"><?php echo $c_notice; ?></span> Notice </h4>
          </a>
        </div>
      </div>
      <div class="col-md-3">
      <a href="doc.php">
        <div class="well">
          <h4 class="text-success"><span class="label label-success pull-right"><?php echo $c_doc; ?></span> Documents </h4>
        </div>
        </a>
      </div>
      <div class="col-md-3">
      <a href="circular.php">
        <div class="well">
          <h4 class="text-primary"><span class="label label-primary pull-right"><?php echo $c_cir; ?></span> Circular </h4>
        </div>
        </a>
      </div>
      <div class="col-md-3">
      <a href="events.php">
        <div class="well">
          <h4 class="text-success"><span class="label label-success pull-right"><?php echo $c_event; ?></span> Events </h4>
        </div>
        </a>
      </div>
    </div><!--/row-->    
  </div><!--/col-12-->
</div><!--/row-->
<!--Panel End From Here-->
<!--footer starts from here-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<nav class="navbar navbar-inverse ">
	<h4 class="text-center color-white"> &copy; Institute of Information Technology & Management 2017-18</h4>
</nav>
<!--footer end here-->

</body>
</html>
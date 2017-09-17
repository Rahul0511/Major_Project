<!DOCTYPE html>
<html>
<head>
	<title>Generate Report | IITM Janak Puri | Online Buttline Board</title>
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
</head>
<body>
<!--Main Jumbotron Starts from here-->
<div class="jumbotron color-blue">
	<h1 class="text-center">Admin Panel</h1>
</div>
<!--Main Jumbotron ends here-->
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

<!--info label starts from here-->
<h1 class="text-center"><span class="label label-info">Generate Report </span></h1>
<!--info label ends from here-->

<!-- Search Form Start From Here-->
<div class="form-group text-center">
<form method="POST" action="report.php">
<label for="filetype" ><h2>Select File Type</h2></label>
	<select class="form-control input-lg " id="filetype" name="filetype" required>
		<option>Click To Select</option>
		<option>Overall</option>
		<option>Notice</option>
		<option>Documents</option>
		<option>Events</option>
		<option>Circular</option>
	</select>
	<br>
	<button type="submit" class="btn btn-info btn-lg ">Search For Results <span class="glyphicon glyphicon-search" aria-hidden='true'></span></button>
	
</form>
	
</div>
<!--Search Form End From Here-->

<!--php code starts form here-->
<?php
error_reporting(E_ERROR | E_PARSE);
 $filename=$_POST['filetype']; //fetching value from form
 	//database connection code
 	$conn=mysql_connect("localhost","root","");
	mysql_select_db("project",$conn);

	

  	
 	if ($filename=='Overall') 
 	{
 		$result = mysql_query("SELECT * FROM notice",$conn);
		$num_rows = mysql_num_rows($result);
		//adding the values of circular
		$result  = mysql_query("SELECT * FROM circular",$conn);
		$num_rows += mysql_num_rows($result);
		//adding the values of document
		$result  = mysql_query("SELECT * FROM document",$conn);
		$num_rows += mysql_num_rows($result);
		//adding the values of event
		$result  = mysql_query("SELECT * FROM event",$conn);
		$num_rows += mysql_num_rows($result);
		$query=mysql_query("SELECT * FROM notice LIMIT 1",$conn);
		$row=mysql_fetch_row($query);
		$lastdate=$row[3];
		$title=$row[0];
		
 	}
 	if ($filename=='Notice') 
 	{
 		
		$result = mysql_query("SELECT * FROM notice",$conn);
		$num_rows = mysql_num_rows($result);
		//select first row form table
		$query=mysql_query("SELECT * FROM notice LIMIT 1",$conn);
		$row=mysql_fetch_row($query);
		$lastdate=$row[3];
		$title=$row[0];

 	}
 	if ($filename=='Documents') 
 	{
 		$result = mysql_query("SELECT * FROM document",$conn);
		$num_rows = mysql_num_rows($result);
		//select first row form table
		$query=mysql_query("SELECT * FROM document LIMIT 1",$conn);
		$row=mysql_fetch_row($query);
		$lastdate=$row[3];
		$title=$row[0];
		
 	}
 	if ($filename=='Events')
 	{
 		$result = mysql_query("SELECT * FROM event",$conn);
		$num_rows = mysql_num_rows($result);
		//select first row form table
		$query=mysql_query("SELECT * FROM event LIMIT 1",$conn);
		$row=mysql_fetch_row($query);
		$lastdate=$row[3];
		$title=$row[0];
		
 	}
 	if ($filename=='Circular')
 	{
 		$result = mysql_query("SELECT * FROM circular",$conn);
		$num_rows = mysql_num_rows($result);
		//select first row form table
		$query=mysql_query("SELECT * FROM circular LIMIT 1",$conn);
		$row=mysql_fetch_row($query);
		$lastdate=$row[3];
		$title=$row[0];
		
 	}
?>

<!--result for report starts from here-->
<div class="container">
  <h2 class="text-center">Report For <?php echo $filename; ?></h2>
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th >Total Number</th>
        <td><b><?php echo $num_rows; ?></b></td>
      </tr>
      <tr>
      	 <th>Last Update On</th>
      	 <td><b><?php echo $lastdate ?></b></td>
      </tr>  
       
       <tr>
       	<th>Total Number Of upload</th>
       	<td><b><?php echo $num_rows; ?></b></td>
       </tr>
         <tr>
         <th>Last File Title</th>
         <td><b><?php echo $title; ?></b></td>	
         </tr>
       <tr>
       	<th>Uploder Name</th>
       	<td><b>Admin</b></td>
       </tr>
      </tr>
      
    </thead>
    <tbody>
    </tbody>
    </table>
      
<!--result for report ends here-->

	<center><button class="btn btn-lg btn-info" onclick="window.print()">Print this Page &nbsp;<span class="glyphicon glyphicon-print" aria-hidden="true"></button></center>



<br><br><br>
<!--footer starts from here-->
<nav class="navbar navbar-inverse navbar-fixed-bottom">
	<h4 class="text-center color-white"> &copy; Institute of Information Technology & Management Janak Puri,New Delhi 2017-18</h4>
</nav>
<!--footer end here-->

</body>
</html>

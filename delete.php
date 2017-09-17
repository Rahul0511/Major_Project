<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
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

</body>
</html>
<?php 
//code for deleting data from the database
$id=$_GET['id'];
$type=$_GET['type'];
//database connectivity code starts form here
	mysql_connect("localhost","root","");
	mysql_select_db("project");

//database connectivity code end here

//code to check the file type
if ($type=='Circular') 
	{
		echo '<script language="javascript">';
		echo 'confirm("Sure you want to delete the Circular")';
		echo '</script>';
		$sql="DELETE FROM circular WHERE circular_id='$id'";
		if(mysql_query($sql))
		{
			echo "<div class='alert alert-success fade in'>Circular Successfully removed for the database
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			</div>";
			echo "<center><a href='remove.php'>GO BACK</a></center>"; 
			
		}
		else
		{
			echo "<div class='alert alert-danger fade in text-center'>Circular could not be removed from the database
			 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			</div>";
			echo "<center><a href='remove.php'>GO BACK</a></center>";
		}
		
		
	}
if ($type=='Notice') 
	{
		$sql="DELETE FROM notice WHERE notice_id='$id'";
		if(mysql_query($sql))
		{
			echo "<div class='alert alert-success fade in text-center'>Notice Successfully removed for the database
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			</div>";
			echo "<center><a href='remove.php'>GO BACK</a></center>";
			
		}
		else
		{
			echo "<div class='alert alert-danger fade in text-center'>Notice could not be removed from the database
			 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			</div>";
		}
	}
if ($type=='Documents') 
	{
		$sql="DELETE FROM document WHERE doc_id='$id'";
		if(mysql_query($sql))
		{
			echo "<div class='alert alert-success fade in'>Circular Successfully removed for the database
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			</div>";
			echo "<center><a href='remove.php'>GO BACK</a></center>";
		}
		else
		{
			echo "<div class='alert alert-danger fade in text-center'>Circular could not be removed from the database
			 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			</div>";
		}
	}
if ($type=='Events') 
	{
		$sql="DELETE FROM event WHERE event_id='$id'";
		if(mysql_query($sql))
		{
			echo "<div class='alert alert-success fade in'>Event Successfully removed for the database
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			</div>";
			echo "<center><a href='remove.php'>GO BACK</a></center>";
		}
		else
		{
			echo "<div class='alert alert-danger fade in text-center'>Circular could not be removed from the database
			 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			</div>";
		}
	}

?>
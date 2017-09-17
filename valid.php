<!DOCTYPE html>
<html>
<head>
	<title>Validating the User For Admin Panel</title>
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
			text-decoration: none;
		}
	</style>
</head>
<body>
<?php
			error_reporting(E_ERROR | E_PARSE);
			if (!isset($_POST["submit"]))
			{
				error_reporting(E_ERROR | E_PARSE);
				$id=$_POST['loginid'];
				$pwd=$_POST['password'];
				$conn=mysql_connect("localhost","root","");
				mysql_select_db("project",$conn);
				$query=mysql_query("select * from admin");
				$row=mysql_fetch_array($query);
				$did=$row['admin_id'];
				$dpwd=$row['admin_pass'];
				if($id==$did && $pwd==$dpwd)
				{
					header('Location: admin.php');
				}
				else
				{	
					echo "<h2 class='text-center'><span class='color-red'>Your Username Or Password didn't Match <a href='login.php'>Login Again</a></h2>";

				}	
			}
			
		?>
</body>
</html>
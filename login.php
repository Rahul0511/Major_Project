<!--
CODE DATE:15FEB2017
WRITEN BY:RAHUL
TYPE:lOGIN FORM

-->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page|For Admin</title>
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
	body
	{
		background-image: url('images/back2.jpeg');
		background-repeat: no-repeat;
	    background-position: right top;
	    background-attachment: fixed;
	    
	}
		.panel 
		{
			width: 550px;	
			margin-top: 150px;
			margin-left: 500px;
			margin-right: 250px;	
		}
		#user
		{
			margin-left:220px;
			font-size: 19px;
		}
		#pass
		{
			margin-left: 210px;
			font-size: 19px
		}
		.form 
		{
			margin-top: 20px;
		}
		#button
		{
			padding: 10px;
			width: 230px;
			margin-top:40px;
			margin-left: 150px;
			font-size: 20px;
		}
	</style>
	
	
</head>
<body>
		<div class="panel panel-default ">
			<div class="panel-heading text-center">Admin Login </div>
			<div class="panel-body">
				<form method="POST" action="valid.php">
					<div class="form group" >
							<label for="loginid" id="user" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp User Id</label>
							<input type="text" class="form-control" name="loginid" id="loginid" placeholder="Login Id" required>

					</div>
					<br>
					<div class="form group">
							<label for="Password" id="pass"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> &nbsp Password</label>
							<input type="password" class="form-control" name="password" id="Password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<input type="submit" name="s" class="btn btn-success" value="Login " id="button">
						
					</div>
				</form>
				
				
			</div>
			<div class="panel-footer text-center text-danger">*Both the field are necessary</div>
		</div>
</body>
</html>
		

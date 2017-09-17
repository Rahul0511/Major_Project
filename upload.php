<?php

//function for insert data in database
	function insert($title,$desc,$path,$date,$type,$id)
	  {
	  	error_reporting(E_ERROR | E_PARSE);
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database="project";
		//create connection
		

		$conn = mysqli_connect($servername, $username, $password,$database);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
	//checking value of file_type
	//--------------------------------------For Notice-------------------------------------------
		if($type=="Notice")
	   {

			$sql="INSERT INTO notice VALUES ('$title','$desc','$id','$date','admin','$path') ";
			if (mysqli_query($conn, $sql)) 
			{
			  	echo "Event Successfully Updated:";
			    sleep(5);
			    echo "<a href='upload.php'>Go Back</a>";
			}
			else
			 {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			 }

		}
		//--------------------------------------For Circular-----------------------------------------
		
		if($type=="Circular")
	   {

			$sql="INSERT INTO circular VALUES ('$title','$desc','$id','$date','admin','$path') ";
			if (mysqli_query($conn, $sql)) 
			{
			  	echo "Event Successfully Updated:";
			    sleep(5);
			    echo "<a href='upload.php'>Go Back</a>";
			}
			else
			 {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			 }

		}
		//-----------------------------------For Doccument---------------------------------------------
		if($type=="Documents")
	   {

			$sql="INSERT INTO document VALUES ('$title','$desc','$id','$date','admin','$path') ";
			if (mysqli_query($conn, $sql)) 
			{
			  	echo "Event Successfully Updated:";
			    sleep(5);
			    echo "<a href='upload.php'>Go Back</a>";
			}
			else
			 {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			 }

		}
		//------------------------------For Circular--------------------------------------------------
		if($type=="Events")
	   {

			$sql="INSERT INTO event VALUES ('$title','$desc','$id','$date','admin','$path') ";
			if (mysqli_query($conn, $sql)) 
			{
			  	echo "Event Successfully Updated:";
			    sleep(5);
			    echo "<a href='upload.php'>Go Back</a>";
			}
			else
			 {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			 }

		}




		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel|Upload Files </title>
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
<div class="jumbotron color-blue">
	<h1 class="text-center">Admin Panel</h1>
</div>

<!--Admin Panel Nav-bar-->

<nav class="nav navbar navbar-top">
	<ul class="nav navbar-nav color-white led">
		<li><a href="admin.php">DashBoard</a></li>
		<li><a href="edit.php">Edit&nbsp<span class="glyphicon glyphicon-edit" aria-hidden="true"></a></li>
		<li><a href="remove.php">Remove&nbsp<span class="glyphicon glyphicon-remove" aria-hidden="true"></a></li>
		<li><a href="upload.php">Upload&nbsp<span class="glyphicon glyphicon-upload" aria-hidden="true"></a></li>
		<li><a href="index.php">Logout&nbsp<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
	</ul>
	
</nav>
<!--End of admin panel Navbar-->

<h1 class="text-center"><span class="label label-success">Upload Files</span></h1>

<!--Upload Warning Start Here-->
	<div class="alert alert-warning text-center" >
		Note:Only Files With Extension .png Or .pdf are Allowed To Upload
		
	</div>
<!--End Of Upload Waring Here-->

<!--upload File form start from here-->
<form enctype="multipart/form-data" method="post" action="upload.php">
  <div class="form-group form-group-lg">
    <label for="file_name"><h4>File Title</h4></label>
    <input type="text" class="form-control" id="file_name" name="file_title" placeholder="File Name Here" required>
  </div>
  <div class="form-group form-group-lg">
    <label for="file_id"><h4>File Id</h4></label>
    <input type="text" class="form-control" id="file_id" name="file_id" placeholder="File Id Here" required>
  </div>

 
  <div class="form-group">
		<label for="filetype" ><h4>Select File Type</h4></label>
			<select class="form-control input-lg " id="filetype" name="filetype" required>
				<option>Click To Select</option>
				<option>Notice</option>
				<option>Documents</option>
				<option>Events</option>
				<option>Circular</option>
			</select>
   </div>
   <div class="form-group form-group-lg">
   <label for="date" ><h4>Select Date</h4></label>
   <input type="date" name="date" id="date" required>
   </div>
  
   <div class="form-group">
   		<label for="select_file"><h4>Select File For Upload</h4></label>
   		
   		<input type="file" name="userfile" id="select_file" required>
   </div>
   <div class="form-group form-group-lg">
  		<label for="desc">Descrition of File:</label>
  		<textarea class="form-control" rows="5" id="desc" placeholder="Short Descrition Of the File" name="desc" minlength="50" maxlength="200" required></textarea>
   </div>
   <div class="form-group form-group-lg">
   <button type="Submit" class="btn btn-primary">Submit Form</button> 	
   </div>
   

</form>
<!--upload File form end here-->

<!--footer starts from here-->
<br><br>
<br><br>
<nav class="navbar navbar-inverse ">
	<h4 class="text-center color-white"> &copy; Institute of Information Technology & Management 2017-18</h4>
</nav>
<!--footer end here-->
</body>
</html>


<!-- PHP code starts here -->
 <?php
 error_reporting(E_ERROR | E_PARSE);
$file_title=$_POST['file_title'];
$file_desc=$_POST['desc'];
$file_id=$_POST['file_id'];
$file_date=$_POST['date'];
$file_type=$_POST['filetype'];
$file=$_FILES['userfile']['name'];
$uploaddir = 'assets/uploads/';
error_reporting(E_ERROR | E_PARSE);

//combineing file+path here		

$uploadfile = $uploaddir . $file;
//checking the condition of filetype
		
      if($file_type=="Notice")
	  {

			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
			{
		    echo "File is valid, and was successfully uploaded.\n";
		    insert($file_title,$file_desc,$uploadfile,$file_date,$file_type,$file_id);
			} 
			else 
			{
			    echo "Possible file upload attack!\n";
			}

		}
		
	if($file_type=="Documents")
	{
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
			{
		    echo "File is valid, and was successfully uploaded.\n";
		    insert($file_title,$file_desc,$uploadfile,$file_date,$file_type,$file_id);
			} 
			else 
			{
			    echo "Possible file upload attack!\n";
			}


	}
	if($file_type=="Events")
	{
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
			{
		    echo "File is valid, and was successfully uploaded.\n";
		    insert($file_title,$file_desc,$uploadfile,$file_date,$file_type,$file_id);
			} 
			else 
			{
			    echo "Possible file upload attack!\n";
			}

		
	}
	if($file_type=="Circular")
	{
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
			{
		    echo "File is valid, and was successfully uploaded.\n";
		   insert($file_title,$file_desc,$uploadfile,$file_date,$file_type,$file_id);
			} 
			else 
			{
			    echo "Possible file upload attack!\n";
			}

		
	}
?>


<!-- PHP code end here -->
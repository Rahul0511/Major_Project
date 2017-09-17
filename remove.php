<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel </title>
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
		<!--<li><a href="edit.php">Edit&nbsp<span class="glyphicon glyphicon-edit" aria-hidden="true"></a></li>-->
		<li><a href="remove.php">Remove&nbsp<span class="glyphicon glyphicon-remove" aria-hidden="true"></a></li>
		<li><a href="upload.php">Upload&nbsp<span class="glyphicon glyphicon-upload" aria-hidden="true"></a></li>
		<li><a href="report.php">Generate Report&nbsp<span class="glyphicon glyphicon-file" aria-hidden="true"></a></li>
		<li><a href="index.php">Logout&nbsp<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
	</ul>
	
</nav>
<!--End of admin panel Navbar-->
<h1 class="text-center"><span class="label label-danger">Remove Files</span></h1>

<!-- Search Form Start From Here-->
<div class="form-group text-center">
<form method="POST" action="remove.php">
<label for="filetype" ><h2>Select File Type</h2></label>
	<select class="form-control input-lg " id="filetype" name="filetype" required>
		<option>Click To Select</option>
		<option>Notice</option>
		<option>Documents</option>
		<option>Events</option>
		<option>Circular</option>
	</select>
	<br>
	<button type="submit" class="btn btn-danger btn-lg ">Search For Results</button>
	
</form>
	
</div>
<!--Search Form End From Here-->
<!--result label-->
<div class="container">
 
      
      <!--Php Code Start From Here-->
<?php

if (!isset($_POST['submit']))
{
	error_reporting(E_ERROR | E_PARSE);
$filetype=$_POST['filetype'];

}

//Database connction start from here
$conn=mysql_connect("localhost","root","");
mysql_select_db("project",$conn);
//Database connection end here

if ($filetype=='Documents') 
{
	echo "<h2 class='text-center'>Result</h2>";
            
  echo "<table class=table table-bordered'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th >Title</th>";
        echo "<th>Description</th>";
        echo "<th>Id</th>";
        echo "<th>Date</th>";
        echo "<th>By</th>";
        echo  "<th>Operation</th>";
      	echo "</tr>";
    	echo "</thead>";
    	echo "<tbody>";
	$query=mysql_query("select * from document");
	error_reporting(E_ALL);
	$type='Documents';
	while ($row=mysql_fetch_array($query))
	    {
	    	 
	    $id= $row['doc_id'];
		echo "<tr>";
		echo '<td>'. $row['doc_title'].'</td>';
		echo '<td>'. $row['doc_desc'].'</td>';
		echo '<td>'. $row['doc_id'].'</td>';
		echo '<td>'. $row['doc_date'].'</td>';
		echo '<td>'. $row['doc_by'].'</td>';
		echo "&nbsp &nbsp" . "<td><a href='delete.php?type=$type&id=$id'><button class='btn btn-danger' data-toggle='modal' data-target='#deletemodal' id= '$id' name='Documents'>Delete</button></a></td>";
		echo "</tr>";
        }
        $id= $row['doc_id'];
        $table="doc";

}
if ($filetype=='Events') 
{
	 echo "<h2 class='text-center'>Result</h2>";
            
  echo "<table class=table table-bordered'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th >Title</th>";
        echo "<th>Description</th>";
        echo "<th>Id</th>";
        echo "<th>Date</th>";
        echo "<th>By</th>";
        echo  "<th>Operation</th>";
      	echo "</tr>";
    	echo "</thead>";
    	echo "<tbody>";
	$query=mysql_query("select * from event");
	$type='Events';
	while ($row=mysql_fetch_array($query))
	    {
	    	
	    $id= $row['event_id'];
		echo "<tr>";
		echo '<td>'. $row['event_title'].'</td>';
		echo '<td>'. $row['event_desc'].'</td>';
		echo '<td>'. $row['event_id'].'</td>';
		echo '<td>'. $row['start_date'].'</td>';
		echo '<td>'. $row['event_by'].'</td>';
		echo "&nbsp &nbsp" . "<td><a href='delete.php?type=$type&id=$id'><button class='btn btn-danger' data-toggle='modal' data-target='#deletemodal' id= '$id' name='Events'>Delete</button></a></td>";
		echo "</tr>";
        }
        
        $table="event";
}
if ($filetype=='Circular') 
{
	echo "<h2 class='text-center'>Result</h2>";
            
  echo "<table class=table table-bordered'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th >Title</th>";
        echo "<th>Description</th>";
        echo "<th>Id</th>";
        echo "<th>Date</th>";
        echo "<th>By</th>";
        echo  "<th>Operation</th>";
      	echo "</tr>";
    	echo "</thead>";
    	echo "<tbody>";	 
	$query=mysql_query("select * from circular");
	$type='Circular';
	while ($row=mysql_fetch_array($query))
	    {
	    $id= $row['circular_id'];
		echo "<tr>";
		echo '<td>'. $row['circular_title'].'</td>';
		echo '<td>'. $row['circular_desc'].'</td>';
		echo '<td>'. $row['circular_id'].'</td>';
		echo '<td>'. $row['circular_date'].'</td>';
		echo '<td>'. $row['circular_by'].'</td>';
		echo "&nbsp &nbsp" . "<td><a href='delete.php?type=$type&id=$id'><button class='btn btn-danger' data-toggle='modal' data-target='#deletemodal' id= '$id' name='Circular'>Delete</button></a></td>";
		echo "</tr>";
        }
        
        $table="circular";
}
if ($filetype=='Notice') 
{		 echo "<h2 class='text-center'>Result</h2>";
            
  echo "<table class=table table-bordered'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th >Title</th>";
        echo "<th>Description</th>";
        echo "<th>Id</th>";
        echo "<th>Date</th>";
        echo "<th>By</th>";
        echo  "<th>Operation</th>";
      	echo "</tr>";
    	echo "</thead>";
    	echo "<tbody>";
		$type='Notice';
		$query=mysql_query("select * from notice");
		while ($row=mysql_fetch_array($query))
	    {
		echo "<tr>";
		$id= $row['notice_id'];
		echo '<td class="col-md-2">'. $row['notice_title'].'</td>';
		echo '<td>'. $row['notice_desc'].'</td>';
		echo '<td>'. $row['notice_id'].'</td>';
		echo '<td>'. $row['notice_date'].'</td>';
		echo '<td>'. $row['notice_by'].'</td>';
		echo "&nbsp &nbsp" . "<td><a href='delete.php?type=$type&id=$id'><button class='btn btn-danger' data-toggle='modal' data-target='#deletemodal' id= '$id' name='Notice'>Delete</button></a></td>";
		echo "</tr>";
        }
        
        $table="notice";
}


?>
<!--Php Code End From Here-->
        
		
      	</tr>
    	</tbody>
  		</table>
		</div>


<!--result label-->

<!--Modal Starts From Here-->
<div class="modal fade" id="deletemodal" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button>
				<h4 class="modal-title text-center">Remove <?php echo $filetype;  ?></h4>
			</div>
			
			<div class="modal-body">
					
					<form>
						<h4 class="text-center">Are you sure you want to remove given <?php echo $filetype;  ?>? </h4>
						<br>
						<center>
							<a href="delete.php?id=<?php echo $id; ?>&file=<?php echo $file; ?>"><button class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-ok"></span>&nbsp;Yes</button></a>

							<button class="btn btn-lg btn-success"><span class="glyphicon glyphicon-remove"></span>&nbsp;No</button>	
						</center>
					</form>
			</div>
			<br><br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	
</div>
<!--Modal End Here-->

<br><br><br>
<!--footer starts from here-->
<nav class="navbar navbar-inverse navbar-fixed-bottom">
	<h4 class="text-center color-white"> &copy; Institute of Information Technology & Management 2017-18</h4>
</nav>
<!--footer end here-->
	
</body>
</html>
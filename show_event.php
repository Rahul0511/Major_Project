<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("project",$conn);
$query=mysql_query("select * from event");
while ($row=mysql_fetch_array($query)) {

  ?>
 <a href="<?php echo $row['path']; ?>"> 
<?php echo "<p>".$row['event_title']."</p><br>" ?>
</a>     
<?php
}
?>
</body>
</html>

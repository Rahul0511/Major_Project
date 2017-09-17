<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("project",$conn);
$query=mysql_query("select * from notice");
while ($row=mysql_fetch_array($query)) {

  ?>
 <a href="<?php echo $row['path']; ?>"> 
<?php echo "<p>".$row['notice_title']."</p><br>" ?>
     
<?php
}
?>
</a>
</body>
</html>


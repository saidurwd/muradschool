<?php include('dbconnect.php');?>
<?php			
	$result= mysql_query("select * from pr_tbl" ) or die (mysql_error());
	while ($row = mysql_fetch_array ($result)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Title</title>
</head>
<body>
<p><?php echo $row['pr_desc'];?></p>
</body>
</html>
<?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="screen.css" type="text/css" rel="stylesheet">
<title>Untitled Document</title>

</head>

<body>

<marquee bgcolor="" loop="true" direction="left" scrollamount="2" style="box-shadow: 0 3px 10px #838383;-moz-box-shadow: 0 3px 10px #838383;-webkit-box-shadow: 0 3px 10px #838383;font-size: 13px;height: 20px;margin-bottom: 15px;padding: 5px;width: 960px;"> 
<center> 
   <strong>
	<a style="color:#000" href="_notice_view_all.php" target="_blank">আপডেট নোটিস /Update Notice: 
	<?php	
		$result= mysql_query("select * from notice_tbl order by n_id DESC" ) or die (mysql_error());
		while ($row = mysql_fetch_array ($result)){
	?>
    <a target="_blank" href="_notice_view_all.php"><font color="#58587b"><?php echo $row['n_title'];?></font></a>&nbsp;&nbsp;||&nbsp;&nbsp;
	<?php } ?>
	</a>
	</strong>
</center>
</marquee>

</body>
</html>

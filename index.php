<?php include('dbconnect.php');?>
<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<?php	
	$result= mysql_query("select * from hdr_tbl" ) or die (mysql_error());
	while ($row = mysql_fetch_array ($result)){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<title><?php echo $row['hdr_en'];?></title>
</head>
<body bgcolor="#CCCCCC">
<div align="center">
<div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
</div>
<div align="center"> 
<?PHP include("pdf/head.php"); ?>
<?php include("pdf/motionmenu.php"); ?>

<table border="0" cellspacing="0" cellpadding="0" bgcolor="#ccCCCC" width="960">
<tr>
<td style="float:left;display:block;margin-left: -7px;"><?php include("pdf/left.php"); ?></td>
<td style="float:left;display:block;width: 565px;"><?php include("pdf/middle_imag.php"); ?></td>
<td style="display:block;float: right;width: 218px;"><?php include("pdf/right.php"); ?></td>
</tr>
</table>

</div>
<div align="center">
<?php include("pdf/copyright.php"); ?>
</div>
<?php } ?>
</body>
</html>

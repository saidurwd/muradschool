<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>College</title>
</head>
<body bgcolor="#CCCCCC">
  <div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
     </div>
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
	<div align="center"> 
		<?PHP include("pdf/head.php"); ?>
		<?php include("pdf/motionmenu.php"); ?>
		<div class="maincontent">
			<h2>Position Information</h2>			
			<?php
				//$i = 0;
				$result= mysql_query("select * from pos_tbl" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($result)){
				//$i++;
			?>
			<table style="border:2px #C0C0C0 solid;" cellpadding="0" cellspacing="1" id="maintable" width="960px">
				<tr>
					<td align="left" valign="top" style="border:1px #C0C0C0 solid;width:238px;height:32px;">
					<font style="font-size:20px" color="#32CD32" face="Arial"><b>Position Title</b></font></td>
					<td align="left" valign="top" style="border:1px #C0C0C0 solid;height:32px;"><?php echo $row['pos_title'];?>
				&nbsp;</td>
				</tr>
				<tr>
					<td align="left" valign="top" style="border:1px #C0C0C0 solid;width:238px;height:30px;">
					<font style="font-size:20px" color="#FF0000" face="Arial"><b>Download File</b></font></td>
					<td align="left" valign="top" style="border:1px #C0C0C0 solid;height:30px;"><a style="background: none repeat scroll 0 0 green;
					border-radius: 5px;color: #fff;line-height: 32px;margin-left: 7px;padding: 4px 10px;" target="_blank" href="admin/upload/<?php echo $row['pos_file']; ?>">Download</a>
				&nbsp;</td>
				</tr>
				<tr>
					<td align="left" valign="top" style="border:1px #C0C0C0 solid;width:238px;height:148px;">
					<font style="font-size:20px" color="" face="Arial"><b>Position Information</b></font></td>
					<td align="left" valign="top" style="border:1px #C0C0C0 solid;height:250px;"><?php echo $row['pos_info'];?>
				&nbsp;</td>
				</tr>
			</table>
			<?php } ?>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

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
			<h2>Governing Body List</h2>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<tr>
					<th style="text-align:center;color: #0778D5;padding: 5px;font-size: 12px;">S.No</th>
					<th style="text-align:center;color: #0778D5;padding: 5px;font-size: 12px;">GB Name</th>
					<th style="text-align:center;color: #0778D5;padding: 5px;font-size: 12px;">GB Position</th>
					<th style="text-align:center;color: #0778D5;padding: 5px;font-size: 12px;">GB Address</th>
					<th style="text-align:center;color: #0778D5;padding: 5px;font-size: 12px;">GB Duration</th>
					<th style="text-align:center;color: #0778D5;padding: 5px;font-size: 12px;">GB Comment</th>
				</tr>
				<?php
					$i = 0;				
					$result= mysql_query("select * from gb_tbl" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($result)){
					$i++;
				?>
				<tr>
					<td style="text-align:center;width:10px;padding:5px;font-size: 12px;"><?php echo $i;?></td>
					<td style="text-align:center;width:200px;padding:5px;font-size: 12px;"><?php echo $row['gb_name'];?></td>
					<td style="text-align:center;width:100px;padding:5px;font-size: 12px;"><?php echo $row['gb_pos'];?></td>
					<td style="text-align:center;width:300px;padding:5px;font-size: 12px;"><?php echo $row['gb_adrs'];?></td>
					<td style="text-align:center;width:200px;padding:5px;font-size: 12px;"><?php echo $row['gb_year'];?></td>
					<td style="text-align:center;width:200px;padding:5px;font-size: 12px;"><?php echo $row['gb_cmt'];?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

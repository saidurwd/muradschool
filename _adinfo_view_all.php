<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>School</title>
</head>
<body bgcolor="#FFFFFF">
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
			<h2>Admission Information</h2>
			<table cellpadding="1" cellspacing="1" border="2" id="maintable" width="960px">
				<tr>
					<th style="text-align:center;color: fuchsia;padding: 10px;">Serial no</th>
					<th style="text-align:center;color: fuchsia;padding: 10px;">Subject</th>
					<th style="text-align:center;color: fuchsia;padding: 10px;">Download Option</th>
					<th style="text-align:center;color: fuchsia;padding: 10px;">Date</th>
				</tr>
				<?php
					$i = 0;
					$result= mysql_query("select * from adinfo_tbl" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($result)){
					$i++;
				?>
				<tr>
					<td style="text-align:center;width:50px;padding:5px;"><?php echo $i;?></td>
					<td style="text-align:center;width:500px;padding:5px;"><?php echo $row['adinfo_sub'];?></td>
					<td style="text-align:center;width:200px;padding:5px;">
						<a href="backend/upload/<?php echo $row['adinfo_file']; ?>" style="color: dodgerblue;font-weight:bold;">Download Files</a>
					</td>
					<td style="text-align:center;width:100px;padding:5px;"><?php echo $row['adinfo_date'];?></td>
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

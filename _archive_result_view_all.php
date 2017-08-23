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
			<h2>Archive Public Result</h2>
			<?php			
				$result= mysql_query("select * from arch_exm" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($result)){
			?>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<tr>
					<td style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: #00acec;">Exam Title: <span style="font-size: 15px; color: #0763BF;"><?php echo $row['arch_exm_title'];?></span></td>
				</tr>
				<tr>
					<td style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: #00acec;">Group: <span style="font-size: 15px; color: #0763BF;"><?php echo $row['arch_exm_grp'];?></span></td>
				</tr>
				<tr>
					<td>
						<p style="font-weight: bold; font-size: 15px; margin-bottom: 0px; color: #00acec;font-style: italic;">Passing student Roll.no: </p>
						<p><?php echo $row['arch_exm_pass'];?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p style="font-weight: bold; font-size: 15px; margin-bottom: 0px; color: #00acec;">Conside#00acec: </p>
						<span style="font-size: 15px; color: #0763BF;font-style: italic;">Regular student Roll.no:</span> <p style="border-bottom: 1px dotted; padding-bottom: 10px;"><?php echo $row['arch_exm_regu'];?></p>
						<span style="font-size: 15px; color: #0763BF;font-style: italic;">Irregular student Roll.no:</span> <p><?php echo $row['arch_exm_iregu'];?></p>
					</td>
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

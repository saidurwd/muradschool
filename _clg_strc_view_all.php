<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>College</title>
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
			<h2>College structure details...</h2>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<?php			
					$result= mysql_query("select * from clg_strc order by clg_str_id desc" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($result)){
				?>
				<tr>
					<td style="text-align:left;;padding:5px;">
						<h2 style="color: royalblue;margin-left: -12px;">Title: <?php echo $row['clg_str_title'];?></h2>
						<p><span>Date: </span><?php echo $row['clg_str_date'];?></p>
						<p><span>Photo Caption: </span><?php echo $row['clg_str_cap'];?></p>
						<img src="backend/upload/<?php echo $row['clg_str_photo']; ?>" width="750px" height="400px">
						<p style="line-height:20px"><span>Description: </span><?php echo $row['clg_str_desc'];?></p>
					</td>
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

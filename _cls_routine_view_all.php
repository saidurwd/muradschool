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
			<h2>Download your class routine in here...</h2>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<?php			
					$result= mysql_query("select * from cls_routain" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($result)){
				?>
				<tr>
					<td style="text-align:left;;padding:5px;">
						<h3><?php echo $row['cr_title']; ?> Group</h3>
						<img src="backend/upload/<?php echo $row['cr_photo']; ?>" width="960px" height="500px">
						<p style="float: right;margin-bottom: 20px;margin-top: 20px;" ><a style="background: red none repeat scroll 0 0;border-radius: 5px;color: #fff;padding: 10px;" target="_blank" href="admin/upload/<?php echo $row['cr_photo']; ?>">Download <?php echo $row['cr_title']; ?> Routine</a></p>
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

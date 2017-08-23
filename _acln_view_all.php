<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>School</title>
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
       popupWin.document.close();
    }
</script>
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
		<p>You can print this page by click in here...<input type="button" value="print" onClick="PrintDiv();" /></p>
		<div class="maincontent" id="divToPrint">
			<h2>Academic Calender</h2>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<tr>
					<th style="text-align:center;color: #BF8DFF;padding: 10px;" width="">Sl.no</th>
					<th style="text-align:center;color: #BF8DFF;padding: 10px;" width="">Day and date</th>
					<th style="text-align:center;color: #BF8DFF;padding: 10px;" width="">Description</th>
				</tr>
				<?php
					$i = 0;				
					$result= mysql_query("select * from acln_tbl" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($result)){
					$i++;
				?>
				<tr>
					<td style="text-align:center;width:100px;padding:5px;"><?php echo $i;?></td>
					<td style="text-align:center;width:200px;padding:5px;"><?php echo $row['acln_date'];?></td>
					<td style="text-align:center;width:600px;padding:5px;"><?php echo $row['acln_desc'];?></td>
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

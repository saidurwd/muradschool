<?php include('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
		<link rel="stylesheet" href="css/css.css">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

		<title>স্কুলের দৈনিক উপস্থিতির বিবরণ</title>
		<link href="css/960.css" rel="stylesheet" media="screen"/>
		<link href="css/defaulttheme.css" rel="stylesheet" media="screen"/>
		<link href="css/mytheme.css" rel="stylesheet" media="screen"/>
		<script src="js/jquery.fixedheadertable.js"></script>

		<link rel="stylesheet" href="css/jquery-ui.css"/>
		<script src="js/jquery-1.9.1.js"></script>
		<script src="js/jquery-ui.js"></script>
		
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
	<div id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"></div>
		<p align="right">
		<input type="button" value="Close Window" onClick="javascript:window.close()"
		style="font-size: 14pt; font-family: Verdana; color: #000000">
		</p>
		<center>
			<?PHP include("pdf/head.php"); ?>
			<?php include("pdf/motionmenu.php"); ?>
		<div class="container_12" id="ptintableDiv">		
				 দৈনিক উপস্থিতির বিবরণ
				<p>You can print this page by click in here...<input type="button" value="print" onClick="PrintDiv();" /></p>
				<div class="grid_8" style="margin-left: -70%;" id="divToPrint">
					<table style="width: 960px;" class="fancyTable" id="myTable01" cellpadding="0" cellspacing="0">
						<tr align="center">
							<td rowspan="3"><strong>তারিখ</strong></td>
							<td colspan="2" rowspan="2"><strong>শিক্ষক</strong></td>
							<td colspan="2" rowspan="2"><strong>কর্মচারী</strong></td>
							<td colspan="25"><strong>ছাত্রছাত্রী</strong></td>
						</tr>
						<tr align="center">
							<td colspan="2">১ম</td>
							<td colspan="2">২য়</td>
							<td colspan="2">৩য়</td>
							<td colspan="2">৪র্থ</td>
							<td colspan="2">৫ম</td>
							<td colspan="2">৬ষ্ঠ</td>
							<td colspan="2">৭ম</td>
							<td colspan="2">৮ম</td>
							<td colspan="2">৯ম</td>
							<td colspan="2">১০ম</td>
						</tr>
						<tr>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
							<td>মোট</td>
							<td>উপস্থিত</td>
						</tr>
						<?php				
							$result= mysql_query("select * from atten_tbl order by at_id desc" ) or die (mysql_error());
							while ($row = mysql_fetch_array ($result)){
						?>
						<tr>
							<td><?php echo $row['at_date'];?></td>
							<td><?php echo $row['at_tec_all'];?></td>
							<td><?php echo $row['at_tec_atn'];?></td>
							<td><?php echo $row['at_stf_all'];?></td>
							<td><?php echo $row['at_stf_atn'];?></td>
							<td><?php echo $row['at_scl1_all'];?></td>
							<td><?php echo $row['at_scl1_atn'];?></td>
							<td><?php echo $row['at_scl2_all'];?></td>
							<td><?php echo $row['at_scl2_atn'];?></td>
							<td><?php echo $row['at_scl3_all'];?></td>
							<td><?php echo $row['at_scl3_atn'];?></td>
							<td><?php echo $row['at_scl4_all'];?></td>
							<td><?php echo $row['at_scl4_atn'];?></td>
							<td><?php echo $row['at_scl5_all'];?></td>
							<td><?php echo $row['at_scl5_atn'];?></td>
							<td><?php echo $row['at_scl6_all'];?></td>
							<td><?php echo $row['at_scl6_atn'];?></td>
							<td><?php echo $row['at_scl7_all'];?></td>
							<td><?php echo $row['at_scl7_atn'];?></td>
							<td><?php echo $row['at_scl8_all'];?></td>
							<td><?php echo $row['at_scl8_atn'];?></td>
							<td><?php echo $row['at_scl9_all'];?></td>
							<td><?php echo $row['at_scl9_atn'];?></td>
							<td><?php echo $row['at_scl10_all'];?></td>
							<td><?php echo $row['at_scl10_atn'];?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</center>
	</body>
</html>              

<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>প্রতিষ্ঠানের একাউন্টস</title>
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
			<h2>প্রতিষ্ঠানের প্রতিদিনের একাউন্টস হিসাব/নিকাশ</h2>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<tr>
					<th>ক্রমিক নং</th>
					<th>তারিখ</th>
					<th>টাকার বিবরণ </th>
					<th>পরিমান </th>
					<th>জমা/ খরচ</th>
					<th>মোট পরিমাণ</th>
				</tr>
				<?php
					$i = 0;				
					$result= mysql_query("select * from accounts" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($result)){
					$i++;
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['acc_date'];?></td>
					<td><?php echo $row['acc_desc'];?></td>
					<td style="text-align: right; padding-right: 10px;"><?php echo $row['acc_amo'];?>/=</td>
					<td><?php echo $row['acc_dr_cr'];?></td>
					<td style="text-align: right; padding-right: 10px;"><?php echo $row['acc_total'];?>/=</td>
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

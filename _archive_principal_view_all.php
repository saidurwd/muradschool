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
			<h2>প্রাক্তন প্রতিষ্ঠান প্রধানগনের তথ্যাবলী</h2>
			<?php 
				$num_rec_per_page=40;
				if (isset($_GET["page"])){ 
					$page = $_GET["page"]; 
				} else {
					$page=1; 
				}; 
				$start_from = ($page-1) * $num_rec_per_page; 
				$sql = "SELECT * FROM arch_prin LIMIT $start_from, $num_rec_per_page"; 
				$rs_result = mysql_query ($sql); 
			?>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<tr>
					<th style="text-align:center;color: #E94F44;padding: 10px;">Sl.No</th>
					<th style="text-align:center;color: #E94F44;padding: 10px;">Name</th>
					<th style="text-align:center;color: #E94F44;padding: 10px;">Duration</th>
					<th style="text-align:center;color: #E94F44;padding: 10px;">Position</th>
					<th style="text-align:center;color: #E94F44;padding: 10px;">Contact</th>
					<th style="text-align:center;color: #E94F44;padding: 10px;">Photo</th>
				</tr>
				<?php
					$i=0;			
					//$result= mysql_query("select * from arch_prin" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($rs_result)){
					$i++;
				?>
				<tr>
					<td style="text-align:center;width:50px;padding:5px;"><?php echo $i;?></td>
					<td style="text-align:center;width:100px;padding:5px;"><?php echo $row['arch_prin_nam'];?></td>
					<td style="text-align:center;width:100px;padding:5px;"><?php echo $row['arch_prin_yar'];?></td>
					<td style="text-align:center;width:50px;padding:5px;"><?php echo $row['arch_prin_pos'];?></td>
					<td style="text-align:center;width:100px;padding:5px;"><?php echo $row['arch_prin_mob'];?></td>
					<td style="text-align:center;width:50px;"><img src="backend/upload/<?php echo $row['arch_prin_pto']; ?>" alt=""  width="50" height="50" /></td>
				</tr>
				<?php } ?>
			</table>
			<div class="mypagination">
				<?php 
					$sql = "SELECT * FROM arch_prin"; 
					$rs_result = mysql_query($sql); 
					$total_records = mysql_num_rows($rs_result);  
					$total_pages = ceil($total_records / $num_rec_per_page); 

					echo "<a href='_archive_principal_view_all.php?page=1'>".'< First page'."</a> "; 

					for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='_archive_principal_view_all.php?page=".$i."'>".$i."</a> "; 
					}; 
					echo "<a href='_archive_principal_view_all.php?page=$total_pages'>".'Last page >'."</a> "; 
				?>
			</div>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

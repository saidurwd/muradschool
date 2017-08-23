<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>School</title>
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
			<h2>Present Teachers's Information: </h2>
			<?php 
				$num_rec_per_page=20;
				if (isset($_GET["page"])){ 
					$page = $_GET["page"]; 
				} else {
					$page=1; 
				}; 
				$start_from = ($page-1) * $num_rec_per_page; 
				$sql = "SELECT * FROM preteach_tbl LIMIT $start_from, $num_rec_per_page"; 
				$rs_result = mysql_query ($sql); 
			?>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<tr>
					<th style="text-align:center;color: blue;padding: 10px;">S.No</th>
					<th style="text-align:center;color: blue;padding: 10px;">Teacher ID</th>
					<th style="text-align:center;color: blue;padding: 10px;">Name</th>
					<th style="text-align:center;color: blue;padding: 10px;">Designation</th>
					<th style="text-align:center;color: blue;padding: 10px;">Index No</th>
					<th style="text-align:center;color: blue;padding: 10px;">Contact No</th>
					<th style="text-align:center;color: blue;padding: 10px;">Subject</th>
					<th style="text-align:center;color: blue;padding: 10px;">Photo</th>
				</tr>
				<?php
					$i = 0;				
					//$result= mysql_query("select * from preteach_tbl" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($rs_result)){
					$i++;
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['tech_id'];?></td>
					<td><?php echo $row['tech_name'];?></td>
					<td><?php echo $row['tech_designation'];?></td>
					<td><?php echo $row['tech_indxno'];?></td>
					<td><?php echo $row['tech_contact'];?></td>
					<td><?php echo $row['tech_sub'];?></td>
					<td>
						<?php if($row['tech_photo'] != ""): ?>
							<img src="backend/upload/<?php echo $row['tech_photo']; ?>" width="50px" height="50px" style="border:1px solid #333333;">
						<?php else: ?>
							<img src="images/default.png" width="50px" height="50px" style="border:1px solid #333333;">
						<?php endif; ?>
					</td>
				</tr>
				<?php } ?>
			</table>
			<div class="mypagination">
				<?php 
					$sql = "SELECT * FROM preteach_tbl"; 
					$rs_result = mysql_query($sql); 
					$total_records = mysql_num_rows($rs_result);  
					$total_pages = ceil($total_records / $num_rec_per_page); 

					echo "<a href='_present_teach_database.php?page=1'>".'< First page'."</a> "; 

					for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='_present_teach_database.php?page=".$i."'>".$i."</a> "; 
					}; 
					echo "<a href='_present_teach_database.php?page=$total_pages'>".'Last page >'."</a> "; 
				?>
			</div>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

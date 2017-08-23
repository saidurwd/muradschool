<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../sw/dshe0000.css" />
<link rel="stylesheet" href="../../sw/mystyle.css" />
<title>College</title>
</head>
<body bgcolor="#FFFFFF">
  <div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
</div>

	<div align="center"> 
		<?PHP include("pdf/head.php"); ?>
		<?php include("pdf/motionmenu.php"); ?>
		<div class="maincontent">
			<h2>Present's Information: </h2>
			<?php 
				$num_rec_per_page=20;
				if (isset($_GET["page"])){ 
					$page = $_GET["page"]; 
				} else {
					$page=1; 
				}; 
				$start_from = ($page-1) * $num_rec_per_page; 
				$sql = "SELECT * FROM suborno_tbl LIMIT $start_from, $num_rec_per_page"; 
				$rs_result = mysql_query ($sql); 
			?>
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="1020px">
				<tr>
					<th style="text-align:center;color: blue;padding: 10px;">S.No</th>
					<th style="text-align:center;color: blue;padding: 10px;">Year</th>
					<th style="text-align:center;color: blue;padding: 10px;">Examination</th>
					<th style="text-align:center;color: blue;padding: 10px;">Roll</th>
					<th style="text-align:center;color: blue;padding: 10px;">Name</th>
					<th style="text-align:center;color: blue;padding: 10px;">Designation</th>
					<th style="text-align:center;color: blue;padding: 10px;">Company No</th>
					<th style="text-align:center;color: blue;padding: 10px;">Contact No</th>
					<th style="text-align:center;color: blue;padding: 20px;">Address</th>
					<th style="text-align:center;color: blue;padding: 10px;">Photo</th>
					<th>Action</th>
				</tr>
				<?php
					$i = 0;				
					//$result= mysql_query("select * from suborno_tbl" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($rs_result)){
					$i++;
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['tech_id'];?></td>
					<td><?php echo $row['res_class'];?></td>
					<td><?php echo $row['res_roll'];?></td>
					<td><?php echo $row['tech_name'];?></td>
					<td><?php echo $row['tech_designation'];?></td>
					<td><?php echo $row['tech_indxno'];?></td>
					<td><?php echo $row['tech_contact'];?></td>
					<td><?php echo $row['tech_sub'];?></td>
					<td>
						<?php if($row['tech_photo'] != ""): ?>
							<img src="upload/<?php echo $row['tech_photo']; ?>" width="50px" height="50px" style="border:1px solid #333333;">
						<?php else: ?>
							<img src="images/default.png" width="50px" height="50px" style="border:1px solid #333333;">
						<?php endif; ?>
					</td>
					<td>
				<a href="_presuborno_edit.php?id=<?php echo $row['t_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_presuborno_del.php?id=<?php echo $row['t_id'];?>">Delete</a>
			</td>
				</tr>
				<?php } ?>
			</table>
			<div class="mypagination">
				<?php 
					$sql = "SELECT * FROM suborno_tbl"; 
					$rs_result = mysql_query($sql); 
					$total_records = mysql_num_rows($rs_result);  
					$total_pages = ceil($total_records / $num_rec_per_page); 

					echo "<a href='_present_suborno_ad_database.php?page=1'>".'< First page'."</a> "; 

					for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='_present_suborno_ad_database.php?page=".$i."'>".$i."</a> "; 
					}; 
					echo "<a href='_present_suborno_ad_database.php?page=$total_pages'>".'Last page >'."</a> "; 
				?>
			</div>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
</body>
</html>

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
			<h2>Present SSC Student's Information</h2>
			<?php 
				$num_rec_per_page=20;
				if (isset($_GET["page"])){ 
					$page = $_GET["page"]; 
				} else {
					$page=1; 
				}; 
				$start_from = ($page-1) * $num_rec_per_page; 
				$sql = "SELECT * FROM std_ssc_tbl LIMIT $start_from, $num_rec_per_page"; 
				$rs_result = mysql_query ($sql); 
			?>	
			<table cellpadding="0" cellspacing="0" border="1" id="maintable" width="960px">
				<tr>
					<th>SL</th>
					<th>ID<br>Roll<br>Class</th>
					<th>Name<br>Father<br>Mother</th>
					<th>Shift<br>Section<br>Group</th>
					<th>DOB<br>Religion<br>Gender</th>
					<th style="width: 250px;">Subject</th>
					<th style="width: 50px; padding: 5px;">Photo</th>
				</tr>
				<?php
					$i = 0;				
					//$result= mysql_query("select * from std_ssc_tbl" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($rs_result)){
					$i++;
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['std_id'];?><br><?php echo $row['std_roll'];?><br><?php echo $row['std_cls'];?></td>
					<td><?php echo $row['std_name'];?><br><?php echo $row['std_father'];?><br><?php echo $row['std_mother'];?></td>
					<td><?php echo $row['std_sft'];?><br><?php echo $row['std_sec'];?><br><?php echo $row['std_grp'];?></td>
					<td><?php echo $row['std_dob'];?><br><?php echo $row['std_reli'];?><br><?php echo $row['std_gen'];?></td>
					<td><?php echo $row['std_sub'];?></td>
					<td>
						<img src="backend/upload/<?php echo $row['std_photo']; ?>" width="50px" height="50px" style="border:1px solid #333333;">
					</td>
				</tr>
				<?php } ?>
			</table>
			<div class="mypagination">
				<?php 
					$sql = "SELECT * FROM std_ssc_tbl"; 
					$rs_result = mysql_query($sql); 
					$total_records = mysql_num_rows($rs_result);  
					$total_pages = ceil($total_records / $num_rec_per_page); 

					echo "<a href='_student_ssc.php?page=1'>".'< First page'."</a> "; 

					for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='_student_ssc.php?page=".$i."'>".$i."</a> "; 
					}; 
					echo "<a href='_student_ssc.php?page=$total_pages'>".'Last page >'."</a> "; 
				?>
			</div>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>
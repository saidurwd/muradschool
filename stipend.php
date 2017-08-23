<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>School Stipend Information</title>
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
			<h2>Stipend Information</h2>
			<?php 
				$num_rec_per_page=20;
				if (isset($_GET["page"])){ 
					$page = $_GET["page"]; 
				} else {
					$page=1; 
				}; 
				$start_from = ($page-1) * $num_rec_per_page; 
				$sql = "SELECT * FROM stipend_tbl order by n_id DESC LIMIT $start_from, $num_rec_per_page"; 
				$rs_result = mysql_query ($sql); 
			?> 
			<table cellpadding="1" cellspacing="1" border="2" id="maintable" width="960px">
				<tr>
					<th style="text-align:center;color: goldenrod;padding: 10px;" width="">Serial No</th>
					<th style="text-align:center;color: goldenrod;padding: 10px;" width="">Title</th>
					<th style="text-align:center;color: goldenrod;padding: 10px;" width="">Download Option</th>
					<th style="text-align:center;color: goldenrod;padding: 10px;" width="">Date</th>
				</tr>
				<?php
								
					//$result= mysql_query("select * from stipend_tbl order by n_id DESC" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($rs_result)){
					
				?>
				<tr>
					<td style="text-align:center;width:100px;padding:5px;"><?php echo $row['n_id']; ?></td>
					<td style="text-align:center;width:500px;padding:5px;"><?php echo $row['n_title'];?></td>
					<td style="text-align:center;width:200px;padding:5px;">
						<a href="sw/backend/upload/<?php echo $row['n_download']; ?>" style="color: green;font-weight:bold;">Download</a>
					</td>
					<td style="text-align:center;width:100px;padding:5px;"><?php echo $row['n_date'];?></td>
				</tr>
				<?php } ?>
			</table>
			<div class="mypagination">
				<?php 
					$sql = "SELECT * FROM stipend_tbl"; 
					$rs_result = mysql_query($sql); 
					$total_records = mysql_num_rows($rs_result);  
					$total_pages = ceil($total_records / $num_rec_per_page); 

					echo "<a href='_stipend_view_all.php?page=1'>".'< First page'."</a> "; 

					for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='_stipend_view_all.php?page=".$i."'>".$i."</a> "; 
					}; 
					echo "<a href='_stipend_view_all.php?page=$total_pages'>".'Last page >'."</a> "; 
				?>
			</div>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

<?php include('dbconnect.php'); ?>
<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>Panel</title>
<script type="text/javascript" src="admin/core/ckeditor.js"></script>
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
		
		<?php 
			$num_rec_per_page=10;
			if (isset($_GET["page"])){ 
				$page = $_GET["page"]; 
			} else {
				$page=1; 
			}; 
			$start_from = ($page-1) * $num_rec_per_page; 
			$sql = "SELECT * FROM pnl_tbl LIMIT $start_from, $num_rec_per_page"; 
			$rs_result = mysql_query ($sql); 
		?>
		<div class="maincontent22">
			<h2 style="font-size: 20px; margin-bottom: 10px;">Public exam/Student/Guardian Panel: </h2>
			<?php			
				//$result= mysql_query("select * from pnl_tbl order by pnl_id desc" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($rs_result)){
			?>
			<div class="mycontent">
				<h3>Category: <?php echo $row['pnl_list'];?></h3><br />
				<h2><?php echo $row['pnl_title'];?></h2>
				<?php echo $row['pnl_desc'];?>
				<p>Posted by: <span><?php echo $row['pnl_nam'];?></span> || Date: <span><?php echo $row['pnl_date'];?></span></p>
			</div>
			<?php } ?>
		</div>
		<div class="mypagination">
			<?php 
				$sql = "SELECT * FROM pnl_tbl"; 
				$rs_result = mysql_query($sql); 
				$total_records = mysql_num_rows($rs_result);  
				$total_pages = ceil($total_records / $num_rec_per_page); 

				echo "<a href='_panel_view_all.php?page=1'>".'< First page'."</a> "; 

				for ($i=1; $i<=$total_pages; $i++) { 
					echo "<a href='_panel_view_all.php?page=".$i."'>".$i."</a> "; 
				}; 
				echo "<a href='_panel_view_all.php?page=$total_pages'>".'Last page >'."</a> "; 
			?>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

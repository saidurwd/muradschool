<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>Madrasah</title>
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
			<h2>Teacher Details information</h2>
			<?php 
				$num_rec_per_page=50;
				if (isset($_GET["page"])){ 
					$page = $_GET["page"]; 
				} else {
					$page=1; 
				}; 
				$start_from = ($page-1) * $num_rec_per_page; 
				$sql = "SELECT * FROM tech_detailinfo_tbl LIMIT $start_from, $num_rec_per_page"; 
				$rs_result = mysql_query ($sql); 
			?> 
			<table cellpadding="1" cellspacing="1" border="2" id="maintable" width="960px">
				<tr align="center" style="color: brown;">
					<td rowspan="2">ক্রমিক নং</td>
					<td rowspan="2">শিক্ষক/কর্মচারীর নাম</td>
					<td rowspan="2">লিঙ্গ পুরুষ,মহিলা</td>
					<td rowspan="2">পদবী</td>
					<td rowspan="2">চাকুরীতে প্রথম যোগদানের তারিখ</td>
					<td rowspan="2">বর্তমান পদে যোগদানের তারিখ</td>
					<td rowspan="2">এমপিও ভূক্তির তারিখ</td>
					<td rowspan="2">জন্ম তারিখ</td>
					<td colspan="7">শিক্ষাগত যোগ্যতা ( বিভাগ বা জিপিএ, শ্রেণি ইত্যাদি প্রযোজ্য)</td>
					<td rowspan="2">জাতীয় বেতন স্কেল</td>
					<td rowspan="2">ছবি</td>
				</tr>
				<tr style="color: brown;">
					<td>এসএসসি /সমমান</td>
					<td>এইচ এসসি /সমমান</td>
					<td>স্নাতক পাস /ফাজিল</td>
					<td>স্নাতক সম্মান</td>
					<td>বিএড</td>
					<td>এমএড</td>
					<td>স্নাতকোত্তর /কামিল</td>
				</tr>
				<?php
					$i=0;			
					//$result= mysql_query("select * from tech_detailinfo_tbl" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($rs_result)){
					$i++;
				?>
				<tr>	
					<td style=""><?php echo $i;?></td>
					<td style=""><?php echo $row['tech_detailinfo_num'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_sex'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_desig'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_attenddate'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_presentdate'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_mpodate'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_dob'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_ssc'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_hsc'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_deg'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_hon'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_bed'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_med'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_ma'];?></td>
					<td style=""><?php echo $row['tech_detailinfo_salary'];?></td>
					<td style=""><img src="backend/upload/<?php echo $row['tech_detailinfo_pic'];?>" alt="" width="50px" height="50px" style="border:1px solid #222222;"/></td>
				</tr>
				<?php } ?>
			</table>
			<div class="mypagination">
				<?php 
					$sql = "SELECT * FROM tech_detailinfo_tbl"; 
					$rs_result = mysql_query($sql); 
					$total_records = mysql_num_rows($rs_result);  
					$total_pages = ceil($total_records / $num_rec_per_page); 

					echo "<a href='_teachers_details_information.php?page=1'>".'< First page'."</a> "; 

					for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='_teachers_details_information.php?page=".$i."'>".$i."</a> "; 
					}; 
					echo "<a href='_teachers_details_information.php?page=$total_pages'>".'Last page >'."</a> "; 
				?>
			</div>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

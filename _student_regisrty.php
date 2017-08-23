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
			<h2>Student Registry Information</h2>
			<?php 
				$num_rec_per_page=50;
				if (isset($_GET["page"])){ 
					$page = $_GET["page"]; 
				} else {
					$page=1; 
				}; 
				$start_from = ($page-1) * $num_rec_per_page; 
				$sql = "SELECT * FROM std_registry LIMIT $start_from, $num_rec_per_page"; 
				$rs_result = mysql_query ($sql); 
			?> 
			<table cellpadding="1" cellspacing="1" border="2" id="maintable" width="960px">
				<tr>
					<th align="center">ক্রমিক নং</th>
					<th align="center">ছাত্র/ছাত্রী নাম</th>
					<th align="center">পিতার নাম</th>
					<th align="center">মাতার নাম</th>
					<th align="center">অভিভাবকের নাম ঠিকানা</th>
					<th align="center">জন্ম তারিখ</th>
					<th align="center">যে প্রতিষ্ঠান হতে পাস</th>
					<th align="center">পাশের বছর</th>
					<th align="center">বিভাগ</th>
					<th align="center">রোল নং</th>
					<th align="center">নিবন্ধন ও শিক্ষাবর্ষ</th>
					<th align="center">জি. পি. এ</th>
					<th align="center">যে শ্রেনীতে ভর্তি</th>
					<th align="center">শাখা</th>
					<th align="center">শ্রেণী</th>
					<th align="center">পাঠ্য বিষয় ও কোড</th>
					<th align="center">ছবি</th>
				</tr>
				<?php
					$i=0;			
					//$result= mysql_query("select * from std_registry" ) or die (mysql_error());
					while ($row = mysql_fetch_array ($rs_result)){
					$i++;
				?>
				<tr>	
					<td><?php echo $i;?></td>
					<td><?php echo $row['std_reg_num'];?></td>
					<td><?php echo $row['std_reg_father'];?></td>
					<td><?php echo $row['std_reg_mother'];?></td>
					<td><?php echo $row['std_reg_addrs'];?></td>
					<td><?php echo $row['std_reg_dob'];?></td>
					<td><?php echo $row['std_reg_instit'];?></td>
					<td><?php echo $row['std_reg_passyear'];?></td>
					<td><?php echo $row['std_reg_section'];?></td>
					<td><?php echo $row['std_reg_roll'];?></td>
					<td><?php echo $row['std_reg_resyear'];?></td>
					<td><?php echo $row['std_reg_gpa'];?></td>
					<td><?php echo $row['std_reg_admission'];?></td>
					<td><?php echo $row['std_reg_sakha'];?></td>
					<td><?php echo $row['std_reg_class'];?></td>
					<td><?php echo $row['std_reg_subcode'];?></td>
					<td><img src="backend/upload/<?php echo $row['std_reg_photo'];?>" alt="" width="50px" height="50px" style="border:1px solid #333333;"/></td>
				</tr>
				<?php } ?>
			</table>
			<div class="mypagination">
				<?php 
					$sql = "SELECT * FROM std_registry"; 
					$rs_result = mysql_query($sql); 
					$total_records = mysql_num_rows($rs_result);  
					$total_pages = ceil($total_records / $num_rec_per_page); 

					echo "<a href='_student_regisrty.php?page=1'>".'< First page'."</a> "; 

					for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='_student_regisrty.php?page=".$i."'>".$i."</a> "; 
					}; 
					echo "<a href='_student_regisrty.php?page=$total_pages'>".'Last page >'."</a> "; 
				?>
			</div>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Teacher Details information</title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete tdis data ?');
		}
	</script>
	<style>
	#mycustomers2 {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		widtd: 100%;
		border-collapse: collapse;
	}

	#mycustomers2 td, #mycustomers2 td {
		font-size: 12px;
		border: 1px solid #98bf21;
		padding: 2px 2px 2px 2px;
	}
	#mycustomers2 tr td{
		
		
	}
	#mycustomers2 td {
		font-size: 1.1em;
		text-align: left;
		padding-top: 5px;
		padding-bottom: 4px;
		color: #ffffff;
	}

	#mycustomers2 tr.alt td {
		color: #000000;
		background-color: #EAF2D2;
	}
	#mycustomers2 input{font-size: 12px;}
	</style>
</head>
<body>
	<h2>Teacher Details information</h2>
	<div align="center">
		<p>You can add a new data in here...<a style="font-size:12px;" href="index.php?action=_teacher_detailsinfo_add">Add New</a></p>
		<table id="mycustomers2" border="1" style="font-size: 12px;width: 1200px;background:#525252;">
			<tr align="center">
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
				<td rowspan="2">এডিট | মুছুন</td>
			</tr>
			<tr>
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
				$result = mysql_query("select * from tech_detailinfo_tbl" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($result)){
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
				<td style=""><img src="upload/<?php echo $row['tech_detailinfo_pic'];?>" alt="" width="50px" height="50px" style="border:1px solid #222222;"/></td>
				<td style="">
					<a href="_teacher_detailsinfo_edit.php?id=<?php echo $row['tech_detailinfo_id'];?>">এডিট করুন</a> | 
					<a onClick="return confirm_del();" href="_teacher_detailsinfo_del.php?id=<?php echo $row['tech_detailinfo_id'];?>">মুছে ফেলুন</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		
	</div>
</body>
</html>
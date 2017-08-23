<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Institute Salary Sheet</title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
	<style>
	#mycustomers {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		width: 100%;
		border-collapse: collapse;
	}

	#mycustomers td, #mycustomers th {
		font-size: 1em;
		border: 1px solid #98bf21;
		padding: 3px 3px 2px 3px;
	}

	#mycustomers th {
		font-size: 1.1em;
		text-align: left;
		padding-top: 5px;
		padding-bottom: 4px;
		background-color: #A7C942;
		color: #ffffff;
	}

	#mycustomers tr.alt td {
		color: #000000;
		background-color: #EAF2D3;
	}
	#mycustomers input{font-size: 12px;}
	</style>
</head>
<body>
	<h2>Institute Salary Sheet details</h2>
	<div align="center">
		<table id="mycustomers" width="960" border="1" style="font-size: 12px;">
		<?php
			$result= mysql_query("select * from slri_sht_p1" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		  <tr>
			<td>
				<p>
				<strong>শিক্ষা প্রতিষ্ঠানের নামঃ</strong> <?php echo $row['slri_sht_p1_insnam'];?> <br /> 
				<strong>ডাকঘরঃ</strong> <?php echo $row['slri_sht_p1_po'];?>, <strong>জেলাঃ</strong> <?php echo $row['slri_sht_p1_dist'];?> <br />
				<strong>স্মারক নং:</strong> <?php echo $row['slri_sht_p1_srkno'];?>,<br />
				<strong>তারিখঃ</strong> <?php echo $row['slri_sht_p1_date'];?>
				</p>
				<p>
				<strong>বিষয়ঃ</strong> শিক্ষক ও কর্মচারীদের <?php echo $row['slri_sht_p1_yar'];?> সালের <?php echo $row['slri_sht_p1_month'];?> মাসের বেতন ভাতাদির সরকারি অংশ প্রাপ্তির বিবরণী । <br />
				<strong>ব্যাংকের নামঃ</strong> <?php echo $row['slri_sht_p1_bank'];?>
				</p>
				<p>You can edit this option in here...<a href="_salary_sheet_edit1.php?id1=<?php echo $row['slri_sht_p1_id'];?>">Edit</a></p>
			</td>
		  </tr>
		  <?php } ?>
		</table>
		<br />
		<p>You can add a new salary sheet in here...<a style="font-size:13px;" href="index.php?action=_salary_sheet_add">Add New</a></p>
	  <table id="mycustomers" width="960" border="1" style="font-size: 12px;width: 1500px;background-color:#525252;">
		<tr>
		  <td width="90"><div align="center">এডিট/ডিলিট</div></td>
		  <td width="62"><div align="center">ক্রমিক নং</div></td>
		  <td width="236"><div align="center">নাম</div></td>
		  <td width="118"><div align="center">পদবী</div></td>
		  <td width="35"><div align="center">কোড নং</div></td>
		  <td width="85"><div align="center">সূচক সংখ্যা</div></td>
		  <td width="90"><div align="center">জন্ম তারিখ</div></td>
		  <td width="102"><div align="center">বেতন</div></td>
		  <td width="110"><div align="center">মাসিক মুল বেতন, আবাসিক ভাতা, মেডিকেল ভাতা ও মহাঘ ভাতা</div></td>
		  <td width="95"><div align="center">ই্নক্রিমেন্ট</div></td>
		  <td width="94"><div align="center">এক মাসের মোট প্রাপ্য</div></td>
		  <td width="96"><div align="center">বকেয়া</div></td>
		  <td width="110"><div align="center">ওয়েল ফেয়ার ট্রাস্ট ফান্ড</div></td>
		  <td width="104"><div align="center">অবসর সুবিধা</div></td>
		  <td width="77"><div align="center">বেতন কর্তন</div></td>
		  <td width="98"><div align="center">অবশিষ্ট মোট প্রাপ্য</div></td>
		  <td width="90"><div align="center">ব্যাংক</div></td>
		 </tr>
		<?php
			$i=0;
			$result= mysql_query("select * from slri_sht_p2" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
		  <td>
				<a href="_salary_sheet_edit2.php?id2=<?php echo $row['slri_sht_p2_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_salary_sheet_del.php?id2=<?php echo $row['slri_sht_p2_id'];?>">Delete</a>
		  </td>
		  <td style="text-align: center;"><?php echo $i;?></td>
		  <td style="text-align: left;"><?php echo $row['slri_sht_p2_nam'];?></td>
		  <td style="text-align: left;"><?php echo $row['slri_sht_p2_pos'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_code'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_sck'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_brth'];?></td>
		  <td style="text-align: right;"><?php echo $row['slri_sht_p2_slry'];?></td>
		  <td style="text-align: right;"><?php echo $row['slri_sht_p2_mslry'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_incr'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_mp'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_bk'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_wft'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_pain'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_scut'];?></td>
		  <td style="text-align: center;"><?php echo $row['slri_sht_p2_etp'];?></td>
		  <td style="text-align: right;"><?php echo $row['slri_sht_p2_bnk'];?></td>
		</tr>
		<?php } ?>
	</table>
	</div>
</body>
</html>
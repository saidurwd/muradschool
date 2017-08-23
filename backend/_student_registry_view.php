<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Student Registry Information</title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
	<style>
	#mycustomers2 {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		width: 100%;
		border-collapse: collapse;
	}

	#mycustomers2 td, #mycustomers2 th {
		font-size: 13px;
		border: 1px solid #98bf21;
		padding: 3px 3px 2px 3px;
	}
	#mycustomers2 tr td{
		
		
	}
	#mycustomers2 th {
		font-size: 1.1em;
		text-align: left;
		padding-top: 5px;
		padding-bottom: 4px;
		background-color: #A7C942;
		color: #ffffff;
	}

	#mycustomers2 tr.alt td {
		color: #000000;
		background-color: #EAF2D3;
	}
	#mycustomers2 input{font-size: 12px;}
	</style>
</head>
<body>
	<h2>Student Registry Information</h2>
	<div align="center">
		<p>You can add a new data in here...<a style="font-size:13px;" href="index.php?action=_student_registry_add">Add New</a></p>
		<table id="mycustomers2" width="" border="1" style="font-size: 12px;width: 1500px;background:#525252;">
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
				<th align="center">এডিট করুন/মুছে ফেলুন</th>
			</tr>
			<?php
				$i=0;
				$result = mysql_query("select * from std_registry" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($result)){
				$i++;
			?>	
			<tr>	
				<td style="width: 20px;"><?php echo $i;?></td>
				<td style="width: 200px;"><?php echo $row['std_reg_num'];?></td>
				<td style="width: 200px;"><?php echo $row['std_reg_father'];?></td>
				<td style="width: 200px;"><?php echo $row['std_reg_mother'];?></td>
				<td style="width: 420px;"><?php echo $row['std_reg_addrs'];?></td>
				<td style="width: 80px;"><?php echo $row['std_reg_dob'];?></td>
				<td style="width: 300px;"><?php echo $row['std_reg_instit'];?></td>
				<td style="width: 50px;"><?php echo $row['std_reg_passyear'];?></td>
				<td style="width: 50px;"><?php echo $row['std_reg_section'];?></td>
				<td style="width: 50px;"><?php echo $row['std_reg_roll'];?></td>
				<td style="width: 50px;"><?php echo $row['std_reg_resyear'];?></td>
				<td style="width: 50px;"><?php echo $row['std_reg_gpa'];?></td>
				<td style="width: 100px;"><?php echo $row['std_reg_admission'];?></td>
				<td style="width: 50px;"><?php echo $row['std_reg_sakha'];?></td>
				<td style="width: 50px;"><?php echo $row['std_reg_class'];?></td>
				<td style="width: 420px;"><?php echo $row['std_reg_subcode'];?></td>
				<td style="width: 50px;"><img src="upload/<?php echo $row['std_reg_photo'];?>" alt="" width="50px" height="50px" style="border:1px solid #333333;"/></td>
				<td style="width: 100px;">
					<a href="_student_registry_edit.php?id=<?php echo $row['std_reg_id'];?>">এডিট</a> | 
					<a onClick="return confirm_del();" href="_student_registry_del.php?id=<?php echo $row['std_reg_id'];?>">মুছুন</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		
	</div>
</body>
</html>
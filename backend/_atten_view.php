<?php 
include('dbconnect.php');
include('_admin_session.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<title>College</title>
		<script type="text/javascript">
			function confirm_del() {
				return confirm('Do you want to delete this data ?');
			}
		</script>
	</head>
	<body>
		<div>
			<center>
				<div class="container_12" id="ptintableDiv">
					<h3>দৈনিক উপস্থিতির বিবরণ</h3>
					<p><a style="margin-bottom: 10px; display: block; font-size: 15px;" href="index.php?action=_atten_add">Add new attendance data in here...</a></p>
					<div class="grid_8 height250" style="">
						<table style="border-collapse: collapse; color: #fff;" class="fancyTable" id="myTable01" cellpadding="2" cellspacing="1" border="1">
							<tr align="center">
								<td rowspan="3"><strong>তারিখ</strong></td>
								<td colspan="2" rowspan="2"><strong>শিক্ষক</strong></td>
								<td colspan="2" rowspan="2"><strong>কর্মচারী</strong></td>
								<td colspan="20"><strong>ছাত্রছাত্রী</strong></td>
								<td rowspan="3" colspan="5"><strong>এডিট / ডিলিট করুন</strong></td>
							</tr>
							<tr align="center">
								<td colspan="2">১ম</td>
								<td colspan="2">২য়</td>
								<td colspan="2">৩য়</td>
								<td colspan="2">৪র্থ</td>
								<td colspan="2">৫ম</td>
								<td colspan="2">৬ষ্ঠ</td>
								<td colspan="2">৭ম</td>
								<td colspan="2">৮ম</td>
								<td colspan="2">৯ম</td>
								<td colspan="2">১০ম</td>
							</tr>
							<tr>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
								<td>মোট</td>
								<td>উপস্থিত</td>
							</tr>
							<?php
								$i = 0;				
								$result= mysql_query("select * from atten_tbl order by at_id desc" ) or die (mysql_error());
								while ($row = mysql_fetch_array ($result)){
								$i++;
							?>
							<tr>
								<td><?php echo $row['at_date'];?></td>
								<td><?php echo $row['at_tec_all'];?></td>
								<td><?php echo $row['at_tec_atn'];?></td>
								<td><?php echo $row['at_stf_all'];?></td>
								<td><?php echo $row['at_stf_atn'];?></td>
								<td><?php echo $row['at_scl1_all'];?></td>
								<td><?php echo $row['at_scl1_atn'];?></td>
								<td><?php echo $row['at_scl2_all'];?></td>
								<td><?php echo $row['at_scl2_atn'];?></td>
								<td><?php echo $row['at_scl3_all'];?></td>
								<td><?php echo $row['at_scl3_atn'];?></td>
								<td><?php echo $row['at_scl4_all'];?></td>
								<td><?php echo $row['at_scl4_atn'];?></td>
								<td><?php echo $row['at_scl5_all'];?></td>
								<td><?php echo $row['at_scl5_atn'];?></td>
								<td><?php echo $row['at_scl6_all'];?></td>
								<td><?php echo $row['at_scl6_atn'];?></td>
								<td><?php echo $row['at_scl7_all'];?></td>
								<td><?php echo $row['at_scl7_atn'];?></td>
								<td><?php echo $row['at_scl8_all'];?></td>
								<td><?php echo $row['at_scl8_atn'];?></td>
								<td><?php echo $row['at_scl9_all'];?></td>
								<td><?php echo $row['at_scl9_atn'];?></td>
								<td><?php echo $row['at_scl10_all'];?></td>
								<td><?php echo $row['at_scl10_atn'];?></td>
								<td style="padding: 5px 10px;">
									<a href="_atten_edit.php?id=<?php echo $row['at_id'];?>">Edit</a>
								</td>
								<td style="padding: 5px 10px;">
									<a onClick="return confirm_del();" href="_atten_del.php?id=<?php echo $row['at_id'];?>">Delete</a>
								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</center>
		</div>
	</body>
</html>
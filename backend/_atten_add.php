<?php
ob_start(); 
include('dbconnect.php');
include('_admin_session.php');

if(isset($_POST['form1'])){
	$at_date = $_POST['at_date'];
	$at_tec_all = $_POST['at_tec_all'];
	$at_tec_atn = $_POST['at_tec_atn'];
	$at_stf_all = $_POST['at_stf_all'];
	$at_stf_atn = $_POST['at_stf_atn'];
	$at_scl1_all = $_POST['at_scl1_all'];
	$at_scl1_atn = $_POST['at_scl1_atn'];
	$at_scl2_all = $_POST['at_scl2_all'];
	$at_scl2_atn = $_POST['at_scl2_atn'];
	$at_scl3_all = $_POST['at_scl3_all'];
	$at_scl3_atn = $_POST['at_scl3_atn'];
	$at_scl4_all = $_POST['at_scl4_all'];
	$at_scl4_atn = $_POST['at_scl4_atn'];
	$at_scl5_all = $_POST['at_scl5_all'];
	$at_scl5_atn = $_POST['at_scl5_atn'];
	$at_scl6_all = $_POST['at_scl6_all'];
	$at_scl6_atn = $_POST['at_scl6_atn'];
	$at_scl7_all = $_POST['at_scl7_all'];
	$at_scl7_atn = $_POST['at_scl7_atn'];
	$at_scl8_all = $_POST['at_scl8_all'];
	$at_scl8_atn = $_POST['at_scl8_atn'];
	$at_scl9_all = $_POST['at_scl9_all'];
	$at_scl9_atn = $_POST['at_scl9_atn'];
	$at_scl10_all = $_POST['at_scl10_all'];
	$at_scl10_atn = $_POST['at_scl10_atn'];

	$result = mysql_query("insert into atten_tbl (at_date,at_tec_all,at_tec_atn,at_stf_all,at_stf_atn,at_scl1_all,at_scl1_atn,at_scl2_all,at_scl2_atn,at_scl3_all,at_scl3_atn,at_scl4_all,at_scl4_atn,at_scl5_all,at_scl5_atn,at_scl6_all,at_scl6_atn,at_scl7_all,at_scl7_atn,at_scl8_all,at_scl8_atn,at_scl9_all,at_scl9_atn,at_scl10_all,at_scl10_atn) values('$at_date','$at_tec_all','$at_tec_atn','$at_stf_all','$at_stf_atn','$at_scl1_all','$at_scl1_atn','$at_scl2_all','$at_scl2_atn','$at_scl3_all','$at_scl3_atn','$at_scl4_all','$at_scl4_atn','$at_scl5_all','$at_scl5_atn','$at_scl6_all','$at_scl6_atn','$at_scl7_all','$at_scl7_atn','$at_scl8_all','$at_scl8_atn','$at_scl9_all','$at_scl9_atn','$at_scl10_all','$at_scl10_atn')")or die(mysql_error());
	
	if ($result) {
		echo ("<p style='font-size:20px;'>Attendance Data input successfully</p>");
	} else {
		echo ("<p style='font-size:20px;'>Data input Failed</p>");
	}
}
//header("location: index.php?action=_stu_cls1_view");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<title>College</title>
	</head>
	<body>
		<div>
			<center>
				<form action="" method="post">
					<div class="container_12" id="ptintableDiv">
						<h3>দৈনিক উপস্থিতির বিবরণ</h3>
						<div class="grid_8 height250" style="">
							<table style="border-collapse: collapse;" class="fancyTable" id="myTable01" cellpadding="2" cellspacing="1" border="1">
								<tr align="center">
									<td rowspan="3">তারিখ</td>
									<td colspan="2" rowspan="2">শিক্ষক</td>
									<td colspan="2" rowspan="2">কর্মচারী</td>
									<td colspan="25"><strong>ছাত্রছাত্রী</strong></td>
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
								<tr>
									<td><input type="text" name="at_date" style="width:70px;" required /></td>
									<td><input type="text" name="at_tec_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_tec_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_stf_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_stf_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl1_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl1_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl2_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl2_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl3_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl3_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl4_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl4_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl5_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl5_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl6_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl6_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl7_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl7_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl8_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl8_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl9_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl9_atn" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl10_all" style="width:30px;" required /></td>
									<td><input type="text" name="at_scl10_atn" style="width:30px;" required /></td>
								</tr>
							</table>
						</div>
					</div>
					<input style="float:left;margin-top:10px;" type="submit" value="SAVE" name="form1" />
				</form>
			</center>
		</div>
	</body>
</html>              

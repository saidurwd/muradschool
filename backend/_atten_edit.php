<?php ob_start(); //error_reporting(0); ?>
<?php include('dbconnect.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php			
	$result= mysql_query("select * from hdr_tbl" ) or die (mysql_error());
	while ($row = mysql_fetch_array ($result)){
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Welcome to <?php echo $row['hdr_en'];?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<LINK href="css/c.css" type=text/css rel=stylesheet>

<script type="text/javascript" src="js/script.js"></script>
<?php 
	include"dbconnect.php";
	include"function.php";
	include('_admin_session.php');
?>
</head>
<body>
<div id="wrapper">
  <div id="logo">
    <h1><a style="margin-left: 10px; font-size: 35px;" href="index.php"><?php echo $row['hdr_bn'];?></a></h1>
  </div>
  <hr />
  <!-- end #logo -->
  <div id="header">
    <div id="menu">
      <ul>
        <li><a href="index.php" class="first">Home</a></li>
         <?php if(!empty($_SESSION['UserType'])){ ?>
        <li><a href="index.php?action=Logout">Logout</a></li>
        <?php } ?>
      </ul>
    </div>
    <!-- end #menu -->
    <div id="search">
      <form method="get" action="">
        <fieldset>
        <input type="text" name="s" id="search-text" size="15" />
        <input type="submit" id="search-submit" value="GO" />
        </fieldset>
      </form>
    </div>
    <!-- end #search -->
  </div>
  <!-- end #header -->
  <!-- end #header-wrapper -->
  <div id="page">
    <div id="page-bgtop">
      <div id="content">
        <div class="post">
		
<?php
if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
}
else{
	header('location: index.php');
}

$result = mysql_query("SELECT * FROM atten_tbl WHERE at_id = '$id'");
$row = mysql_fetch_assoc($result);
if (!$result) {
	die("Error: Data not found..");
}

$at_date = $row['at_date'];
$at_tec_all = $row['at_tec_all'];
$at_tec_atn = $row['at_tec_atn'];
$at_stf_all = $row['at_stf_all'];
$at_stf_atn = $row['at_stf_atn'];
$at_scl1_all = $row['at_scl1_all'];
$at_scl1_atn = $row['at_scl1_atn'];
$at_scl2_all = $row['at_scl2_all'];
$at_scl2_atn = $row['at_scl2_atn'];
$at_scl3_all = $row['at_scl3_all'];
$at_scl3_atn = $row['at_scl3_atn'];
$at_scl4_all = $row['at_scl4_all'];
$at_scl4_atn = $row['at_scl4_atn'];
$at_scl5_all = $row['at_scl5_all'];
$at_scl5_atn = $row['at_scl5_atn'];
$at_scl6_all = $row['at_scl6_all'];
$at_scl6_atn = $row['at_scl6_atn'];
$at_scl7_all = $row['at_scl7_all'];
$at_scl7_atn = $row['at_scl7_atn'];
$at_scl8_all = $row['at_scl8_all'];
$at_scl8_atn = $row['at_scl8_atn'];
$at_scl9_all = $row['at_scl9_all'];
$at_scl9_atn = $row['at_scl9_atn'];
$at_scl10_all = $row['at_scl10_all'];
$at_scl10_atn = $row['at_scl10_atn'];

if(isset($_POST['form1']))
{	
	$at_date_save = $_POST['at_date'];
	$at_tec_all_save = $_POST['at_tec_all'];
	$at_tec_atn_save = $_POST['at_tec_atn'];
	$at_stf_all_save = $_POST['at_stf_all'];
	$at_stf_atn_save = $_POST['at_stf_atn'];
	$at_scl1_all_save = $_POST['at_scl1_all'];
	$at_scl1_atn_save = $_POST['at_scl1_atn'];
	$at_scl2_all_save = $_POST['at_scl2_all'];
	$at_scl2_atn_save = $_POST['at_scl2_atn'];
	$at_scl3_all_save = $_POST['at_scl3_all'];
	$at_scl3_atn_save = $_POST['at_scl3_atn'];
	$at_scl4_all_save = $_POST['at_scl4_all'];
	$at_scl4_atn_save = $_POST['at_scl4_atn'];
	$at_scl5_all_save = $_POST['at_scl5_all'];
	$at_scl5_atn_save = $_POST['at_scl5_atn'];
	$at_scl6_all_save = $_POST['at_scl6_all'];
	$at_scl6_atn_save = $_POST['at_scl6_atn'];
	$at_scl7_all_save = $_POST['at_scl7_all'];
	$at_scl7_atn_save = $_POST['at_scl7_atn'];
	$at_scl8_all_save = $_POST['at_scl8_all'];
	$at_scl8_atn_save = $_POST['at_scl8_atn'];
	$at_scl9_all_save = $_POST['at_scl9_all'];
	$at_scl9_atn_save = $_POST['at_scl9_atn'];
	$at_scl10_all_save = $_POST['at_scl10_all'];
	$at_scl10_atn_save = $_POST['at_scl10_atn'];

	mysql_query("UPDATE atten_tbl SET at_date ='$at_date_save', at_tec_all ='$at_tec_all_save', at_tec_atn ='$at_tec_atn_save', at_stf_all ='$at_stf_all_save', at_stf_atn ='$at_stf_atn_save', at_scl1_all ='$at_scl1_all_save', at_scl1_atn ='$at_scl1_atn_save', at_scl2_all ='$at_scl2_all_save', at_scl2_atn ='$at_scl2_atn_save', at_scl3_all ='$at_scl3_all_save', at_scl3_atn ='$at_scl3_atn_save', at_scl4_all ='$at_scl4_all_save', at_scl4_atn ='$at_scl4_atn_save', at_scl5_all ='$at_scl5_all_save', at_scl5_atn ='$at_scl5_atn_save', at_scl6_all ='$at_scl6_all_save', at_scl6_atn ='$at_scl6_atn_save', at_scl7_all ='$at_scl7_all_save', at_scl7_atn ='$at_scl7_atn_save', at_scl8_all ='$at_scl8_all_save', at_scl8_atn ='$at_scl8_atn_save', at_scl9_all ='$at_scl9_all_save', at_scl9_atn ='$at_scl9_atn_save', at_scl10_all ='$at_scl10_all_save', at_scl10_atn ='$at_scl10_atn_save' WHERE at_id = '$id'") or die(mysql_error()); 
	
	header("location: index.php?action=_atten_view");
				
}

?>

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
								<td><input type="text" name="at_date" value="<?php echo $at_date; ?>" style="width:70px;" /></td>
								<td><input type="text" name="at_tec_all" value="<?php echo $at_tec_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_tec_atn" value="<?php echo $at_tec_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_stf_all" value="<?php echo $at_stf_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_stf_atn" value="<?php echo $at_stf_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl1_all" value="<?php echo $at_scl1_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl1_atn" value="<?php echo $at_scl1_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl2_all" value="<?php echo $at_scl2_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl2_atn" value="<?php echo $at_scl2_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl3_all" value="<?php echo $at_scl3_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl3_atn" value="<?php echo $at_scl3_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl4_all" value="<?php echo $at_scl4_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl4_atn" value="<?php echo $at_scl4_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl5_all" value="<?php echo $at_scl5_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl5_atn" value="<?php echo $at_scl5_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl6_all" value="<?php echo $at_scl6_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl6_atn" value="<?php echo $at_scl6_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl7_all" value="<?php echo $at_scl7_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl7_atn" value="<?php echo $at_scl7_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl8_all" value="<?php echo $at_scl8_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl8_atn" value="<?php echo $at_scl8_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl9_all" value="<?php echo $at_scl9_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl9_atn" value="<?php echo $at_scl9_atn;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl10_all" value="<?php echo $at_scl10_all;?>" style="width:30px;" /></td>
								<td><input type="text" name="at_scl10_atn" value="<?php echo $at_scl10_atn;?>" style="width:30px;" /></td>
							</tr>
						</table>
					</div>
				</div>
				<td><input style="float:left;margin-top:10px;" type="submit" value="Update info" name="form1"/></td>
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				</form>
			</center>
		</div>
        </div>
      </div>
      <!-- end #content -->
	  
	  <?php include("user_sidebar.php"); ?>

      <div style="clear: both;">&nbsp;</div>
    </div>
  </div>
  <!-- end #page -->
  <div id="footer-bgcontent">
    <div id="footer">
      <p>Copyright &copy; 2015 Momtaj Trading(Pvt.)Ltd. All rights reserved.</p>
    </div>
  </div>
  <!-- end #footer -->
</div>
<?php } ?>
</body>
</html>



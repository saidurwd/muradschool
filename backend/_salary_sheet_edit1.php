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
if(isset($_REQUEST['id1'])) {
	$id1 = $_REQUEST['id1'];
}
else{
	header('location: index.php');
}

$result1 = mysql_query("SELECT * FROM slri_sht_p1 WHERE slri_sht_p1_id = '$id1'");
$row1 = mysql_fetch_assoc($result1);
if (!$result1) {
	die("Error: Data not found..");
}
$slri_sht_p1_insnam = $row1['slri_sht_p1_insnam'];
$slri_sht_p1_po = $row1['slri_sht_p1_po'];
$slri_sht_p1_dist = $row1['slri_sht_p1_dist'];
$slri_sht_p1_srkno = $row1['slri_sht_p1_srkno'];
$slri_sht_p1_date = $row1['slri_sht_p1_date'];
$slri_sht_p1_yar = $row1['slri_sht_p1_yar'];
$slri_sht_p1_month = $row1['slri_sht_p1_month'];
$slri_sht_p1_bank = $row1['slri_sht_p1_bank'];

if(isset($_POST['form1'])){	
	$slri_sht_p1_insnam_save = $_POST['slri_sht_p1_insnam'];
	$slri_sht_p1_po_save = $_POST['slri_sht_p1_po'];
	$slri_sht_p1_dist_save = $_POST['slri_sht_p1_dist'];
	$slri_sht_p1_srkno_save = $_POST['slri_sht_p1_srkno'];
	$slri_sht_p1_date_save = $_POST['slri_sht_p1_date'];
	$slri_sht_p1_yar_save = $_POST['slri_sht_p1_yar'];
	$slri_sht_p1_month_save = $_POST['slri_sht_p1_month'];
	$slri_sht_p1_bank_save = $_POST['slri_sht_p1_bank'];

	mysql_query("UPDATE slri_sht_p1 SET slri_sht_p1_insnam = '$slri_sht_p1_insnam_save', slri_sht_p1_po = '$slri_sht_p1_po_save', slri_sht_p1_dist = '$slri_sht_p1_dist_save', slri_sht_p1_srkno = '$slri_sht_p1_srkno_save', slri_sht_p1_date = '$slri_sht_p1_date_save', slri_sht_p1_yar = '$slri_sht_p1_yar_save', slri_sht_p1_month = '$slri_sht_p1_month_save', slri_sht_p1_bank = '$slri_sht_p1_bank_save' WHERE slri_sht_p1_id = '$id1'") or die(mysql_error()); 
	
	header("location: index.php?action=_salary_sheet_view");
				
}

?>
<div align="center">
	<form action="" method="post">
		<table id="mycustomers" width="960" border="1" style="font-size: 12px;">
		  <tr>
			<td>
				<p>
				শিক্ষা প্রতিষ্ঠানের নামঃ <input style="width: 300px;" type="text" name="slri_sht_p1_insnam" value="<?php echo $slri_sht_p1_insnam; ?>" />। <br />
				ডাকঘরঃ <input style="width: 100px;" type="text" name="slri_sht_p1_po" value="<?php echo $slri_sht_p1_po; ?>" />। 
				জেলাঃ <input style="width: 100px;" type="text" name="slri_sht_p1_dist" value="<?php echo $slri_sht_p1_dist; ?>" />। <br />
				স্মারক নং- <input style="width: 300px;" type="text" name="slri_sht_p1_srkno" value="<?php echo $slri_sht_p1_srkno; ?>" />। 
				তারিখঃ <input style="width: 100px;" type="text" name="slri_sht_p1_date" value="<?php echo $slri_sht_p1_date; ?>" /> 
				</p>
				<p>
				শিক্ষক ও কর্মচারীদের <input style="width: 50px;" type="text" name="slri_sht_p1_yar" value="<?php echo $slri_sht_p1_yar; ?>" /> 
				সালের <input style="width: 100px;" type="text" name="slri_sht_p1_month" value="<?php echo $slri_sht_p1_month; ?>" /> মাসের বেতন ভাতাদির সরকারি অংশ প্রাপ্তির বিবরণী। <br />
				ব্যাংকের নামঃ <input style="width: 300px;" type="text" name="slri_sht_p1_bank" value="<?php echo $slri_sht_p1_bank; ?>" />
				</p>
				<p><input type="submit" value="Update info" name="form1"/></p>
			</td>
		  </tr>
		</table>
		<input type="hidden" name="id1" value="<?php echo $id1; ?>" />
	</form>
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
      <p>Copyright &copy; 2015 Momtaj Trading(Pvt.)Ltd. All rights reserved. &nbsp;&nbsp;Developed By: <a href="http://mdhafiz.net63.net/" target="_blank">MD.Hafiz</a></p>
    </div>
  </div>
  <!-- end #footer -->
</div>
<?php } ?>
</body>
</html>



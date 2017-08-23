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
if(isset($_REQUEST['id2'])) {
	$id2 = $_REQUEST['id2'];
}
else{
	header('location: index.php');
}

$result2 = mysql_query("SELECT * FROM slri_sht_p2 WHERE slri_sht_p2_id = '$id2'");
$row2 = mysql_fetch_assoc($result2);
if (!$result2) {
	die("Error: Data not found..");
}
$slri_sht_p2_nam = $row2['slri_sht_p2_nam'];
$slri_sht_p2_pos = $row2['slri_sht_p2_pos'];
$slri_sht_p2_code = $row2['slri_sht_p2_code'];
$slri_sht_p2_sck = $row2['slri_sht_p2_sck'];
$slri_sht_p2_brth = $row2['slri_sht_p2_brth'];
$slri_sht_p2_slry = $row2['slri_sht_p2_slry'];
$slri_sht_p2_mslry = $row2['slri_sht_p2_mslry'];
$slri_sht_p2_incr = $row2['slri_sht_p2_incr'];
$slri_sht_p2_mp = $row2['slri_sht_p2_mp'];
$slri_sht_p2_bk = $row2['slri_sht_p2_bk'];
$slri_sht_p2_wft = $row2['slri_sht_p2_wft'];
$slri_sht_p2_pain = $row2['slri_sht_p2_pain'];
$slri_sht_p2_scut = $row2['slri_sht_p2_scut'];
$slri_sht_p2_etp = $row2['slri_sht_p2_etp'];
$slri_sht_p2_bnk = $row2['slri_sht_p2_bnk'];

if(isset($_POST['form2'])){	
	$slri_sht_p2_nam_save = $_POST['slri_sht_p2_nam'];
	$slri_sht_p2_pos_save = $_POST['slri_sht_p2_pos'];
	$slri_sht_p2_code_save = $_POST['slri_sht_p2_code'];
	$slri_sht_p2_sck_save = $_POST['slri_sht_p2_sck'];
	$slri_sht_p2_brth_save = $_POST['slri_sht_p2_brth'];
	$slri_sht_p2_slry_save = $_POST['slri_sht_p2_slry'];
	$slri_sht_p2_mslry_save = $_POST['slri_sht_p2_mslry'];
	$slri_sht_p2_incr_save = $_POST['slri_sht_p2_incr'];
	$slri_sht_p2_mp_save = $_POST['slri_sht_p2_mp'];
	$slri_sht_p2_bk_save = $_POST['slri_sht_p2_bk'];
	$slri_sht_p2_wft_save = $_POST['slri_sht_p2_wft'];
	$slri_sht_p2_pain_save = $_POST['slri_sht_p2_pain'];
	$slri_sht_p2_scut_save = $_POST['slri_sht_p2_scut'];
	$slri_sht_p2_etp_save = $_POST['slri_sht_p2_etp'];
	$slri_sht_p2_bnk_save = $_POST['slri_sht_p2_bnk'];

	mysql_query("UPDATE slri_sht_p2 SET slri_sht_p2_nam = '$slri_sht_p2_nam_save', slri_sht_p2_pos = '$slri_sht_p2_pos_save', slri_sht_p2_code = '$slri_sht_p2_code_save', slri_sht_p2_sck = '$slri_sht_p2_sck_save', slri_sht_p2_brth = '$slri_sht_p2_brth_save', slri_sht_p2_slry = '$slri_sht_p2_slry_save', slri_sht_p2_mslry = '$slri_sht_p2_mslry_save', slri_sht_p2_incr = '$slri_sht_p2_incr_save', slri_sht_p2_mp = '$slri_sht_p2_mp_save', slri_sht_p2_bk = '$slri_sht_p2_bk_save', slri_sht_p2_wft = '$slri_sht_p2_wft_save', slri_sht_p2_pain = '$slri_sht_p2_pain_save', slri_sht_p2_scut = '$slri_sht_p2_scut_save', slri_sht_p2_etp = '$slri_sht_p2_etp_save', slri_sht_p2_bnk = '$slri_sht_p2_bnk_save' WHERE slri_sht_p2_id = '$id2'") or die(mysql_error()); 
	
	header("location: index.php?action=_salary_sheet_view");
				
}

?>

<div align="center">
	<form action="" method="post">
	  <table id="mycustomers" width="960" border="1" style="font-size: 12px;background-color:#525252;">
		<tr>
		  <td width=""><div align="center">নাম</div></td>
		  <td width=""><div align="center">পদবী</div></td>
		  <td width=""><div align="center">কোড নং</div></td>
		  <td width=""><div align="center">সূচক সংখ্যা</div></td>
		  <td width="80"><div align="center">জন্ম তারিখ</div></td>
		  <td width=""><div align="center">বেতন</div></td>
		  <td width="90"><div align="center">মাসিক মুল বেতন, আবাসিক ভাতা, মেডিকেল ভাতা ও মহাঘ ভাতা</div></td>
		  <td width=""><div align="center">ই্নক্রিমেন্ট</div></td>
		  <td width=""><div align="center">এক মাসের মোট প্রাপ্য</div></td>
		  <td width=""><div align="center">বকেয়া</div></td>
		  <td width=""><div align="center">ওয়েল ফেয়ার ট্রাস্ট ফান্ড</div></td>
		  <td width=""><div align="center">অবসর সুবিধা</div></td>
		  <td width=""><div align="center">বেতন কর্তন</div></td>
		  <td width=""><div align="center">অবশিষ্ট মোট প্রাপ্য</div></td>
		  <td width=""><div align="center">ব্যাংক</div></td>
		</tr>
		<tr>
		  <td><input style="width:160px;text-align: center;" name="slri_sht_p2_nam" type="text" value="<?php echo $slri_sht_p2_nam; ?>" /></td>
		  <td><input style="width:80px;text-align: left;" name="slri_sht_p2_pos" type="text" value="<?php echo $slri_sht_p2_pos; ?>" /></td>
		  <td><input style="width:20px;text-align: left;" name="slri_sht_p2_code" type="text" value="<?php echo $slri_sht_p2_code; ?>" /></td>
		  <td><input style="width:55px;text-align: center;" name="slri_sht_p2_sck" type="text" value="<?php echo $slri_sht_p2_sck; ?>" /></td>
		  <td><input style="width:75px;text-align: center;" name="slri_sht_p2_brth" type="text" value="<?php echo $slri_sht_p2_brth; ?>" /></td>
		  <td><input style="width:70px;text-align: center;" name="slri_sht_p2_slry" type="text" value="<?php echo $slri_sht_p2_slry; ?>" /></td>
		  <td><input style="width:90px;text-align: right;" name="slri_sht_p2_mslry" type="text" value="<?php echo $slri_sht_p2_mslry; ?>" /></td>
		  <td><input style="width:40px;text-align: right;" name="slri_sht_p2_incr" type="text" value="<?php echo $slri_sht_p2_incr; ?>" /></td>
		  <td><input style="width:70px;text-align: center;" name="slri_sht_p2_mp" type="text" value="<?php echo $slri_sht_p2_mp; ?>" /></td>
		  <td><input style="width:50px;text-align: center;" name="slri_sht_p2_bk" type="text" value="<?php echo $slri_sht_p2_bk; ?>" /></td>
		  <td><input style="width:70px;text-align: center;" name="slri_sht_p2_wft" type="text" value="<?php echo $slri_sht_p2_wft; ?>" /></td>
		  <td><input style="width:50px;text-align: center;" name="slri_sht_p2_pain" type="text" value="<?php echo $slri_sht_p2_pain; ?>" /></td>
		  <td><input style="width:50px;text-align: center;" name="slri_sht_p2_scut" type="text" value="<?php echo $slri_sht_p2_scut; ?>" /></td>
		  <td><input style="width:100px;text-align: center;" name="slri_sht_p2_etp" type="text" value="<?php echo $slri_sht_p2_etp; ?>" /></td>
		  <td><input style="width:70px;text-align: right;" name="slri_sht_p2_bnk" type="text" value="<?php echo $slri_sht_p2_bnk; ?>" /></td>
		</tr>
	  </table>
	  <p><input type="submit" value="Update info" name="form2"/></p>
	  <input type="hidden" name="id2" value="<?php echo $id2; ?>" />
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



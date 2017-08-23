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

$result = mysql_query("SELECT * FROM mb_tbl WHERE mb_id = '$id'");
$row = mysql_fetch_assoc($result);
if (!$result) {
	die("Error: Data not found..");
}

$mb_bkash = $row['mb_bkash'];
$mb_dbbl = $row['mb_dbbl'];

if(isset($_POST['form1']))
{	
	$mb_bkash_save = $_POST['mb_bkash'];
	$mb_dbbl_save = $_POST['mb_dbbl'];

	mysql_query("UPDATE mb_tbl SET mb_bkash ='$mb_bkash_save', mb_dbbl ='$mb_dbbl_save' WHERE mb_id = '$id'") or die(mysql_error()); 
	
	header("location: index.php?action=_mobile_banking_view");
				
}

?>
	
<form action="" method="post"  enctype="multipart/form-data">
	<h4>প্রতিষ্ঠানের মোবাইল ব্যাংকিং তথ্য আপডেট করুন</h4>
	<table>
		<tr>
			<td>bKash নাম্বার: </td>
			<td><input type="text" name="mb_bkash" value="<?php echo $mb_bkash; ?>" required /></td>
		</tr>
		<tr>
			<td>DBBL নাম্বার : </td>
			<td><input type="text" name="mb_dbbl" value="<?php echo $mb_dbbl; ?>" required /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="আপডেট" name="form1"/></td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
</form>
<br />
<h2>প্রতিষ্ঠানের মোবাইল ব্যাংকিং নাম্বার সমূহ </h2>
<table border="1" id="mytable">
	<tr>
		<th>bKash</th>
		<th>DBBL</th>
		<th>নিয়ন্ত্রণ করুন</th>
	</tr>
	<?php				
		$result= mysql_query("select * from mb_tbl" ) or die (mysql_error());
		while ($row = mysql_fetch_array ($result)){
	?>
	<tr>
		<td><?php echo $row['mb_bkash'];?></td>
		<td><?php echo $row['mb_dbbl'];?></td>
		<td>
			<a href="_mobile_banking_edit.php?id=<?php echo $row['mb_id'];?>">এডিট </a>
		</td>
	</tr>
	<?php } ?>
</table>


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



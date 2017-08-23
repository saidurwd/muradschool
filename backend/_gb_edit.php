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

$result = mysql_query("SELECT * FROM gb_tbl WHERE gb_id = '$id'");
$row = mysql_fetch_assoc($result);
if (!$result) {
	die("Error: Data not found..");
}

$gb_name = $row['gb_name'];
$gb_pos = $row['gb_pos'];
$gb_adrs = $row['gb_adrs'];
$gb_year = $row['gb_year'];
$gb_cmt = $row['gb_cmt'];

if(isset($_POST['form1']))
{	
	$gb_name_save = $_POST['gb_name'];
	$gb_pos_save = $_POST['gb_pos'];
	$gb_adrs_save = $_POST['gb_adrs'];
	$gb_year_save = $_POST['gb_year'];
	$gb_cmt_save = $_POST['gb_cmt'];

	mysql_query("UPDATE gb_tbl SET gb_name ='$gb_name_save', gb_pos ='$gb_pos_save', gb_adrs ='$gb_adrs_save', gb_year ='$gb_year_save', gb_cmt ='$gb_cmt_save' WHERE gb_id = '$id'") or die(mysql_error()); 
	
	header("location: index.php?action=_gb_view");
				
}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Update GB List</h4>
	<table>
		<tr>
			<td>GB Name: </td>
			<td><input type="text" name="gb_name" value="<?php echo $gb_name; ?>" required /></td>
		</tr>
		<tr>
			<td>GB Position: </td>
			<td><input type="text" name="gb_pos" value="<?php echo $gb_pos; ?>" required /></td>
		</tr>
		<tr>
			<td>GB Address: </td>
			<td><input type="text" name="gb_adrs" value="<?php echo $gb_adrs; ?>" required /></td>
		</tr>
		<tr>
			<td>GB Duration: </td>
			<td><input type="text" name="gb_year" value="<?php echo $gb_year; ?>" /></td>
		</tr>
		<tr>
			<td>GB Comment: </td>
			<td><input type="text" name="gb_cmt" value="<?php echo $gb_cmt; ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update info" name="form1"/></td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
</form>
		  
		  
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



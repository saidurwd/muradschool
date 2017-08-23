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

$result = mysql_query("SELECT * FROM lib_tbl WHERE lib_id = '$id'");
$row = mysql_fetch_assoc($result);
if (!$result) {
	die("Error: Data not found..");
}

$lib_id_no = $row['lib_id_no'];
$lib_isbn = $row['lib_isbn'];
$lib_pub = $row['lib_pub'];
$lib_title = $row['lib_title'];
$lib_desc = $row['lib_desc'];
$lib_sd = $row['lib_sd'];

if(isset($_POST['form1']))
{	
	$lib_id_no_save = $_POST['lib_id_no'];
	$lib_isbn_save = $_POST['lib_isbn'];
	$lib_pub_save = $_POST['lib_pub'];
	$lib_title_save = $_POST['lib_title'];
	$lib_desc_save = $_POST['lib_desc'];
	$lib_sd_save = $_POST['lib_sd'];

	mysql_query("UPDATE lib_tbl SET lib_id_no ='$lib_id_no_save', lib_isbn ='$lib_isbn_save', lib_pub ='$lib_pub_save', lib_title ='$lib_title_save', lib_desc ='$lib_desc_save', lib_sd ='$lib_sd_save'  WHERE lib_id = '$id'") or die(mysql_error()); 
	
	header("location: index.php?action=_lib_view");
				
}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Update your book information</h4>
	<table>
		<tr>
			<td>ID: </td>
			<td><input type="text" name="lib_id_no" value="<?php echo $lib_id_no; ?>" /></td>
		</tr>
		<tr>
			<td>ISBN: </td>
			<td><input type="text" name="lib_isbn" value="<?php echo $lib_isbn; ?>" required /></td>
		</tr>
		<tr>
			<td>Publisher: </td>
			<td><input type="text" name="lib_pub" value="<?php echo $lib_pub; ?>" required /></td>
		</tr>
		<tr>
			<td>Title: </td>
			<td><input type="text" name="lib_title" value="<?php echo $lib_title; ?>" required /></td>
		</tr>
		<tr>
			<td>Description: </td>
			<td><textarea name="lib_desc" id="" cols="30" rows="10"><?php echo $lib_desc; ?></textarea></td>
		</tr>
		<tr>
			<td>Short Note: </td>
			<td><input type="text" name="lib_sd" value="<?php echo $lib_sd; ?>" required /></td>
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



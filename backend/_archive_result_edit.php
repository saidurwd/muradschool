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

$result = mysql_query("SELECT * FROM arch_exm WHERE arch_exm_id = '$id'");
$row = mysql_fetch_assoc($result);
if (!$result) {
	die("Error: Data not found..");
}
$arch_exm_title = $row['arch_exm_title'];
$arch_exm_grp = $row['arch_exm_grp'];
$arch_exm_pass = $row['arch_exm_pass'];
$arch_exm_regu = $row['arch_exm_regu'];
$arch_exm_iregu = $row['arch_exm_iregu'];

if(isset($_POST['form1']))
{	
	$arch_exm_title_save = $_POST['arch_exm_title'];
	$arch_exm_grp_save = $_POST['arch_exm_grp'];
	$arch_exm_pass_save = $_POST['arch_exm_pass'];
	$arch_exm_regu_save = $_POST['arch_exm_regu'];
	$arch_exm_iregu_save = $_POST['arch_exm_iregu'];

	mysql_query("UPDATE arch_exm SET arch_exm_title ='$arch_exm_title_save', arch_exm_grp ='$arch_exm_grp_save', arch_exm_pass ='$arch_exm_pass_save', arch_exm_regu ='$arch_exm_regu_save', arch_exm_iregu ='$arch_exm_iregu_save'  WHERE arch_exm_id = '$id'") or die(mysql_error()); 
	
	header("location: index.php?action=_archive_result_view");
				
}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Update Archive Public Exam Result</h4>
	<table>
			<tr>
				<td>Exam Title: <input type="text" name="arch_exm_title" value="<?php echo $arch_exm_title; ?>" required /></td>
			</tr>
			<tr>
				<td>Group: <input type="text" name="arch_exm_grp" value="<?php echo $arch_exm_grp; ?>" required /></td>
			</tr>
			<tr>
				<td>
					<p>Passing student Roll.no: </p>
					<textarea name="arch_exm_pass" cols="80" rows="10" required><?php echo $arch_exm_pass; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<p>Considered: </p>
					Regular student Roll.no: <textarea name="arch_exm_regu" cols="80" rows="5" required><?php echo $arch_exm_regu; ?></textarea>
					Irregular student Roll.no: <textarea name="arch_exm_iregu" cols="80" rows="5" required><?php echo $arch_exm_iregu; ?></textarea>
				</td>
			</tr>
		</table>
		<input style="float:left;margin-top:10px;" type="submit" value="Update" name="form1" />
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



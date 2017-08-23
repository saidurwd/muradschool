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

$result = mysql_query("SELECT * FROM accounts WHERE acc_id = '$id'");
$row = mysql_fetch_assoc($result);
if (!$result) {
	die("Error: Data not found..");
}

$acc_date = $row['acc_date'];
$acc_desc = $row['acc_desc'];
$acc_amo = $row['acc_amo'];
$acc_dr_cr = $row['acc_dr_cr'];
$acc_total = $row['acc_total'];

if(isset($_POST['form1']))
{	
	$acc_date_save = $_POST['acc_date'];
	$acc_desc_save = $_POST['acc_desc'];
	$acc_amo_save = $_POST['acc_amo'];
	$acc_dr_cr_save = $_POST['acc_dr_cr'];
	$acc_total_save = $_POST['acc_total'];

	mysql_query("UPDATE accounts SET acc_date ='$acc_date_save', acc_desc ='$acc_desc_save', acc_amo ='$acc_amo_save', acc_dr_cr ='$acc_dr_cr_save',acc_total ='$acc_total_save' WHERE acc_id = '$id'") or die(mysql_error()); 
	
	header("location: index.php?action=_accounts_view");
				
}

?>
	
<form action="" method="post"  enctype="multipart/form-data">
	<h4>একাউন্টস আপডেট</h4>
	<table>
		<tr>
			<td>তারিখ: </td>
			<td><input type="text" name="acc_date" value="<?php echo $acc_date; ?>" required /></td>
		</tr>
		<tr>
			<td>টাকার বিবরণ : </td>
			<td><input type="text" name="acc_desc" value="<?php echo $acc_desc; ?>" required /></td>
		</tr>
		<tr>
			<td>পরিমান: </td>
			<td><input type="text" name="acc_amo" value="<?php echo $acc_amo; ?>" required /></td>
		</tr>
		<tr>
			<td>জমা/ খরচ: </td>
			<td>
				<select name="acc_dr_cr" id="">
					<option value="<?php echo $acc_dr_cr; ?>"><?php echo $acc_dr_cr; ?></option>
					<option value="জমা">জমা</option>
					<option value="খরচ">খরচ</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>মোট পরিমাণ: </td>
			<td><input type="text" name="acc_total" value="<?php echo $acc_total; ?>" required /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update info" name="form1"/></td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
</form>
<br />
<h2>সর্বশেষ টাকার পরিমানঃ  </h2>
<table border="1" id="mytable">
	<tr>
		<th>ক্রমিক নং</th>
		<th>তারিখ</th>
		<th>টাকার বিবরণ</th>
		<th>পরিমান</th>
		<th>জমা/ খরচ</th>
		<th>মোট পরিমাণ</th>
		<th>নিয়ন্ত্রণ করুন</th>
	</tr>
	<?php
		$i = 0;				
		$result= mysql_query("select * from accounts" ) or die (mysql_error());
		while ($row = mysql_fetch_array ($result)){
		$i++;
	?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $row['acc_date'];?></td>
		<td><?php echo $row['acc_desc'];?></td>
		<td><?php echo $row['acc_amo'];?>/=</td>
		<td><?php echo $row['acc_dr_cr'];?></td>
		<td><?php echo $row['acc_total'];?>/=</td>
		<td>
			<a href="_accounts_edit.php?id=<?php echo $row['acc_id'];?>">এডিট </a> | 
			<a onClick="return confirm_del();" href="_accounts_del.php?id=<?php echo $row['acc_id'];?>">ডিলিট </a>
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



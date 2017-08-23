<?php 
ob_start();
error_reporting(0);
session_start();
include('dbconnect.php');
//include('_girls_session.php');

?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>Girls student Information</title>
</head>
<body bgcolor="#CCCCCC">
  <div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
     </div>
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
	<div align="center"> 
		<?PHP include("pdf/head.php"); ?>
		<?php include("pdf/motionmenu.php"); ?>

		<?php //print_r($_SESSION); ?>
		<?php if(empty($_SESSION['userName'])){ ?>
		
		<?php
		if($_REQUEST['submitForm']=='Login'){
		$query = mysql_query("SELECT * FROM girlsuser WHERE userName='".$_REQUEST['userName']."' && Password= '".md5($_REQUEST['Password'])."' ");
		$row = mysql_fetch_assoc($query);
		$numrows = mysql_num_rows($query);
		//print $numrows;
			if($numrows>=1){
			$_SESSION['userName'] = $row['userName'];
			$_SESSION['UserType'] = $row['UserType'];
			$_SESSION['Email'] = $row['Email'];
			$_SESSION['Name'] = $row['Name'];
			$_SESSION['userID'] = $row['userID'];
			header('location: _girls_student_page_view.php');
			} else {
			print '<h3 style="color:#FF0000; padding:20px 0px 20px 0px; font-size:15px; font-weight:bold; text-align:center;">আপনি ভুল লগিন নেম অথবা পাসওয়াড ব্যবহার করছেন, দয়া করে সঠিকটি ব্যবহার করুন</h3>';
			}
		}
		?>

		<form action="" method="post" onsubmit="return checkLogin();">
		<h2>Girls User Login Page</h2><br />
		<table width="400" border="1" cellspacing="0" cellpadding="4">
		  <tr>
			<td><strong>Username</strong></td>
			<td><input type="text" name="userName" id="userName" value="" /></td>
		  </tr>
		  <tr>
			<td><strong>Password</strong></td>
			<td><input type="password" name="Password" id="Password" value="" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submitForm" value="Login" /></td>
		  </tr>
		</table>
		</form>
		<?php } else{
			header('location: _girls_student_page_view.php');
		} ?>

	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>


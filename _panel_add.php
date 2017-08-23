<?php include('dbconnect.php'); ?>
<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>Panel</title>
<script type="text/javascript" src="admin/core/ckeditor.js"></script>
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
		<div class="maincontent">
			<h2>Public exam/Student/Guardian Panel: </h2>
			<form action="" method="post">
				<table style="width: 800px;">
					<?php
						session_start();
						
						if(isset($_POST['form1'])){
						
							if(isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"])
							{
								$pnl_nam = $_POST['pnl_nam'];
								$pnl_email = $_POST['pnl_email'];
								$pnl_list = $_POST['pnl_list'];
								$pnl_title = $_POST['pnl_title'];
								$pnl_desc = $_POST['pnl_desc'];
								$pnl_date = $_POST['pnl_date'];
								
								$result = mysql_query("insert into pnl_tbl (pnl_nam, pnl_email, pnl_list, pnl_title, pnl_desc, pnl_date) values('$pnl_nam','$pnl_email','$pnl_list','$pnl_title','$pnl_desc','$pnl_date')")or die(mysql_error());
								
								echo ("<p style='font-size:20px;color:green;'>Thank you $pnl_nam. Your blog writing has been input successfully.");
							}
							else
							{
								//die("Wrong Code Entered");
								echo ("<p style='font-size:20px;color:red;'>Wrong Captcha Code Entered</p>");
							}
						
						}
						//header("location: index.php?action=_stu_ssc1_view");
					?>
					
					<tr>
						<td>Name: </td>
						<td><input style="width: 330px;" type="text" name="pnl_nam" placeholder="ex: Muraduzzaman" required /></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input style="width: 330px;" type="text" name="pnl_email" placeholder="ex: muradm4@mail.com" required /></td>
					</tr>
					<tr>
						<td>Panel List: </td>
						<td>
							<select name="pnl_list" id="">
								<option value="--Select--">--Select A Option--</option>
								<option value="Public Exam Panel">Public Exam Panel</option>
								<option value="Student Panel">Student Panel</option>
								<option value="Guardian Panel">Guardian Panel</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Blog Title: </td>
						<td><input style="width: 330px;" type="text" name="pnl_title" placeholder="ex: Lorem ipsum dolor " required /></td>
					</tr>
					<tr>
						<td>Blog Details: </td>
						<td><textarea name="pnl_desc" id="hist_text" cols="60" rows="10" placeholder="ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud" required></textarea></td>
					</tr>
					<tr>
						<td>Date: </td>
						<td><input style="width: 330px;" type="text" name="pnl_date" placeholder="ex: 12/11/2015 " required /></td>
					</tr>
					<script>
						CKEDITOR.replace( 'hist_text' );
					</script>
					<tr>
						<td>Enter this Code: </td>
						<td><input name="captcha" type="text"></td>
						<td><img style="margin-left: -540px;" src="_captcha.php" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input style="width: 100px; font-size: 16px; padding: 2px 7px;" type="submit" value="Submit" name="form1"/></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

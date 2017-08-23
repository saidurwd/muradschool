<?php 
ob_start();
include('dbconnect.php'); 
?> 
<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>School</title>
</head>
<body bgcolor="#FFFFFF">
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
			<h2>Complain input page: </h2>
			<form action="" method="post">
				<table style="width: 800px;">
					<?php
						session_start();
						
						if(isset($_POST['form1'])){
						
							if(isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"])
							{
								$compln_st_nam = $_POST['compln_st_nam'];
								$compln_fath_nam = $_POST['compln_fath_nam'];
								$compln_cls = $_POST['compln_cls'];
								$compln_grp = $_POST['compln_grp'];
								$compln_yer = $_POST['compln_yer'];
								$compln_title = $_POST['compln_title'];
								$compln_desc = $_POST['compln_desc'];
								$compln_date = $_POST['compln_date'];
								
								$result = mysql_query("insert into compln_tbl (compln_st_nam, compln_fath_nam, compln_cls, compln_grp, compln_yer, compln_title, compln_desc, compln_date) values('$compln_st_nam','$compln_fath_nam','$compln_cls','$compln_grp','$compln_yer','$compln_title','$compln_desc','$compln_date')")or die(mysql_error());
								
								echo ("<p style='font-size:20px;color:green;'>Thank you $compln_st_nam. Your complain of $compln_title has been input successfully. <br />We will touch you soon.</p>");
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
						<td>Student Name: </td>
						<td><input style="width: 330px;" type="text" name="compln_st_nam" placeholder="ex: Abdur Salam" required /></td>
					</tr>
					<tr>
						<td>Father's name: </td>
						<td><input style="width: 330px;" type="text" name="compln_fath_nam" placeholder="ex: Abdur Rahman" required /></td>
					</tr>
					<tr>
						<td>Class: </td>
						<td><input style="width: 330px;" type="text" name="compln_cls" placeholder="ex: 10" required /></td>
					</tr>
					<tr>
						<td>Group: </td>
						<td><input style="width: 330px;" type="text" name="compln_grp" placeholder="ex: Science" required /></td>
					</tr>
					<tr>
						<td>Year: </td>
						<td><input style="width: 330px;" type="text" name="compln_yer" placeholder="ex: 2015" required /></td>
					</tr>
					<tr>
						<td>Complain Title: </td>
						<td><input style="width: 330px;" type="text" name="compln_title" placeholder="ex: Lorem ipsum dolor" required /></td>
					</tr>
					<tr>
						<td>Complain Description: </td>
						<td><textarea name="compln_desc" id="" cols="60" rows="10" placeholder="ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud" required></textarea></td>
					</tr>
					<tr>
						<td>Date: </td>
						<td><input style="width: 330px;" type="text" name="compln_date" placeholder="ex: 11/09/2014" required /></td>
					</tr>
					<tr>
						<td>Code: </td>
						<td><input name="captcha" type="text"></td>
						<td><img style="margin-left: -450px;" src="_captcha.php" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input style="width: 100px; font-size: 16px; padding: 2px 7px;" type="submit" value="Send" name="form1"/></td>
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

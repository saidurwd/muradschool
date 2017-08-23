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
<title>College</title>
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
			<h2>Application For Documents in here...</h2>
			<form action="" method="post">
				<table style="width: 800px;">
					<?php
						session_start();
						
						if(isset($_POST['form1'])){
						
							if(isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"])
							{
								$doc_st_nam = $_POST['doc_st_nam'];
								$doc_ft_nam = $_POST['doc_ft_nam'];
								$doc_mt_nam = $_POST['doc_mt_nam'];
								$doc_roll = $_POST['doc_roll'];
								$doc_cls = $_POST['doc_cls'];
								$doc_yar = $_POST['doc_yar'];
								$doc_group = $_POST['doc_group'];
								$doc_type = $_POST['doc_type'];
								$doc_date = $_POST['doc_date'];
								$doc_mob = $_POST['doc_mob'];
								
								$result = mysql_query("insert into doc_tbl (doc_st_nam, doc_ft_nam, doc_mt_nam, doc_roll, doc_cls, doc_yar, doc_group, doc_type, doc_date, doc_mob) values('$doc_st_nam','$doc_ft_nam','$doc_mt_nam','$doc_roll','$doc_cls','$doc_yar','$doc_group','$doc_type','$doc_date','$doc_mob')")or die(mysql_error());
								
								echo ("<p style='font-size:20px;color:green;'>Thank you $doc_st_nam. Your Application for $doc_type has been input successfully.<br /> We will contact with you soon.</p>");
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
						<td><input style="width: 330px;" type="text" name="doc_st_nam" placeholder="ex: Md.Muraduzzaman" required /></td>
					</tr>
					<tr>
						<td>Father's name: </td>
						<td><input style="width: 330px;" type="text" name="doc_ft_nam" placeholder="ex: Md.Mohamma Ali" required /></td>
					</tr>
					<tr>
						<td>Mother's Name: </td>
						<td><input style="width: 330px;" type="text" name="doc_mt_nam" placeholder="ex: Mst.Momtaj Begum" required /></td>
					</tr>
					<tr>
						<td>Roll no: </td>
						<td><input style="width: 330px;" type="text" name="doc_roll" placeholder="ex: 809078" required /></td>
					</tr>
					<tr>
						<td>Class: </td>
						<td>
							<select name="doc_cls" id="">
								<option value="--Select--">--Select A Option--</option>
								<option value="SSC">SSC</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Year: </td>
						<td><input style="width: 330px;" type="text" name="doc_yar" placeholder="ex: 2014" required /></td>
					</tr>
					<tr>
						<td>Group: </td>
						<td>
							<select name="doc_group" id="">
								<option value="--Select--">--Select A Option--</option>
								<option value="Science">Science</option>
								<option value="Commerce">Commerce</option>
								<option value="Arts">Arts</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Document Type: </td>
						<td>
							<select name="doc_type" id="">
								<option value="--Select--">--Select A Option--</option>
								<option value="Testimonial">Testimonial</option>
								<option value="Certificate">Certificate</option>
								<option value="Transfer Certificate">Transfer Certificate</option>
								<option value="Tot List Support">Tot List Support</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Date: </td>
						<td><input style="width: 330px;" type="text" name="doc_date" placeholder="ex: 12/04/2011" required /></td>
					</tr>
					<tr>
						<td>Contact no: </td>
						<td><input style="width: 330px;" type="text" name="doc_mob" placeholder="ex: 01911124860" required /></td>
					</tr>
					<tr>
						<td>Code: </td>
						<td><input name="captcha" type="text"></td>
						<td><img style="margin-left: -480px;" src="_captcha.php" /></td>
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

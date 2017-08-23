<?php include('dbconnect.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact us</title>
	<LINK href="dshe0000.css" type=text/css rel=stylesheet>
<link rel="stylesheet" href="mystyle.css" />

<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>

</head>	

<body bgcolor="#CCCCCC">
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
	<div align="center"> 
		<?PHP include("pdf/head.php"); ?>
		<?php include("pdf/motionmenu.php"); ?>
		<div class="maincontent">
			<h2>Contact us</h2>
			<form method="POST" name="contactform" action="_contact-form-handler.php">
			<table style="width: 800px;">
				<tr>
					<td>Your Name: </td>
					<td><input style="width: 300px;" type="text" name="contact_name"></td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td><input style="width: 300px;" type="text" name="contact_phone"></td>
				</tr>
				<tr>
					<td>Email Address: </td>
					<td><input style="width: 300px;" type="text" name="contact_email"></td>
				</tr>
				<tr>
					<td>Message: </td>
					<td><textarea name="contact_msg" id="" cols="52" rows="7"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input style="font-size: 15px; padding: 2px 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
			
			</form>

			<script language="JavaScript">
			var frmvalidator  = new Validator("contactform");
			frmvalidator.addValidation("contact_name","req","Please provide your name"); 
			frmvalidator.addValidation("contact_phone","req","Please provide your phone");
			frmvalidator.addValidation("contact_email","req","Please provide your email"); 
			frmvalidator.addValidation("contact_email","email","Please enter a valid email address"); 
			</script>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

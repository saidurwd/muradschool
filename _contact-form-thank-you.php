<?php include('dbconnect.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact us</title>
	<LINK href="dshe0000.css" type=text/css rel=stylesheet>
<link rel="stylesheet" href="mystyle.css" />
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
			<h1 style="border: 1px solid;color: green;margin-bottom: 10px;padding: 10px;">We have get your email and contact with you soon. Thank you.</h1>
			<br />
			<a style="background: none repeat scroll 0 0 red;color: #fff;display: block;font-size: 20px;margin: 10px;overflow: hidden;padding: 10px;width: 25%;" href="_contact-form.php">Back to contact us form</a>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

<?php include('dbconnect.php');?>
<?php 
	$errors = '';
	$myemail = 'muradm4@yahoo.com';
	if(empty($_POST['contact_name']) || empty($_POST['contact_phone']) || empty($_POST['contact_email']) || empty($_POST['contact_msg']))
	{
		$errors .= "\n Error: All fields are required";
	}

	$contact_name = $_POST['contact_name']; 
	$contact_phone = $_POST['contact_phone']; 
	$contact_email = $_POST['contact_email']; 
	$contact_msg = $_POST['contact_msg']; 

	if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $contact_email))
	{
		$errors .= "\n Error: Invalid email address";
	}

	if(empty($errors))
	{
		$to = $myemail; 
		$email_subject = "Contact form submission: $contact_name";
		$email_body = "You have received a new message. ".
		" Here are the details:\n Name: $contact_name \n Email: $contact_email \n Message \n $contact_msg"; 
		
		$headers = "From: $myemail\n"; 
		$headers .= "Reply-To: $contact_email";
		
		mail($to,$email_subject,$email_body,$headers);
		header('Location: _contact-form-thank-you.php');
	} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
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
			<p style="border: 1px solid;color: red;font-size: 15px;margin: 0;padding: 15px;"><?php echo nl2br($errors); ?></p>
			<br />
			<a style="background: none repeat scroll 0 0 red;color: #fff;display: block;font-size: 20px;margin: 10px;overflow: hidden;padding: 10px;width: 25%;" href="_contact-form.php">Back to contact us form</a>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>
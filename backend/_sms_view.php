<?php 
include('dbconnect.php');
include('_admin_session.php');


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>শিক্ষাথ্রীদের এসএমএস প্রেরন</title>
</head>
<body>
	<h2>শিক্ষাথ্রীদের এসএমএস প্রেরন </h2>
	<form action="_sms_sent.php" method="post">
		<table>
			<tr>
				<td>এসএমএস গ্রহনকারির মোবাইল নাম্বার : </td>
				<td><input type="text" name="" id="" style="width: 336px;" required /></td>
			</tr>
			<tr>
				<td>এসএমএস এর বিষয় : </td>
				<td><input type="text" name="" id="" style="width: 336px;" required /></td>
			</tr>
			<tr>
				<td>মেসেজ লিখুন : </td>
				<td><textarea name="" id="" cols="40" rows="10" required ></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="সেন্ড করুন" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
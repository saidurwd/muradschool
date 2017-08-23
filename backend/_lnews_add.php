<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_POST['form1'])){
	$news_date = $_POST['news_date'];
	$news_serial = $_POST['news_serial'];
	$news_title = $_POST['news_title'];
	
	$result = mysql_query("insert into lnews_tbl (news_date, news_serial, news_title) values('$news_date','$news_serial','$news_title')") or die(mysql_error());
	
	if ($result) {
		echo ("<p style='font-size:20px;'>Latest news input successfully</p>");
	} else {
		echo ("<p style='font-size:20px;'>Latest news input Failed</p>");
	}
}
//header("location: index.php?action=_stu_hsc1_view");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Latest news</title>
</head>
<body>
	<h2>Add an update news in here...</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Date: </td>
				<td><input type="text" name="news_date" placeholder="ex: 21/05/2015" /></td>
			</tr>
			<tr>
				<td>News serial no: </td>
				<td><input type="text" name="news_serial" placeholder="ex: 01" required /></td>
			</tr>
			<tr>
				<td>News Title: </td>
				<td><textarea rows="4" cols="50" name="news_title" placeholder="ex: This is a title" required></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
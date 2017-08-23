<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_POST['form1'])){
	$acln_date = $_POST['acln_date'];
	$acln_desc = $_POST['acln_desc'];
	
	$result = mysql_query("insert into acln_tbl (acln_date, acln_desc) values('$acln_date','$acln_desc')") or die(mysql_error());
	
	if ($result) {
		echo ("<p style='font-size:20px;'>Academic Calender input successfully</p>");
	} else {
		echo ("<p style='font-size:20px;'>Academic Calender input Failed</p>");
	}
}
//header("location: index.php?action=_stu_hsc1_view");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Academic Calender</title>
</head>
<body>
	<h2>Add Academic Calender Data...</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Date: </td>
				<td><textarea rows="1" cols="50" name="acln_date" placeholder="ex: ex: 21/05/2015 to 25/05/2015" required></textarea></td>
			</tr>
			<tr>
				<td>Holiday Description: </td>
				<td><textarea rows="3" cols="50" name="acln_desc" placeholder="ex: This is a title" required></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_POST['form1'])){
	$gb_name = $_POST['gb_name'];
	$gb_pos = $_POST['gb_pos'];
	$gb_adrs = $_POST['gb_adrs'];
	$gb_year = $_POST['gb_year'];
	$gb_cmt = $_POST['gb_cmt'];
	
	$result = mysql_query("insert into gb_tbl (gb_name, gb_pos, gb_adrs, gb_year, gb_cmt) values('$gb_name','$gb_pos','$gb_adrs','$gb_year','$gb_cmt')") or die(mysql_error());
	
	if ($result) {
		echo ("<p style='font-size:20px;'>GB input successfully</p>");
	} else {
		echo ("<p style='font-size:20px;'>GB input Failed</p>");
	}
}
//header("location: index.php?action=_stu_hsc1_view");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GB Management</title>
</head>
<body>
	<h2>Add GB Members...</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>GB Name: </td>
				<td><input type="text" name="gb_name" placeholder="ex: MD Maruf Islam" required /></td>
			</tr>
			<tr>
				<td>GB Position: </td>
				<td><input type="text" name="gb_pos" placeholder="ex: Chairmen" required /></td>
			</tr>
			<tr>
				<td>GB Address: </td>
				<td><input type="text" name="gb_adrs" placeholder="ex: Avoynagar, Jessore" required /></td>
			</tr>
			<tr>
				<td>GB Duration: </td>
				<td><input type="text" name="gb_year" placeholder="ex: 09/03/2014 - 22/07/2014" /></td>
			</tr>
			<tr>
				<td>GB Comment: </td>
				<td><input type="text" name="gb_cmt" placeholder="ex: Add some comment of this member" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_POST['form1'])){
	$lib_id_no = $_POST['lib_id_no'];
	$lib_isbn = $_POST['lib_isbn'];
	$lib_pub = $_POST['lib_pub'];
	$lib_title = $_POST['lib_title'];
	$lib_desc = $_POST['lib_desc'];
	$lib_sd = $_POST['lib_sd'];
	
	$result = mysql_query("insert into lib_tbl (lib_id_no, lib_isbn, lib_pub, lib_title, lib_desc, lib_sd) values('$lib_id_no','$lib_isbn','$lib_pub', '$lib_title', '$lib_desc', '$lib_sd')") or die(mysql_error());
	
	if ($result) {
		echo ("<p style='font-size:20px;'>Data input successfully</p>");
	} else {
		echo ("<p style='font-size:20px;'>Data input Failed</p>");
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
	<h2>Add book details in here...</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>ID: </td>
				<td><input type="text" name="lib_id_no" placeholder="ex: 21090" /></td>
			</tr>
			<tr>
				<td>ISBN: </td>
				<td><input type="text" name="lib_isbn" placeholder="ex: 7866-5454-343" required /></td>
			</tr>
			<tr>
				<td>Publisher: </td>
				<td><input type="text" name="lib_pub" placeholder="ex: Momtaj Publication" required /></td>
			</tr>
			<tr>
				<td>Title: </td>
				<td><input type="text" name="lib_title" placeholder="ex: Book name" required /></td>
			</tr>
			<tr>
				<td>Description: </td>
				<td><textarea name="lib_desc" id="" cols="30" rows="10" placeholder="ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."></textarea></td>
			</tr>
			<tr>
				<td>Short Note: </td>
				<td><input type="text" name="lib_sd" placeholder="ex: Add a shot note" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
ob_start(); 
include('dbconnect.php');
include('_admin_session.php');

if(isset($_POST['form1'])){
	$arch_exm_title = $_POST['arch_exm_title'];
	$arch_exm_grp = $_POST['arch_exm_grp'];
	$arch_exm_pass = $_POST['arch_exm_pass'];
	$arch_exm_regu = $_POST['arch_exm_regu'];
	$arch_exm_iregu = $_POST['arch_exm_iregu'];
	
	$result = mysql_query("insert into arch_exm (arch_exm_title, arch_exm_grp, arch_exm_pass, arch_exm_regu, arch_exm_iregu) values('$arch_exm_title','$arch_exm_grp','$arch_exm_pass','$arch_exm_regu','$arch_exm_iregu')")or die(mysql_error());
	
	if ($result) {
		echo ("<p style='font-size:20px;'>Data input successfully</p>");
	} else {
		echo ("<p style='font-size:20px;'>Data input Failed</p>");
	}
}
//header("location: index.php?action=_stu_ssc1_view");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New student</title>
</head>
<body>
	<h2>Add a Archive Public Exam Result...</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: red;">Exam Title: <input style="margin-left: 15px;" type="text" name="arch_exm_title" placeholder="ex: Test Exam 2014" required /></td>
			</tr>
			<tr>
				<td style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: red;">Group: <input style="margin-left: 54px;" type="text" name="arch_exm_grp" placeholder="ex: Science" required /></td>
			</tr>
			<tr>
				<td>
					<p style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: red;">Passing student Roll.no: </p>
					<textarea name="arch_exm_pass" cols="80" rows="10" placeholder="ex: 110, 111, 112, 113, 114 ....." required></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<p style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: red;">Considered: </p>
					Regular student Roll.no: <textarea name="arch_exm_regu" cols="80" rows="5" placeholder="ex: 110, 111, 112, 113, 114 ....." required></textarea>
					Irregular student Roll.no: <textarea name="arch_exm_iregu" cols="80" rows="5" placeholder="ex: 110, 111, 112, 113, 114 ....." required></textarea>
				</td>
			</tr>
		</table>
		<input style="float:left;margin-top:10px;" type="submit" value="SAVE" name="form1" />
	</form>
</body>
</html>
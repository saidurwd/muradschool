<?php
ob_start(); 
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['adinfo_file']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['adinfo_file']['tmp_name'];
		$adinfo_file = $_FILES["adinfo_file"] ["name"];
		$tec_photo_name= addslashes($_FILES['adinfo_file']['name']);
		$size = $_FILES["adinfo_file"] ["size"];
		$error = $_FILES["adinfo_file"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
						
				$adinfo_file =$_FILES["adinfo_file"]["name"];
				$adinfo_sub = $_POST['adinfo_sub'];
				$adinfo_date = $_POST['adinfo_date'];
				
				$file_ext = substr($adinfo_file, strripos($adinfo_file, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.pdf')&&($file_ext!='.doc')&&($file_ext!='.docx')){
					echo "Only PDF, DOC format are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["adinfo_file"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["adinfo_file"]["tmp_name"]);
					
					mysql_query("insert into adinfo_tbl (adinfo_sub,adinfo_file,adinfo_date) 
					values('$adinfo_sub','$f1','$adinfo_date')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Data input successfully</p>";
				}
			}
			//header("location: index.php?action=_stu_hsc1_view");
		}
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Admission Information</title>
</head>
<body>
	<h2>Insert Admission Information in here...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Subject: </td>
				<td><input style="width:500px;" type="text" name="adinfo_sub" placeholder="ex: Science group admission information" required /></td>
			</tr>
			<tr>
				<td>Download file: </td>
				<td><input type="file" name="adinfo_file" /></td>
			</tr>
			<tr>
				<td>Date: </td>
				<td><input type="text" name="adinfo_date" placeholder="ex: 12/09/2015" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
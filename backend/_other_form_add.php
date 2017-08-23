<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['othfrm_file']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['othfrm_file']['tmp_name'];
		$othfrm_file = $_FILES["othfrm_file"] ["name"];
		$tec_photo_name= addslashes($_FILES['othfrm_file']['name']);
		$size = $_FILES["othfrm_file"] ["size"];
		$error = $_FILES["othfrm_file"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
						
				$othfrm_file =$_FILES["othfrm_file"]["name"];
				$othfrm_title = $_POST['othfrm_title'];
				$othfrm_date = $_POST['othfrm_date'];
				
				$file_ext = substr($othfrm_file, strripos($othfrm_file, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.pdf')&&($file_ext!='.doc')&&($file_ext!='.docx')&&($file_ext!='.xls')&&($file_ext!='.xlsx')){
					echo "Only PDF, DOC, XLS format are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["othfrm_file"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["othfrm_file"]["tmp_name"]);
					
					mysql_query("insert into oth_form (othfrm_title,othfrm_date,othfrm_file) 
					values('$othfrm_title','$othfrm_date','$f1')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Data input successfully</p>";
				}
			}
			header("location: index.php?action=_other_form_view");
		}
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New student</title>
</head>
<body>
	<h2>Insert Any Form in here...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Form Title: </td>
				<td><textarea rows="4" cols="50" name="othfrm_title" placeholder="ex: This is a title" required></textarea></td>
			</tr>
			<tr>
				<td>Upload Form: </td>
				<td><input type="file" name="othfrm_file" /></td>
			</tr>
			<tr>
				<td>Date: </td>
				<td><input type="text" name="othfrm_date" placeholder="ex: 12/09/2015" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
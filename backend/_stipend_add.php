<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['n_download']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['n_download']['tmp_name'];
		$n_download = $_FILES["n_download"] ["name"];
		$tec_photo_name= addslashes($_FILES['n_download']['name']);
		$size = $_FILES["n_download"] ["size"];
		$error = $_FILES["n_download"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
						
				$n_download =$_FILES["n_download"]["name"];
				$n_title = $_POST['n_title'];
				$n_date = $_POST['n_date'];
				
				$file_ext = substr($n_download, strripos($n_download, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.pdf')&&($file_ext!='.doc')&&($file_ext!='.docx')&&($file_ext!='.xls')&&($file_ext!='.xlsx')){
					echo "Only PDF, DOC, XLS format are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["n_download"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["n_download"]["tmp_name"]);
					
					mysql_query("insert into stipend_tbl (n_title,n_date,n_download) 
					values('$n_title','$n_date','$f1')")or die(mysql_error());
					
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
	<title>Add New stipend</title>
</head>
<body>
	<h2>Insert a stipend notice...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Title: </td>
				<td><textarea rows="4" cols="50" name="n_title" placeholder="ex: This is a title" required></textarea></td>
			</tr>
			<tr>
				<td>Download: </td>
				<td><input type="file" name="n_download" /></td>
			</tr>
			<tr>
				<td>Date: </td>
				<td><input type="text" name="n_date" placeholder="ex: 12/09/2015" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['cr_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['cr_photo']['tmp_name'];
		$cr_photo = $_FILES["cr_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['cr_photo']['name']);
		$size = $_FILES["cr_photo"] ["size"];
		$error = $_FILES["cr_photo"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$cr_photo = $_FILES["cr_photo"]["name"];
				$cr_title = $_POST['cr_title'];
				
				$file_ext = substr($cr_photo, strripos($cr_photo, '.'));
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')){
					echo "Only jpg, jpeg, png format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["cr_photo"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["cr_photo"]["tmp_name"]);
					
					mysql_query("insert into cls_routain (cr_photo,cr_title) 
					values('$f1','$cr_title')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Class Routine Data input successfully</p>";
				}
			}
			//header("location: index.php?action=_staff_view");
		}
	}
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New teacher</title>
</head>
<body>
	<h2>Insert Class Routine...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Group: </td>
				<td><input type="text" name="cr_title" placeholder="Science group" required /></td>
			</tr>
			<tr>
				<td>Upload: </td>
				<td><input type="file" name="cr_photo" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
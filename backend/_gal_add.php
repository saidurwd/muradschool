<?php
ob_start(); 
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['gal_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['gal_photo']['tmp_name'];
		$gal_photo = $_FILES["gal_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['gal_photo']['name']);
		$size = $_FILES["gal_photo"] ["size"];
		$error = $_FILES["gal_photo"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$gal_photo = $_FILES["gal_photo"]["name"];
				$gal_cap = $_POST['gal_cap'];
				
				$file_ext = substr($gal_photo, strripos($gal_photo, '.'));
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')){
					echo "Only jpg, jpeg, png format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["gal_photo"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["gal_photo"]["tmp_name"]);
					
					mysql_query("insert into gallary_tbl (gal_cap,gal_photo) 
					values('$gal_cap','$f1')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Data input successfully</p>";
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
	<h2>Input a gallery images...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Caption: </td>
				<td><input type="text" name="gal_cap" placeholder="ex: A glorious moment" required /></td>
			</tr>
				<td>Gallery Photo: </td>
				<td><input type="file" name="gal_photo" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
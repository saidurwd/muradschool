<?php
ob_start(); 
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['clg_str_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['clg_str_photo']['tmp_name'];
		$clg_str_photo = $_FILES["clg_str_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['clg_str_photo']['name']);
		$size = $_FILES["clg_str_photo"] ["size"];
		$error = $_FILES["clg_str_photo"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$clg_str_photo = $_FILES["clg_str_photo"]["name"];
				$clg_str_title = $_POST['clg_str_title'];
				$clg_str_date = $_POST['clg_str_date'];
				$clg_str_cap = $_POST['clg_str_cap'];
				$clg_str_desc = $_POST['clg_str_desc'];
				
				$file_ext = substr($clg_str_photo, strripos($clg_str_photo, '.'));
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')){
					echo "Only jpg, jpeg, png format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["clg_str_photo"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["clg_str_photo"]["tmp_name"]);
					
					mysql_query("insert into clg_strc (clg_str_title,clg_str_date,clg_str_photo,clg_str_cap,clg_str_desc) 
					values('$clg_str_title','$clg_str_date','$f1','$clg_str_cap','$clg_str_desc')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>School Structure Data input successfully</p>";
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
	<script type="text/javascript" src="core/ckeditor.js"></script>
</head>
<body>
	<h2>Insert College structure information...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Title: </td>
				<td><input type="text" name="clg_str_title" placeholder="ex: A glorious moment" required /></td>
			</tr>
			<tr>
				<td>Date: </td>
				<td><input type="text" name="clg_str_date" placeholder="ex: 12/10/2010" required /></td>
			</tr>
			<tr>
				<td>Photo: </td>
				<td><input type="file" name="clg_str_photo" required /></td>
			</tr>
			<tr>
				<td>Caption: </td>
				<td><input type="text" name="clg_str_cap" placeholder="ex: college new building" required /></td>
			</tr>
			<tr>
				<td>Description: </td>
				<td><textarea name="clg_str_desc" id="hist_text" cols="70" rows="10" placeholder="ex: Welcome to RUPDIA SHAHEED SMRITY COLLEGE, located at RUPDIA, JESSORE SADAR, JESSORE, established in 1999 is one of the most famous colleges in this district that is engaged to generate such persons who are serving the nation form their multi-dimensional angles. The college is also well-known throughout the country for its standard education and co-curricular activities for it sustains the students to keep pace with the most modern information and sustainable development." required></textarea></td>
				<script>
					CKEDITOR.replace( 'hist_text' );
				</script>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
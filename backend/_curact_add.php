<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['ca_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['ca_photo']['tmp_name'];
		$ca_photo = $_FILES["ca_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['ca_photo']['name']);
		$size = $_FILES["ca_photo"] ["size"];
		$error = $_FILES["ca_photo"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$ca_photo = $_FILES["ca_photo"]["name"];
				$ca_cap = $_POST['ca_cap'];
				$ca_disc = $_POST['ca_disc'];
				
				$file_ext = substr($ca_photo, strripos($ca_photo, '.'));
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
					echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["ca_photo"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["ca_photo"]["tmp_name"]);
					
					mysql_query("insert into curact_tbl (ca_photo,ca_cap,ca_disc) 
					values('$f1','$ca_cap','$ca_disc')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Curricular activities Data input successfully</p>";
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
	<h2>Insert Curriculum activities...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Photo: </td>
				<td><input type="file" name="ca_photo" required /></td>
			</tr>
			<tr>
				<td>Caption: </td>
				<td><input type="text" name="ca_cap" placeholder="ex: photo caption" required /></td>
			</tr>
			<tr>
				<td>Short Description: </td>
				<td><textarea name="ca_disc" cols="30" rows="10" placeholder="ex: This is a shot description." required ></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
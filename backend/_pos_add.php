<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['pos_file']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['pos_file']['tmp_name'];
		$pos_file = $_FILES["pos_file"] ["name"];
		$tec_photo_name= addslashes($_FILES['pos_file']['name']);
		$size = $_FILES["pos_file"] ["size"];
		$error = $_FILES["pos_file"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
						
				$pos_file =$_FILES["pos_file"]["name"];
				$pos_title = $_POST['pos_title'];
				$pos_info = $_POST['pos_info'];
				
				$file_ext = substr($pos_file, strripos($pos_file, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.pdf')&&($file_ext!='.doc')&&($file_ext!='.docx')&&($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')){
					echo "Only PDF, DOC, PNG, JPG, JPGE format are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["pos_file"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["pos_file"]["tmp_name"]);
					
					mysql_query("insert into pos_tbl (pos_title,pos_file,pos_info) 
					values('$pos_title','$f1','$pos_info')")or die(mysql_error());
					
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
	<h2>Insert a position information...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Position Title: </td>
				<td><input style="width:500px;" type="text" name="pos_title" placeholder="ex: Complete position(পুরনকৃত পদের তথ্য)" required /></td>
			</tr>
			<tr>
				<td>Download file: </td>
				<td><input type="file" name="pos_file" /></td>
			</tr>
			<tr>
				<td>Position Information: </td>
				<td><textarea name="pos_info" id="" cols="60" rows="5" placeholder="ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat." required></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
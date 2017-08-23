<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['arch_std_pto']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['arch_std_pto']['tmp_name'];
		$arch_std_pto = $_FILES["arch_std_pto"] ["name"];
		$tec_photo_name= addslashes($_FILES['arch_std_pto']['name']);
		$size = $_FILES["arch_std_pto"] ["size"];
		$error = $_FILES["arch_std_pto"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
						
				$arch_std_pto =$_FILES["arch_std_pto"]["name"];
				$arch_std_nam = $_POST['arch_std_nam'];
				$arch_std_yar = $_POST['arch_std_yar'];
				$arch_std_res = $_POST['arch_std_res'];
				$arch_std_sub = $_POST['arch_std_sub'];
				
				$file_ext = substr($arch_std_pto, strripos($arch_std_pto, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.jpg')&&($file_ext!='.jpge')&&($file_ext!='.png')&&($file_ext!='.gif')){
					echo "Only JPG, JPGE, PNG, GIF images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["arch_std_pto"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["arch_std_pto"]["tmp_name"]);
					
					mysql_query("insert into arch_std (arch_std_nam,arch_std_yar,arch_std_pto,arch_std_res,arch_std_sub) 
					values('$arch_std_nam','$arch_std_yar','$f1','$arch_std_res','$arch_std_sub')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Archive Student data input successfully</p>";
				}
			}
			//header("location: index.php?action=_stu_hsc1_view");
		}
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New student</title>
</head>
<body>
	<h2>কৃতি শিক্ষার্থীদের তথ্য ইনপুট করুন...</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Student Name: </td>
				<td><input type="text" name="arch_std_nam" placeholder="ex: MD Hafizur rahman" required /></td>
			</tr>
			<tr>
				<td>Student Passing Year: </td>
				<td><input type="text" name="arch_std_yar" placeholder="ex: 2015" required /></td>
			</tr>
			<tr>
				<td>Student Result: </td>
				<td><input type="text" name="arch_std_res" placeholder="ex: A+" required /></td>
			</tr>
			<tr>
				<td>Student Subject: </td>
				<td><input type="text" name="arch_std_sub" placeholder="ex: Commerce" required /></td>
			</tr>
			<tr>
				<td>Student Photo: </td>
				<td><input type="file" name="arch_std_pto" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['arch_prin_pto']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['arch_prin_pto']['tmp_name'];
		$arch_prin_pto = $_FILES["arch_prin_pto"] ["name"];
		$tec_photo_name= addslashes($_FILES['arch_prin_pto']['name']);
		$size = $_FILES["arch_prin_pto"] ["size"];
		$error = $_FILES["arch_prin_pto"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
						
				$arch_prin_pto =$_FILES["arch_prin_pto"]["name"];
				$arch_prin_nam = $_POST['arch_prin_nam'];
				$arch_prin_yar = $_POST['arch_prin_yar'];
				$arch_prin_pos = $_POST['arch_prin_pos'];
				$arch_prin_mob = $_POST['arch_prin_mob'];
				
				$file_ext = substr($arch_prin_pto, strripos($arch_prin_pto, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.jpg')&&($file_ext!='.jpge')&&($file_ext!='.png')&&($file_ext!='.gif')){
					echo "Only JPG, JPGE, PNG, GIF images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["arch_prin_pto"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["arch_prin_pto"]["tmp_name"]);
					
					mysql_query("insert into arch_prin (arch_prin_nam,arch_prin_yar,arch_prin_pto,arch_prin_pos,arch_prin_mob) 
					values('$arch_prin_nam','$arch_prin_yar','$f1','$arch_prin_pos','$arch_prin_mob')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Archive Principal data input successfully</p>";
				}
			}
			//header("location: index.php?action=_stu_hsc1_view");
		}
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New Principal</title>
</head>
<body>
	<h2>প্রাক্তন প্রতিষ্ঠান প্রধানগনের তথ্যাবলী...</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Principal Name: </td>
				<td><input type="text" name="arch_prin_nam" placeholder="ex: MD Hafizur rahman" required /></td>
			</tr>
			<tr>
				<td>Principal Duration: </td>
				<td><input type="text" name="arch_prin_yar" placeholder="ex: 13/05/2010 - 16/02/2015" required /></td>
			</tr>
			<tr>
				<td>Principal Position: </td>
				<td><input type="text" name="arch_prin_pos" placeholder="ex: Principal" required /></td>
			</tr>
			<tr>
				<td>Principal Contact.no: </td>
				<td><input type="text" name="arch_prin_mob" placeholder="ex: 01711090909" required /></td>
			</tr>
			<tr>
				<td>Principal Photo: </td>
				<td><input type="file" name="arch_prin_pto" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
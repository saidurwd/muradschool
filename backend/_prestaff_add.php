<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['staff_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['staff_photo']['tmp_name'];
		$staff_photo = $_FILES["staff_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['staff_photo']['name']);
		$size = $_FILES["staff_photo"] ["size"];
		$error = $_FILES["staff_photo"] ["error"];

		if ($error > 0){
			echo"You need to select a photo.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$staff_photo =$_FILES["staff_photo"]["name"];
				$staff_name = $_POST['staff_name'];
				$staff_designation = $_POST['staff_designation'];
				$staff_indxno = $_POST['staff_indxno'];
				$staff_contact = $_POST['staff_contact'];
				
				$file_ext = substr($staff_photo, strripos($staff_photo, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
					echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["staff_photo"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["staff_photo"]["tmp_name"]);
					
					mysql_query("insert into prestaff_tbl (staff_name, staff_designation, staff_indxno, staff_contact, staff_photo) 
					values('$staff_name','$staff_designation','$staff_indxno','$staff_contact','$f1')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Present Staff Data has been input successfully</p>";
				}
			}
			header("location: index.php?action=_prestaff_view");
		}
	}
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New Staff</title>
</head>
<body>
	<h2>Insert a Present Staff details in here...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="staff_name" placeholder="ex: Kamal Hossain" required /></td>
			</tr>
			<tr>
				<td>Designation: </td>
				<td><input type="text" name="staff_designation" placeholder="ex: Computer operator" required /></td>
			</tr>
			<tr>
				<td>Index No: </td>
				<td><input type="text" name="staff_indxno" placeholder="ex: 436807" required /></td>
			</tr>
			<tr>
				<td>Contact No: </td>
				<td><input type="text" name="staff_contact" placeholder="ex: 01710111111" required /></td>
			</tr>
			<tr>
				<td>Photo: </td>
				<td><input type="file" name="staff_photo" /></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Submit Data" name="form1"/>
					<input type="reset" value="Reset" style="color: red;" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
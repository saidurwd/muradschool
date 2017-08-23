<?php 
ob_start();
include('dbconnect.php');
//include('_admin_session.php');



	if (!isset($_FILES['tech_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['tech_photo']['tmp_name'];
		$tech_photo = $_FILES["tech_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['tech_photo']['name']);
		$size = $_FILES["tech_photo"] ["size"];
		$error = $_FILES["tech_photo"] ["error"];

		if ($error > 0){
			echo"You need to select a photo.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$tech_photo =$_FILES["tech_photo"]["name"];
				$tech_id = $_POST['tech_id'];
				$res_class = $_POST['res_class'];
				$res_roll = $_POST['res_roll'];
				$tech_name = $_POST['tech_name'];
				$tech_designation = $_POST['tech_designation'];
				$tech_indxno = $_POST['tech_indxno'];
				$tech_contact = $_POST['tech_contact'];
				$tech_sub = $_POST['tech_sub'];
				
				$file_ext = substr($tech_photo, strripos($tech_photo, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
					echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["tech_photo"]["tmp_name"],"backend/upload/" . $f1);	
					@unlink($_FILES["tech_photo"]["tmp_name"]);
					
					mysql_query("insert into suborno_tbl (tech_id, res_class, res_roll, tech_name, tech_designation, tech_indxno, tech_contact, tech_sub, tech_photo) 
					values('$tech_id','$res_class','$res_roll','$tech_name','$tech_designation','$tech_indxno','$tech_contact','$tech_sub','$f1')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Present  Data has been input successfully</p>";
				}
			}
			header("location: index.php");
		}
	}
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add New Information</title>
</head>
<body>
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
	<h2>Insert a Present information details in here for Online registration...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td> Passing Year: </td>
				<td><input type="text" name="tech_id" placeholder="ex: 1995" required /></td>
			</tr>
			<tr>
			<tr>
				<td> Last Examination: </td>
				<td><input type="text" name="res_class" placeholder="ex: HSC" required /></td>
			</tr>
			<tr>
			<tr>
				<td> Examination Roll: </td>
				<td><input type="text" name="res_roll" placeholder="ex: 167016" required /></td>
			</tr>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="tech_name" placeholder="ex: Muraduzzaman" required /></td>
			</tr>
			<tr>
				<td>Designation: </td>
				<td><input type="text" name="tech_designation" placeholder="ex: Managing Director" required /></td>
			</tr>
			<tr>
				<td>Company Name/Own Business: </td>
				<td><input type="text" name="tech_indxno" placeholder="ex: Momtaj Trading (Pvt.) Ltd." required /></td>
			</tr>
			<tr>
				<td>Contact No: </td>
				<td><input type="text" name="tech_contact" placeholder="ex: 01710855843" required /></td>
			</tr>
			<tr>
				<td> Address: </td>
				<td><textarea rows="4" cols="50" name="tech_sub" placeholder="ex: Station Bazar, Noapara, Jessore" required></textarea></td>
			</tr>
			
			<tr>
				<td>Photo: </td>
				<td><input type="file" name="tech_photo" /></td>
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
<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['sli_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['sli_photo']['tmp_name'];
		$sli_photo = $_FILES["sli_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['sli_photo']['name']);
		$size = $_FILES["sli_photo"] ["size"];
		$error = $_FILES["sli_photo"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$sli_photo = $_FILES["sli_photo"]["name"];
				$sli_cap = $_POST['sli_cap'];
				
				$file_ext = substr($sli_photo, strripos($sli_photo, '.'));
				
				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')){
					echo "Only jpg, jpeg, png format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["sli_photo"]["tmp_name"],"../pdf/slider/" . $sli_photo);	
					@unlink($_FILES["sli_photo"]["tmp_name"]);
					
					mysql_query("insert into sli_tbl (sli_cap,sli_photo) 
					values('$sli_cap','$sli_photo')")or die(mysql_error());
					
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
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
</head>
<body>
	<h2>Input a slider images...</h2>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Photo No: </td>
				<td><input type="text" name="sli_cap" placeholder="ex: write 1 or 2 or 3 ...." required /></td>
			</tr>
				<td>Slider Photo: </td>
				<td><input type="file" name="sli_photo" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="form1"/></td>
			</tr>
		</table>
	</form>
	
	<table border="1" id="mytable_curact">
		<tr>
			<th>Slider Photo</th>
			<th>Photo No</th>
			<th>Action</th>
		</tr>
		<?php
			$result= mysql_query("select * from sli_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		<tr>
			<td><img src="../pdf/slider/<?php echo $row['sli_photo']; ?>" width="100px" height="100px"></td>
			<td><?php echo $row['sli_cap'];?></td>
			<td>
				<a onClick="return confirm_del();" href="_sli_del.php?id=<?php echo $row['sli_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	
</body>
</html>
<?php ob_start(); //error_reporting(0); ?>
<?php include('dbconnect.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php			
	$result= mysql_query("select * from hdr_tbl" ) or die (mysql_error());
	while ($row = mysql_fetch_array ($result)){
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Welcome to <?php echo $row['hdr_en'];?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<LINK href="css/c.css" type=text/css rel=stylesheet>

<script type="text/javascript" src="js/script.js"></script>
<?php 
	include"dbconnect.php";
	include"function.php";
	include('_admin_session.php');
?>
</head>
<body>
<div id="wrapper">
  <div id="logo">
    <h1><a style="margin-left: 10px; font-size: 35px;" href="index.php"><?php echo $row['hdr_bn'];?></a></h1>
  </div>
  <hr />
  <!-- end #logo -->
  <div id="header">
    <div id="menu">
      <ul>
        <li><a href="index.php" class="first">Home</a></li>
         <?php if(!empty($_SESSION['UserType'])){ ?>
        <li><a href="index.php?action=Logout">Logout</a></li>
        <?php } ?>
      </ul>
    </div>
    <!-- end #menu -->
    <div id="search">
      <form method="get" action="">
        <fieldset>
        <input type="text" name="s" id="search-text" size="15" />
        <input type="submit" id="search-submit" value="GO" />
        </fieldset>
      </form>
    </div>
    <!-- end #search -->
  </div>
  <!-- end #header -->
  <!-- end #header-wrapper -->
  <div id="page">
    <div id="page-bgtop">
      <div id="content">
        <div class="post">
		
		<?php 

	if(isset($_REQUEST['id'])) {
		$id = $_REQUEST['id'];
	}
	else{
		header('location: index.php');
	}

	if(isset($_POST['form1'])) {
		
		if(empty($_FILES["std_photo"]["name"])){
			
			mysql_query("update std_class10_tbl set std_id = '$_POST[std_id]', std_roll = '$_POST[std_roll]', std_cls = '$_POST[std_cls]', std_name = '$_POST[std_name]', std_father = '$_POST[std_father]', std_mother = '$_POST[std_mother]', std_sft = '$_POST[std_sft]', std_sec = '$_POST[std_sec]', std_grp = '$_POST[std_grp]', std_dob = '$_POST[std_dob]', std_reli = '$_POST[std_reli]', std_gen = '$_POST[std_gen]', std_sub = '$_POST[std_sub]' where s_id = '$id'");
			
			header("location: index.php?action=_student_class10_view");
		}
		else {
			
			$up_filename=$_FILES["std_photo"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
				echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
			}else{
				$result = mysql_query("SELECT * FROM std_class10_tbl WHERE s_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['std_photo'];
					unlink($real1);
					move_uploaded_file($_FILES["std_photo"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql="update std_class10_tbl set std_id = '$_POST[std_id]', std_roll = '$_POST[std_roll]', std_cls = '$_POST[std_cls]', std_name = '$_POST[std_name]', std_father = '$_POST[std_father]', std_mother = '$_POST[std_mother]', std_sft = '$_POST[std_sft]', std_sec = '$_POST[std_sec]', std_grp = '$_POST[std_grp]', std_dob = '$_POST[std_dob]', std_reli = '$_POST[std_reli]', std_gen = '$_POST[std_gen]', std_sub = '$_POST[std_sub]', std_photo = '$f1' where s_id = '$id'";
				$rs=mysql_query($sql);
		
				header("location: index.php?action=_student_class10_view");
			}
			
		}
		
	}
?>

          
<?php 

	$result = mysql_query("select * from std_class10_tbl where s_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$std_id_past = $row['std_id'];
		$std_roll_past = $row['std_roll'];
		$std_cls_past = $row['std_cls'];
		$std_name_past = $row['std_name'];
		$std_father_past = $row['std_father'];
		$std_mother_past = $row['std_mother'];
		$std_sft_past = $row['std_sft'];
		$std_sec_past = $row['std_sec'];
		$std_grp_past = $row['std_grp'];
		$std_dob_past = $row['std_dob'];
		$std_reli_past = $row['std_reli'];
		$std_gen_past = $row['std_gen'];
		$std_sub_past = $row['std_sub'];
		$std_photo_past = $row['std_photo'];
	}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4 style="font-size: 20px; color: red;">Update this Student Information</h4>
	<table>
		<tr>
			<td>ID: </td>
			<td><input type="text" name="std_id" value="<?php echo $std_id_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Roll: </td>
			<td><input type="text" name="std_roll" value="<?php echo $std_roll_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Class: </td>
			<td>
				<select name="std_cls" id="">
					<option value="<?php echo $std_cls_past; ?>"><?php echo $std_cls_past; ?></option>
					<option value="Class 1">Class 1</option>
					<option value="Class 2">Class 2</option>
					<option value="Class 3">Class 3</option>
					<option value="Class 4">Class 4</option>
					<option value="Class 5">Class 5</option>
					<option value="Class 6">Class 6</option>
					<option value="Class 7">Class 7</option>
					<option value="Class 8">Class 8</option>
					<option value="Class 9">Class 9</option>
					<option value="Class 10">Class 10</option>
					<option value="SSC">SSC</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="std_name" value="<?php echo $std_name_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Father's name: </td>
			<td><input type="text" name="std_father" value="<?php echo $std_father_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Mother's name: </td>
			<td><input type="text" name="std_mother" value="<?php echo $std_mother_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Shift: </td>
			<td>
				<select name="std_sft" id="">
					<option value="<?php echo $std_sft_past; ?>"><?php echo $std_sft_past; ?></option>
					<option value="Day">Day</option>
					<option value="Night">Night</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Section: </td>
			<td><input type="text" name="std_sec" value="<?php echo $std_sec_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Group: </td>
			<td><input type="text" name="std_grp" value="<?php echo $std_grp_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Date of birth: </td>
			<td><input type="text" name="std_dob" value="<?php echo $std_dob_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Religion: </td>
			<td><input type="text" name="std_reli" value="<?php echo $std_reli_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td>
				<select name="std_gen" id="">
					<option value="<?php echo $std_gen_past; ?>"><?php echo $std_gen_past; ?></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Subject: </td>
			<td><textarea name="std_sub" id="" cols="40" rows="3" required ><?php echo $std_sub_past; ?></textarea></td>
		</tr>
		<tr>
			<td>Photo: </td>
			<td>
				<img src="upload/<?php echo $std_photo_past; ?>" width="100px" height="100px" style="border:1px solid #333333;">
				<br />
				<input type="file" name="std_photo" >
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update info" name="form1"/></td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
</form>
		  
		  
        </div>
      </div>
      <!-- end #content -->
	  
	  <?php include("user_sidebar.php"); ?>

      <div style="clear: both;">&nbsp;</div>
    </div>
  </div>
  <!-- end #page -->
  <div id="footer-bgcontent">
    <div id="footer">
      <p>Copyright &copy; 2015 Momtaj Trading(Pvt.)Ltd. All rights reserved.</p>
    </div>
  </div>
  <!-- end #footer -->
</div>
<?php } ?>
</body>
</html>



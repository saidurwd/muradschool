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
<link href="../../sw/backend/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<LINK href="../../sw/backend/css/c.css" type=text/css rel=stylesheet>

<script type="text/javascript" src="../../sw/backend/js/script.js"></script>
<?php 
	include"dbconnect.php";
	include"function.php";
	include('_admin_session.php');
?>
</head>
<body>
<div id="wrapper">
  <div id="logo">
    <h1><a style="margin-left: 10px; font-size: 35px;" href="../../sw/backend/index.php"><?php echo $row['hdr_bn'];?></a></h1>
  </div>
  <hr />
  <!-- end #logo -->
  <div id="header">
    <div id="menu">
      <ul>
        <li><a href="../../sw/backend/index.php" class="first">Home</a></li>
         <?php if(!empty($_SESSION['UserType'])){ ?>
        <li><a href="../../sw/backend/index.php?action=Logout">Logout</a></li>
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
		
		if(empty($_FILES["tech_photo"]["name"])){
			
			mysql_query("update suborno_tbl set tech_id = '$_POST[tech_id]', res_class = '$_POST[res_class]',res_roll = '$_POST[res_roll]', tech_name = '$_POST[tech_name]', tech_designation = '$_POST[tech_designation]', tech_indxno = '$_POST[tech_indxno]', tech_contact = '$_POST[tech_contact]', tech_sub = '$_POST[tech_sub]' where t_id = '$id'");
			
			header("location: index.php?action=_present_suborno_ad_database");
		}
		else {
			
			$up_filename=$_FILES["tech_photo"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
				echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
			}else{
				$result = mysql_query("SELECT * FROM suborno_tbl WHERE t_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['tech_photo'];
					unlink($real1);
					move_uploaded_file($_FILES["tech_photo"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql = "update suborno_tbl set tech_id = '$_POST[tech_id]',res_class = '$_POST[res_class]',res_roll = '$_POST[res_roll]', tech_name = '$_POST[tech_name]', tech_designation = '$_POST[tech_designation]', tech_indxno = '$_POST[tech_indxno]', tech_contact = '$_POST[tech_contact]', tech_sub = '$_POST[tech_sub]', tech_photo = '$f1' where t_id = '$id'";
				$rs = mysql_query($sql);
		
				header("location: index.php?action=_present_suborno_ad_database");
			}
			
		}
		
	}
?>

          
<?php 

	$result = mysql_query("select * from suborno_tbl where t_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$tech_id_past = $row['tech_id'];
		$res_class_past = $row['res_class'];
		$res_roll_past = $row['res_roll'];
		$tech_name_past = $row['tech_name'];
		$tech_designation_past = $row['tech_designation'];
		$tech_indxno_past = $row['tech_indxno'];
		$tech_contact_past = $row['tech_contact'];
		$tech_sub_past = $row['tech_sub'];
		$tech_photo_past = $row['tech_photo'];
	}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Regirtant Information</h4>
	<table>
		<tr>
			<td>Passing Year: </td>
			<td><input type="text" name="tech_id" value="<?php echo $tech_id_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Examination: </td>
			<td><input type="text" name="res_class" value="<?php echo $res_class_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Roll: </td>
			<td><input type="text" name="res_roll" value="<?php echo $res_roll_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="tech_name" value="<?php echo $tech_name_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Designation: </td>
			<td><input type="text" name="tech_designation" value="<?php echo $tech_designation_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Company No: </td>
			<td><input type="text" name="tech_indxno" value="<?php echo $tech_indxno_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Contact No: </td>
			<td><input type="text" name="tech_contact" value="<?php echo $tech_contact_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Address: </td>
			<td><input type="text" name="tech_sub" value="<?php echo $tech_sub_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Photo: </td>
			<td>
				<img src="upload/<?php echo $tech_photo_past; ?>" width="50px" height="50px" style="border:1px solid #333333;">
				<br />
				<input type="file" name="tech_photo" >
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
	  

  <!-- end #page -->
  <div id="footer-bgcontent">
    <div id="footer">
      <p>Copyright &copy; 2017 Momtaj Trading(Pvt.)Ltd. All rights reserved.</p>
    </div>
  </div>
  <!-- end #footer -->
</div>
<?php } ?>
</body>
</html>



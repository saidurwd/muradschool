<?php ob_start(); //error_reporting(0); ?>
<?php ob_start(); ?>
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
		
		if(empty($_FILES["hdr_logo"]["name"])){
			
			mysql_query("update hdr_tbl set hdr_en = '$_POST[hdr_en]', hdr_bn = '$_POST[hdr_bn]', hdr_code = '$_POST[hdr_code]', hdr_adrs = '$_POST[hdr_adrs]' where hdr_id = '$id'");
			
			header("location: index.php?action=_hdr_view");
		}
		else {
			
			$up_filename=$_FILES["hdr_logo"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
				echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
			}else{
				$result = mysql_query("SELECT * FROM hdr_tbl WHERE hdr_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['hdr_logo'];
					unlink($real1);
					move_uploaded_file($_FILES["hdr_logo"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql="update hdr_tbl set hdr_en = '$_POST[hdr_en]', hdr_bn = '$_POST[hdr_bn]', hdr_logo = '$f1', hdr_code = '$_POST[hdr_code]', hdr_adrs = '$_POST[hdr_adrs]' where hdr_id = '$id'";
				$rs=mysql_query($sql);
		
				header("location: index.php?action=_hdr_view");
			}
			
		}
		
	}
?>

          
<?php 

	$result = mysql_query("select * from hdr_tbl where hdr_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$hdr_en_past = $row['hdr_en'];
		$hdr_bn_past = $row['hdr_bn'];
		$hdr_code_past = $row['hdr_code'];
		$hdr_adrs_past = $row['hdr_adrs'];
		$hdr_logo_past = $row['hdr_logo'];
	}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Update Header Option...</h4>
	<table>
		<tr>
			<td>School name in English: </td>
			<td><input style="width: 420px; height: 25px;" type="text" name="hdr_en" value="<?php echo $hdr_en_past; ?>" required /></td>
		</tr>
		<tr>
			<td>School name in Bangla: </td>
			<td><input style="width: 420px; height: 25px;" type="text" name="hdr_bn" value="<?php echo $hdr_bn_past; ?>" required /></td>
		</tr>
		<tr>
			<td>School Logo: </td>
			<td>
				<img src="upload/<?php echo $hdr_logo_past; ?>" width="100px" height="100px" style="border:1px solid #333333;"><br />
				<input type="file" name="hdr_logo" >
			</td>
		</tr>
		<tr>
			<td>School Code, MPO, EIIN: </td>
			<td><textarea name="hdr_code" id="" cols="63" rows="3" required><?php echo $hdr_code_past; ?></textarea></td>
		</tr>
		<tr>
			<td>School Address and Established date: </td>
			<td><textarea name="hdr_adrs" id="" cols="63" rows="3" required><?php echo $hdr_adrs_past; ?></textarea></td>
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



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
<script type="text/javascript" src="core/ckeditor.js"></script>
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
		
		if(empty($_FILES["clg_str_photo"]["name"])){
			
			mysql_query("update clg_strc set clg_str_title = '$_POST[clg_str_title]', clg_str_date = '$_POST[clg_str_date]', clg_str_cap = '$_POST[clg_str_cap]', clg_str_desc = '$_POST[clg_str_desc]' where clg_str_id = '$id'");
			
			header("location: index.php?action=_clg_strc_view");
		}
		else {
			
			$up_filename=$_FILES["clg_str_photo"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
				echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
			}else{
				$result = mysql_query("SELECT * FROM clg_strc WHERE clg_str_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['clg_str_photo'];
					unlink($real1);
					move_uploaded_file($_FILES["clg_str_photo"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql="update clg_strc set clg_str_title = '$_POST[clg_str_title]', clg_str_date = '$_POST[clg_str_date]', clg_str_photo = '$f1', clg_str_cap = '$_POST[clg_str_cap]', clg_str_desc = '$_POST[clg_str_desc]' where clg_str_id = '$id'";
				$rs=mysql_query($sql);
		
				header("location: index.php?action=_clg_strc_view");
			}
			
		}
		
	}
?>

          
<?php 

	$result = mysql_query("select * from clg_strc where clg_str_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$clg_str_title_past = $row['clg_str_title'];
		$clg_str_date_past = $row['clg_str_date'];
		$clg_str_cap_past = $row['clg_str_cap'];
		$clg_str_desc_past = $row['clg_str_desc'];
		$clg_str_photo_past = $row['clg_str_photo'];
	}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Update college structure information...</h4>
	<table>
		<tr>
			<td>Title: </td>
			<td><input type="text" name="clg_str_title" value="<?php echo $clg_str_title_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Date: </td>
			<td><input type="text" name="clg_str_date" value="<?php echo $clg_str_date_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Photo: </td>
			<td>
				<img src="upload/<?php echo $clg_str_photo_past; ?>" width="200px" height="200px" style="border:1px solid #333333;"><br />
				<input type="file" name="clg_str_photo" >
			</td>
		</tr>
		<tr>
			<td>Caption: </td>
			<td><input type="text" name="clg_str_cap" value="<?php echo $clg_str_cap_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Description: </td>
			<td><textarea name="clg_str_desc" id="hist_text" cols="70" rows="10" required><?php echo $clg_str_desc_past; ?></textarea></td>
			<script>
				CKEDITOR.replace( 'hist_text' );
			</script>
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



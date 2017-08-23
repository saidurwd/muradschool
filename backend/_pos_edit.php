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
		
		if(empty($_FILES["pos_file"]["name"])){
			
			mysql_query("update pos_tbl set pos_title = '$_POST[pos_title]', pos_info = '$_POST[pos_info]' where pos_id = '$id'");
			
			header("location: index.php?action=_pos_view");
		}
		else {
			
			$up_filename=$_FILES["pos_file"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.pdf')&&($file_ext!='.doc')&&($file_ext!='.docx')&&($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')){
				echo "Only PDF, DOC, PNG, JPG, JPGE format are allowed to upload.";
			} else{
				$result = mysql_query("SELECT * FROM pos_tbl WHERE pos_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['pos_file'];
					unlink($real1);
					move_uploaded_file($_FILES["pos_file"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql="update pos_tbl set pos_title = '$_POST[pos_title]', pos_info = '$_POST[pos_info]', pos_file = '$f1' where pos_id = '$id'";
				$rs=mysql_query($sql);
		
				header("location: index.php?action=_pos_view");
			}
			
		}
		
	}
?>
       
<?php 

	$result = mysql_query("select * from pos_tbl where pos_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$pos_title_past = $row['pos_title'];
		$pos_file_past = $row['pos_file'];
		$pos_info_past = $row['pos_info'];
	}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Update Position</h4>
	<table>
		<tr>
			<td>Position title: </td>
			<td><input type="text" name="pos_title" value="<?php echo $pos_title_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Download File: </td>
			<td>
				<p style="color: gold;font-weight: bold;margin: 0;"><?php echo $pos_file_past; ?></p>
				<input type="file" name="pos_file" />
			</td>
		</tr>
		<tr>
			<td>Position Information: </td>
			<td><textarea name="pos_info" id="" cols="60" rows="5" required><?php echo $pos_info_past; ?></textarea></td>
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



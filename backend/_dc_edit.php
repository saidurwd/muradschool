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
		
		if(empty($_FILES["dc_doc"]["name"])){
			
			mysql_query("update dc_tbl set dc_title = '$_POST[dc_title]', dc_date = '$_POST[dc_date]' where dc_id = '$id'");
			
			header("location: index.php?action=_dc_view");
		}
		else {
			
			$up_filename=$_FILES["dc_doc"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.pdf')&&($file_ext!='.doc')&&($file_ext!='.docx')&&($file_ext!='.xls')&&($file_ext!='.xlsx')){
				echo "Only PDF, DOC, XLS format are allowed to upload.";
			} else{
				$result = mysql_query("SELECT * FROM dc_tbl WHERE dc_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['dc_doc'];
					unlink($real1);
					move_uploaded_file($_FILES["dc_doc"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql="update dc_tbl set dc_title = '$_POST[dc_title]', dc_date = '$_POST[dc_date]', dc_doc = '$f1' where dc_id = '$id'";
				$rs=mysql_query($sql);
		
				header("location: index.php?action=_dc_view");
			}
			
		}
		
	}
?>

          
<?php 

	$result = mysql_query("select * from dc_tbl where dc_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$dc_title_past = $row['dc_title'];
		$dc_date_past = $row['dc_date'];
		$dc_doc_past = $row['dc_doc'];
	}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Update notice board</h4>
	<table>
		<tr>
			<td>Title: </td>
			<td><textarea rows="4" cols="50" name="dc_title" required><?php echo $dc_title_past; ?></textarea></td>
		</tr>
		<tr>
			<td>Date: </td>
			<td><input type="text" name="dc_date" value="<?php echo $dc_date_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Upload File: </td>
			<td>
				<p style="color: gold;font-weight: bold;margin: 0;"><?php echo $dc_doc_past; ?></p>
				<input type="file" name="dc_doc" />
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



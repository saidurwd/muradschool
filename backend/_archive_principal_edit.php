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
		
		if(empty($_FILES["arch_prin_pto"]["name"])){
			
			mysql_query("update arch_prin set arch_prin_nam = '$_POST[arch_prin_nam]', arch_prin_yar = '$_POST[arch_prin_yar]', arch_prin_pos = '$_POST[arch_prin_pos]', arch_prin_mob = '$_POST[arch_prin_mob]' where arch_prin_id = '$id'");
			
			header("location: index.php?action=_archive_principal_view");
		}
		else {
		
			$up_filename=$_FILES["arch_prin_pto"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.jpg')&&($file_ext!='.jpge')&&($file_ext!='.png')&&($file_ext!='.gif')){
				echo "Only JPG, JPGE, PNG, GIF images are allowed to upload.";
			} else{
				$result = mysql_query("SELECT * FROM arch_prin WHERE arch_prin_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['arch_prin_pto'];
					unlink($real1);
					move_uploaded_file($_FILES["arch_prin_pto"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql="update arch_prin set arch_prin_nam = '$_POST[arch_prin_nam]', arch_prin_yar = '$_POST[arch_prin_yar]', arch_prin_pos = '$_POST[arch_prin_pos]', arch_prin_mob = '$_POST[arch_prin_mob]', arch_prin_pto = '$f1' where arch_prin_id = '$id'";
				$rs=mysql_query($sql);
		
				header("location: index.php?action=_archive_principal_view");
			}
		}
	}
?>
    
<?php 
	$result = mysql_query("select * from arch_prin where arch_prin_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$arch_prin_nam_past = $row['arch_prin_nam'];
		$arch_prin_yar_past = $row['arch_prin_yar'];
		$arch_prin_pos_past = $row['arch_prin_pos'];
		$arch_prin_mob_past = $row['arch_prin_mob'];
		$arch_prin_pto_past = $row['arch_prin_pto'];
	}
?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Update Archive Principal Information </h4>
	<table>
		<tr>
			<td>Principal Name: </td>
			<td><input type="text" name="arch_prin_nam" value="<?php echo $arch_prin_nam_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Principal Duration: </td>
			<td><input type="text" name="arch_prin_yar" value="<?php echo $arch_prin_yar_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Principal Position: </td>
			<td><input type="text" name="arch_prin_pos" value="<?php echo $arch_prin_pos_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Principal Contacty.no: </td>
			<td><input type="text" name="arch_prin_mob" value="<?php echo $arch_prin_mob_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Principal Photo: </td>
			<td>
				<img src="upload/<?php echo $arch_prin_pto_past; ?>" alt="" width="100" height="100" />
			</td>
			<td><input type="file" name="arch_prin_pto" /></td>
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



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

<style>
	#mycustomers2 {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		width: 100%;
		border-collapse: collapse;
	}
	#mycustomers2 td, #mycustomers2 th {
		font-size: 13px;
		border: 1px solid #98bf21;
		padding: 3px 3px 2px 3px;
	}
	#mycustomers2 th {
		font-size: 13px;
		text-align: left;
		padding-top: 5px;
		padding-bottom: 4px;
		color: #ffffff;
	}
	#mycustomers2 tr.alt td {
		color: #000000;
		background-color: #EAF2D3;
	}
	#mycustomers2 input{font-size: 13px;
		width: 80%;
	}
</style>
	
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
		
		if(empty($_FILES["std_reg_photo"]["name"])){
			
			mysql_query("update std_registry set std_reg_num = '$_POST[std_reg_num]', std_reg_father = '$_POST[std_reg_father]', std_reg_mother = '$_POST[std_reg_mother]', std_reg_addrs = '$_POST[std_reg_addrs]', std_reg_dob = '$_POST[std_reg_dob]', std_reg_instit = '$_POST[std_reg_instit]', std_reg_passyear = '$_POST[std_reg_passyear]', std_reg_section = '$_POST[std_reg_section]', std_reg_roll = '$_POST[std_reg_roll]', std_reg_resyear = '$_POST[std_reg_resyear]', std_reg_gpa = '$_POST[std_reg_gpa]', std_reg_admission = '$_POST[std_reg_admission]', std_reg_sakha = '$_POST[std_reg_sakha]', std_reg_class = '$_POST[std_reg_class]', std_reg_subcode = '$_POST[std_reg_subcode]' where std_reg_id = '$id'");
			
			header("location: index.php?action=_student_registry_view");
		}
		else {
			
			$up_filename=$_FILES["std_reg_photo"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
				echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
			}else{
				$result = mysql_query("SELECT * FROM std_registry WHERE std_reg_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['std_reg_photo'];
					unlink($real1);
					move_uploaded_file($_FILES["std_reg_photo"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql="update std_registry set std_reg_num = '$_POST[std_reg_num]', std_reg_father = '$_POST[std_reg_father]', std_reg_mother = '$_POST[std_reg_mother]', std_reg_addrs = '$_POST[std_reg_addrs]', std_reg_dob = '$_POST[std_reg_dob]', std_reg_instit = '$_POST[std_reg_instit]', std_reg_passyear = '$_POST[std_reg_passyear]', std_reg_section = '$_POST[std_reg_section]', std_reg_roll = '$_POST[std_reg_roll]', std_reg_resyear = '$_POST[std_reg_resyear]', std_reg_gpa = '$_POST[std_reg_gpa]', std_reg_admission = '$_POST[std_reg_admission]', std_reg_sakha = '$_POST[std_reg_sakha]', std_reg_class = '$_POST[std_reg_class]', std_reg_subcode = '$_POST[std_reg_subcode]', std_reg_photo = '$f1' where std_reg_id = '$id'";
				$rs=mysql_query($sql);
		
				header("location: index.php?action=_student_registry_view");
			}
			
		}
		
	}
?>

          
<?php 

	$result = mysql_query("select * from std_registry where std_reg_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$std_reg_num_past = $row['std_reg_num'];
		$std_reg_father_past = $row['std_reg_father'];
		$std_reg_mother_past = $row['std_reg_mother'];
		$std_reg_addrs_past = $row['std_reg_addrs'];
		$std_reg_dob_past = $row['std_reg_dob'];
		$std_reg_instit_past = $row['std_reg_instit'];
		$std_reg_passyear_past = $row['std_reg_passyear'];
		$std_reg_section_past = $row['std_reg_section'];
		$std_reg_roll_past = $row['std_reg_roll'];
		$std_reg_resyear_past = $row['std_reg_resyear'];
		$std_reg_gpa_past = $row['std_reg_gpa'];
		$std_reg_admission_past = $row['std_reg_admission'];
		$std_reg_sakha_past = $row['std_reg_sakha'];
		$std_reg_class_past = $row['std_reg_class'];
		$std_reg_subcode_past = $row['std_reg_subcode'];
		$std_reg_photo_past = $row['std_reg_photo'];
	}

?>
		<div id="mycustomers2">
		<h2>Update your information</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<table id="mycustomers2" width="" border="1" style="font-size: 12px;">
				<tr>
					<th align="center">ছাত্র/ছাত্রী নাম</th>
					<td><input type="text" name="std_reg_num" id="" value="<?php echo $std_reg_num_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">পিতার নাম</th>
					<td><input type="text" name="std_reg_father" id="" value="<?php echo $std_reg_father_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">মাতার নাম</th>
					<td><input type="text" name="std_reg_mother" id="" value="<?php echo $std_reg_mother_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">অভিভাবকের নাম ঠিকানা</th>
					<td><textarea name="std_reg_addrs" id="" cols="50" rows="3" required ><?php echo $std_reg_addrs_past; ?></textarea></td>
				</tr>
				<tr>
					<th align="center">জন্ম তারিখ</th>
					<td><input type="text" name="std_reg_dob" id="" value="<?php echo $std_reg_dob_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">যে প্রতিষ্ঠান হতে পাস</th>
					<td><input type="text" name="std_reg_instit" id="" value="<?php echo $std_reg_instit_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">পাশের বছর</th>
					<td><input type="text" name="std_reg_passyear" id="" value="<?php echo $std_reg_passyear_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">বিভাগ</th>
					<td><input type="text" name="std_reg_section" id="" value="<?php echo $std_reg_section_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">রোল নং</th>
					<td><input type="text" name="std_reg_roll" id="" value="<?php echo $std_reg_roll_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">নিবন্ধন ও শিক্ষাবর্ষ</th>
					<td><input type="text" name="std_reg_resyear" id="" value="<?php echo $std_reg_resyear_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">জি. পি. এ</th>
					<td><input type="text" name="std_reg_gpa" id="" value="<?php echo $std_reg_gpa_past; ?>" required /></td> 
				</tr>
				<tr>
					<th align="center">যে শ্রেনীতে ভর্তি</th>
					<td><input type="text" name="std_reg_admission" id="" value="<?php echo $std_reg_admission_past; ?>" required /></td> 
				</tr>
				<tr>
					<th align="center">শাখা</th>
					<td><input type="text" name="std_reg_sakha" id="" value="<?php echo $std_reg_sakha_past; ?>" required /></td> 
				</tr>
				<tr>
					<th align="center">শ্রেণী</th>
					<td><input type="text" name="std_reg_class" id="" value="<?php echo $std_reg_class_past; ?>" required /></td> 
				</tr>
				<tr>
					<th align="center">পাঠ্য বিষয় ও কোড</th>
					<td><textarea name="std_reg_subcode" id="" cols="50" rows="3" required ><?php echo $std_reg_subcode_past; ?></textarea></td>
				</tr>
				<tr>
					<th align="center">ছবি</th>
					<td>
						<img src="upload/<?php echo $std_reg_photo_past; ?>" alt="" width="50px" height="50px" />
						<br />
						<input type="file" name="std_reg_photo" id="" />
					</td>
				</tr>
			</table>
			<p>
				<input style="color: red;float: left;font-size: 16px;margin-top: 10px;padding: 0 10px; width: 15%;" type="submit" value="Update" name="form1"/>
			</p>
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
		</form>
		</div>
		  
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



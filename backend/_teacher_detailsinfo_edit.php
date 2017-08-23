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
		
		if(empty($_FILES["tech_detailinfo_pic"]["name"])){
			
			mysql_query("update tech_detailinfo_tbl set tech_detailinfo_num = '$_POST[tech_detailinfo_num]', tech_detailinfo_sex = '$_POST[tech_detailinfo_sex]', tech_detailinfo_desig = '$_POST[tech_detailinfo_desig]', tech_detailinfo_attenddate = '$_POST[tech_detailinfo_attenddate]', tech_detailinfo_presentdate = '$_POST[tech_detailinfo_presentdate]', tech_detailinfo_mpodate = '$_POST[tech_detailinfo_mpodate]', tech_detailinfo_dob = '$_POST[tech_detailinfo_dob]', tech_detailinfo_ssc = '$_POST[tech_detailinfo_ssc]', tech_detailinfo_hsc = '$_POST[tech_detailinfo_hsc]', tech_detailinfo_deg = '$_POST[tech_detailinfo_deg]', tech_detailinfo_hon = '$_POST[tech_detailinfo_hon]', tech_detailinfo_bed = '$_POST[tech_detailinfo_bed]', tech_detailinfo_med = '$_POST[tech_detailinfo_med]', tech_detailinfo_ma = '$_POST[tech_detailinfo_ma]', tech_detailinfo_salary = '$_POST[tech_detailinfo_salary]' where tech_detailinfo_id = '$id'");
			
			header("location: index.php?action=_teacher_detailsinfo_view");
		}
		else {
			
			$up_filename=$_FILES["tech_detailinfo_pic"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
				echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
			}else{
				$result = mysql_query("SELECT * FROM tech_detailinfo_tbl WHERE tech_detailinfo_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['tech_detailinfo_pic'];
					unlink($real1);
					move_uploaded_file($_FILES["tech_detailinfo_pic"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql="update tech_detailinfo_tbl set tech_detailinfo_num = '$_POST[tech_detailinfo_num]', tech_detailinfo_sex = '$_POST[tech_detailinfo_sex]', tech_detailinfo_desig = '$_POST[tech_detailinfo_desig]', tech_detailinfo_attenddate = '$_POST[tech_detailinfo_attenddate]', tech_detailinfo_presentdate = '$_POST[tech_detailinfo_presentdate]', tech_detailinfo_mpodate = '$_POST[tech_detailinfo_mpodate]', tech_detailinfo_dob = '$_POST[tech_detailinfo_dob]', tech_detailinfo_ssc = '$_POST[tech_detailinfo_ssc]', tech_detailinfo_hsc = '$_POST[tech_detailinfo_hsc]', tech_detailinfo_deg = '$_POST[tech_detailinfo_deg]', tech_detailinfo_hon = '$_POST[tech_detailinfo_hon]', tech_detailinfo_bed = '$_POST[tech_detailinfo_bed]', tech_detailinfo_med = '$_POST[tech_detailinfo_med]', tech_detailinfo_ma = '$_POST[tech_detailinfo_ma]', tech_detailinfo_salary = '$_POST[tech_detailinfo_salary]', tech_detailinfo_pic = '$f1' where tech_detailinfo_id = '$id'";
				$rs=mysql_query($sql);
		
				header("location: index.php?action=_teacher_detailsinfo_view");
			}
			
		}
		
	}
?>

          
<?php 

	$result = mysql_query("select * from tech_detailinfo_tbl where tech_detailinfo_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$tech_detailinfo_num_past = $row['tech_detailinfo_num'];
		$tech_detailinfo_sex_past = $row['tech_detailinfo_sex'];
		$tech_detailinfo_desig_past = $row['tech_detailinfo_desig'];
		$tech_detailinfo_attenddate_past = $row['tech_detailinfo_attenddate'];
		$tech_detailinfo_presentdate_past = $row['tech_detailinfo_presentdate'];
		$tech_detailinfo_mpodate_past = $row['tech_detailinfo_mpodate'];
		$tech_detailinfo_dob_past = $row['tech_detailinfo_dob'];
		$tech_detailinfo_ssc_past = $row['tech_detailinfo_ssc'];
		$tech_detailinfo_hsc_past = $row['tech_detailinfo_hsc'];
		$tech_detailinfo_deg_past = $row['tech_detailinfo_deg'];
		$tech_detailinfo_hon_past = $row['tech_detailinfo_hon'];
		$tech_detailinfo_bed_past = $row['tech_detailinfo_bed'];
		$tech_detailinfo_med_past = $row['tech_detailinfo_med'];
		$tech_detailinfo_ma_past = $row['tech_detailinfo_ma'];
		$tech_detailinfo_salary_past = $row['tech_detailinfo_salary'];
		$tech_detailinfo_pic_past = $row['tech_detailinfo_pic'];
	}

?>
		<div id="mycustomers2">
		<h2>Update your information</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<table id="mycustomers2" width="" border="1" style="font-size: 12px;">
				<tr>
					<th align="center">শিক্ষক/কর্মচারীর নাম</th>
					<td><input type="text" name="tech_detailinfo_num" id="" value="<?php echo $tech_detailinfo_num_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">লিঙ্গ পুরুষ,মহিলা</th>
					<td><input type="text" name="tech_detailinfo_sex" id="" value="<?php echo $tech_detailinfo_sex_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">পদবী</th>
					<td><input type="text" name="tech_detailinfo_desig" id="" value="<?php echo $tech_detailinfo_desig_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">চাকুরীতে প্রথম যোগদানের তারিখ</th>
					<td><input type="text" name="tech_detailinfo_attenddate" id="" value="<?php echo $tech_detailinfo_attenddate_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">বর্তমান পদে যোগদানের তারিখ</th>
					<td><input type="text" name="tech_detailinfo_presentdate" id="" value="<?php echo $tech_detailinfo_presentdate_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">এমপিও ভূক্তির তারিখ</th>
					<td><input type="text" name="tech_detailinfo_mpodate" id="" value="<?php echo $tech_detailinfo_mpodate_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">জন্ম তারিখ</th>
					<td><input type="text" name="tech_detailinfo_dob" id="" value="<?php echo $tech_detailinfo_dob_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">শিক্ষাগত যোগ্যতা ( বিভাগ বা জিপিএ, শ্রেণি ইত্যাদি প্রযোজ্য )</th>
					<td>
						এসএসসি /সমমান
						&nbsp;&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_ssc" id="" value="<?php echo $tech_detailinfo_ssc_past; ?>" required />
						<br />
						এইচ এসসি /সমমান
						<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_hsc" id="" value="<?php echo $tech_detailinfo_hsc_past; ?>" required />
						<br />
						স্নাতক পাস /ফাজিল
						&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_deg" id="" value="<?php echo $tech_detailinfo_deg_past; ?>" required />
						<br />
						স্নাতক সম্মান
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_hon" id="" value="<?php echo $tech_detailinfo_hon_past; ?>" required />
						<br />
						বিএড
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_bed" id="" value="<?php echo $tech_detailinfo_bed_past; ?>" required />
						<br />
						এমএড
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_med" id="" value="<?php echo $tech_detailinfo_med_past; ?>" required />
						<br />
						স্নাতকোত্তর /কামিল
						&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_ma" id="" value="<?php echo $tech_detailinfo_ma_past; ?>" required />
					</td>
				</tr>
				<tr>
					<th align="center">জাতীয় বেতন স্কেল</th>
					<td><input type="text" name="tech_detailinfo_salary" id="" value="<?php echo $tech_detailinfo_salary_past; ?>" required /></td>
				</tr>
				<tr>
					<th align="center">ছবি</th>
					<td>
						<img src="upload/<?php echo $tech_detailinfo_pic_past; ?>" alt="" width="50px" height="50px" />
						<br />
						<input type="file" name="tech_detailinfo_pic" id="" />
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



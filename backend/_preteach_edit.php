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
		
		if(empty($_FILES["tech_photo"]["name"])){
			
			mysql_query("update preteach_tbl set tech_id = '$_POST[tech_id]', tech_name = '$_POST[tech_name]', tech_designation = '$_POST[tech_designation]', tech_indxno = '$_POST[tech_indxno]', tech_contact = '$_POST[tech_contact]', tech_sub = '$_POST[tech_sub]' where t_id = '$id'");
			
			header("location: index.php?action=_preteach_view");
		}
		else {
			
			$up_filename=$_FILES["tech_photo"]["name"];
			$file_basename = substr($up_filename, 0, strripos($up_filename, '.')); 
			$file_ext = substr($up_filename, strripos($up_filename, '.')); 
			$f1 = strtotime(date('Y-m-d H:i:s')) . $file_ext;
			
			if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
				echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
			}else{
				$result = mysql_query("SELECT * FROM preteach_tbl WHERE t_id=$id");
				while($row=mysql_fetch_assoc($result))
				{
					$real1 = 'upload/'.$row['tech_photo'];
					unlink($real1);
					move_uploaded_file($_FILES["tech_photo"]["tmp_name"],"upload/" . $f1);
				}
				
				$sql = "update preteach_tbl set tech_id = '$_POST[tech_id]', tech_name = '$_POST[tech_name]', tech_designation = '$_POST[tech_designation]', tech_indxno = '$_POST[tech_indxno]', tech_contact = '$_POST[tech_contact]', tech_sub = '$_POST[tech_sub]', tech_photo = '$f1' where t_id = '$id'";
				$rs = mysql_query($sql);
		
				header("location: index.php?action=_preteach_view");
			}
			
		}
		
	}
?>

          
<?php 

	$result = mysql_query("select * from preteach_tbl where t_id='$id'");
	while($row = mysql_fetch_array($result))
	{
		$tech_id_past = $row['tech_id'];
		$tech_name_past = $row['tech_name'];
		$tech_designation_past = $row['tech_designation'];
		$tech_indxno_past = $row['tech_indxno'];
		$tech_contact_past = $row['tech_contact'];
		$tech_sub_past = $row['tech_sub'];
		$tech_photo_past = $row['tech_photo'];
	}

?>
<form action="" method="post"  enctype="multipart/form-data">
	<h4>Teacher Information</h4>
	<table>
		<tr>
			<td>Teacher ID: </td>
			<td><input type="text" name="tech_id" value="<?php echo $tech_id_past; ?>" required /></td>
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
			<td>Index No: </td>
			<td><input type="text" name="tech_indxno" value="<?php echo $tech_indxno_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Contact No: </td>
			<td><input type="text" name="tech_contact" value="<?php echo $tech_contact_past; ?>" required /></td>
		</tr>
		<tr>
			<td>Subject: </td>
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
	  
	  
	  
<!-- start # sidebar -->
	  
<?php if($_SESSION['UserType']==1){ ?>
<div id="sidebar">
<ul>

<div id="menuwrapper">

<ul>
<h2>User Menu</h2>
<li><a href="index.php?action=userList"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">User list</font></strong></a></li>
<li><a href="index.php?action=newUser"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">New User</font></strong></a></li>
</ul>

</div>		 

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Homepage content</font></strong></a>
</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Homepage content Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Homepage content View</font></strong></a></li>
</ul>
</li>

<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present Database</font></strong></a>
<ul>

<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Teacher</font></strong></a>
<ul>
<li><a href="index.php?action=_teach_sci_add"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present Science Teacher Input</font></strong></a></li>
<li><a href="index.php?action=_teach_sci_view"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present Science Teacher View</font></strong></a></li>
<li><a href="index.php?action=teachercreateArts"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present Arts Teacher Input</font></strong></a></li>
<li><a href="index.php?action=teacher1arts"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present Arts Teacher View</font></strong></a></li>
<li><a href="index.php?action=teachercreatecommerce"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present Commerce Teacher Input</font></strong></a></li>
<li><a href="index.php?action=teacher1commerce"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present Commerce Teacher View</font></strong></a></li>
<li><a href="index.php?action=teachercreateothers"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present others Teacher Input</font></strong></a></li>
<li><a href="index.php?action=teacher1others"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present others Teacher View</font></strong></a></li>

</ul>
</li>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Staff(3/4 class)</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">3rd & 4th Staff Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">3rd & 4th Staff View</font></strong></a></li>
</ul>
</li>

<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Students</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 1st year Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 1st year view</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 2nd year Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 2nd year view</font></strong></a></li>
<li><a href="index.php?action=teachercreate">Present Degree 1st year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree 1st year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree 2nd year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree 2nd year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree final year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree final year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree 1st year Input</a></li><ul>
<li><a href="index.php?action=teacher1">Present HONs 1st year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 1st year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs 2nd year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 2nd year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs 3rd year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 3rd year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs final year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs final year view</a></li></ul>
<ul>
<li><a href="index.php?action=teacher1">Present Masters preliminary Input</a></li>
<li><a href="index.php?action=teacher1">Present Masters preliminary view</a></li>
<li><a href="index.php?action=teacher1">Present Masters final Input</a></li>
<li><a href="index.php?action=teacher1">Present Masters final view</a></li>
</ul>
</ul>
</li>
</ul> 
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Exam Result</font></strong></a>
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Board/University exam. result</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 1st year Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 1st year view</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 2nd year Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 2nd year view</font></strong></a></li>
<li><a href="index.php?action=teachercreate">Present Degree 1st year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree 1st year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree 2nd year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree 2nd year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree final year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree final year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree 1st year Input</a></li><ul>
<li><a href="index.php?action=teacher1">Present HONs 1st year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 1st year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs 2nd year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 2nd year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs 3rd year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 3rd year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs final year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs final year view</a></li></ul>
<ul>
<li><a href="index.php?action=teacher1">Present Masters preliminary Input</a></li>
<li><a href="index.php?action=teacher1">Present Masters preliminary view</a></li>
<li><a href="index.php?action=teacher1">Present Masters final Input</a></li>
<li><a href="index.php?action=teacher1">Present Masters final view</a></li>
</ul>
</ul>

</li>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">College internal exam. result</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 1st year Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 1st year view</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 2nd year Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Present HSC 2nd year view</font></strong></a></li>
<li><a href="index.php?action=teachercreate">Present Degree 1st year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree 1st year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree 2nd year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree 2nd year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree final year Input</a></li>
<li><a href="index.php?action=teacher1">Present Degree final year view</a></li>
<li><a href="index.php?action=teachercreate">Present Degree 1st year Input</a></li><ul>
<li><a href="index.php?action=teacher1">Present HONs 1st year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 1st year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs 2nd year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 2nd year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs 3rd year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs 3rd year view</a></li>
<li><a href="index.php?action=teacher1">Present HONs final year Input</a></li>
<li><a href="index.php?action=teacher1">Present HONs final year view</a></li></ul>
<ul>
<li><a href="index.php?action=teacher1">Present Masters preliminary Input</a></li>
<li><a href="index.php?action=teacher1">Present Masters preliminary view</a></li>
<li><a href="index.php?action=teacher1">Present Masters final Input</a></li>
<li><a href="index.php?action=teacher1">Present Masters final view</a></li>
</ul>
</ul>
</li>
</ul> 
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Document Management</font></strong></a>

<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Testimonial Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Testimonial View</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Certificate Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Certificate View</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Transfer Certificate Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Transfer Certificate View</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Tot list Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Tot list View</font></strong></a></li>
</ul>

</li>
</ul>
</div>

<div id="menuwrapper">

<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Subject and position info</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Create:Subject and position Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Create:Subject and position View</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Complete:Subject and position Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Complete:Subject and position View</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Incomplete:Subject and position Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Incomplete:Subject and position View</font></strong></a></li>
</ul>
</li>
</ul>
</div>


<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Different Notice</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Different Notice Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Different Notice View</font></strong></a></li>
</ul>
</li>
</ul>
</div>


<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Latest News</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Latest News Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Latest News View</font></strong></a></li>
</ul>
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Curriculum activities</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Curriculum activities Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Curriculum activities View</font></strong></a></li>
</ul>
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">College Panel</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Student's Panel input</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Student's Panel update</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">teacher's Panel input</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">teacher's Panel update</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Gardian Panel input</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Gardian Panel update</font></strong></a></li>
</ul>
</li>
</ul>
</div>	


<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Academic Calender</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Academic Calender input</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Academic Calender update</font></strong></a></li>
</ul>
</li>
</ul>
</div>	

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Archive</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Archive input</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Archive update</font></strong></a></li>
</ul>
</li>
</ul>
</div>	

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Class Routine</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Science routine input</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Science routine update</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Commerce routine input</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Commerce routine update</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Arts routine</font></strong></a></li>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Arts routine</font></strong></a></li>
</ul>
</li>
</ul>
</div>	

<div id="menuwrapper">

<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">College History</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">College History Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">College History View</font></strong></a></li>
</ul>
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">College Structure</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">College Structure Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">College Structure View</font></strong></a></li>
</ul>
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Addmission info</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Addmission info Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Addmission info View</font></strong></a></li>
</ul>
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Various Form</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Various Form Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Various Form View</font></strong></a></li>
</ul>
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Office management</font></strong></a>
<ul>
<li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Teacher/Staff management Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Teacher/Staff management View</font></strong></a></li><li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">salary sheet Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">salary sheet View</font></strong></a></li><li><a href="index.php?action=teachercreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">accounnts management Input</font></strong></a></li>
<li><a href="index.php?action=teacher1"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">accounts management View</font></strong></a></li>
</ul>
</li>
</ul>
</div>



<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Photo Gallary</font></strong></a>
<ul>
<li><a href="index.php?action=pgcreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Photo Gallary input</font></strong></a></li>
<li><a href="index.php?action=pg"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Photo Gallary update</font></strong></a></li>
</ul>
</li>
</ul>
</div>	
<div id="menuwrapper">
<ul>
<li><a><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Library Info</font></strong></a>
<ul>
<li><a href="index.php?action=librarycreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Library Info input</font></strong></a></li>
<li><a href="library.php?action=library"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Library Info update</font></strong></a></li>
</ul>
</li>
</ul>
</div>	

<div id="menuwrapper">
<ul>
<li><a href="index.php?action=upload"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Upload corner pdf/doc/img</font></strong></a>
<ul>
<li><a href="index.php?action=librarycreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Upload data input</font></strong></a></li>
<li><a href="library.php?action=library"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Upload data update</font></strong></a></li>
</ul>
</li>
</ul>
</div>

<div id="menuwrapper">
<ul>
<li><a href="index.php?action=difpagein"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Attendance</font></strong></a>
<ul>
<li><a href="index.php?action=librarycreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Attendance input</font></strong></a></li>
<li><a href="library.php?action=library"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">Attendance update</font></strong></a></li>
</ul>
</li>
<li><a href="index.php?action=difpageup"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">GB/Management</font></strong></a>
<ul>
<li><a href="index.php?action=librarycreate"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">GB/Management data input</font></strong></a></li>
<li><a href="library.php?action=library"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" color="#003300">GB/Management data update</font></strong></a></li>
</ul>
</li>
</ul>
</div>


<?php } ?>

</ul>
</div>
      <!-- end #sidebar -->
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



<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['tech_detailinfo_pic']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['tech_detailinfo_pic']['tmp_name'];
		$tech_detailinfo_pic = $_FILES["tech_detailinfo_pic"] ["name"];
		$tec_photo_name= addslashes($_FILES['tech_detailinfo_pic']['name']);
		$size = $_FILES["tech_detailinfo_pic"] ["size"];
		$error = $_FILES["tech_detailinfo_pic"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$tech_detailinfo_pic =$_FILES["tech_detailinfo_pic"]["name"];
				$tech_detailinfo_num = $_POST['tech_detailinfo_num'];
				$tech_detailinfo_sex = $_POST['tech_detailinfo_sex'];
				$tech_detailinfo_desig = $_POST['tech_detailinfo_desig'];
				$tech_detailinfo_attenddate = $_POST['tech_detailinfo_attenddate'];
				$tech_detailinfo_presentdate = $_POST['tech_detailinfo_presentdate'];
				$tech_detailinfo_mpodate = $_POST['tech_detailinfo_mpodate'];
				$tech_detailinfo_dob = $_POST['tech_detailinfo_dob'];
				$tech_detailinfo_ssc = $_POST['tech_detailinfo_ssc'];
				$tech_detailinfo_hsc = $_POST['tech_detailinfo_hsc'];
				$tech_detailinfo_deg = $_POST['tech_detailinfo_deg'];
				$tech_detailinfo_hon = $_POST['tech_detailinfo_hon'];
				$tech_detailinfo_bed = $_POST['tech_detailinfo_bed'];
				$tech_detailinfo_med = $_POST['tech_detailinfo_med'];
				$tech_detailinfo_ma = $_POST['tech_detailinfo_ma'];
				$tech_detailinfo_salary = $_POST['tech_detailinfo_salary'];
				
				$file_ext = substr($tech_detailinfo_pic, strripos($tech_detailinfo_pic, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
					echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["tech_detailinfo_pic"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["tech_detailinfo_pic"]["tmp_name"]);
					
					mysql_query("insert into tech_detailinfo_tbl (tech_detailinfo_num, tech_detailinfo_sex, tech_detailinfo_desig, tech_detailinfo_attenddate, tech_detailinfo_presentdate, tech_detailinfo_mpodate, tech_detailinfo_dob, tech_detailinfo_ssc, tech_detailinfo_hsc, tech_detailinfo_deg, tech_detailinfo_hon, tech_detailinfo_bed, tech_detailinfo_med, tech_detailinfo_ma, tech_detailinfo_salary, tech_detailinfo_pic) 
					values('$tech_detailinfo_num', '$tech_detailinfo_sex', '$tech_detailinfo_desig', '$tech_detailinfo_attenddate', '$tech_detailinfo_presentdate', '$tech_detailinfo_mpodate', '$tech_detailinfo_dob', '$tech_detailinfo_ssc', '$tech_detailinfo_hsc', '$tech_detailinfo_deg', '$tech_detailinfo_hon', '$tech_detailinfo_bed', '$tech_detailinfo_med', '$tech_detailinfo_ma', '$tech_detailinfo_salary', '$f1')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Teacher Details information input has been successfully</p>";
				}
			}
			//header("location: index.php?action=_stu_mspre_view");
		}
	}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Teacher Details information</title>
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
</head>
<body>
	<h2>পদবি ও শিক্ষগত যোগ্যতাভিত্তিক শিক্ষক/কর্মচারীর তথ্য বিবরণী</h2>
	<div align="center">
		<form action="" method="post" enctype="multipart/form-data">
			<table id="mycustomers2" width="" border="1" style="font-size: 12px;">
				<tr>
					<th align="center">শিক্ষক/কর্মচারীর নাম</th>
					<td><input type="text" name="tech_detailinfo_num" id="" placeholder="MD Hafiz" required /></td>
				</tr>
				<tr>
					<th align="center">লিঙ্গ পুরুষ,মহিলা</th>
					<td><input type="text" name="tech_detailinfo_sex" id="" placeholder="Male" required /></td>
				</tr>
				<tr>
					<th align="center">পদবী</th>
					<td><input type="text" name="tech_detailinfo_desig" id="" placeholder="PRINCIPAL" required /></td>
				</tr>
				<tr>
					<th align="center">চাকুরীতে প্রথম যোগদানের তারিখ</th>
					<td><input type="text" name="tech_detailinfo_attenddate" id="" placeholder="28/02/2000" required /></td>
				</tr>
				<tr>
					<th align="center">বর্তমান পদে যোগদানের তারিখ</th>
					<td><input type="text" name="tech_detailinfo_presentdate" id="" placeholder="28/02/2000" required /></td>
				</tr>
				<tr>
					<th align="center">এমপিও ভূক্তির তারিখ</th>
					<td><input type="text" name="tech_detailinfo_mpodate" id="" placeholder="01/05/2002" required /></td>
				</tr>
				<tr>
					<th align="center">জন্ম তারিখ</th>
					<td><input type="text" name="tech_detailinfo_dob" id="" placeholder="09/10/1971" required /></td>
				</tr>
				<tr>
					<th align="center">শিক্ষাগত যোগ্যতা ( বিভাগ বা জিপিএ, শ্রেণি ইত্যাদি প্রযোজ্য )</th>
					<td>
						এসএসসি /সমমান
						&nbsp;&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_ssc" id="" placeholder="2ND" required />
						<br />
						এইচ এসসি /সমমান
						<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_hsc" id="" placeholder="2ND" required />
						<br />
						স্নাতক পাস /ফাজিল
						&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_deg" id="" placeholder="2ND" required />
						<br />
						স্নাতক সম্মান
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_hon" id="" placeholder="2ND" required />
						<br />
						বিএড
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_bed" id="" placeholder="None" required />
						<br />
						এমএড
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_med" id="" placeholder="None" required />
						<br />
						স্নাতকোত্তর /কামিল
						&nbsp;&nbsp;<input style="width: 280px;margin-bottom: 5px;" type="text" name="tech_detailinfo_ma" id="" placeholder="2ND" required />
					</td>
				</tr>
				<tr>
					<th align="center">জাতীয় বেতন স্কেল</th>
					<td><input type="text" name="tech_detailinfo_salary" id="" placeholder="22250" required /></td>
				</tr>
				<tr>
					<th align="center">ছবি</th>
					<td><input type="file" name="tech_detailinfo_pic" id="" required /></td> 
				</tr>
			</table>
			<p>
				<input style="color: red;float: left;font-size: 16px;margin-top: 10px;padding: 0 10px;" type="submit" value="Save" name="form2"/>
				<input style="color: blue;float: left;font-size: 16px;margin-top: 10px;padding: 0 10px;" type="reset" value="Reset" name="form2"/>
			</p>
		</form>
	</div>
</body>
</html>
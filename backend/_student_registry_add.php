<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');

	if (!isset($_FILES['std_reg_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['std_reg_photo']['tmp_name'];
		$std_reg_photo = $_FILES["std_reg_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['std_reg_photo']['name']);
		$size = $_FILES["std_reg_photo"] ["size"];
		$error = $_FILES["std_reg_photo"] ["error"];

		if ($error > 0){
			echo"You need to input all fields.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$std_reg_photo =$_FILES["std_reg_photo"]["name"];
				$std_reg_num = $_POST['std_reg_num'];
				$std_reg_father = $_POST['std_reg_father'];
				$std_reg_mother = $_POST['std_reg_mother'];
				$std_reg_addrs = $_POST['std_reg_addrs'];
				$std_reg_dob = $_POST['std_reg_dob'];
				$std_reg_instit = $_POST['std_reg_instit'];
				$std_reg_passyear = $_POST['std_reg_passyear'];
				$std_reg_section = $_POST['std_reg_section'];
				$std_reg_roll = $_POST['std_reg_roll'];
				$std_reg_resyear = $_POST['std_reg_resyear'];
				$std_reg_gpa = $_POST['std_reg_gpa'];
				$std_reg_admission = $_POST['std_reg_admission'];
				$std_reg_sakha = $_POST['std_reg_sakha'];
				$std_reg_class = $_POST['std_reg_class'];
				$std_reg_subcode = $_POST['std_reg_subcode'];
				
				$file_ext = substr($std_reg_photo, strripos($std_reg_photo, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
					echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["std_reg_photo"]["tmp_name"],"upload/" . $f1);	
					@unlink($_FILES["std_reg_photo"]["tmp_name"]);
					
					mysql_query("insert into std_registry (std_reg_num, std_reg_father, std_reg_mother, std_reg_addrs, std_reg_dob, std_reg_instit, std_reg_passyear, std_reg_section, std_reg_roll, std_reg_resyear, std_reg_gpa, std_reg_admission, std_reg_sakha, std_reg_class, std_reg_subcode, std_reg_photo) 
					values('$std_reg_num', '$std_reg_father', '$std_reg_mother', '$std_reg_addrs', '$std_reg_dob', '$std_reg_instit', '$std_reg_passyear', '$std_reg_section', '$std_reg_roll', '$std_reg_resyear', '$std_reg_gpa', '$std_reg_admission', '$std_reg_sakha', '$std_reg_class', '$std_reg_subcode', '$f1')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Student registry data input has been successfully</p>";
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
	<title>Institute Salary Sheet</title>
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
	<h2>ছাত্র/ছাত্রী ভর্তি তথ্য রেজিষ্ট</h2>
	<div align="center">
		<form action="" method="post" enctype="multipart/form-data">
			<table id="mycustomers2" width="" border="1" style="font-size: 12px;">
				<tr>
					<th align="center">ছাত্র/ছাত্রী নাম</th>
					<td><input type="text" name="std_reg_num" id="" placeholder="হাফিজুর রহমান" required /></td>
				</tr>
				<tr>
					<th align="center">পিতার নাম</th>
					<td><input type="text" name="std_reg_father" id="" placeholder="আবুল হাসান" required /></td>
				</tr>
				<tr>
					<th align="center">মাতার নাম</th>
					<td><input type="text" name="std_reg_mother" id="" placeholder="জাহানারা বেগম" required /></td>
				</tr>
				<tr>
					<th align="center">অভিভাবকের নাম ঠিকানা</th>
					<td><textarea name="std_reg_addrs" id="" cols="50" rows="3" placeholder="গ্রামঃ জাফরপুর, পোস্টঃ রাজঘাট, থানাঃ অভয়নগর, জেলাঃ যশোর।" required ></textarea></td>
				</tr>
				<tr>
					<th align="center">জন্ম তারিখ</th>
					<td><input type="text" name="std_reg_dob" id="" placeholder="০৬/১১/১৯৮৭" required /></td>
				</tr>
				<tr>
					<th align="center">যে প্রতিষ্ঠান হতে পাস</th>
					<td><input type="text" name="std_reg_instit" id="" placeholder="রাজঘাট জাফরপুর হাই স্কুল" required /></td>
				</tr>
				<tr>
					<th align="center">পাশের বছর</th>
					<td><input type="text" name="std_reg_passyear" id="" placeholder="২০১৪" required /></td>
				</tr>
				<tr>
					<th align="center">বিভাগ</th>
					<td><input type="text" name="std_reg_section" id="" placeholder="বিজ্ঞান" required /></td>
				</tr>
				<tr>
					<th align="center">রোল নং</th>
					<td><input type="text" name="std_reg_roll" id="" placeholder="১০৮৯" required /></td>
				</tr>
				<tr>
					<th align="center">নিবন্ধন ও শিক্ষাবর্ষ</th>
					<td><input type="text" name="std_reg_resyear" id="" placeholder="২০১০-১১" required /></td>
				</tr>
				<tr>
					<th align="center">জি. পি. এ</th>
					<td><input type="text" name="std_reg_gpa" id="" placeholder="৫.০০" required /></td> 
				</tr>
				<tr>
					<th align="center">যে শ্রেনীতে ভর্তি</th>
					<td><input type="text" name="std_reg_admission" id="" placeholder="৯ম" required /></td> 
				</tr>
				<tr>
					<th align="center">শাখা</th>
					<td><input type="text" name="std_reg_sakha" id="" placeholder="ক" required /></td> 
				</tr>
				<tr>
					<th align="center">শ্রেণী</th>
					<td><input type="text" name="std_reg_class" id="" placeholder="১০ম" required /></td> 
				</tr>
				<tr>
					<th align="center">পাঠ্য বিষয় ও কোড</th>
					<td><textarea name="std_reg_subcode" id="" cols="50" rows="3" placeholder="বাংলা-১০১, অংক-১০২, ইংলিশ-১০৩" required ></textarea></td>
				</tr>
				<tr>
					<th align="center">ছবি</th>
					<td><input type="file" name="std_reg_photo" id="" required /></td> 
				</tr>
			</table>
			<p>
				<input style="color: red;float: left;font-size: 16px;margin-top: 10px;padding: 0 10px;" type="submit" value="Save" name="form2"/>
			</p>
		</form>
	</div>
</body>
</html>
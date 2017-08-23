<?php include('dbconnect.php'); ?>
<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>College</title>
</head>
<body bgcolor="#CCCCCC">
  <div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
     </div>
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
	<div align="center"> 
		<?PHP include("pdf/head.php"); ?>
		<?php include("pdf/motionmenu.php"); ?>
		<div class="maincontent">
			<h2>শিক্ষক/কর্মচারীদের ছুটি ব্যবস্হাপনা</h2>
			<form action="" method="post">
				<table style="width: 800px;">
					<?php
						session_start();
						
						if(isset($_POST['form1'])){
						
							if(isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"])
							{
								$rd_nam = $_POST['rd_nam'];
								$rd_pos = $_POST['rd_pos'];
								$rd_section = $_POST['rd_section'];
								$rd_type = $_POST['rd_type'];
								$rd_cause = $_POST['rd_cause'];
								$rd_from = $_POST['rd_from'];
								$rd_to = $_POST['rd_to'];
								$rd_total = $_POST['rd_total'];
								$rd_adrs = $_POST['rd_adrs'];
								$rd_mob = $_POST['rd_mob'];
								
								$result = mysql_query("insert into restday (rd_nam, rd_pos, rd_section, rd_type, rd_cause, rd_from, rd_to, rd_total, rd_adrs, rd_mob) values('$rd_nam','$rd_pos','$rd_section','$rd_type','$rd_cause','$rd_from','$rd_to','$rd_total','$rd_adrs','$rd_mob')")or die(mysql_error());
								
								echo ("<p style='font-size:20px;color:green;'>ধন্যবাদ $rd_nam ।  আপনার $rd_type ছুটি গ্রহন করা হয়েছে। আপনাকে খুব দ্রুত অবহিত করা হবে। </p>");
								
								 
								
							}
							else
							{
								//die("Wrong Code Entered");
								echo ("<p style='font-size:20px;color:red;'>Wrong Captcha Code Entered</p>");
							}
						
						}
						//header("location: index.php?action=_stu_ssc1_view");
					?>
					
					<tr>
						<td>কর্মকর্তা/ কর্মচারীর নাম : </td>
						<td><input style="width: 330px;" type="text" name="rd_nam" placeholder="ex: হাফিজ " required /></td>
					</tr>
					<tr>
						<td>পদবী : </td>
						<td><input style="width: 330px;" type="text" name="rd_pos" placeholder="ex: অধ্যক্ষ" required /></td>
					</tr>
					<tr>
						<td>বিভাগ : </td>
						<td><input style="width: 330px;" type="text" name="rd_section" placeholder="ex: কর্মকর্তা" required /></td>
					</tr>
					<tr>
						<td>ছুটির ধরন : </td>
						<td>
							<select name="rd_type" id="">
								<option value="--Select--">--Select A Option--</option>
								<option value="নৈমিত্তিক">নৈমিত্তিক</option>
								<option value="মেডিকেল">মেডিকেল</option>
								<option value="অর্জিত">অর্জিত</option>
								<option value="মাতৃকালিন">মাতৃকালিন </option>
							</select>
						</td>
					</tr>
					<tr>
						<td>ছুটির কারন : </td>
						<td><textarea name="rd_cause" id="" cols="58" rows="3" placeholder="ex: ছুটির কারন লিখুন " required></textarea></td>
					</tr>
					<tr>
						<td>প্রাথির ছুটির সময় .....</td>
					</tr>
					<tr>
						<td style="padding-left: 90px;">তারিখ হতে : </td>
						<td><input style="width: 330px;" type="text" name="rd_from" placeholder="ex: ২২/১০/২০১৩ " required /></td>
					</tr>
					<tr>
						<td style="padding-left: 90px;">তারিখ পর্যন্ত: </td>
						<td><input style="width: 330px;" type="text" name="rd_to" placeholder="ex: ২৬/১০/২০১৩" required /></td>
					</tr>
					<tr>
						<td>মোট ছুটির দিন : </td>
						<td><input style="width: 330px;" type="text" name="rd_total" placeholder="ex: ৫" required /></td>
					</tr>
					<tr>
						<td>ছুটিকালীন সময়ে যোগাযোগের ঠিকানা : </td>
						<td><textarea name="rd_adrs" id="" cols="58" rows="3" placeholder="ex: ছুটিকালীন সময়ে যোগাযোগের ঠিকানা লিখুন " required></textarea></td>
					</tr>
					<tr>
						<td>মোবাইল/ টেলিফোন নম্বর : </td>
						<td><input style="width: 330px;" type="text" name="rd_mob" placeholder="ex: ০১৯১৭০৯৮৯৮৯ " required /></td>
					</tr>
					<tr>
						<td>Input this Code: </td>
						<td><input name="captcha" type="text"></td>
						<td><img style="margin-left: -380px;" src="_captcha.php" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input style="width: 100px; font-size: 16px; padding: 2px 7px;" type="submit" value="Send" name="form1"/></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

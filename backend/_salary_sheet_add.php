<?php 
ob_start();
include('dbconnect.php');
include('_admin_session.php');
//p2
if(isset($_POST['form2'])){
	$slri_sht_p2_nam = $_POST['slri_sht_p2_nam'];
	$slri_sht_p2_pos = $_POST['slri_sht_p2_pos'];
	$slri_sht_p2_code = $_POST['slri_sht_p2_code'];
	$slri_sht_p2_sck = $_POST['slri_sht_p2_sck'];
	$slri_sht_p2_brth = $_POST['slri_sht_p2_brth'];
	$slri_sht_p2_slry = $_POST['slri_sht_p2_slry'];
	$slri_sht_p2_mslry = $_POST['slri_sht_p2_mslry'];
	$slri_sht_p2_incr = $_POST['slri_sht_p2_incr'];
	$slri_sht_p2_mp = $_POST['slri_sht_p2_mp'];
	$slri_sht_p2_bk = $_POST['slri_sht_p2_bk'];
	$slri_sht_p2_wft = $_POST['slri_sht_p2_wft'];
	$slri_sht_p2_pain = $_POST['slri_sht_p2_pain'];
	$slri_sht_p2_scut = $_POST['slri_sht_p2_scut'];
	$slri_sht_p2_etp = $_POST['slri_sht_p2_etp'];
	$slri_sht_p2_bnk = $_POST['slri_sht_p2_bnk'];
	
	$result2 = mysql_query("insert into slri_sht_p2 (slri_sht_p2_nam, slri_sht_p2_pos, slri_sht_p2_code, slri_sht_p2_sck, slri_sht_p2_brth, slri_sht_p2_slry, slri_sht_p2_mslry, slri_sht_p2_incr, slri_sht_p2_mp, slri_sht_p2_bk, slri_sht_p2_wft, slri_sht_p2_pain, slri_sht_p2_scut, slri_sht_p2_etp, slri_sht_p2_bnk) values('$slri_sht_p2_nam','$slri_sht_p2_pos','$slri_sht_p2_code','$slri_sht_p2_sck','$slri_sht_p2_brth','$slri_sht_p2_slry','$slri_sht_p2_mslry','$slri_sht_p2_incr','$slri_sht_p2_mp','$slri_sht_p2_bk','$slri_sht_p2_wft','$slri_sht_p2_pain','$slri_sht_p2_scut','$slri_sht_p2_etp','$slri_sht_p2_bnk')") or die(mysql_error());
	
	if ($result2) {
		echo ("<p style='font-size:20px;'>Salary Sheet data input successfully.</p>");
	} else {
		echo ("<p style='font-size:20px;'>Salary Sheet data input Failed.</p>");
	}
}
//header("location: index.php?action=_stu_hsc1_view");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Institute Salary Sheet</title>
	<style>
	#mycustomers {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		width: 100%;
		border-collapse: collapse;
	}

	#mycustomers td, #mycustomers th {
		font-size: 1em;
		border: 1px solid #98bf21;
		padding: 3px 3px 2px 3px;
	}

	#mycustomers th {
		font-size: 1.1em;
		text-align: left;
		padding-top: 5px;
		padding-bottom: 4px;
		background-color: #A7C942;
		color: #ffffff;
	}

	#mycustomers tr.alt td {
		color: #000000;
		background-color: #EAF2D3;
	}
	#mycustomers input{font-size: 12px;}
	</style>
</head>
<body>
	<h2>Add monthly Salary Sheet Data...</h2>
	<div align="center">
		<form action="" method="post">
		  <table id="mycustomers" width="960" border="1" style="font-size: 12px;">
			<tr>
			  <td width=""><div align="center">নাম</div></td>
			  <td width=""><div align="center">পদবী</div></td>
			  <td width=""><div align="center">কোড নং</div></td>
			  <td width=""><div align="center">সূচক সংখ্যা</div></td>
			  <td width="80"><div align="center">জন্ম তারিখ</div></td>
			  <td width=""><div align="center">বেতন</div></td>
			  <td width="90"><div align="center">মাসিক মুল বেতন, আবাসিক ভাতা, মেডিকেল ভাতা ও মহাঘ ভাতা</div></td>
			  <td width=""><div align="center">ই্নক্রিমেন্ট</div></td>
			 </tr>
			 <tr>
			 <td><input style="width:140px;text-align: left;" name="slri_sht_p2_nam" type="text" placeholder="মোঃ হাফিজুর রহমান " required /></td>
			  <td><input style="width:80px;text-align: left;" name="slri_sht_p2_pos" type="text" placeholder="অধ্যক্ষ " required /></td>
			  <td><input style="width:30px;text-align: center;" name="slri_sht_p2_code" type="text" placeholder="৫ " required /></td>
			  <td><input style="width:55px;text-align: center;" name="slri_sht_p2_sck" type="text" placeholder="৬১২৩৪২ " required /></td>
			  <td><input style="width:75px;text-align: center;" name="slri_sht_p2_brth" type="text" placeholder="০৩/০২/১৯৭০ " required /></td>
			  <td><input style="width:70px;text-align: right;" name="slri_sht_p2_slry" type="text" placeholder="২২,২৫০.০০ " required /></td>
			  <td><input style="width:80px;text-align: right;" name="slri_sht_p2_mslry" type="text" placeholder="২৭,৫০০.০০ " required /></td>
			  <td><input style="width:40px;text-align: center;" name="slri_sht_p2_incr" type="text" placeholder="১৭৫ " required /></td>
			 </tr>
			 </table>
			 <br /><br />
			 <table id="mycustomers" width="960" border="1" style="font-size: 12px;">
			 <tr>
			  <td width=""><div align="center">এক মাসের মোট প্রাপ্য</div></td>
			  <td width=""><div align="center">বকেয়া</div></td>
			  <td width=""><div align="center">ওয়েল ফেয়ার ট্রাস্ট ফান্ড</div></td>
			  <td width=""><div align="center">অবসর সুবিধা</div></td>
			  <td width=""><div align="center">বেতন কর্তন</div></td>
			  <td width=""><div align="center">অবশিষ্ট মোট প্রাপ্য</div></td>
			  <td width=""><div align="center">ব্যাংক</div></td>
			</tr>
			<tr>
			  <td><input style="width:70px;text-align: center;" name="slri_sht_p2_mp" type="text" placeholder="২৭,৬৭৫.০০ " required /></td>
			  <td><input style="width:50px;text-align: center;" name="slri_sht_p2_bk" type="text" placeholder="০ " required /></td>
			  <td><input style="width:50px;text-align: center;" name="slri_sht_p2_wft" type="text" placeholder="৪৪৫.০০ " required /></td>
			  <td><input style="width:50px;text-align: center;" name="slri_sht_p2_pain" type="text" placeholder="৮৯০.০০" required /></td>
			  <td><input style="width:50px;text-align: center;" name="slri_sht_p2_scut" type="text" placeholder="" /></td>
			  <td><input style="width:70px;text-align: right;" name="slri_sht_p2_etp" type="text" placeholder="২৬,৩৪০.০০" required /></td>
			  <td><input style="width:70px;text-align: center;" name="slri_sht_p2_bnk" type="text" placeholder="১১৩৩৬৭-১" required /></td>
			</tr>
		  </table>
		  <p>
		<input style="color: red;float: left;font-size: 16px;margin-top: 10px;padding: 0 10px;" type="submit" value="Save" name="form2"/>
		</p>
	  </form>
	</div>
</body>
</html>
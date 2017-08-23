<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>প্রতিষ্ঠানের মোবাইল ব্যাংকিং</title>
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
			<h2>প্রতিষ্ঠানের মোবাইল ব্যাংকিং সুবিধা</h2>
			<?php			
				$result= mysql_query("select * from mb_tbl" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($result)){
			?>
			<p style="text-align: justify; font-size: 15px;">শিক্ষা প্রতিষ্ঠানের অফিসের কার্যক্রমকে গতিশীল করার প্রয়োজনে মোবাইল ব্যাংকিং এর মাধ্যমে শিক্ষার্থীদের নিকট থেকে ফিস  গ্রহন শুরু হয়েছে। শুধু মাত্র অফিস চলাকালীন সময়ে নিন্মক্ত সময় ও মোবাইল নাম্বার এ উক্ত কার্যক্রম সম্পন্ন করা যাবে।  <br /> <span>সময়: সকাল ৯.০০ হইতে বিকাল ৫.০০ ঘটিকা </span></p>
			<p style="font-weight: bold; color: yellow; border: 1px solid; padding: 10px; font-size: 25px;">bKash নাম্বার : <?php echo $row['mb_bkash'];?> <br /> DBBL নাম্বার : <?php echo $row['mb_dbbl'];?></p>
			<?php } ?>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

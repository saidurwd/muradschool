<?php include('dbconnect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>মাসিক স্যালারি সীট</title>
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
       popupWin.document.close();
    }
</script>
<style>
.mycustomers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
	
	background-color: #eef2f9;
    background-image: -moz-linear-gradient(center top , rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.1) 51%, rgba(255, 255, 255, 0) 100%);
    color: #262c31;
    font-size: 12px;
	
}

.mycustomers td, #mycustomers th {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 3px 2px 3px;
}

.mycustomers th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

.mycustomers tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}
.mycustomers input{font-size: 12px;}
</style>
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
	<p>You can print this page by click in here...<input type="button" value="print" onclick="PrintDiv();" /></p>
	<div id="divToPrint">
	<h1>শিক্ষক কর্মচারীদের মাসিক স্যালারি সীট</h1>
	<table class="mycustomers" width="960" border="1" style="font-size: 12px;width: 1170px;">
	  <?php
		$result= mysql_query("select * from slri_sht_p1" ) or die (mysql_error());
		while ($row = mysql_fetch_array ($result)){
	  ?>
	  <tr>
		<td>
			<p>
			<strong>শিক্ষা প্রতিষ্ঠানের নামঃ</strong> <?php echo $row['slri_sht_p1_insnam'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>ডাকঘরঃ</strong> <?php echo $row['slri_sht_p1_po'];?>, <strong>জেলাঃ</strong> <?php echo $row['slri_sht_p1_dist'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>স্মারক নং:</strong> <?php echo $row['slri_sht_p1_srkno'];?>, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>তারিখঃ</strong> <?php echo $row['slri_sht_p1_date'];?>
			</p>
			<p>
			<strong>বিষয়ঃ</strong> শিক্ষক ও কর্মচারীদের <?php echo $row['slri_sht_p1_yar'];?> সালের <?php echo $row['slri_sht_p1_month'];?> মাসের বেতন ভাতাদির সরকারি অংশ প্রাপ্তির বিবরণী । &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>ব্যাংকের নামঃ</strong> <?php echo $row['slri_sht_p1_bank'];?>
			</p>
		</td>
	  </tr>
	  <?php } ?>
	</table>
  <table class="mycustomers" width="960" border="1" style="font-size: 12px;width: 1170px;">
    <tr>
      <td width="62"><div align="center">ক্রমিক নং</div></td>
      <td width="500"><div align="center">নাম</div></td>
      <td width="118"><div align="center">পদবী</div></td>
      <td width="35"><div align="center">কোড নং</div></td>
      <td width="85"><div align="center">সূচক সংখ্যা</div></td>
      <td width="90"><div align="center">জন্ম তারিখ</div></td>
      <td width="102"><div align="center">বেতন</div></td>
      <td width="110"><div align="center">মাসিক মুল বেতন, আবাসিক ভাতা, মেডিকেল ভাতা ও মহাঘ ভাতা</div></td>
      <td width="95"><div align="center">ই্নক্রিমেন্ট</div></td>
      <td width="94"><div align="center">এক মাসের মোট প্রাপ্য</div></td>
      <td width="96"><div align="center">বকেয়া</div></td>
      <td width="110"><div align="center">ওয়েল ফেয়ার ট্রাস্ট ফান্ড</div></td>
      <td width="104"><div align="center">অবসর সুবিধা</div></td>
      <td width="77"><div align="center">বেতন কর্তন</div></td>
      <td width="98"><div align="center">অবশিষ্ট মোট প্রাপ্য</div></td>
      <td width="90"><div align="center">ব্যাংক</div></td>
    </tr>
	<?php
		$i=0;  
		$result= mysql_query("select * from slri_sht_p2" ) or die (mysql_error());
		while ($row = mysql_fetch_array ($result)){
		$i++;
	?>
    <tr>
      <td style="text-align: center;"><?php echo $i;?></td>
	  <td style="text-align: left;"><?php echo $row['slri_sht_p2_nam'];?></td>
	  <td style="text-align: left;"><?php echo $row['slri_sht_p2_pos'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_code'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_sck'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_brth'];?></td>
	  <td style="text-align: right;"><?php echo $row['slri_sht_p2_slry'];?></td>
	  <td style="text-align: right;"><?php echo $row['slri_sht_p2_mslry'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_incr'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_mp'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_bk'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_wft'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_pain'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_scut'];?></td>
	  <td style="text-align: center;"><?php echo $row['slri_sht_p2_etp'];?></td>
	  <td style="text-align: right;"><?php echo $row['slri_sht_p2_bnk'];?></td>
    </tr>
	<?php } ?>
  </table>
  </div>
</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

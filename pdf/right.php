<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<link rel="stylesheet" href="../css/r.css" />
</head>

<body bgcolor="#CCCCCC" >
<?php			
$result= mysql_query("select * from hdr_tbl, pr_tbl" ) or die (mysql_error());
while ($row = mysql_fetch_array ($result)){
?>      
<table bgcolor="#CCCCCC" style="background: none repeat scroll 0% 0% rgb(211, 211, 211);width: 225px;">
<tr>	  	    	                   
<td align="center" style="border-bottom: 1px solid rgb(255, 255, 255);"><p><a href="admin/index.php" target="_blank"><strong><font size="2" style="color:#000;">ওয়েবসাইটের কন্ট্রোল  প্যানেল: প্রবেশ করুন</font></strong></p>  
<img style="width: 100%;" src="images/login.gif" border="0" /></a></td></tr>

<tr>
<td style="border-bottom: 1px solid rgb(255, 255, 255);">	    	                   
<p><a href="_phead_view_all.php" target="_blank"><strong><font size="2" style="color:#000;"><center style="float: left;">প্রতিষ্ঠান প্রধানের বানী</center></font></strong>
<strong><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#003300">
<img src="admin/upload/<?php echo $row['pr_pic'];?>" height="215" width="215" border="1" ><br>
স্বাগত <?php echo $row['hdr_bn'];?><span style="color:red;font-style:italic;">... আরও পড়ুন </span></a></font></strong>
</p>
</td>
</tr>

<tr><td colspan="2"><p style="border-bottom: 1px solid rgb(255, 255, 255);"><a href="_contact-form.php" target="_blank"><strong><font size="2" style="color:#000;">প্রতিষ্ঠান প্রধানকে ইমেইল করুন</font></strong>
<img style="width: 100%;" src="images/webmail.gif"  /></a></p>
<P style="border-bottom: 1px solid rgb(255, 255, 255);"><a href="_attendence.php" target="_blank"><strong><font size="2" style="color:#000;">শিক্ষক, কর্মচারী ও  শিক্ষার্থীদের প্রাত্যহিক হাজিরার তথ্য  / "Attendence"</font></strong>
</a>
</P>
<p style="border-bottom: 1px solid rgb(255, 255, 255);"><a href="_gb_view_all.php" target="_blank"><strong><font size="2" style="color:#000;">কার্যনির্বাহী পর্ষদ/একাডেমিক  কাউন্সিলের পরিচিতি  GB/Managements</font></strong></a></p></td>
</tr>


<tr>	  	    	                   
<td colspan="2" style="border-bottom: 1px solid rgb(255, 255, 255);"><strong>
<font size="2" style="color:#000;"><center style="float: left;">   গুরুত্বপূর্ণ ওয়েবসাইটের লিংক </center></font></strong><br>
<a href="http://www.infokosh.bangladesh.gov.bd/"><img src="images/eb.png" border="0" width="100%" height="80px"></a><br> 
<br> 
<marquee bgcolor="#d3d3d3" scrollamount="2" direction="up" loop="true" onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 2, 0);" style="overflow: hidden;  display: block;  height: 180px;"> 
<center style="text-align: left;"> 
<font color="#ffffff"><strong>
<a href="http://www.bangladesh.gov.bd/" target="_blank"><font color="#006600">Bangladesh Government</font></a><br>
<br> 
<a href="http://www.pmo.gov.bd/" target="_blank"><font color="#006600">Prime Minister's Office</font></a><br> 
<br>
<a href="http://www.bangabhaban.gov.bd/" target="_blank"><font color="#006600">President's Office</font></a><br>
<br> 
<a href="http://www.dshe.gov.bd/" target="_blank"><font color="#006600">Directorate of Secondary and Higher Education</font></a><br>
<br>
<a href="http://www.dshe.gov.bd/" target="_blank"><font color="#006600">BANBEIS - Bangladesh Bureau of Educational Information and Statistics</font></a><br>
<br>
<a href="http://www.moedu.gov.bd/" target="_blank"><font color="#006550">Ministry of education</font></a><br>
<br>
<a href="http://www.ugc.gov.bd/university/?action=public" target="_blank"><font color="#006600">List of Public Universities</font></a><br>
<br>
<a href="http://www.nu.edu.bd/" target="_blank"><font color="#116633">National University</font></a><br>
<br>
<a href="http://www.educationboard.gov.bd/" target="_blank"><font color="#006600">Education Boards Bangladesh</font></a><br>
<br>
<a href="http://www.bmeb.gov.bd/" target="_blank"><font color="#003300">BangladeshMadrasah Education Board</font></a><br>
<br>
<a href="http://www.dshe.gov.bd/" target="_blank"><font color="#006600">DIRECTORATE OF SECONDARY AND HIGHER EDUCATION</font></a><br>
<br>
<a href="http://www.emis.gov.bd/main/App_Pages/Client/Default.aspx" target="_blank"><font color="#006600">Education Management Information System</font></a><br>
<br>
<a href="http://www.bteb.gov.bd/" target="_blank"><font color="#006600">Bangladesh Technical Education Board (BTEB). </font></a><br>
<br>
<a href="http://www.dpe.gov.bd/" target="_blank"><font color="#006600">Primary education</font></a><br>
<br></strong>
</font>
</center>
</marquee>
</td>
</tr>

<tr> 
<td style="border-bottom: 1px solid rgb(255, 255, 255);"><center style="float:left;"><?PHP include("visitors.php"); ?><br>
<?PHP include("counter.php"); ?></center></td>
</tr>
</table>
<?php } ?>
</body>
</html>
					
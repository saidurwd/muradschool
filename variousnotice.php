<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "dbconnect.php"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="stylefile/stylecss1.css" rel="stylesheet" type="text/css">
<title>:. College History .:</title>
</head>

<body bgcolor="#CCCCCC">
<div align="center">
  <div  id="one" style="position:absolute; font-size:16px; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
     </div>

<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
<div align="center"> 
  <?PHP include("pdf/head.php"); ?>
  <?php include("pdf/motionmenu.php"); ?>
  
   
    <table border="0" cellspacing="0" cellpadding="0" bgcolor="#ccCCCC">
       	  <tr>
			 <td><?php include("pdf/left.php"); ?></td>
			 <td><?php

 	$result=mysql_query("select * from difpageup where name='variousnotice'");
       while ($data=mysql_fetch_row($result))
	   			{
				echo"Name:<p align=\"justify\"> $data[1] </p>";
				echo"various notice Picture: <br><img src=\"pdf/variousnotice.jpg\">; </p>";
			echo"various notice Description:<p align=\"justify\"> $data[2] </p>";
			echo"various notice Note:<p align=\"justify\"> $data[3] </p>";
				}


?></td>
			 
			 </tr>
	 </table>
		  
 </div>

</body>
</html>

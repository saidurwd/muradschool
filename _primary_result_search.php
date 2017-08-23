<?php include('dbconnect.php');?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>Primary Education Result</title>
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
		<div class="maincontent" id="iframe">
			<h2>Search Primary Education Result...</h2>
			 <iframe scrolling="off" src="http://dperesult.teletalk.com.bd/dpe.php" style="-moz-border-bottom-colors: none;	-moz-border-left-colors: none; -moz-border-right-colors: none;-moz-border-top-colors: none;border-color: -moz-use-text-color;border-image: none;border-left: medium none;border-right: medium none;border-style: solid none;border-width: 5px medium;height: 550px;width: 960px;">
			</iframe>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>

<?php 
include('dbconnect.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<title>Untitled Document</title>
</head>

<body>
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
<table style="margin:0 auto;">
	<tr>
		<td style="text-align: justify;" width="960"><br />
		<font face="Verdana, Arial, Helvetica, sans-serif" size="-1">
			<?php			
				$result= mysql_query("select * from clg_hist_tbl" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($result)){
			?>
			<b>	
				<?php echo $row['hist_text']; ?>		
			</b>
			<?php } ?>
		</font>
		</td>
	</tr>
  </table>
</body>
</html>

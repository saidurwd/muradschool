<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php			
	$result= mysql_query("select * from hdr_tbl" ) or die (mysql_error());
	while ($row = mysql_fetch_array ($result)){
?>
<table width="960" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td bgcolor="#FFFFFF" width="115">
        <div align="right"><img style="margin-bottom: 15px;margin-top: 10px;;box-shadow: 0 3px 10px #838383;-moz-box-shadow: 0 3px 10px #838383;-webkit-box-shadow: 0 3px 10px #838383;" src="backend/upload/<?php echo $row['hdr_logo']; ?>" width="115" height="115"/></div>
     </td>
      <td bgcolor="#FFFFFF" width="895"> 
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          	<tr>
            	<td>
				<div align="center">
					<h1 style="color: #000;font-family: verdana,sans-serif;">
						<?php echo $row['hdr_en'];?> <br /> <?php echo $row['hdr_bn'];?>
					</h1>
				</div>
			  </td>
         	 </tr>
          		<tr>
            		<td>
						 <div align="center">
						  <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#000000">
						  <h3 style="margin-top: -12px;"><?php echo $row['hdr_code'];?></h3>
						  
						</font>
						<strong><font size="3">যোগাযেগের ঠিকানা :  </font></strong>
						<font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#000000">
						<h3 style="color: #000;font-size: 13px;font-weight: bold;margin-top: -5px;"><?php echo $row['hdr_adrs'];?></h3>
						</font></p>
				  </div>
				  </td>
				</tr>
        </table>
      </td>
	  <td bgcolor="FFFFFF" width="116"><img src="images/flag.gif" alt="" height="92"/></td>
    </tr>
</table>
<?php } ?>
</body>
</html>

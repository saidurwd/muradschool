<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::. Copyright .::</title>
</head>

<body>
<?php			
	$result= mysql_query("select * from hdr_tbl" ) or die (mysql_error());
	while ($row = mysql_fetch_array ($result)){
?>
<table width="970" border="0" cellspacing="0" cellpadding="0" style="background:#999;margin-top: 20px;margin-bottom: 20px;">
    <tr> 
      <td height="64"> 
        <div style="margin-top: 5px;" align="center"><b><font size="4">Increasing Relevance of Education 
          To the Workforce<br>
          <img src="images/slogan_b.gif" width="366" height="29"> </font></b></div>
      </td>
    </tr>
    <tr> 
      <td height="42"> 
        <div align="center"><font size="-1">&copy; 2015 <?php echo $row['hdr_en'];?> All rights reserved<br>Design and Develop by: <a class="link02" href="http://www.enggjob.com">Momtaj Trading(Pvt.)Ltd.</a></font></div>
      </td>
    </tr>
  </table>
<?php } ?>
</body>
</html>

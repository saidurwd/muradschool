<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
	<meta charset="UTF-8">
	<title>Teacher Database</title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
</head>
<body>
	<table border="1" id="mytable_curact">
		<?php			
			$result= mysql_query("select * from pr_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		<tr style="text-align:left;">
			<th style="width: 700px; font-size: 16px; padding: 10px; color: black;">
				<a href="_phead_edit.php?id=<?php echo $row['pr_id'];?>">You can edit this post in here >>></a>
			</th>
		</tr>
		<tr style="text-align:left;">
			<td>প্রতিষ্ঠান প্রধানের ফটোঃ <br /><img src="upload/<?php echo $row['pr_pic'];?>" alt="" width="100px" height="100px" /></td>
		</tr>
		<tr style="text-align:left;">
			<td><p style="line-height:20px">প্রতিষ্ঠান প্রধানের বানী: <?php echo $row['pr_desc'];?></p></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
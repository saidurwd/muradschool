<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
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
	<h2>Board Result: HSC</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_lnews_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Date</th>
			<th>News serial no</th>
			<th>News Title</th>
			<th>Action</th>
		</tr>
		<?php
			//$i = 0;				
			$result= mysql_query("select * from lnews_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			//$i++;
		?>
		<tr>
			<td><?php echo $row['news_date'];?></td>
			<td><?php echo $row['news_serial'];?></td>
			<td><?php echo $row['news_title'];?></td>
			<td>
				<a href="_lnews_edit.php?id=<?php echo $row['news_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_lnews_del.php?id=<?php echo $row['news_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
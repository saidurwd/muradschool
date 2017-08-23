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
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_acln_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Sl.no</th>
			<th>Date</th>
			<th>Holiday Description</th>
			<th>Action</th>
		</tr>
		<?php
			$i = 0;				
			$result= mysql_query("select * from acln_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['acln_date'];?></td>
			<td><?php echo $row['acln_desc'];?></td>
			<td>
				<a href="_acln_edit.php?id=<?php echo $row['acln_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_acln_del.php?id=<?php echo $row['acln_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
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
	<h2>Governing Body Management</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_gb_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Serian No</th>
			<th>GB Name</th>
			<th>GB Position</th>
			<th>GB Address</th>
			<th>GB Duration</th>
			<th>GB Comment</th>
			<th>Action</th>
		</tr>
		<?php
			$i = 0;				
			$result= mysql_query("select * from gb_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['gb_name'];?></td>
			<td><?php echo $row['gb_pos'];?></td>
			<td><?php echo $row['gb_adrs'];?></td>
			<td><?php echo $row['gb_year'];?></td>
			<td><?php echo $row['gb_cmt'];?></td>
			<td>
				<a href="_gb_edit.php?id=<?php echo $row['gb_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_gb_del.php?id=<?php echo $row['gb_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
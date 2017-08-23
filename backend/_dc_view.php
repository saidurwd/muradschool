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
	<h2>View Notice</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_dc_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Serial No</th>
			<th>Title</th>
			<th>Download</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
		<?php
			$i = 0;				
			$result= mysql_query("select * from dc_tbl order by dc_id DESC" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['dc_title'];?></td>
			<td><?php echo $row['dc_date'];?></td>
			<td>
				<a target="_blank" href="upload/<?php echo $row['dc_doc']; ?>">Download</a>
			</td>
			<td>
				<a href="_dc_edit.php?id=<?php echo $row['dc_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_dc_del.php?id=<?php echo $row['dc_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
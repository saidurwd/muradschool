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
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_notice_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Serial No</th>
			<th>Title</th>
			<th>Download</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
		<?php
							
			$result= mysql_query("select * from notice_tbl order by n_id DESC" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			
		?>
		<tr>
			<td><?php echo $row['n_id']; ?></td>
			<td><?php echo $row['n_title'];?></td>
			<td>
				<a target="_blank" href="upload/<?php echo $row['n_download']; ?>">Download</a>
			</td>
			<td><?php echo $row['n_date'];?></td>
			<td>
				<a href="_notice_edit.php?id=<?php echo $row['n_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_notice_del.php?id=<?php echo $row['n_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
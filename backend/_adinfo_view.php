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
	<h2>Admission information</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_adinfo_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>S.no</th>
			<th>Subject</th>
			<th>Download File</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
		<?php	
			$i = 0;
			$result= mysql_query("select * from adinfo_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['adinfo_sub'];?></td>
			<td>
				<a target="_blank" href="upload/<?php echo $row['adinfo_file']; ?>">Download</a>
			</td>
			<td><?php echo $row['adinfo_date'];?></td>
			<td>
				<a href="_adinfo_edit.php?id=<?php echo $row['adinfo_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_adinfo_del.php?id=<?php echo $row['adinfo_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
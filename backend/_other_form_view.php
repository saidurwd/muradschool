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
	<h2>Various Form</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_other_form_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Form S.No</th>
			<th>Form Title</th>
			<th>Upload File</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
		<?php
			$i=0;
			$result= mysql_query("select * from oth_form order by othfrm_id DESC" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['othfrm_title'];?></td>
			<td>
				<a target="_blank" href="upload/<?php echo $row['othfrm_file']; ?>">Download</a>
			</td>
			<td><?php echo $row['othfrm_date'];?></td>
			<td>
				<a href="_other_form_edit.php?id=<?php echo $row['othfrm_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_other_form_del.php?id=<?php echo $row['othfrm_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
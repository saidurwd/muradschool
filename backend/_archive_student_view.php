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
	<h2>সকল কৃতি শিক্ষার্থীদের তথ্য</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_archive_student_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Sl.No</th>
			<th>Name</th>
			<th>Passing Year</th>
			<th>Result</th>
			<th>Subject</th>
			<th>Photo</th>
			<th>Action</th>
		</tr>
		<?php
			$i=0;			
			$result= mysql_query("select * from arch_std" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['arch_std_nam'];?></td>
			<td><?php echo $row['arch_std_yar'];?></td>
			<td><?php echo $row['arch_std_res'];?></td>
			<td><?php echo $row['arch_std_sub'];?></td>
			<td><img src="upload/<?php echo $row['arch_std_pto']; ?>" alt=""  width="50" height="50" /></td>
			<td>
				<a href="_archive_student_edit.php?id=<?php echo $row['arch_std_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_archive_student_del.php?id=<?php echo $row['arch_std_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
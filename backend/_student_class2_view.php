<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Student Database</title>
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
</head>
<body>
	<h2>Present Class 2 Student's Information</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_student_class2_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>SL</th>
			<th>ID<br>Roll<br>Class</th>
			<th>Name<br>Father<br>Mother</th>
			<th>Shift<br>Section<br>Group</th>
			<th>DOB<br>Religion<br>Gender</th>
			<th style="width: 250px;">Subject</th>
			<th>Photo</th>
			<th>Action</th>
		</tr>
		<?php
			$i = 0;				
			$result= mysql_query("select * from std_class2_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['std_id'];?><br><?php echo $row['std_roll'];?><br><?php echo $row['std_cls'];?></td>
			<td><?php echo $row['std_name'];?><br><?php echo $row['std_father'];?><br><?php echo $row['std_mother'];?></td>
			<td><?php echo $row['std_sft'];?><br><?php echo $row['std_sec'];?><br><?php echo $row['std_grp'];?></td>
			<td><?php echo $row['std_dob'];?><br><?php echo $row['std_reli'];?><br><?php echo $row['std_gen'];?></td>
			<td><?php echo $row['std_sub'];?></td>
			<td>
				<img src="upload/<?php echo $row['std_photo']; ?>" width="50px" height="50px" style="border:1px solid #333333;">
			</td>
			<td>
				<a href="_student_class2_edit.php?id=<?php echo $row['s_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_student_class2_del.php?id=<?php echo $row['s_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
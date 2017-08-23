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
	<h2>Archive Public Exam Result</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_archive_result_add">Add New Data</a>
	<table border="1" id="mytable" style="text-align:left;">
		<?php
			//$i = 0;				
			$result= mysql_query("select * from arch_exm" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			//$i++;
		?>
		<tr>
			<td style="font-style: italic; color: #fff;">You can Edit or Delete this data...</td>
		<td>
			<a href="_archive_result_edit.php?id=<?php echo $row['arch_exm_id'];?>">Edit</a> | 
			<a onClick="return confirm_del();" href="_archive_result_del.php?id=<?php echo $row['arch_exm_id'];?>">Delete</a>
		</td>
		</tr>
		<tr>
			<td style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: #00acec;">Exam Title: <?php echo $row['arch_exm_title'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: #00acec;">Group: <?php echo $row['arch_exm_grp'];?></td>
		</tr>
		<tr>
			<td>
				<p style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: #00acec;">Passing student Roll.no: </p>
				<p><?php echo $row['arch_exm_pass'];?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight: bold; font-size: 20px; margin-bottom: 0px; color: #00acec;">Conside#00acec: </p>
				Regular student Roll.no: <p><?php echo $row['arch_exm_regu'];?></p>
				Irregular student Roll.no: <p><?php echo $row['arch_exm_iregu'];?></p>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
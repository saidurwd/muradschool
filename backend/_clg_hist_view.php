<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="bn-BD">
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
	<h2>School History</h2>
	<table border="1" id="mytable_curact">
		<?php			
			$result= mysql_query("select * from clg_hist_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		<tr>
			<th style="width: 700px; font-size: 16px; padding: 10px; color: black;">
				<a href="_clg_hist_edit.php?id=<?php echo $row['hist_id'];?>">You can edit this post in here >>></a>
			</th>
		</tr>
		<tr>
			<td>
				<p style="line-height:20px">School History information: <?php echo $row['hist_text'];?></p>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
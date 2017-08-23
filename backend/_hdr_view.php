<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Header</title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
</head>
<body>
	<h2>Header Option</h2>
	<table border="1" id="mytable_curact">
		<?php			
			$result= mysql_query("select * from hdr_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		<tr>
			<p style="color: orchid;font-size: 15px;font-weight: bold;"> You can edit this data in here...
				<a style="font-size: 20px; font-style: italic;" href="_hdr_edit.php?id=<?php echo $row['hdr_id'];?>">Edit</a>
			</p>
		</tr>
		<tr>
			<td style="font-weight: bold; color: yellow;">School/College Name in English: </td>
			<td><?php echo $row['hdr_en'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold; color: yellow;">School/College Name in Bangla: </td>
			<td><?php echo $row['hdr_bn'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold; color: yellow;">School/College Logo: </td>
			<td><img src="upload/<?php echo $row['hdr_logo']; ?>" width="100px" height="100px"></td>
		</tr>
		<tr>
			<td style="font-weight: bold; color: yellow;">School/College Code, MPO, EIIN</td>
			<td><?php echo $row['hdr_code'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold; color: yellow;">School/College Address</td>
			<td><?php echo $row['hdr_adrs'];?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
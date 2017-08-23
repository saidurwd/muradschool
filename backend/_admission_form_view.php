<?php 
include('dbconnect.php');
//include('_admin_session.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Teacher Database</title>
	<link rel="stylesheet" href="stylecss1.css" />
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
</head>
<body>
	<h2>Students Admission information List</h2>
	<?php 
		$num_rec_per_page=2;
		if (isset($_GET["page"])){ 
			$page = $_GET["page"]; 
		} else {
			$page=1; 
		}; 
		$start_from = ($page-1) * $num_rec_per_page; 
		$sql = "SELECT * FROM admission_tbl LIMIT $start_from, $num_rec_per_page"; 
		$rs_result = mysql_query ($sql); 
	?>
	<table border="1" id="mytable2" style="border-color: red;padding: 5px;font-size: 14px;width: 690px;">
		<?php
			$i = 0;				
			//$result= mysql_query("select * from admission_tbl order by adm_id desc" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($rs_result)){
			$i++;
		?>
		<tr>
			<td style="color: #00aede;width:50px;padding:5px;">Serial no: <span style="font-weight: bold; color: red; font-size: 30px;"><?php echo $i; ?></span></td>
			<td style="padding:5px;"><a onClick="return confirm_del();" href="_admission_form_del.php?id=<?php echo $row['adm_id'];?>">You can Delete <?php echo $row['adm_fullnam'];?> Admission information in here...</a></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Student Full Name: </td>
			<td><?php echo $row['adm_fullnam'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Father's name: </td>
			<td><?php echo $row['adm_fathnam'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Mother's name: </td>
			<td><?php echo $row['adm_mothnam'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Guardian Name(If father not present): </td>
			<td><?php echo $row['adm_gurdnam'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Phone no: </td>
			<td><?php echo $row['adm_phone'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Present Address: </td>
			<td><?php echo $row['adm_pre_adds'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Permanent Address: </td>
			<td><?php echo $row['adm_par_adds'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Nationality: </td>
			<td><?php echo $row['adm_nat'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Date of Birth: </td>
			<td><?php echo $row['adm_dbirth'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Religious: </td>
			<td><?php echo $row['adm_reli'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Subject Choice: </td>
			<td>A: <?php echo $row['adm_sub1'];?>, B: <?php echo $row['adm_sub2'];?>, C: <?php echo $row['adm_sub3'];?>, D: <?php echo $row['adm_sub4'];?>, E: <?php echo $row['adm_sub5'];?>, F: <?php echo $row['adm_sub6'];?>, G: <?php echo $row['adm_sub7'];?>, H: <?php echo $row['adm_sub8'];?>,I: <?php echo $row['adm_sub9'];?>, </td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Past Institute Name(Where he/she was study): </td>
			<td><?php echo $row['adm_past_insnam'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Money Receipt: </td>
			<td>Number: <?php echo $row['adm_money_resno'];?>, Date: <?php echo $row['adm_money_resdat'];?></td>
		</tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<?php } ?>
	</table>
	<div class="mypagination2">
		<?php 
			$sql = "SELECT * FROM admission_tbl"; 
			$rs_result = mysql_query($sql); 
			$total_records = mysql_num_rows($rs_result);  
			$total_pages = ceil($total_records / $num_rec_per_page); 

			echo "<a href='_admission_form_view.php?page=1'>".'< First page'."</a> "; 

			for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='_admission_form_view.php?page=".$i."'>".$i."</a> "; 
			}; 
			echo "<a href='_admission_form_view.php?page=$total_pages'>".'Last page >'."</a> "; 
		?>
	</div>
</body>
</html>
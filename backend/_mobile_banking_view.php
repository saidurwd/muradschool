<?php 
include('dbconnect.php');
include('_admin_session.php');

if(isset($_POST['form1'])){
	$mb_bkash = $_POST['mb_bkash'];
	$mb_dbbl = $_POST['mb_dbbl'];
	
	$result = mysql_query("insert into mb_tbl (mb_bkash, mb_dbbl) values('$mb_bkash','$mb_dbbl')")or die(mysql_error());
	
	if ($result) {
		echo ("<p style='font-size:20px;'>Mobile Banking Data input successfully</p>");
	} else {
		echo ("<p style='font-size:20px;'>Mobile Banking Data input Failed</p>");
	}
}
//header("location: index.php?action=_accounts_view");

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>মোবাইল ব্যাংকিং </title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
</head>
<body>
	<h2>প্রতিষ্ঠানের মোবাইল ব্যাংকিং সুবিধা </h2>
	<table border="1" id="mytable">
		<tr>
			<th>bKash নাম্বার: </th>
			<th>DBBL নাম্বার : </th>
			<th>নিয়ন্ত্রণ করুন</th>
		</tr>
		<?php			
			$result= mysql_query("select * from mb_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		<tr>
			<td><?php echo $row['mb_bkash'];?></td>
			<td><?php echo $row['mb_dbbl'];?></td>
			<td>
				<a href="_mobile_banking_edit.php?id=<?php echo $row['mb_id'];?>">এডিট </a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
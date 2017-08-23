<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id2'])) {
	$id2 = $_REQUEST['id2'];

	$result2 = mysql_query("SELECT * FROM slri_sht_p2 WHERE slri_sht_p2_id=$id2");
	$row2 = mysql_fetch_array($result2);
	mysql_query("DELETE FROM slri_sht_p2 WHERE slri_sht_p2_id=$id2");
	
	header("location: index.php?action=_salary_sheet_view");
	
}
else{
	header('location: index.php?action=_salary_sheet_view');
}


?>
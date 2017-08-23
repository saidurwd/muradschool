<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM suborno_tbl WHERE t_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM suborno_tbl WHERE t_id=$id");
	unlink("upload/".$row['tech_photo']);
	
	header("location: index.php?action=_present_suborno_ad_database");
	
}
else{
	header('location: index.php?action=_present_suborno_ad_database');
}


?>
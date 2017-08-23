<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM gb_tbl WHERE gb_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM gb_tbl WHERE gb_id=$id");
	
	header("location: index.php?action=_gb_view");
	
}
else{
	header('location: index.php?action=_gb_view');
}


?>
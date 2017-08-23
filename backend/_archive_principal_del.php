<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM arch_prin WHERE arch_prin_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM arch_prin WHERE arch_prin_id=$id");
	unlink("upload/".$row['arch_prin_pto']);
	
	header("location: index.php?action=_archive_principal_view");
}
else{
	header('location: index.php?action=_archive_principal_view');
}
?>
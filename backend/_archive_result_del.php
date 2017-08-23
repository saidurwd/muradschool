<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM arch_exm WHERE arch_exm_id = $id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM arch_exm WHERE arch_exm_id = $id");
	
	header("location: index.php?action=_archive_result_view");
	
}
else{
	header('location: index.php?action=_archive_result_view');
}


?>
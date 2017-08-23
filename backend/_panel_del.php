<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM pnl_tbl WHERE pnl_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM pnl_tbl WHERE pnl_id=$id");
	
	header("location: index.php?action=_panel_view");
	
}
else{
	header('location: index.php?action=_panel_view');
}


?>
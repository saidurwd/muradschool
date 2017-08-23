<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM pos_tbl WHERE pos_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM pos_tbl WHERE pos_id=$id");
	unlink("upload/".$row['pos_file']);
	
	header("location: index.php?action=_pos_view");
	
}
else{
	header('location: index.php?action=_pos_view');
}


?>
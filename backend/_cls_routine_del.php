<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM cls_routain WHERE cr_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM cls_routain WHERE cr_id=$id");
	unlink("upload/".$row['cr_photo']);
	
	header("location: index.php?action=_cls_routine_view");
	
}
else{
	header('location: index.php?action=_cls_routine_view');
}


?>
<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM oth_form WHERE othfrm_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM oth_form WHERE othfrm_id=$id");
	unlink("upload/".$row['othfrm_file']);
	
	header("location: index.php?action=_other_form_view");
	
}
else{
	header('location: index.php?action=_other_form_view');
}


?>
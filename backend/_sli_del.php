<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM sli_tbl WHERE sli_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM sli_tbl WHERE sli_id=$id");
	unlink("../pdf/slider/".$row['sli_photo']);
	
	header("location: index.php?action=_sli_add");
	
}
else{
	header('location: index.php?action=_sli_add');
}


?>
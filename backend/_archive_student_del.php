<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM arch_std WHERE arch_std_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM arch_std WHERE arch_std_id=$id");
	unlink("upload/".$row['arch_std_pto']);
	
	header("location: index.php?action=_archive_student_view");
}
else{
	header('location: index.php?action=_archive_student_view');
}
?>
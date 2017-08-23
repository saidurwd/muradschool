<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM std_class1_tbl WHERE s_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM std_class1_tbl WHERE s_id=$id");
	unlink("upload/".$row['std_photo']);
	
	header("location: index.php?action=_student_class1_view");
}
else{
	header('location: index.php?action=_student_class1_view');
}


?>
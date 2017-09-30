<?php

include('dbconnect.php');
$user_did = @$_REQUEST['uid'];
$log_time = @$_REQUEST['logtime'];
$device_id = @$_REQUEST['did'];
if (!empty($_REQUEST['uid']) && !empty($log_time) && !empty($device_id)) {
    $sql = "INSERT INTO `attendance_api` (`user_did`,`log_time`,`device_id`) VALUES ($user_did,'" . $log_time . "','" . $device_id . "')";
    $rs_result = mysql_query($sql);
}

$query = "SELECT * FROM `attendance_api`";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result)) {
    echo $row['user_did'] . "<br />";
}

//http://localhost:8888/muradschool/_attendance_api.php?uid=10001&logtime=2017-09-30 8:45:00&did=1
?>
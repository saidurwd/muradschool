<?php

function panRedirect( $url, $msg='' ) {
	if (headers_sent()) {
		echo "<script>document.location.href='$url';</script>\n";
	} else {
		@ob_end_clean(); // clear output buffer
		header( 'HTTP/1.1 301 Moved Permanently' );
		header( "Location: ". $url );
	}
	exit();
}

function branchName(){
$query = mysql_query("SELECT * FROM gasstation");
print'<select name="Branch" id="Branch">';
while($date = mysql_fetch_assoc($query)){
print'<option value="'.$date[stationID].'">'.$date[stationName].'</option>';
}
print'</select>';
}

function getBranchName($id){
$query = mysql_query("SELECT * FROM gasstation WHERE stationID='".$id."'");
$data = mysql_fetch_assoc($query);
return $data['stationName'];
}


?>
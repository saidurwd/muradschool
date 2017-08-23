<?php
$query = mysql_query("SELECT * FROM userinfo");
?>
<h2>User List</h2><br />
<table width="600" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td><strong>Name</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Login Name</strong></td>
    <td width="50"><strong>Edit</strong></td>
    <td width="50"><strong>Delete</strong></td>
  </tr>


<?php 
while($row = mysql_fetch_assoc($query)){
	echo '<tr>';
    echo '<td>'. $row['Name'].'</td>';
    echo '<td>'. $row['Email'].'</td>';
    echo '<td>'. $row['userName'].'</td>';
    echo '<td><a href="index.php?action=userEdit&id=' . $row['userID'] . '">Edit</a></td>';
	echo '<td><a onclick="return disp_confirm();" href="index.php?action=userList&id=' . $row['userID'] . '&task=delete">Delete</a></td>';
    echo '</tr>';
}
?>
</table>

<?php 
if($_REQUEST['action']=='userList'  && $_GET['task']=='delete'){
$query = "delete from userinfo where userID='".$_REQUEST['id']."' ";
if(mysql_query($query)){
	panRedirect('index.php?action=userList');
} else {
	print mysql_error();
}
}
?>
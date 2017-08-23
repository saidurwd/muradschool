<?php
$query = mysql_query("SELECT * FROM girlsuser");
?>

<h2>Girls User List</h2><br />
<p>Add new Girls user in here... <a href="index.php?action=_girls_new">Create New</a></p>
<table width="600" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td style="font-size: 14px; background: royalblue; color: white;"><strong>Name</strong></td>
    <td style="font-size: 14px; background: royalblue; color: white;"><strong>Email</strong></td>
    <td style="font-size: 14px; background: royalblue; color: white;"><strong>Username</strong></td>
    <td style="font-size: 14px; background: royalblue; color: white;"><strong>Approved</strong></td>
    <td style="font-size: 14px; background: royalblue; color: white;" width="50"><strong>Edit</strong></td>
    <td style="font-size: 14px; background: royalblue; color: white;" width="50"><strong>Delete</strong></td>
  </tr>


<?php 
while($row = mysql_fetch_assoc($query)){
	echo '<tr>';
    echo '<td>'. $row['Name'].'</td>';
    echo '<td>'. $row['Email'].'</td>';
    echo '<td>'. $row['userName'].'</td>';
    echo '<td>'. $row['UserType'].'</td>';
    echo '<td><a href="index.php?action=_girls_edit&id=' . $row['userID'] . '">Edit</a></td>';
	echo '<td><a onclick="return disp_confirm();" href="index.php?action=_girls_list&id=' . $row['userID'] . '&task=delete">Delete</a></td>';
    echo '</tr>';
}
?>
</table>

<?php 
if($_REQUEST['action']=='_girls_list'  && $_GET['task']=='delete'){
$query = "delete from girlsuser where userID='".$_REQUEST['id']."' ";
if(mysql_query($query)){
	panRedirect('index.php?action=_girls_list');
} else {
	print mysql_error();
}
}
?>
<?php
$query = mysql_query("SELECT * FROM girlsuser WHERE userID='".$_REQUEST['id']."'");
$row = mysql_fetch_assoc($query);
?>

<form action="index.php?action=_girls_edit" method="post" onsubmit="return _girls_new();">
<input type="hidden" name="userID" id="userID" value="<?=$row['userID']?>" />
<h2>Edit User</h2><br />
<table width="400" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td><strong>Name</strong></td>
    <td><input type="text" name="Name" id="Name" value="<?=$row['Name']?>" required /></td>
  </tr>
  <tr>
    <td><strong>Approved</strong></td>
    <td>
    	<select name="UserType" id="UserType">
        	<option <?php if($row['UserType']=='1'){ echo'selected="selected"'; } ?> value="1">Yes</option>
            <option <?php if($row['UserType']=='2'){ echo'selected="selected"'; } ?> value="2">No</option>
        </select>
    </td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><input type="text" name="Email" id="Email" value="<?=$row['Email']?>" required /></td>
  </tr>
  <tr>
    <td><strong>Username</strong></td>
    <td><input type="text" name="userName" id="userName" value="<?=$row['userName']?>" required /></td>
  </tr>
  <tr>
    <td><strong>Password</strong></td>
    <td><input type="password" name="Password" id="Password" value="" required /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submitForm" value="Update" /></td>
  </tr>
</table>
</form>
<?php 
if($_REQUEST['submitForm']=='Update'){
	$query = mysql_query("UPDATE girlsuser SET Name='".$_REQUEST['Name']."', UserType='".$_REQUEST['UserType']."', Email='".$_REQUEST['Email']."', Password= '".md5($_REQUEST['Password'])."', userName='".$_REQUEST['userName']."' WHERE userID='".$_REQUEST['userID']."' ");
	panRedirect('index.php?action=_girls_list');
}	 
?>
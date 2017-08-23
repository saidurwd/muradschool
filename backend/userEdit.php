<?php
$query = mysql_query("SELECT * FROM userinfo WHERE userID='".$_REQUEST['id']."'");
$row = mysql_fetch_assoc($query);
?>

<form action="index.php?action=userEdit" method="post" onsubmit="return newUser();">
<input type="hidden" name="userID" id="userID" value="<?=$row['userID']?>" />
<h2>Edit User</h2><br />
<table width="400" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td><strong>Name</strong></td>
    <td><input type="text" name="Name" id="Name" value="<?=$row['Name']?>" /></td>
  </tr>
  <tr>
    <td><strong>Type</strong></td>
    <td>
    	<select name="UserType" id="UserType">
        	<option <?php if($row['UserType']=='1'){ echo'selected="selected"'; } ?> value="1">Admin</option>
            <option <?php if($row['UserType']=='2'){ echo'selected="selected"'; } ?> value="2">User</option>
        </select>
    </td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><input type="text" name="Email" id="Email" value="<?=$row['Email']?>" /></td>
  </tr>
  <tr>
    <td><strong>User Name</strong></td>
    <td><input type="text" name="userName" id="userName" value="<?=$row['userName']?>" /></td>
  </tr>
  <tr>
    <td><strong>Password</strong></td>
    <td><input type="password" name="Password" id="Password" value="" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submitForm" value="Update" /></td>
  </tr>
</table>
</form>
<?php 
if($_REQUEST['submitForm']=='Update'){
	$query = mysql_query("UPDATE userinfo SET Name='".$_REQUEST['Name']."', UserType='".$_REQUEST['UserType']."', Email='".$_REQUEST['Email']."', Password= '".md5($_REQUEST['Password'])."', userName='".$_REQUEST['userName']."' WHERE userID='".$_REQUEST['userID']."' ");
	panRedirect('index.php?action=userList');
}	 
?>
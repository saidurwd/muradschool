<form action="index.php?action=newUser" method="post" onsubmit="return newUser();">
<h2>New User</h2><br />
<table width="400" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td><strong>Name</strong></td>
    <td><input type="text" name="Name" id="Name" value="" /></td>
  </tr>
  <tr>
    <td><strong>Type</strong></td>
    <td>
    	<select name="UserType" id="UserType">
        	<option value="1">Admin</option>
            <option value="2">User</option>
        </select>
    </td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><input type="text" name="Email" id="Email" value="" /></td>
  </tr>
  <tr>
    <td><strong>Login Name</strong></td>
    <td><input type="text" name="userName" id="userName" value="" /></td>
  </tr>
  <tr>
    <td><strong>Password</strong></td>
    <td><input type="password" name="Password" id="Password" value="" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submitForm" value="Save" /></td>
  </tr>
</table>
</form>
<?php 
if($_REQUEST['submitForm']=='Save'){
	$query = mysql_query("INSERT INTO userinfo (userID, Name, UserType, Email, userName, Password) VALUES ('', '".$_REQUEST['Name']."', '".$_REQUEST['UserType']."', '".$_REQUEST['Email']."', '".$_REQUEST['userName']."', '".md5($_REQUEST['Password'])."') ");
	panRedirect('index.php?action=userList');
}	 
?>
<form action="index.php?action=_girls_new" method="post" onsubmit="return _girls_new();">
<h2>New Girls User</h2><br />
<table width="400" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td><strong>Name</strong></td>
    <td><input type="text" name="Name" id="Name" value="" required /></td>
  </tr>
  <tr>
    <td><strong>Approved</strong></td>
    <td>
    	<select name="UserType" id="UserType">
        	<option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><input type="text" name="Email" id="Email" value="" required /></td>
  </tr>
  <tr>
    <td><strong>Username</strong></td>
    <td><input type="text" name="userName" id="userName" value="" required /></td>
  </tr>
  <tr>
    <td><strong>Password</strong></td>
    <td><input type="password" name="Password" id="Password" value="" required /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submitForm" value="Save" /></td>
  </tr>
</table>
</form>
<?php 
if($_REQUEST['submitForm']=='Save'){
	$query = mysql_query("INSERT INTO girlsuser (userID, Name, UserType, Email, userName, Password) VALUES ('', '".$_REQUEST['Name']."', '".$_REQUEST['UserType']."', '".$_REQUEST['Email']."', '".$_REQUEST['userName']."', '".md5($_REQUEST['Password'])."') ");
	panRedirect('index.php?action=_girls_list');
}	 
?>
<?php
ob_start();
session_start();
if(session_destroy())
{
header("Location: _girls_login.php");
}
?>
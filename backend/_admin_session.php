<?php
include('dbconnect.php');
//session_start();
if(!isset($_SESSION['UserType']))
{
	header("Location:index.php");
}
?>
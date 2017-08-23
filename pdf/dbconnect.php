<?php

if ($connection = mysql_connect('localhost', 'root', ''))
	{
		echo "";
		//echo "CONNECTED SERVER<br>";
	}
		else
	{
		echo "COULD NOT CONNECT TO SERVER!";
		return false;
	}

if ($databaseconnect = mysql_select_db('sclrupdiass',$connection))
	{
		echo "";
		//echo "CONNECTED DATABASE<br>";
	}
		else
	{
		echo "COULD NOT CONNECT TO DATABESE!";
		return false;
	}

  ?>
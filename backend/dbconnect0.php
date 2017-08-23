<?php

if ($connection = mysql_connect('jorabarighs.db.8672095.hostedresource.com', 'jorabarighs', 'MuR1@d123'))
	{
		echo "";
		//echo "CONNECTED SERVER<br>";
	}
		else
	{
		echo "COULD NOT CONNECT TO SERVER!";
		return false;
	}

if ($databaseconnect = mysql_select_db('jorabarighs',$connection))
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
 

<?php

class bdClass {

    function mysqlConnect($host, $username, $password, $name) {
        $connectect = @mysql_connect($host, $username, $password) or die(mysql_error());
        $selected = @mysql_select_db($name) or die(mysql_error());
    }

    function myQuery($query, $fieldName) {
        $this->query = @mysql_query($query) or die(mysql_error());
        $this->rows = @mysql_fetch_array($this->query);
        $this->count_all = @mysql_num_rows($this->query);
        $value = $this->rows[$fieldName];
        return $value;
    }

}

//$host = 'jorabarighs.db.8672095.hostedresource.com';
//$user = 'jorabarighs';
//$password = 'MuR1@d123';
//$dbname = 'jorabarighs';

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'muradschool';

$bdconnect = new bdClass;
$bdconnect->mysqlConnect($host, $user, $password, $dbname);
?>
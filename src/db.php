<?php
$mysql_hostname = "localhost";
$mysql_user = "justinac_user";
$mysql_password = "user123";
$mysql_database = "justinac_jiac";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
//echo "connected";

?>
<?php
$connection = mysql_connect($db['host'],$db['user'],$db['password']) or die("MySQL Error: Connection on ".$db['host']." failed with username ".$db['user']);
$db = mysql_select_db($db['db_name'],$connection) or die("MySQL Error: Database ".$db['db_name']." not found on the server");
?>
<?php

$user='b110142cs';
$password='#em@ntkum@r';
$database='db_b110142cs';
$host='localhost';

$conn=mysql_connect($host,$user,$password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

?>

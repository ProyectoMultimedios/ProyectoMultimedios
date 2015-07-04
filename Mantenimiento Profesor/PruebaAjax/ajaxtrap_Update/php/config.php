<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";


$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');
$Profe= mysql_query($sql) or die ('error'. mysql_error());

?>
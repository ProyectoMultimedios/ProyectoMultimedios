<?php

$CarnetB = $_POST["CarnetB"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";

$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');


$sql1 = "SELECT * FROM Estudiantes where Carnet = '$CarnetB' ";
$select= mysql_query($sql1) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);
echo= $select[3];
header("Location: FrmIngresarEstudiante.php");
?>

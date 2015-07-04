<?php


$Nombre = $_POST["Nombre"];
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Cedula = $_POST["Cedula"];

$Contrasena = $_POST["Contrasena"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";


$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');

$sql = "INSERT INTO Profesores (Cedula,Nombre,Apellido1, Apellido2,Contrasena )
VALUES ('$Cedula', '$Nombre', '$Apellido1','$Apellido2','$Contrasena')";


$Profe= mysql_query($sql) or die ('error'. mysql_error());

?>

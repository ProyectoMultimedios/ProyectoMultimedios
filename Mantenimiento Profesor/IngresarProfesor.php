<?php


$Nombre = $_POST["Nombre"];
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Cedula = $_POST["Cedula"];
$Usuario = $_POST["Usuario"];
$Contrasena = $_POST["Contrasena"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";


$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');

$sql = "INSERT INTO Profesores (Id, Cedula,Nombre,Apellido1, Apellido2, UserID,Contraseña )
VALUES ('$Cedula', '$Nombre', '$Apellido1','$Apellido2','$Usuario','$contrasena')";


$Profe= mysql_query($sql) or die ('error'. mysql_error());

?>

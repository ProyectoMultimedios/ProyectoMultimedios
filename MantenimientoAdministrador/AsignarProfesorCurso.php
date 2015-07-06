<?php

$Nombre = $_POST["Nombre"];
$Cedula = $_POST["Cedula"];
$Apellido1 = $_POST["Apellido1"];
$Apellido2= $_POST["Apellido2"];


$NombreCurso = $_POST["Nombre"];
$Sigla = $_POST["Sigla"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";


// Create connection
/*$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("fallo conexión: " . mysqli_connect_error());
}*/

$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');




$sql = "INSERT INTO curso_nivel_profesor (Nombre, Cedula,Apellido1,Apellido2, Nombre, Sigla)
VALUES('$Nombre','$Cedula','$Apellido1','$Apellido2', '$NombreCurso', '$Sigla')";

$sql1 = "SELECT Id FROM profesores where Cedula = '$Cedula' ";


$profe mysql_query($sql) or die ('error'. mysql_error());
$select= mysql_query($sql1) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);



header("Location:ListarProfesoresAsignar.php");
?>

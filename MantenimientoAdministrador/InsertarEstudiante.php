<?php

$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Apellido2= $_POST["Apellido2"];
$Carnet = $_POST["Carnet"];
$Genero = $_POST["Genero"];

$NombreEncargado = $_POST["NombreEncargado"];
$ApellidoEncargado = $_POST["ApellidoEncargado"];
$Apellido2Encargado = $_POST["Apellido2Encargado"];
$Identificacion = $_POST["Identificacion"];
$Telefono = $_POST["Telefono"];

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




$sql = "INSERT INTO padres (Nombre, Apellido1,Apellido2, Identificacion, telefono, Estado )
VALUES('$NombreEncargado','$ApellidoEncargado','$Apellido2Encargado','$Identificacion','$Telefono','Activo')";

$sql1 = "SELECT IdPadres FROM padres where Identificacion = '$Identificacion' ";


$Padre= mysql_query($sql) or die ('error'. mysql_error());
$select= mysql_query($sql1) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);


$sql2 = "INSERT INTO estudiantes (IdPadres, Nombre, Apellido1,Apellido2, Carnet,Genero, Estado)
VALUES ( $select[0],'$Nombre', '$Apellido','$Apellido2', '$Carnet','$Genero','Activo')";

$alumno= mysql_query($sql2) or die ('error'. mysql_error());
header("Location:FrmIngresarEstudiante.php");
?>

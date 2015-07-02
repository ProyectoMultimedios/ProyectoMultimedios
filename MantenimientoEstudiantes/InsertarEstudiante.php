<?php


$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Carnet = $_POST["Carnet"];
//$Genero = $_POST["Genero"];

$NombreEncargado = $_POST["NombreEncargado"];
$ApellidoEncargado = $_POST["ApellidoEncargado"];
$Identificacion = $_POST["Identificacion"];
$Telefono = $_POST["Telefono"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


// Create connection
/*$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("fallo conexión: " . mysqli_connect_error());
}*/

$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('proyecto');

$sql = "INSERT INTO proyecto.padre ( Nombre, Apellido, Identificacion, telefono, Estado )
VALUES ('$NombreEncargado', '$ApellidoEncargado', '$Identificacion','$Telefono','Activo')";

$sql1 = "SELECT Id_Padre FROM padre";

$Padre= mysql_query($sql) or die ('error'. mysql_error());
$select= mysql_query($sql1) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);



$sql2 = "INSERT INTO proyecto.alumnos (Nombre, Apellido, Carnet,Genero,Id_Padre, Estado)
VALUES ('$Nombre', '$Apellido', '$Carnet','Mujer', $select[0],'Activo')";

$alumno= mysql_query($sql2) or die ('error'. mysql_error());
header("Location: index.php");
?>

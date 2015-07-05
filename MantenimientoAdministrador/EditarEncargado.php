<?php

$Id = $_POST["Campo"];
$Nombre = $_POST["Nombre"];
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Identificacion =  $_POST["Identificacion"]; ;
$Telefono =  $_POST["Telefono"];;
$Estado =  $_POST["Estado"];;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("fallo conexión: " . mysqli_connect_error());
}

$sql = "UPDATE Padres SET Nombre = '$Nombre' ,Apellido1 = '$Apellido1', Apellido2 = '$Apellido2' , Identificacion = '$Identificacion' , Telefono = '$Telefono', Estado = '$Estado' WHERE IdPadres = $Id";

if (mysqli_query($conn, $sql)) {
    echo "Estudiante Actualizado";
    header("Location: FrmListarEncargado.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

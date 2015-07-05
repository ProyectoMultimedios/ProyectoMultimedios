<?php
$Id = $_POST["Campo"];
$Nombre = $_POST["Nombre"];
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Cedula =  $_POST["Cedula"]; ;



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

$sql = "UPDATE Profesores SET Nombre = '$Nombre' ,Apellido1 = '$Apellido1', Apellido2 = '$Apellido2' , Cedula = '$Cedula'  WHERE Id = $Id";

if (mysqli_query($conn, $sql)) {
    echo "Profesor Actualizado";
    header("Location: Listar.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>


<?php

$NombreUsuario = $_POST["NombreUsuario"];
$Contrasena = $_POST["Contrasena1"];
$Nombre = $_POST["Nombre"];
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Tipo = $_POST["Tipo"];

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

$sql = "INSERT INTO usuarios ( UserID, Contrasena, Nombre, Apellido1, Apellido2, Tipo )
VALUES ('$NombreUsuario', '$Contrasena', '$Nombre','$Apellido1','$Apellido2','$Tipo')";

if (mysqli_query($conn, $sql)) {
    echo "Usuario Insertado";
    header("Location: Index.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

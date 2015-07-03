<?php
$NombreUsuario = $_POST["txtNombreUsuario"];
$Contrasena = $_POST["txtContraseña1"];
$Nombre = $_POST["txtNombre"];
$Apellido1 = $_POST["txtApellido1"];
$Apellido2 = $_POST["txtApellido2"];
$Tipo = $_POST["sltTipo"];

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

$sql = "INSERT INTO usuarios ( UserID,Contrasena, Nombre, Apellido1, Apellido2 )
VALUES ('$NombreUsuario', '$Contrasena', '$Nombre','$Apellido1','$Apellido2')";

if (mysqli_query($conn, $sql)) {
    echo "Usuario Insertado";
    header("Location: ConexionRegistrar.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

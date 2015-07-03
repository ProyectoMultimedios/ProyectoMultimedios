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

$sql = "INSERT INTO usuarios ( UserID,Contraseña, Nombre,Apellido1,Apellido2,Tipo )
VALUES ('$NombreUsuario', '$Contrasena', '$Nombre','$Apellido1','$Apellido2','$Tipo')";

if (mysqli_query($conn, $sql)) {
    echo "Usuario Insertado";
    header("Location: Registro.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

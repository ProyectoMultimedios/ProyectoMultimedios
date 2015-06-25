<?php


$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Carnet = $_POST["Carnet"];
$Genero = $_POST["Genero"];

$NombreEncargado = $_POST["NombreEncargado"];
$ApellidoEncargado = $_POST["ApellidoEncargado"];
$Identificacion = $_POST["Identificacion"];
$Telefono = $_POST["Telefono"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Proyecto";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("fallo conexión: " . mysqli_connect_error());
}


$sql = "INSERT INTO Alumnos ( Id_Alumnos,Id_Padre,Nombre, Apellido, Carnet,Genero )
VALUES ('','$Nombre', '$Apellido', '$Carnet','Mujer')";

$sql2 = "INSERT INTO padre ( Nombre, Apellido, Identificacion, telefono )
VALUES ('$NombreEncargado', '$ApellidoEncargado', '$Identificacion','$Telefono')";



if (mysqli_query($conn, $sql)) {
    echo "Registro Insertado";
    header("Location: index.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


mysqli_close($conn);

?>

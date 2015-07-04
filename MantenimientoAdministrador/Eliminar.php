<?php

$Id = $_POST["Campo"];

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

$sql = "DELETE From Estudiantes WHERE Id = $Id";

if (mysqli_query($conn, $sql)) {
    echo "Estudiante Actualizado";
    header("Location: ListarEstudiantes.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

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


    $strSQL =  "delete from profesores where WHERE Id = $Id";

if (mysqli_query($conn, $sql)) {
    echo "Profesor Eliminado";
    header("Location: Listar.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>


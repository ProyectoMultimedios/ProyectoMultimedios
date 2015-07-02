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
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("fallo conexión: " . mysqli_connect_error());
}
mysql_select_db('proyecto');

$sql = "INSERT INTO proyecto.padre ( Nombre, Apellido, Identificacion, telefono )
VALUES ('$NombreEncargado', '$ApellidoEncargado', '$Identificacion','$Telefono')";

/*$sql1= "select Id_Padre from proyecto.padre where Identificacion= $Identificacion";



//$Padre= mysql_query($sql) or die ('error'. mysql_error());

$select= mysql_query($sql1) or die ('error'. mysql_error());


$sql2 = "INSERT INTO proyecto.alumnos (Nombre, Apellido, Carnet,Genero,Id_Padre )
VALUES ('$Nombre', '$Apellido', '$Carnet','Mujer', $select )";*/


if (mysqli_query($conn, $sql)) {
    echo "Registro Insertado";
    header("Location: index.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }



//mysqli_close($conn);

?>

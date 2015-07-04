<?php

$Cotidiano = $_POST["Cotidiano"];
$PacialI = $_POST["ParcialI"];
$ParcialII= $_POST["ParcialII"];
$Estudiantes_Matriculados_Id = $_POST["IdEstudiante"];
$Curso_Nivel_Id = $_POST["IdCursoNivel"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";


// Create connection
/*$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("fallo conexión: " . mysqli_connect_error());
}*/

$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');

$sql = "INSERT INTO notas (Cotidiano, Parcial1 ,Parcial2, Final, Curso_Nivel_Id, Estudiantes_Matriculados_Id )
VALUES('$Cotidiano','$ParcialI','$ParcialII','66','55','55')";

$Nota= mysql_query($sql) or die ('error'. mysql_error());
$select= mysql_query($sql1) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);

header("Location: RegistroNotas.php");
?>

<?php

$Cotidiano = $_POST["Cotidiano"];
$ParcialI = $_POST["ParcialI"];
$ParcialII= $_POST["ParcialII"];
$IdEstudiante = $_POST["IdEstudiante"];
$IdCursoNivel = $_POST["IdCursoNivel"];

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

$sql = "INSERT INTO notas (Cotidiano, Parcial1, Parcial2, Final, Curso_Nivel_Id, Estudiantes_Matriculados_Id )
VALUES('$Cotidiano','$ParcialI','$ParcialII','44','$IdCursoNivel','$IdEstudiante')";

$sql1 = "SELECT Id FROM curso_nivel_profesor where Id = '$IdCursoNivel' ";
$sql2 = "SELECT Id FROM estudiantes_matriculados where Id = '$IdEstudiante' ";

$Curso= mysql_query($sql1) or die ('error'. mysql_error());
$Estudiante= mysql_query($sql2) or die ('error'. mysql_error());
$select= mysql_query($sql1) or die ('error'. mysql_error());
$select= mysql_query($sql2) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);


header("Location:FrmAgregarNotas.php");
?>

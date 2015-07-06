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

 Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
 Check connection
if (!$conn) {
    die("fallo conexión: " . mysqli_connect_error());
}

$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');

$sql = "SELECT Estudiantes_Id FROM estudiantes_matriculados where IdEstudiante = '$IdEstudiante' ";
$select= mysql_query($sql) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);
$sql1 = "SELECT Curso_Id FROM curso_nivel_profesor where IdCursoNivel = '$IdCursoNivel' ";
$select1= mysql_query($sql1) or die ('error'. mysql_error());
$select1 = mysql_fetch_array($select1);

$sql2 = "INSERT INTO Notas (Cotidiano, Parcial1, Parcial2, Final,Curso_Nivel_Id,Estudiantes_Matriculados_Id)
VALUES ( '$Cotidiano',' $ParcialI','$ParcialII','55','$select1[0]','$select[0]')";

$Nota= mysql_query($sql2) or die ('error'. mysql_error());




header("Location:FrmAgregarNotas.php");
?>

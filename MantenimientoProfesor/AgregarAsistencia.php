<?php

$date= $_POST["date"];
$Tipo= $_POST["Tipo"];
$Carnet= $_POST["Carnet"];
$Curso= $_POST["Curso"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";

$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');

$sql = "SELECT Id FROM estudiantes_matriculados where Id = '$Carnet' ";
$select= mysql_query($sql) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);
$sql1 = "SELECT Id FROM curso_nivel_profesor where Id = '$Curso' ";
$select1= mysql_query($sql1) or die ('error'. mysql_error());
$select1 = mysql_fetch_array($select1);

$sql2 = "INSERT INTO ausencias_tardias_escapadas (Estudiantes_Matriculados_Id, Curso_Nivel_Id, Fecha, Tipo)
VALUES ( '$select[0]',' $select1[0]','$date','$Tipo')";

$Ausencias= mysql_query($sql2) or die ('error'. mysql_error());

header("Location:IndexProfesor.php");
?>

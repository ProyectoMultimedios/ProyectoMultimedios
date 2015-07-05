<?php

$Nivel = $_POST["Nivel"];

$Grupos= $_POST["Grupo"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";



$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');

$sql = "INSERT INTO Niveles (Descripcion)
VALUES('$Nivel')";

$Nivel= mysql_query($sql) or die ('error'. mysql_error());



$sql1 = "SELECT * FROM Niveles ORDER BY id DESC LIMIT 1; ";
$select= mysql_query($sql1) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);

$sql2 = "INSERT INTO secciones (Seccion_Numero, Niveles_Id)
VALUES('$grup','$select[0]')";

for($i=1; $i<$Grupos; $i++){
$grup=$i;
$Secciones= mysql_query($sql2) or die ('error'. mysql_error());
};

/*$sql1 = "SELECT IdPadres FROM padres where Identificacion = '$Identificacion' ";


$Padre= mysql_query($sql) or die ('error'. mysql_error());
$select= mysql_query($sql1) or die ('error'. mysql_error());
$select = mysql_fetch_array($select);


$sql2 = "INSERT INTO estudiantes (IdPadres, Nombre, Apellido1,Apellido2, Carnet,Genero, Estado)
VALUES ( $select[0],'$Nombre', '$Apellido','$Apellido2', '$Carnet','$Genero','Activo')";

$alumno= mysql_query($sql2) or die ('error'. mysql_error());
header("Location:FrmIngresarEstudiante.php");*/
?>

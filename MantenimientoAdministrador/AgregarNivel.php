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



for($i=1; $i<=$Grupos; $i++){
$W= $select[1]."-".$i;

$sql2 = "INSERT INTO secciones (Seccion_Numero, Niveles_Id)
VALUES('$W','$select[0]')";
$Secciones= mysql_query($sql2) or die ('error'. mysql_error());

};

header("location:IndexAdministrador.php");
?>

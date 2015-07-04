<?php


$Nombre = $_POST["Nombre"];
$Sigla = $_POST["Sigla"];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";


$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');

$sql = "INSERT INTO Cursos (Nombre,Sigla )
VALUES ('$Nombre', '$Sigla')";


$Curso= mysql_query($sql) or die ('error'. mysql_error());

header("Location:FrmAgregarCurso.php");
?>
?>


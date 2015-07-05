<?php
session_start();

$NombreUsuario = $_POST["NombreUsuario"];
$Pass = $_POST["Pass"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";


$conn = mysql_connect ($servername, $username, $password);
//AND Contrasena= '$Pass'"
mysql_select_db ('multimedios2.0');

if (!$conn) {
    die("fallo conexión: " . mysql_connect_error());
}

$sql = "SELECT Tipo FROM usuarios WHERE UserID = '$NombreUsuario' AND Contrasena= '$Pass'";
$select1 = mysql_query($sql) or die('error1:' . mysql_error());
$select = mysql_fetch_array ($select1);
$Tipo = $select[0];

$sql1 = "SELECT UserID FROM usuarios WHERE UserID = '$NombreUsuario' AND Contrasena= '$Pass'";
$select2 = mysql_query($sql1) or die('error2:' . mysql_error());
$select3 = mysql_fetch_array ($select2);
$UserID = $select3[0];

$sql2 = "SELECT Contrasena FROM usuarios WHERE UserID = '$NombreUsuario' AND Contrasena= '$Pass'";
$select4 = mysql_query($sql2) or die('error3:' . mysql_error());
$select5 = mysql_fetch_array ($select4);
$Clave = $select5[0];


if ($NombreUsuario == ""){

$_SESSION["Error1"] = "Ingrese su Nombre de Usuario";

}if ($Pass == ""){

    $_SESSION["Error2"] = "Ingrese su Contraseña";

}elseif ($NombreUsuario !== $UserID or $Pass !== $Clave){

    $_SESSION["Error3"] = "Cuenta Invalida o Datos Incorrectos";

}
if ($UserID == $NombreUsuario and $Clave == $Pass and $Tipo ==1 ){
//    redireciona a Mantenimiento de Administradores
     header("Location: MantenimientoAdministrador/IndexAdministrador.php");
}if($UserID == $NombreUsuario and $Clave == $Pass and $Tipo ==2){
//    redireciona a Mantenimiento de Profesores
  header("Location: MantenimientoProfesor/IndexProfesor.php");
}
//header("Location: Index.php");
?>

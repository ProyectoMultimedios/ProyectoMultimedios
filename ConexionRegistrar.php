<?php
session_start();



$NombreUsuario = $_POST["NombreUsuario"];
$Contrasena1 = $_POST["Contrasena1"];
$Contrasena2 = $_POST["Contrasena2"];
$Nombre = $_POST["Nombre"];
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Tipo = $_POST["Tipo"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedios2.0";




// Create connection
$conn= mysql_connect ($servername, $username, $password);
mysql_select_db('multimedios2.0');

$sql = "SELECT UserID FROM usuarios WHERE UserID = '$NombreUsuario'";
$select1 = mysql_query($sql) or die('error' . mysql_error());
$select = mysql_fetch_array ($select1);
$UserID = $select[0];

//validacion de los campos
if ($NombreUsuario == ""){

    $_SESSION["Error1"] = "Debe Ingresar su Nombre de Usuario";

}if($Contrasena1 == ""){

    $_SESSION["Error2"] = "Debe Ingresar su Contraseña";

}if($Contrasena2 == ""){

    $_SESSION["Error3"] = "Debe confirmar su Contraseña";

}if ($Contrasena1 !== $Contrasena2){

    $_SESSION["Error4"] = "Las contraseñas no Coinciden";

}if ($Nombre == ""){

$_SESSION["Error5"] = "Debe Ingresar su Nombre";

}if ($Apellido1 == ""){

$_SESSION["Error6"] = "Debe Ingresar su Primer Apellido";

}if ($Apellido2 == ""){

$_SESSION["Error7"] = "Debe Ingresar su Segundo Apellido";

}if ($Tipo == 0){

$_SESSION["Error8"] = "Debe Seleccionar un Usuario";

}if($UserID === $NombreUsuario){

$_SESSION["Error9"] = "Este Nombre de Usuario ya Existe";

}else{ // Si no hay ningun error me entrara a esta condicion
//print "Exito";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
    die("fallo conexión: " . mysqli_connect_error());
}
    $sql = "INSERT INTO usuarios ( UserID, Contrasena, Nombre ,Apellido1,Apellido2,Tipo )
VALUES ('$NombreUsuario', '$Contrasena1', '$Nombre','$Apellido1','$Apellido2','$Tipo')";
    if (mysqli_query($conn, $sql)) {
    echo "
    <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Document</title>

    <script type='text/javascript'>
    alert('Usuario Insertado Exitosamente');
    </script>
</head>
<body>

</body>
</html>

    ";
    header("Location: Registro.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

header("Location: Registro.php");


?>



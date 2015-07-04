<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Datos</title>
    <link rel="stylesheet" href="estilos.css">
    <script type="text/javascript" src="index_files/formoid1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="bootstrap-3.3.4-dist/js/bootstrap.min.js" > -->
</head>
<body>

  <?php

$Carnet = $_POST['Carnet'];

$conn = mysqli_connect("localhost", "root", "","multimedios2.0") or die (mysql_error ());

$StrgSQL =  "SELECT * FROM Estudiantes WHERE Carnet= '$Carnet'";
$rs = mysqli_query($conn, $StrgSQL);


if (mysqli_num_rows($rs)>0){

                  while ($row = mysqli_fetch_row($rs)){
                      $ID= $row[0];
                       $Nombre = $row[2] ;
                        $Apellido1 = $row[3] ;
                          $Apellido2 = $row[4] ;
                           $Carnet = $row[5] ;
                           $Genero = $row[6];
                       $Estado = $row[7];
                  }
                           echo "
         <form class='form-horizontal' role='form' method='post' action='Editar.php' >

              <h1>Editar Datos</h1>


      <input type='hidden' alt='Txtid' name='Campo' value='$ID'>
      <br> <br><label for='' alt='lblNombre'><b>Nombre:</b> </label> &nbsp&nbsp
      <input type='text' alt='TxtNombre' name='Nombre' value='$Nombre'> <br> <br>

       <label for='' alt='lblApellido1'><b>Apellido 1:</b></label>
       <input type='text' alt='TxtApellido1' name='Apellido1' value='$Apellido1'> <br> <br>

       <label for='' alt='lblApellido2'><b>Apellido 2:</b></label>
        <input type='text' alt='TxtApellido2' name='Apellido2' value='$Apellido2'> <br> <br>

       <label for='' alt='lblCarnet'><b>Carnet:</b></label> &nbsp&nbsp&nbsp&nbsp
        <input type='text' alt='TxtCarnet' name='Carnet' value='$Carnet'> <br> <br>

        <label for='' alt='lblGenero'><b>Genero:</b></label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type='text' alt='TxtGenero' name='Genero' value='$Genero'> <br> <br>

        <label for='' alt='lblEstado'><b>Estado:</b></label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type='text' alt='TxtEstado' name='Estado' value='$Estado'> <br> <br>

 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='submit' value='Aceptar' > &nbsp
           <input type='submit' value='Cancelar' >

           <br><br>
       </div>
    <br><br><br><br><br><br>
";


      }else echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>
                   ";


        ?>

</body>
</html>

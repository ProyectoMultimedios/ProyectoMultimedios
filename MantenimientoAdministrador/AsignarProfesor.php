<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Profesor</title>
    <link rel="stylesheet" href="estilos.css">
    <script type="text/javascript" src="index_files/formoid1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="bootstrap-3.3.4-dist/js/bootstrap.min.js" > -->
</head>
<body>

  <?php

$Cedula = $_POST['Cedula'];

$conn = mysqli_connect("localhost", "root", "","multimedios2.0") or die (mysql_error ());

$StrgSQL =  "SELECT * FROM curso_nivel_profesor WHERE Cedula= '$Cedula'";
$rs = mysqli_query($conn, $StrgSQL);


if (mysqli_num_rows($rs)>0){

                  while ($row = mysqli_fetch_row($rs)){
                      $ID= $row[0];
                      $Cedula= $row[1];
                       $Nombre = $row[2] ;
                        $Apellido1 = $row[3] ;
                          $Apellido2 = $row[4] ;
                      $NombreCurso=$row[5];
                          $Sigla=$row[6];



                  }

                           echo "
         <form class='form-horizontal' role='form' method='post' action='AsignarProfesorCurso.php' >

              <h1>DAtosr</h1>


      <input type='hidden' alt='Txtid' name='Campo' value='$ID'>


      <br> <br><label for='' alt='lblCedula'><b>Cedula:</b> </label> &nbsp&nbsp
      <input type='text' alt='TxtCedula' name='Cedula' value='$Cedula'>

      <br> <br><label for='' alt='lblNombre'><b>Nombre:</b> </label> &nbsp&nbsp
      <input type='text' alt='TxtNombre' name='Nombre' value='$Nombre'> <br> <br>

       <label for='' alt='lblApellido1'><b>Apellido 1:</b></label>
       <input type='text' alt='TxtApellido1' name='Apellido1' value='$Apellido1'> <br> <br>

       <label for='' alt='lblApellido2'><b>Apellido 2:</b></label>
        <input type='text' alt='TxtApellido2' name='Apellido2' value='$Apellido2'> <br> <br>

          <br> <br><label for='' alt='lblNombreCurso'><b>Nombre del Curso:</b> </label> &nbsp&nbsp
      <input type='text' alt='TxtNombreCurso' name='Nombre' value='$NombreCurso'> <br> <br>

        <br> <br><label for='' alt='lblSigla'><b>Sigla:</b> </label> &nbsp&nbsp
      <input type='text' alt='TxtSigla' name='Sigla' value='$Sigla'> <br> <br>







 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='submit' value='Aceptar' > &nbsp
           <input type='submit' value='Cancelar' >

           <br><br>
       </div>
    <br><br><br><br><br><br>
";


     }else echo " Registros no encontrados
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
                   ";


        ?>

</body>
</html>

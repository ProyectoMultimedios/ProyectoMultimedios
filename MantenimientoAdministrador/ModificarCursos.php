<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Cursos</title>
    <link rel="stylesheet" href="estilos.css">
    <script type="text/javascript" src="index_files/formoid1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="bootstrap-3.3.4-dist/js/bootstrap.min.js" > -->
</head>
<body>

  <?php

$Sigla = $_POST['Sigla'];

$conn = mysqli_connect("localhost", "root", "","multimedios2.0") or die (mysql_error ());

$StrgSQL =  "SELECT * FROM cursos WHERE Sigla= '$Sigla'";
$rs = mysqli_query($conn, $StrgSQL);


if (mysqli_num_rows($rs)>0){

                  while ($row = mysqli_fetch_row($rs)){
                      $ID= $row[0];
                      $Sigla= $row[1];
                       $Nombre = $row[2] ;



                  }

                           echo "
         <form class='form-horizontal' role='form' method='post' action='UpdateCursos.php' >

              <h1>Editar Datos</h1>


      <input type='hidden' alt='Txtid' name='Campo' value='$ID'>


      <br> <br><label for='' alt='lblSigla'><b>Sigla:</b> </label> &nbsp&nbsp
      <input type='text' alt='TxtSigla' name='Sigla' value='$Sigla'>

      <br> <br><label for='' alt='lblNombre'><b>Nombre:</b> </label> &nbsp&nbsp
      <input type='text' alt='TxtNombre' name='Nombre' value='$Nombre'> <br> <br>









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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Listado Estudiantes</h2>

  <table class="table table-hover">
    <thead>
      <tr>
       <th>Nombre</th>
        <th>Apellido</th>
        <th>2 Apellido</th>
        <th>Carnet</th>
        <th>Genero</th>
        <th>Estado</th>
        <th>Accion</th>
        <th></th>
      </tr>
    </thead>
    <tbody>


       <?php


$conn = mysqli_connect("localhost", "root", "","Multimedios2.0") or die (mysql_error ());

$strSQL =  "SELECT * FROM Estudiantes";
$rs = mysqli_query($conn, $strSQL);

        if (mysqli_num_rows($rs)>0){

            while ($row = mysqli_fetch_row($rs)){
                       echo "<tr><td>$row[2]
                           </td><td>$row[3]
                           </td><td>$row[4]
                           </td><td>$row[5]
                           </td><td>$row[6]
                           </td><td>$row[7]
                           </td><td>
							</td>
                           </tr>";
                }
        }

        ?>


    </tbody>
  </table></div><button type="submit" class="btn btn-default">Atras</button>
</form>

</body>

</html>

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


       <th>Id</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>


       <?php


$conn = mysqli_connect("localhost", "root", "","ucr") or die (mysql_error ());

$strSQL =  "SELECT id, nombre, direccion, telefono,correo FROM estudiante";
$rs = mysqli_query($conn, $strSQL);

        if (mysqli_num_rows($rs)>0){

            while ($row = mysqli_fetch_row($rs)){
                       echo "<tr><td>$row[0]
                           </td><td>$row[1]
                           </td><td>$row[2]
                           </td><td>$row[3]
                           </td><td>$row[4]
                           </td></tr>";
                }
        }

        ?>


    </tbody>
  </table>

</div>
<button type="submit" class="btn btn-default">Registrarse</button>
</form>

</body>

</html>

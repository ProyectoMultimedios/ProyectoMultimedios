<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Profesores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>





<body>

<div class="container">
  <h2>Listado de Profesores</h2>

 <table class="table table-bordered table-hover">
	<thead>
	  <tr>
	    <th>Cedula</th>
	    <th>Nombre</th>
	    <th>Apellido1</th>
	    <th>Apellido2</th>
	   
	    <th>Contraseña</th>
	    
	  </tr>
	</thead>
	<tbody>


       <?php


$conn = mysqli_connect("localhost", "root", "","Multimedios2.0") or die (mysql_error ());

$strSQL =  "SELECT * FROM profesores";
$rs = mysqli_query($conn, $strSQL);

if (mysqli_num_rows($rs)>0){

            while ($row = mysqli_fetch_row($rs)){
                       echo "<tr><td>$row[1]
                           </td><td>$row[2]
                           
                           </td><td>$row[3]
                           </td><td>$row[4]
                       
                           </td><td>$row[6]
                           </td><td>
							</td>
                           </tr>";
                }
        }

        ?>


    </tbody>

  </table></div><button type="submit" class="btn btn-default" >Atras</button>
</form>

</body>

</html>
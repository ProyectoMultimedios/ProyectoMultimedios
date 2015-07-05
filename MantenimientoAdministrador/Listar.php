<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Profesores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <form class="formoid-solid-blue" style="background-color:#dcf2fa;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#020202;max-width:1300px;min-width:150px" method="post" action="IndexAdministrador.php">
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

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
	    <th>Usuario</th>
	    <th>Action</th>
	  </tr>
	</thead>
	<tbody>


       <?php


$conn = mysqli_connect("localhost", "root", "","Multimedios2.0") or die (mysql_error ());

$strSQL =  "SELECT * FROM profesores";
$rs = mysqli_query($conn, $strSQL);


while ($row = $rs->fetch_assoc()) {
?>
                
                
                
                
                <tr>
        <td><?php echo $row['Cedula']; ?></td>
	    <td><?php echo $row['Nombre']; ?></td>
	    <td><?php echo $row['Apellido1']; ?></td>
	    <td><?php echo $row['Apellido2']; ?></td>
	    <td><?php echo $row['UserID']; ?></td>
	    <td>
	    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['kode']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['Cedula']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['Cedula']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['Cedula']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['Cedula']; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="nm">Nombre</label>
    <input type="text" class="form-control" id="nm<?php echo $row['Cedula']; ?>" value="<?php echo $row['Nombre']; ?>">
  </div>
  <div class="form-group">
    <label for="gd">Apellido1</label>
    <input type="text" class="form-control" id="gd<?php echo $row['Cedula']; ?>" value="<?php echo $row['Apellido1']; ?>">
  </div>
  <div class="form-group">
    <label for="pn">Apellido2</label>
    <input type="text" class="form-control" id="pn<?php echo $row['Cedula']; ?>" value="<?php echo $row['Apellido2']; ?>">
  </div>
  <div class="form-group">
    <label for="al">Usuario</label>
    <input type="text" class="form-control" id="al<?php echo $row['Cedula']; ?>" value="<?php echo $row['Usuario']; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatedata('<?php echo $row['Cedula']; ?>')" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	    
	    </td>
	  </tr>

    <?php
}
?>
	</tbody>
      </table>
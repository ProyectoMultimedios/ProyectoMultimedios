<table class="table table-bordered table-hover">
	<thead>
	  <tr>
	    <th>Id</th>
	    <th>IdPadre</th>
	    <th>Nombre</th>
	    <th>Apellido1</th>
	    <th>Apellido2</th>
	    <th>Carne</th>
	    <th>Genero</th>
	    <th>Estado</th>
	    <th>Matricular</th>
	  </tr>
	</thead>
	<tbody>
<?php
include "config.php";
$res = $conn->query("select * from estudiantes");

while ($row = $res->fetch_assoc()) {
    $res2 = $conn->query("select * from secciones");
?>

	  <tr>
	    <td><?php echo $row['Id']; ?></td>
	    <td><?php echo $row['IdPadres']; ?></td>
	    <td><?php echo $row['Nombre']; ?></td>
	    <td><?php echo $row['Apellido1']; ?></td>
	    <td><?php echo $row['Apellido2']; ?></td>
	    <td><?php echo $row['Carnet']; ?></td>
	    <td><?php echo $row['Genero']; ?></td>
	    <td><?php echo $row['Estado']; ?></td>
	    <td>
	    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['Id']; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>

<!--	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['kode']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>-->

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['Id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

<!--     abre form-->

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['Id']; ?>">Matricular Estudiante</h4>
      </div>
      <div class="modal-body">


  <form>
   <div class="form-group">
    <label for="nm" class="hidden">Id</label>
    <input type="text"  readonly="readonly" class="hidden" id="IdEst<?php echo $row['Id']; ?>" value="<?php echo $row['Id']; ?>" name="txtId">
  </div>
     <div class="form-group">
    <label for="nm" class="hidden">Id</label>
    <input type="text"  readonly="readonly" class="hidden" id="Id<?php echo $row['Id']; ?>" value="<?php echo $row['Id']; ?>" name="txtId">
  </div>

  <div class="form-group">
    <label for="nm">Nombre</label>
    <input type="text" readonly="readonly" class="form-control" id="Nombre<?php echo $row['Id']; ?>" value="<?php echo $row['Nombre']; ?>" name="txtNombre">
  </div>
  <div class="form-group">
    <label for="gd">Apellido1</label>
    <input type="text" readonly="readonly" class="form-control" id="Apellido1<?php echo $row['Id']; ?>" value="<?php echo $row['Apellido1']; ?>" name="txtApellido1">
  </div>
  <div class="form-group">
    <label for="pn">Apellido2</label>
    <input type="text" readonly="readonly" class="form-control" id="Apellido2<?php echo $row['Id']; ?>" value="<?php echo $row['Apellido2']; ?>" name="txtApellido2">
  </div>
  <div class="form-group">
    <label for="al">Carne</label>
    <input type="text" readonly="readonly" class="form-control" id="Carne<?php echo $row['Id']; ?>" value="<?php echo $row['Carnet']; ?>" name="txtCarne">
  </div>
  <div class="form-group">
    <label for="al">Genero</label>
    <input type="text" readonly="readonly" class="form-control" id="Genero<?php echo $row['Id']; ?>" value="<?php echo $row['Genero']; ?>" name="txtGenero">
  </div>
  <div class="form-group">
    <label for="al">Año</label>
    <input type="text" readonly="readonly" class="form-control" id="Ano<?php echo $row['Id']; ?>" value="<?php echo date('Y'); ?>" name="txtAno">
  </div>
  <div class="form-group">
    <label for="al">Seccion</label>
    <br><br>
<select name="slcSecciones" id="Secciones<?php echo $row['Id']; ?>">
    <?php
    while ($row2 = $res2->fetch_assoc()) {

    ?>
    <option id="<?php echo $row2['Id']; ?>" value="<?php echo $row2['Id']; ?>"><?php echo $row2['Seccion_Numero']; ?></option>
    <?php
    }

    ?>


</select>
  </div>

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="updatedata('<?php echo $row['Id']; ?>')" class="btn btn-primary">Save changes</button>
        </form>
<!--     cierra form-->
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

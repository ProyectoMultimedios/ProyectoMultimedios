<?php
include "config.php";
if(isset($_GET['Id'])){

$Ano = $_POST['Ano'];
$Estudiantes_Id = $_POST['IdEst'];
$Secciones_Id = $_POST['IdSec'];


$sql = "INSERT INTO estudiantes_matriculados ( Ano, Estudiantes_Id, Secciones_Id )
VALUES ('$Ano', '$Estudiantes_Id', '$Secciones_Id')";

//$stmt = $conn->prepare($sql);
//$stmt->bind_param($Ano, $Estudiantes_Id, $Secciones_Id);



if(mysqli_query($conn, $sql)){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Estudiante Matriculado Correctamente!</strong>
</div>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong>
</div>
<?php
}
} else{
?>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Estudiante No Matriculado</strong>
</div>
<?php
}
?>

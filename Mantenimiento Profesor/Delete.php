 <?php


$conn = mysqli_connect("localhost", "root", "","Multimedios2.0") or die (mysql_error ());
if(isset($_GET['id'])){
    
    $strSQL =  ("delete from profesores where Cedula=?");

$strSQL->bind_param('s', $id);

$id = $_GET['id'];

if($strSQL->execute()){
?>
    
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Exitoso
</div>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Error 
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Hola.
</div>
<?php
}
?>


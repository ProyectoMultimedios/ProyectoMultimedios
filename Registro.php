<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color: #6d84aa">

  <? php
    header("Location: Index.php");
    ?>
<!--
   <div style="font-family:Cursive">
       <div style="color: #4e818b">
          <div style="text-Align:center">

             <h1>Ingrese los Siguientes Datos</h1>

          </div>
           </div>
   </div>
-->
    <br><br>


       <br>


          <div class="row">

             <div class="col-md-4"></div>
              <div class="col-md-4">

                 <div class="panel panel-default" >
                  <div class="panel-body">
                  <form action="ConexionRegistrar.php" method="post" class="">
                     <div class="page-header">
                         <h1>Registrar Usuario</h1>
                     </div>
                     <div class="panel-footer">
                      <div class="form-group">
               <label for="">Nombre de Usuario:</label>
               <div class="input-group">
               <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
            <input type="text" class="form-control" alt="NombreUsuario" id="NombreUsuario" name="NombreUsuario" placeholder="Nombre de Usuario">
            </div>
           </div>

           <div class="form-group">
             <label for="">Contraseña:</label>
              <div class="input-group">
               <div class="input-group-addon"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></div>
               <input type="text" id="Contrasena1" class="form-control" alt="Contrasena1" name="Contrasena1" placeholder="Ingrese su contraseña">
               </div>
           </div>

           <div class="form-group">
               <label for="">Confirmar Contraseña</label>
               <div class="input-group">
               <div class="input-group-addon"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></div>
               <input type="text" id="Contrasena2" class="form-control" alt="Contrasena2" name="Contrasena2" placeholder="Confirmar Contraseña">
               </div>
           </div>
           <div class="form-group">
           <label for="">Nombre:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></div>
           <input type="text" name="Nombre" id="Nombre" alt="Contrasena2" placeholder="Ingrese el Nombre" class="form-control">
           </div>
           </div>
           <div class="form-group">
           <label for="">Primer Apellido:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-text-color" aria-hidden="true"></span></div>
           <input type="text" name="Apellido1" id="Apellido1" alt="Apellido1" placeholder="Ingrese el Primer Apellido" class="form-control">
           </div>
           </div>
           <div class="form-group">
           <label for="">Segundo Apellido:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-text-background" aria-hidden="true"></span></div>
           <input type="text" name="Apellido2" id="Apellido2" class="form-control" placeholder="Ingrese el Apellido 2">

                    </div>
                    </div>
                     <div class="form-group">
           <label for="">Tipo de Usuario:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
           <select name="Tipo" id="option" class="form-control">
               <option value="Administrador">Administrador</option>
               <option value="Profesor">Profesor</option>
           </select>

           </div>
             </div>

<!--               <div class="page-header"></div>-->
                                   </div>
                                   <br>
                          <button type="submit" value="" class="btn btn-primary">Ingresar Usuario</button>

        <button type="button"  onclick="location.href='Index.php'" class="btn btn-secondary">Regresar al Login</button>



                  </form>

               </div>
              </div>
              <div class="col-md-4"></div>
          </div>








</body>
</html>

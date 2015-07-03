<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color: #6d84aa">

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
                  <form action="" class="">
                     <div class="page-header">
                         <h1>Registrar Usuario</h1>
                     </div>
                     <div class="panel-footer">
                      <div class="form-group">
               <label for="nombre">Nombre de Usuario:</label>
               <div class="input-group">
               <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
            <input type="text" class="form-control" id="txtNombre" placeholder="Nombre de Usuario">
            </div>
           </div>

           <div class="form-group">
             <label for="txtContraseña1">Contraseña:</label>
              <div class="input-group">
               <div class="input-group-addon"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></div>
               <input type="text" class="form-control" id="txtContraseña1" placeholder="Ingrese su contraseña">
               </div>
           </div>

           <div class="form-group">
               <label for="txtContraseña2">Confirmar Contraseña</label>
               <div class="input-group">
               <div class="input-group-addon"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></div>
               <input type="text" class="form-control" id="txtContraseña2" placeholder="Confirmar Contraseña">
               </div>
           </div>
           <div class="form-group">
           <label for="txtNombre">Nombre:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></div>
           <input type="text" id="txtNombre" placeholder="Ingrese el Nombre" class="form-control">
           </div>
           </div>
           <div class="form-group">
           <label for="txtApellido1">Primer Apellido:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-text-color" aria-hidden="true"></span></div>
           <input type="text" id="txtApellido1" placeholder="Ingrese el Primer Apellido" class="form-control">
           </div>
           </div>
           <div class="form-group">
           <label for="txtApellido2">Segundo Apellido:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-text-background" aria-hidden="true"></span></div>
           <input type="text" id="txtApellido2" placeholder="Ingrese el Segundo Apellido" class="form-control">
                    </div>
                    </div>
                     <div class="form-group">
           <label for="txtNombre">Tipo de Usuario:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
           <select name="" id="option" class="form-control">
               <option value="">Administrador</option>
               <option value="">Profesor</option>
           </select>

           </div>
             </div>

<!--               <div class="page-header"></div>-->
                                   </div>
                                   <br>

                          <button type="submit" class="btn btn-primary">Ingresar Usuario</button>
                          <button type="button" class="btn btn-secondary">Regresar al Login</button>



                  </form>

               </div>
              </div>
              <div class="col-md-4"></div>
          </div>








</body>
</html>

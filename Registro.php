<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script lang="javascript" src="Alert.js"></script>

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
                  <form action="ConexionRegistrar.php"  method="post">
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
            <?php
                  if (isset($_SESSION["Error1"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error1"]."</font>";
                      echo "<br>";

                  }elseif (isset($_SESSION["Error9"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error9"]."</font>";
                      echo "<br>";
                  }else{

                      echo "";

                  }

                unset($_SESSION["Error1"]);
                unset($_SESSION["Error9"]);



                   ?>
           </div>


           <div class="form-group">
             <label for="">Contraseña:</label>
              <div class="input-group">
               <div class="input-group-addon"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></div>
               <input type="password" id="Contrasena1" class="form-control" alt="Contrasena1" name="Contrasena1" placeholder="Ingrese su contraseña">

               </div>
               <?php
                  if (isset($_SESSION["Error2"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error2"]."</font>";
                      echo "<br>";
                  }else{
                      echo "";
                  }
                unset($_SESSION["Error2"]);

                   ?>
           </div>

           <div class="form-group">
               <label for="">Confirmar Contraseña</label>
               <div class="input-group">
               <div class="input-group-addon"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></div>
               <input type="password" id="Contrasena2" class="form-control" alt="Contrasena2" name="Contrasena2" placeholder="Confirmar Contraseña">



               </div>
               <?php
                  if (isset($_SESSION["Error3"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error3"]."</font>";
                      echo "<br>";
                  }elseif(isset($_SESSION["Error4"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error4"]."</font>";
                      echo "<br>";
                  }else{

                      echo "";

                  }

                  unset($_SESSION["Error3"]);
                  unset($_SESSION["Error4"]);


                   ?>
           </div>
           <div class="form-group">
           <label for="">Nombre:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></div>
           <input type="text" name="Nombre" id="Nombre" alt="Nombre" placeholder="Ingrese el Nombre" class="form-control">

           </div>
           <?php
                  if (isset($_SESSION["Error5"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error5"]."</font>";
                      echo "<br>";
                  }else{
                      echo "";
                  }

                  unset($_SESSION["Error5"]);

                   ?>
           </div>
           <div class="form-group">
           <label for="">Primer Apellido:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-text-color" aria-hidden="true"></span></div>
           <input type="text" name="Apellido1" id="Apellido1" alt="Apellido1" placeholder="Ingrese el Primer Apellido" class="form-control">

           </div>
           <?php
                  if (isset($_SESSION["Error6"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error6"]."</font>";
                      echo "<br>";
                  }else{
                      echo "";
                  }

                  unset($_SESSION["Error6"]);
                   ?>
           </div>
           <div class="form-group">
           <label for="">Segundo Apellido:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-text-background" aria-hidden="true"></span></div>
           <input type="text" name="Apellido2" id="Apellido2" class="form-control" placeholder="Ingrese el Apellido 2">


                    </div>
                    <?php
                  if (isset($_SESSION["Error7"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error7"]."</font>";
                      echo "<br>";
                  }else{
                      echo "";
                  }

                  unset($_SESSION["Error7"]);

                   ?>
                    </div>
                     <div class="form-group">
           <label for="">Tipo de Usuario:</label>
           <div class="input-group">
           <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
           <select name="Tipo" id="Tipo" class="form-control">
               <option value="0">Seleccione un Tipo</option>
               <option value="1">Administrador</option>
               <option value="2">Profesor</option>
           </select>



           </div>
            <?php
                  if (isset($_SESSION["Error8"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error8"]."</font>";
                      echo "<br>";
                  }else{
                      echo "";
                  }

                  unset($_SESSION["Error8"]);
                   ?>
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
          <div class="col-md-4">




          </div>







</body>
</html>

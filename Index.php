<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Multimedios</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-info">


  <!--Informacion Principal del Proyecto -->
  <br>
  <div style="font-family: cursive">
   <div style="Text-Align:center">
    <h1 style="color: #4e818b">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Proyecto Multimedios 2015</h1>
    <h1 style="color: #4e818b">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Centro Educativo Montenegro</h1>
    </div>
    </div>
    <p><br/></p>

    <!--Construccion del Login-->

	<div class="row">
  		<div class="col-md-4"></div>
  		<div class="col-md-5">
  			<div class="panel panel-default">
  				<div class="panel-body">
    					<div class="page-header" style="margin-top:5px;">
    						<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Inicio de Sesion</h3>
    					</div>
    					<form class="form-horizontal" role="form" method="post" action="ConexionLogin.php">
  						<div class="form-group">
    				<label style="text-Align:left" for="inputfn3" class="col-sm-3 control-label">Usuario</label> <br><br>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
      								<input type="user" class="form-control" id="inputfn3" placeholder="" name="NombreUsuario">
      							</div>
    <?php
                  if (isset($_SESSION["Error1"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error1"]."</font>";
                      echo "<br>";
                  }else{
                      echo "";
                  }
                unset($_SESSION["Error1"]);

                   ?>							</div>

  						</div>
  						<div class="form-group">
    							<label for="" class="col-sm-2 control-label">Contraseña</label> <br><br>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon">***</span>
      								<input type="password" class="form-control" id="inputEmail3" placeholder="" name="Pass">
      							</div>
<?php
                  if (isset($_SESSION["Error2"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error2"]."</font>";
                      echo "<br>";
                  }if (isset($_SESSION["Error3"])){
                      echo "<br>";
                      echo "<font color='red'>".$_SESSION["Error3"]."</font>";
                      echo "<br>";
                  }else{
                      echo "";
                  }
                unset($_SESSION["Error2"]);
                unset($_SESSION["Error3"]);

                   ?>
    							</div>

  						</div>
  						<div class="page-header" style="margin-top:5px;">
    					</div>
  						<div class="form-group">
    							<div class="col-sm-10">
    								<div class="input-group">


      							</div>
    							</div>
  						</div>

  						<div class="form-group">
    							<div class="col-sm-offset-0 col-sm-12">
      							<button type="submit" class="btn btn-primary">Ingresar</button>
                                <button type="button" onclick="location.href='registro.php'" class="btn btn-secondary">Crear Cuenta</button>

    							</div>

  						</div>

					</form>
  				</div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <footer>
       <div style="font: oblique bold 120% cursive">
        <h1 style="text-Align:center"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Universidad de Costa Rica</h1>
        <h1 style="text-Align:center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Todos los derechos reservados © 2015</h1>
        </div>

    </footer>
  </body>
</html>
